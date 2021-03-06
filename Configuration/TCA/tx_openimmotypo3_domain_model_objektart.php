<?php
return [
    'ctrl' => [
        'title' => 'Objektart',
        'hideTable' => 1,
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
        'searchFields' => 'buero_praxen, einzelhandel, freizeitimmobilie_gewerblich, gastgewerbe, grundstueck, hallen_lager_prod, haus, land_und_forstwirtschaft, objektart_zusatz, objektkategorie, parken, sonstige, wohnung, zimmer, zinshaus_renditeobjekt',
        'iconfile' => 'EXT:core/Resources/Public/Icons/T3Icons/information/information-typo3-version.svg'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, buero_praxen, einzelhandel, freizeitimmobilie_gewerblich, gastgewerbe, grundstueck, hallen_lager_prod, haus, land_und_forstwirtschaft, objektart_zusatz, objektkategorie, parken, sonstige, wohnung, zimmer, zinshaus_renditeobjekt',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, buero_praxen, einzelhandel, freizeitimmobilie_gewerblich, gastgewerbe, grundstueck, hallen_lager_prod, haus, land_und_forstwirtschaft, objektart_zusatz, objektkategorie, parken, sonstige, wohnung, zimmer, zinshaus_renditeobjekt, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
                'foreign_table' => 'tx_openimmotypo3_domain_model_objektart',
                'foreign_table_where' => 'AND {#tx_openimmotypo3_domain_model_objektart}.{#pid}=###CURRENT_PID### AND {#tx_openimmotypo3_domain_model_objektart}.{#sys_language_uid} IN (-1,0)',
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
        ],
        'buero_praxen' => [
            'exclude' => true,
            'label' => 'BueroPraxen',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_bueropraxen',
                'foreign_field' => 'objektart',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 1,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
        'einzelhandel' => [
            'exclude' => true,
            'label' => 'Einzelhandel',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_einzelhandel',
                'foreign_field' => 'objektart',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 1,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
        'freizeitimmobilie_gewerblich' => [
            'exclude' => true,
            'label' => 'FreizeitimmobilieGewerblich',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_freizeitimmobiliegewerblich',
                'foreign_field' => 'objektart',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 1,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
        'gastgewerbe' => [
            'exclude' => true,
            'label' => 'Gastgewerbe',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_gastgewerbe',
                'foreign_field' => 'objektart',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 1,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
        'grundstueck' => [
            'exclude' => true,
            'label' => 'Grundstueck',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_grundstueck',
                'foreign_field' => 'objektart',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 1,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
        'hallen_lager_prod' => [
            'exclude' => true,
            'label' => 'HallenLagerProd',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_hallenlagerprod',
                'foreign_field' => 'objektart',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 1,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
        'haus' => [
            'exclude' => true,
            'label' => 'Haus',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_haus',
                'foreign_field' => 'objektart',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 1,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
        'land_und_forstwirtschaft' => [
            'exclude' => true,
            'label' => 'LandUndForstwirtschaft',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_landundforstwirtschaft',
                'foreign_field' => 'objektart',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 1,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
        'objektart_zusatz' => [
            'exclude' => true,
            'label' => 'ObjektartZusatz',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'objektkategorie' => [
            'exclude' => true,
            'label' => 'Objektkategorie',
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'parken' => [
            'exclude' => true,
            'label' => 'Parken',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_parken',
                'foreign_field' => 'objektart',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 1,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
        'sonstige' => [
            'exclude' => true,
            'label' => 'Sonstige',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_sonstige',
                'foreign_field' => 'objektart',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 1,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
        'wohnung' => [
            'exclude' => true,
            'label' => 'Wohnung',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_wohnung',
                'foreign_field' => 'objektart',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 1,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
        'zimmer' => [
            'exclude' => true,
            'label' => 'Zimmer',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_zimmer',
                'foreign_field' => 'objektart',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 1,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
        'zinshaus_renditeobjekt' => [
            'exclude' => true,
            'label' => 'ZinshausRenditeobjekt',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_zinshausrenditeobjekt',
                'foreign_field' => 'objektart',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 1,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
    ],
];