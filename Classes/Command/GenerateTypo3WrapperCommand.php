<?php

namespace Ujamii\OpenImmoTypo3\Command;

use EBT\ExtensionBuilder\Service\ValidationService;
use gossi\codegen\generator\CodeFileGenerator;
use gossi\codegen\model\PhpClass;
use gossi\codegen\model\PhpConstant;
use gossi\codegen\model\PhPProperty;
use gossi\docblock\tags\AbstractDescriptionTag;
use gossi\docblock\tags\TagFactory;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\StringUtility;
use TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface;
use TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;
use Ujamii\OpenImmo\Generator\ApiGenerator;

/**
 * Class GenerateTypo3WrapperCommand
 * @package Ujamii\OpenImmoTypo3\Command
 */
class GenerateTypo3WrapperCommand extends Command
{

    const SQL_TABLE_PREFIX = 'tx_openimmotypo3_domain_model_';

    protected $openImmoApiNamespace = 'Ujamii\OpenImmo\API';
    protected $typo3ModelNamespace = 'Ujamii\OpenImmoTypo3\Domain\Model';
    protected $typo3RepositoryNamespace = 'Ujamii\OpenImmoTypo3\Domain\Repository';
    protected $allowedInListView = [
        'tx_openimmotypo3_domain_model_anbieter',
        'tx_openimmotypo3_domain_model_immobilie',
    ];

    /**
     * List of API classes incl. namespace.
     *
     * @var array
     */
    protected $apiClasses = [];

    /**
     * List of API classes excl. namepsace.
     *
     * @var array
     */
    protected $classNamesInApiNamespace = [];

    /**
     * This will be filled for "backlink" mm-fields during SQL generation process.
     *
     * @var array
     */
    protected $mmSqlCode = [];

    /**
     * @var InputInterface
     */
    protected $input;

    /**
     * @var OutputInterface
     */
    protected $output;

    /**
     * Configure the command by defining the name, options and arguments.
     */
    protected function configure()
    {
        $this->setDescription('Creates extbase compatible code from the ujamii/openimmo package.');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     *
     * @return int|void|null
     * @throws \ReflectionException
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->input  = $input;
        $this->output = $output;

        $classLoader = require PATH_site . '../vendor/autoload.php';
        $allClasses  = $classLoader->getClassMap();

        foreach ($allClasses as $classname => $file) {
            // Store the namespace of each class in the namespace map
            if (substr($classname, 0, strlen($this->openImmoApiNamespace)) == $this->openImmoApiNamespace) {
                $this->apiClasses[$classname] = $file;
                $this->classNamesInApiNamespace[] = (new \ReflectionClass($classname))->getShortName();
            }
        }

        //TODO: exclude OpenImmo class

        GeneralUtility::writeFile($this->getTargetForFile('ext_tables.sql'), $this->generateExtbaseSql());
        $this->generateDomainClasses();
    }

    /**
     * Creates Model Classes
     */
    protected function generateDomainClasses()
    {
        $backlinks = [];

        foreach ($this->apiClasses as $classname => $file) {
            // models
            $modelClass = PhpClass::fromFile($file);
            $modelClass
                ->setNamespace($this->typo3ModelNamespace)
                ->setInterfaces([
                    '\\' . DomainObjectInterface::class,
                    '\\' . ObjectMonitoringInterface::class
                ])
                ->setTraits(['ExtbaseModelTrait'])
            ;

            // care for backlinks
            /* @var $property PhPProperty */
            foreach ($modelClass->getProperties() as $property) {
                $propType = str_replace('[]', '', $property->getType());

                if (in_array($propType, $this->classNamesInApiNamespace)) {
                    $backlinks[] = [
                        'childClass' => $propType,
                        'parentClass' => $modelClass->getName()
                    ];
                }
            }

            $this->createPhpFile($modelClass, 'Classes/Domain/Model/');

            // repositories
            $repoClass = new PhpClass($classname . 'Repository');
            $repoClass
                ->setNamespace($this->typo3RepositoryNamespace)
                ->setParentClassName('\\' . Repository::class);
            $this->createPhpFile($repoClass, 'Classes/Domain/Repository/');
        }

        foreach ($backlinks as $backlinkConfig) {
            $backlinkProperty = new PhPProperty(lcfirst($backlinkConfig['parentClass']));
            $backlinkProperty->setType('int')->setVisibility(PhPProperty::VISIBILITY_PROTECTED);
            $backlinkProperty->getDocblock()->appendTag(TagFactory::create('Exclude()'));
            $backlinkProperty->setLongDescription('Id of the parent object for backlink purpose in TYPO3.');

            $modelClass = PhpClass::fromFile($this->getTargetForFile('Classes/Domain/Model/' . $backlinkConfig['childClass'] . '.php'));
            $modelClass->setProperty($backlinkProperty);
            $modelClass->addUseStatement('JMS\Serializer\Annotation\Exclude');

            ApiGenerator::generateGetterAndSetter($backlinkProperty, $modelClass);

            $this->createPhpFile($modelClass, 'Classes/Domain/Model/');
        }

        // TCA
        foreach ($this->classNamesInApiNamespace as $class) {
            $apiClass = PhpClass::fromFile($this->getTargetForFile('Classes/Domain/Model/' . $class . '.php'));
            GeneralUtility::writeFile($this->getTargetForFile('Configuration/TCA/' . $this->getSqlTableNameForClass($apiClass) . '.php'),
                $this->generateTcaCode($apiClass));
        }
    }

