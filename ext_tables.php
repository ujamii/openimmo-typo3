<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function () {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('openimmo', 'Configuration/TypoScript', 'openimmo');

        $tcaFields = \TYPO3\CMS\Core\Utility\GeneralUtility::getAllFilesAndFoldersInPath([], \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('openimmo', 'Configuration/TCA/'));
        foreach ($tcaFields as $file) {
            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages(basename($file, 'php'));
        }

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Ujamii.OpenImmoTypo3',
            'Immobilien',
            'Immobilien',
            'EXT:openimmo/Resources/Public/Icons/user_plugin_immobilien.svg'
        );
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['openimmotypo3_immobilien'] = 'pages,recursive';

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Ujamii.OpenImmoTypo3',
            'Suche',
            'Suche',
            'EXT:openimmo/Resources/Public/Icons/user_plugin_immobilien.svg'
        );
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['openimmotypo3_suche'] = 'pages,recursive';
    }
);
