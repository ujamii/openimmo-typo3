<?php

namespace Ujamii\OpenImmoTypo3\Command;

use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\ConsoleOutput;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\CommandController;

/**
 * Class ImportCommandController
 * @package Ujamii\OpenImmoTypo3\Command
 */
class ImportCommandController extends CommandController
{

    /**
     * Wrapper for legacy TYPO3 calls.
     *
     * @param int $pid
     * @param string $sourceFolder
     * @param string $targetFolder
     * @param bool $truncateTables
     * @param bool $adjustAssetPaths
     * @param bool $removeZipfile
     *
     * @throws \Exception
     */
    public function executeImportCommand(
        $pid = 1,
        $sourceFolder = 'uploads/tx_openimmo/',
        $targetFolder = 'uploads/tx_openimmo/',
        $truncateTables = true,
        $adjustAssetPaths = true,
        $removeZipfile = true
    ) {
        $output = new ConsoleOutput();
        $input = new ArrayInput([
            '--pid' => $pid,
            '--sourceFolder' => $sourceFolder,
            '--targetFolder' => $targetFolder,
            '--truncateTables' => $truncateTables,
            '--adjustAssetPaths' => $adjustAssetPaths,
            '--removeZipfile' => $removeZipfile
        ]);

        $command = new ImportCommand();
        $command->run($input, $output);
    }

}