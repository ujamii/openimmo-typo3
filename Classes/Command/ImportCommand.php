<?php

namespace Ujamii\OpenImmoTypo3\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use TYPO3\CMS\Core\Database\DatabaseConnection;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\StringUtility;
use TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager;
use Ujamii\OpenImmoTypo3\Domain\Model\Anbieter;
use Ujamii\OpenImmoTypo3\Domain\Model\ExtbaseModelTrait;
use Ujamii\OpenImmoTypo3\Domain\Model\Openimmo;

/**
 * Class ImportCommand
 * @package Ujamii\OpenImmoTypo3\Command
 */
class ImportCommand extends Command
{

    const ASSET_TABLE_NAME = 'tx_openimmotypo3_domain_model_daten';
    // TODO: this has to be "pfad" later...
    const ASSET_FIELD_NAME = 'anhanginhalt';

    /**
     * @var InputInterface
     */
    protected $input;

    /**
     * @var OutputInterface
     */
    protected $output;

    /**
     * @var PersistenceManager
     */
    protected $persistenceManager;

    /**
     * Configure the command by defining the name, options and arguments.
     */
    protected function configure()
    {
        $this->setName('openimmo:import');

        $this->setDescription('Imports openimmo xml data into the local database.');

        $this->addOption('pid', null, InputOption::VALUE_REQUIRED, 'Target pid where the data shall be stored.');
        $this->addOption('sourceFolder', null, InputOption::VALUE_OPTIONAL, 'Source folder where the *.zip file will be searched in.',
            'public/uploads/tx_openimmo/');
        $this->addOption('targetFolder', null, InputOption::VALUE_OPTIONAL, 'Target folder where data will be extrcated to.', 'public/uploads/tx_openimmo/');
        $this->addOption('truncateTables', 'truncate', InputOption::VALUE_OPTIONAL, 'Whether the openimmo db tables shall be truncated before the import.',
            true);
        $this->addOption('adjustAssetPaths', 'paths', InputOption::VALUE_OPTIONAL, 'Whether the paths of the binary files shall be set.', true);
        $this->addOption('removeZipfile', 'cleanup', InputOption::VALUE_OPTIONAL, 'Whether the zip file shall be deleted after the import.', true);
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     *
     * @return int|void|null
     * @throws \ReflectionException
     * @throws \Exception
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->input  = $input;
        $this->output = $output;

        // find and extract zip file
        $sourceFolder = PATH_site . $this->input->getOption('sourceFolder');
        $zipFile      = $this->getFileInFolder($sourceFolder, 'zip');
        if ($zipFile !== false) {
            $this->output->writeln('Found zipfile: ' . $zipFile);

            $filename     = basename($zipFile, '.zip');
            $targetFolder = PATH_site . $this->input->getOption('targetFolder') . $filename . DIRECTORY_SEPARATOR;

            $this->prepareTargetFolder($targetFolder);
            $this->output->writeln('Extracting ' . $zipFile . ' to ' . $targetFolder);

            $zipArchive = new \ZipArchive();
            if ($zipArchive->open($zipFile) === true) {
                if ( ! $zipArchive->extractTo($targetFolder)) {
                    throw new \Exception($zipFile . ' could not be extracted to ' . $targetFolder);
                }
                $zipArchive->close();

                $xmlFilename = $this->getFileInFolder($targetFolder, 'xml');
                if ( ! is_file($xmlFilename)) {
                    throw new \Exception($xmlFilename . ' could not be found.');
                } else {
                    // truncate tables if set
                    if ($this->input->getOption('truncateTables')) {
                        $this->truncateOpenImmoTables();
                    }

                    // import new data
                    $this->importFromXmlFile($xmlFilename);

                    // adjust the paths of the files
                    if ($this->input->getOption('adjustAssetPaths')) {
                        $this->adjustAssetPaths($targetFolder);
                    }
                }
                if ($this->input->getOption('removeZipfile')) {
                    $this->output->writeln('Deleting ' . $zipFile);
                    unlink($zipFile);
                }
            } else {
                throw new \Exception($zipFile . ' could not be opened!');
            }
        } else {
            $this->output->writeln('No zipfile found in ' . $sourceFolder);
        }
    }