    /**
     * @return string
     */
    protected function generateExtbaseSql()
    {
        $sqlCode = [];
        $this->mmSqlCode = [];

        foreach ($this->classNamesInApiNamespace as $file) {
            $class = PhpClass::fromFile($this->getTargetForFile('Classes/Domain/Model/' . $file . '.php'));

            if ($class->getProperties()->size() == 0) {
                // if a class has NO properties, no table is needed
                continue;
            }

            $classSql    = ['CREATE TABLE ' . $this->getSqlTableNameForClass($class) . ' ('];
            $propertySql = [];

            /* @var $property PhPProperty */
            foreach ($class->getProperties() as $property) {
                $propertySql[] = "\t" . $this->generatePropertySql($property, $class);
            }

            $classSql[] = implode(',' . PHP_EOL, $propertySql) . PHP_EOL . ');' . PHP_EOL;
            $sqlCode[]  = implode(PHP_EOL, $classSql);
        }

        return implode(PHP_EOL, $sqlCode) . implode(PHP_EOL, $this->mmSqlCode);
    }

    /**
     * @param PhPProperty $property
     * @param PhPClass $backlinkClass
     *
     * @return string
     */
    protected function generatePropertySql(PhPProperty $property, PhPClass $backlinkClass)
    {
        /* @var $tag AbstractDescriptionTag */
        $typeTags = $property->getDocblock()->getTags('Type');
        if ($typeTags->size() > 0) {
            $typeTag      = $typeTags->get(0);
            $type         = trim($typeTag->getDescription(), '"() ');
        } else {
            $type = trim($property->getType(), '"[] ');
        }

        $sqlFieldname = $this->getSqlName($property->getName());
        $propertySql  = $sqlFieldname . ' ';

        switch ($type) {

            case 'string':
                $propertySql .= 'text DEFAULT \'\' NOT NULL';
                break;

            case 'float':
                $propertySql .= 'double(11,2) DEFAULT \'0.00\' NOT NULL';
                break;

            case 'int':
                $propertySql .= 'int(11) unsigned DEFAULT \'0\' NOT NULL';
                break;

            case 'boolean':
                $propertySql .= 'smallint(5) unsigned DEFAULT \'0\' NOT NULL';
                break;

            case 'datetime':
            case 'DateTime<\'Y-m-d\'>':
                $propertySql .= 'datetime DEFAULT NULL';
                break;

            default:
                if (strstr($type, '\\')) {
                    // this is the case for links to other classes, maybe just one object or count of objects

                    $propertySql .= 'int(11) unsigned DEFAULT \'0\' NOT NULL';
                    $isPlural = substr($type, 0, 6) == 'array<';
                    if ($isPlural) {
                        // also add a backlink field to the children table
                        $backlinkPropertyName = $this->getSqlName($backlinkClass->getName());
                        if ($backlinkPropertyName != 'openimmo') {
                            $this->mmSqlCode[] = 'CREATE TABLE ' . $this->getSqlTableName($property->getName()) . ' (';
                            $this->mmSqlCode[] = '    ' . $backlinkPropertyName . ' int(11) unsigned DEFAULT \'0\' NOT NULL';
                            $this->mmSqlCode[] = ');' . PHP_EOL;
                        }
                    }
                } else {
                    // fallback for unknown types
                    $propertySql .= $type;
                }
                break;
        }

        return $propertySql;
    }

    /**
     * @param string $phpName
     *
     * @return string
     */
    public static function getSqlName(string $phpName)
    {
        $name = GeneralUtility::camelCaseToLowerCaseUnderscored($phpName);
        if (ValidationService::isReservedMYSQLWord($name)) {
            // TODO: add config for typo3, so the mapping with this prefix still works!
            $name = 'sqlsafe_' . $name;
        }

        return $name;
    }

    /**
     * @param string $className
     *
     * @return string
     */
    protected function getSqlTableName(string $className)
    {
        return self::SQL_TABLE_PREFIX . str_replace('_', '', $this->getSqlName($className));
    }

    /**
     * @param PhpClass $class
     *
     * @return string
     */
    protected function getSqlTableNameForClass(PhpClass $class)
    {
        return $this->getSqlTableName($class->getName());
    }

    /**
     * @param string $filename
     *
     * @return string
     */
    protected function getTargetForFile(string $filename)
    {
        return ExtensionManagementUtility::extPath('openimmo', $filename);
    }

