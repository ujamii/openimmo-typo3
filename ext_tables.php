<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function () {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('openimmo', 'Configuration/TypoScript', 'openimmo');

        $tcaFields = \TYPO3\CMS\Core\Utility\GeneralUtility::getAllFilesAndFoldersInPath([], \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('openimmo', 'Configuration/TCA/'));
        foreach ($tcaFields as $file) {
            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages(basename($file, 'php'));
        }
    }
);