    /**
     * Truncates all extension tables of "openimmo" extension in the database.
     */
    protected function truncateOpenImmoTables()
    {
        /* @var $db DatabaseConnection */
        $db = $GLOBALS['TYPO3_DB'];

        // get list of tables by scanning tca folder, including only .php and prefixed files
        $tcaFolder = ExtensionManagementUtility::extPath('openimmo', 'Configuration/TCA/');
        $tcaFiles  = GeneralUtility::getAllFilesAndFoldersInPath([], $tcaFolder, 'php');
        foreach ($tcaFiles as $filename) {
            $tablename = basename($filename, '.php');
            if (StringUtility::beginsWith($tablename, GenerateTypo3WrapperCommand::SQL_TABLE_PREFIX)) {
                $this->output->writeln('Truncating ' . $tablename);
                $db->exec_TRUNCATEquery($tablename);
            }
        }
    }

    /**
     * Adds the path prefix to the filename.
     *
     * @param string $targetFolder
     */
    protected function adjustAssetPaths(string $targetFolder)
    {
        $targetFolder = str_replace(PATH_site, '', $targetFolder);

        $this->output->writeln('Adjusting asset path to ' . $targetFolder);
        /* @var $db DatabaseConnection */
        $db = $GLOBALS['TYPO3_DB'];

        $db->exec_UPDATEquery(self::ASSET_TABLE_NAME, '1=1', [self::ASSET_FIELD_NAME => $targetFolder]);
    }

    /**
     * @param string $folder
     * @param string $filetype
     *
     * @return string
     */
    protected function getFileInFolder(string $folder, string $filetype)
    {
        $files = GeneralUtility::getAllFilesAndFoldersInPath([], $folder, $filetype);
        if (count($files) == 1) {
            return current($files);
        }

        return false;
    }

    /**
     * Iterates through all objects and registers (adds) them to extbase persistence.
     *
     * @param DomainObjectInterface $model
     *
     * @throws \ReflectionException
     */
    protected function persistAllExtbaseChildren(DomainObjectInterface $model)
    {
        // set pid
        $model->setPid($this->input->getOption('pid'));

        $this->persistenceManager->add($model);
        $this->persistenceManager->persistAll();

        // set backlink property to parent uid (e.g. "anbieter" field in "Immobilie" object)
        $backlinkPropertyName = strtolower((new \ReflectionClass($model))->getShortName());

        $props = $model->_getProperties();
        foreach ($props as $propertyName => $propertyValue) {
            /* @var $propertyValue ExtbaseModelTrait */
            if ($propertyValue instanceof DomainObjectInterface) {
                if ($propertyValue->_hasProperty($backlinkPropertyName)) {
                    $propertyValue->_setProperty($backlinkPropertyName, $model->getUid());
                }

                $this->persistAllExtbaseChildren($propertyValue);
            } elseif (is_array($propertyValue)) {
                /* @var $member ExtbaseModelTrait */
                foreach ($propertyValue as $member) {
                    if ($member->_hasProperty($backlinkPropertyName)) {
                        $member->{'set' . ucfirst($backlinkPropertyName)}($model->getUid());
                    }
                    $this->persistAllExtbaseChildren($member);
                }
            }
        }
    }

    /**
     * @return ObjectManager
     */
    protected function getObjectManager(): ObjectManager
    {
        return GeneralUtility::makeInstance(ObjectManager::class);
    }

    /**
     * @param string $xmlFilename
     *
     * @throws \ReflectionException
     */
    protected function importFromXmlFile(string $xmlFilename): void
    {
        $serializer = \JMS\Serializer\SerializerBuilder::create()->build();

        $this->output->writeln('Reading xml file: ' . $xmlFilename);
        $xmlString = file_get_contents($xmlFilename);
        /* @var $openImmo \Ujamii\OpenImmo\API\Openimmo */
        $openImmo = $serializer->deserialize($xmlString, Openimmo::class, 'xml');

        $this->persistenceManager = $this->getObjectManager()->get(PersistenceManager::class);

        /* @var $anbieter Anbieter */
        foreach ($openImmo->getAnbieter() as $anbieter) {
            $msg = 'Found "Anbieter" with company "%s", importing %u objects...';
            $this->output->writeln(sprintf($msg, $anbieter->getFirma(), count($anbieter->getImmobilie())));
            $this->persistAllExtbaseChildren($anbieter);
        }

        $this->persistenceManager->persistAll();
    }

    /**
     * @param string $targetFolder
     */
    protected function prepareTargetFolder(string $targetFolder): void
    {
        if ( ! is_dir($targetFolder)) {
            $this->output->writeln('Creating target folder: ' . $targetFolder);
            GeneralUtility::mkdir($targetFolder);
        }
    }

}