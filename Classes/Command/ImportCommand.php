<?php

namespace Ujamii\OpenImmoTypo3\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Filesystem\Exception\FileNotFoundException;
use TYPO3\CMS\Core\Database\ConnectionPool;
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
class ImportCommand  extends Command
{

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
        $this->setDescription('Imports openimmo xml data into the local database.');
        $this->addArgument('pid', InputArgument::REQUIRED, 'Target pid where the data shall be stored.');
        $this->addArgument('sourceFolder', InputArgument::OPTIONAL, 'Source folder where the most recent *.zip file will be searched in.', '/uploads/tx_openimmo/');
        $this->addArgument('truncateTables', InputArgument::OPTIONAL, 'Whether the openimmo db tables shall be truncated before the import.', true);
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

        // find and extract zip file
        $sourceFolder = \TYPO3\CMS\Core\Core\Environment::getPublicPath() . $this->input->getArgument('sourceFolder');
        $zipFile = $this->getFileInFolder($sourceFolder, 'zip');
        if ($zipFile !== false) {
            $this->output->writeln('Found zipfile: ' . $zipFile);

            $filename = basename($zipFile, '.zip');
            $targetFolder = $sourceFolder . $filename . DIRECTORY_SEPARATOR;

            $this->prepareTargetFolder($targetFolder);
            $this->output->writeln('Extracting ' . $zipFile . ' to ' . $targetFolder);

            $zipArchive = new \ZipArchive();
            if ($zipArchive->open($zipFile) === true) {
                if (!$zipArchive->extractTo($targetFolder)) {
                    throw new \Exception($zipFile . ' could not be extracted to ' . $targetFolder);
                }
                $zipArchive->close();

                $xmlFilename = $this->getFileInFolder($targetFolder, 'xml');
                if (!is_file($xmlFilename)) {
                    throw new FileNotFoundException($xmlFilename . ' could not be found.');
                } else {
                    // truncate tables if set
                    if ($this->input->getArgument('truncateTables')) {
                        $this->truncateOpenImmoTables();
                    }
                    $this->importFromXmlFile($xmlFilename);
                }
                $this->output->writeln('Deleting ' . $zipFile);
                unlink($zipFile);
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
        /* @var $connectionPool ConnectionPool */
        $connectionPool = $this->getObjectManager()->get(ConnectionPool::class);

        // get list of tables by scanning tca folder, including only .php and prefixed files
        $tcaFolder = ExtensionManagementUtility::extPath('openimmo', 'Configuration/TCA/');
        $tcaFiles = GeneralUtility::getAllFilesAndFoldersInPath([], $tcaFolder, 'php');
        foreach ($tcaFiles as $filename) {
            $tablename = basename($filename, '.php');
            if (StringUtility::beginsWith($tablename, GenerateTypo3WrapperCommand::SQL_TABLE_PREFIX)) {
                $this->output->writeln('Truncating ' . $tablename);
                $connectionPool->getConnectionForTable($tablename)->truncate($tablename);
            }
        }
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
    protected function persistAllExtbaseChildren(DomainObjectInterface $model) {
        // set pid
        $model->setPid($this->input->getArgument('pid'));

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
            } else if (is_array($propertyValue)) {
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
    protected function getObjectManager() : ObjectManager
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
        } else {
            $this->output->writeln('Cleaning target folder: ' . $targetFolder);
            GeneralUtility::flushDirectory($targetFolder, true);
        }
    }

}