    /**
     * @param PhpClass $class
     * @param string $folder
     *
     * @return bool|int
     */
    protected function createPhpFile(PhpClass $class, string $folder)
    {
        GeneralUtility::mkdir_deep($this->getTargetForFile($folder));

        $generator = new CodeFileGenerator([
            'generateScalarTypeHints' => true,
            'generateReturnTypeHints' => true
        ]);
        $code      = $generator->generate($class);
        // this rewrites the namespace into TYPO3
        $code = str_replace($this->openImmoApiNamespace, $this->typo3ModelNamespace, $code);

        return GeneralUtility::writeFile($this->getTargetForFile($folder . $class->getName() . '.php'), $code);
    }

    /**
     * @param PhpClass $class
     *
     * @return string
     */
    protected function generateTcaCode(PhpClass $class)
    {
        $sqlTableName = $this->getSqlTableNameForClass($class);
        $properties   = [];
        foreach ($class->getPropertyNames() as $propertyName) {
            $properties[] = $this->getSqlName($propertyName);
        }
        $commaSepProperties = implode(', ', $properties);

        $tcaCode = "<?php
return [
    'ctrl' => [
        'title' => '" . $class->getName() . "',
        'hideTable' => " . (in_array($sqlTableName, $this->allowedInListView) ? 0 : 1) . ",
        'label' => 'uid',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => '" . $commaSepProperties . "',
        'iconfile' => 'EXT:core/Resources/Public/Icons/T3Icons/information/information-typo3-version.svg'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, " . $commaSepProperties . "',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, " . $commaSepProperties . ", --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => '".$sqlTableName."',
                'foreign_table_where' => 'AND {#" . $sqlTableName . "}.{#pid}=###CURRENT_PID### AND {#" . $sqlTableName . "}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],";

        /* @var $property PhPProperty */
        foreach ($class->getProperties() as $property) {
            $tcaCode .= $this->generateTcaFieldConfigForProperty($property, $class);
        }

        $tcaCode .= "
    ],
];";

        return $tcaCode;
    }

    /**
     * @param PhPProperty $property
     * @param PhpClass $class
     *
     * @return string
     */
    protected function generateTcaFieldConfigForProperty(PhPProperty $property, PhpClass $class)
    {
        $tcaCode = "
        '" . $this->getSqlName($property->getName()) . "' => [
            'exclude' => true,
            'label' => '" . ucfirst($property->getName()) . "',
            'config' => [
                ";

        // this is for the backlink fields. They of an object type, the db value is only the TYPO3 uid
        $isExcluded = $property->getDocblock()->getTags('Exclude')->size() > 0;
        if ($isExcluded) {
            $switchTrigger = 'excluded';
        } else {
            $switchTrigger = $property->getType();
        }

        switch ($switchTrigger) {

            case 'boolean':
                $tcaCode .= "'type' => 'check',
                'default' => 0,";
                break;

            case 'string':
            case 'string[]':// TODO: super special case
                if ($property->getDocblock()->hasTag('see')) {
                    // there may also be constants with that name, then generate a fixed selectbox
                    $items = [];
                    /* @var $constant PhpConstant */
                    foreach ($class->getConstants() as $constant) {
                        $constantFilter = preg_replace('%@see ([A-Z_]+)\*.*%', '$1', $property->getDocblock()->getTags('see')->get(0));
                        if (StringUtility::beginsWith($constant->getName(), $constantFilter)) {
                            $items[] = "['" . ucfirst(strtolower($constant->getValue())) . "', '" . $constant->getValue() . "'],";
                        }
                    }
                    $tcaCode .= "'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                    " . implode(PHP_EOL . '                    ', $items) . "
                ],";
                } else {
                    $tcaCode .= "'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',";
                }
                break;

            case 'float':
                $tcaCode .= "'type' => 'input',
                'size' => 30,
                'eval' => 'double2'";
                break;

            case 'int':
                $tcaCode .= "'type' => 'input',
                'size' => 4,
                'eval' => 'int'";
                break;

            case '\DateTime':
                $tcaCode .= "'dbType' => 'datetime',
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 12,
                'eval' => 'datetime',
                'default' => null,";
                break;

            case 'excluded':
            case 'UserDefinedAnyfield[]':
            case 'UserDefinedExtend[]':
            case 'UserDefinedSimplefield[]':
                // TODO: fallback for unknown types
                $tcaCode .= "'type' => 'passthrough',";
                break;

            default:
                $isPlural = substr($property->getType(), -2) == '[]';
                $singular = str_replace('[]', '', $property->getType());

                if ($isPlural) {
                    $tcaCode .= "'type' => 'inline',
                'foreign_table' => '" . $this->getSqlTableName($singular) . "',
                'foreign_field' => '" . $this->getSqlName($class->getName()) . "',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 1,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],";
                } else {
                    $tcaCode .= "'type' => 'inline',
                'foreign_table' => '" . $this->getSqlTableName($singular) . "',
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],";
                }

                break;
        }

        $tcaCode .= "
            ],
        ],";

        return $tcaCode;
    }

}