<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function () {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Ujamii.OpenImmoTypo3',
            'Immobilien',
            [
                'RealEstate' => 'list, show'
            ],
            // non-cacheable actions
            [
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Ujamii.OpenImmoTypo3',
            'Suche',
            [
                'RealEstate' => 'search'
            ],
            // non-cacheable actions
            [
            ]
        );

        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['extbase']['commandControllers']['openimmo'] = Ujamii\OpenImmoTypo3\Command\ImportCommandController::class;
    }
);
