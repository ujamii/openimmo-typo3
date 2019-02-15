<?php
return [
    'ctrl' => [
        'title' => 'Geo',
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
        'searchFields' => 'anzahl_etagen, bundesland, etage, flur, flurstueck, gemarkung, gemeindecode, geokoordinaten, hausnummer, karten_makro, karten_mikro, lage_gebiet, lage_im_bau, land, luftbildern, ort, plz, regionaler_zusatz, strasse, user_defined_anyfield, user_defined_extend, user_defined_simplefield, virtuelletour, wohnungsnr',
        'iconfile' => 'EXT:core/Resources/Public/Icons/T3Icons/information/information-typo3-version.svg'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, anzahl_etagen, bundesland, etage, flur, flurstueck, gemarkung, gemeindecode, geokoordinaten, hausnummer, karten_makro, karten_mikro, lage_gebiet, lage_im_bau, land, luftbildern, ort, plz, regionaler_zusatz, strasse, user_defined_anyfield, user_defined_extend, user_defined_simplefield, virtuelletour, wohnungsnr',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, anzahl_etagen, bundesland, etage, flur, flurstueck, gemarkung, gemeindecode, geokoordinaten, hausnummer, karten_makro, karten_mikro, lage_gebiet, lage_im_bau, land, luftbildern, ort, plz, regionaler_zusatz, strasse, user_defined_anyfield, user_defined_extend, user_defined_simplefield, virtuelletour, wohnungsnr, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
                'foreign_table' => 'tx_openimmo_domain_model_aktion',
                'foreign_table_where' => 'AND {#tx_openimmo_domain_model_geo}.{#pid}=###CURRENT_PID### AND {#tx_openimmo_domain_model_geo}.{#sys_language_uid} IN (-1,0)',
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
        'anzahl_etagen' => [
            'exclude' => true,
            'label' => 'AnzahlEtagen',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ],
        ],
        'bundesland' => [
            'exclude' => true,
            'label' => 'Bundesland',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'etage' => [
            'exclude' => true,
            'label' => 'Etage',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ],
        ],
        'flur' => [
            'exclude' => true,
            'label' => 'Flur',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'flurstueck' => [
            'exclude' => true,
            'label' => 'Flurstueck',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'gemarkung' => [
            'exclude' => true,
            'label' => 'Gemarkung',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'gemeindecode' => [
            'exclude' => true,
            'label' => 'Gemeindecode',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'geokoordinaten' => [
            'exclude' => true,
            'label' => 'Geokoordinaten',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_geokoordinaten',
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
        'hausnummer' => [
            'exclude' => true,
            'label' => 'Hausnummer',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'karten_makro' => [
            'exclude' => true,
            'label' => 'KartenMakro',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'karten_mikro' => [
            'exclude' => true,
            'label' => 'KartenMikro',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'lage_gebiet' => [
            'exclude' => true,
            'label' => 'LageGebiet',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_lage_gebiet',
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
        'lage_im_bau' => [
            'exclude' => true,
            'label' => 'LageImBau',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_lage_im_bau',
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
        'land' => [
            'exclude' => true,
            'label' => 'Land',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_land',
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
        'luftbildern' => [
            'exclude' => true,
            'label' => 'Luftbildern',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'ort' => [
            'exclude' => true,
            'label' => 'Ort',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'plz' => [
            'exclude' => true,
            'label' => 'Plz',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'regionaler_zusatz' => [
            'exclude' => true,
            'label' => 'RegionalerZusatz',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'strasse' => [
            'exclude' => true,
            'label' => 'Strasse',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'user_defined_anyfield' => [
            'exclude' => true,
            'label' => 'UserDefinedAnyfield',
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'user_defined_extend' => [
            'exclude' => true,
            'label' => 'UserDefinedExtend',
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'user_defined_simplefield' => [
            'exclude' => true,
            'label' => 'UserDefinedSimplefield',
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'virtuelletour' => [
            'exclude' => true,
            'label' => 'Virtuelletour',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'wohnungsnr' => [
            'exclude' => true,
            'label' => 'Wohnungsnr',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
    ],
];