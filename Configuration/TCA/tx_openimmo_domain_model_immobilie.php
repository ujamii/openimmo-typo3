<?php
return [
    'ctrl' => [
        'title' => 'Immobilie',
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
        'searchFields' => 'anhaenge, ausstattung, bewertung, bieterverfahren, flaechen, freitexte, geo, infrastruktur, kontaktperson, objektkategorie, preise, user_defined_anyfield, user_defined_extend, user_defined_simplefield, versteigerung, verwaltung_objekt, verwaltung_techn, weitere_adresse, zustand_angaben',
        'iconfile' => 'EXT:core/Resources/Public/Icons/T3Icons/information/information-typo3-version.svg'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, anhaenge, ausstattung, bewertung, bieterverfahren, flaechen, freitexte, geo, infrastruktur, kontaktperson, objektkategorie, preise, user_defined_anyfield, user_defined_extend, user_defined_simplefield, versteigerung, verwaltung_objekt, verwaltung_techn, weitere_adresse, zustand_angaben',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, anhaenge, ausstattung, bewertung, bieterverfahren, flaechen, freitexte, geo, infrastruktur, kontaktperson, objektkategorie, preise, user_defined_anyfield, user_defined_extend, user_defined_simplefield, versteigerung, verwaltung_objekt, verwaltung_techn, weitere_adresse, zustand_angaben, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
                'foreign_table_where' => 'AND {#tx_openimmo_domain_model_immobilie}.{#pid}=###CURRENT_PID### AND {#tx_openimmo_domain_model_immobilie}.{#sys_language_uid} IN (-1,0)',
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
        'anhaenge' => [
            'exclude' => true,
            'label' => 'Anhaenge',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_anhaenge',
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
        'ausstattung' => [
            'exclude' => true,
            'label' => 'Ausstattung',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_ausstattung',
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
        'bewertung' => [
            'exclude' => true,
            'label' => 'Bewertung',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_bewertung',
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
        'bieterverfahren' => [
            'exclude' => true,
            'label' => 'Bieterverfahren',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_bieterverfahren',
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
        'flaechen' => [
            'exclude' => true,
            'label' => 'Flaechen',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_flaechen',
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
        'freitexte' => [
            'exclude' => true,
            'label' => 'Freitexte',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_freitexte',
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
        'geo' => [
            'exclude' => true,
            'label' => 'Geo',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_geo',
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
        'infrastruktur' => [
            'exclude' => true,
            'label' => 'Infrastruktur',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_infrastruktur',
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
        'kontaktperson' => [
            'exclude' => true,
            'label' => 'Kontaktperson',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_kontaktperson',
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
        'objektkategorie' => [
            'exclude' => true,
            'label' => 'Objektkategorie',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_objektkategorie',
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
        'preise' => [
            'exclude' => true,
            'label' => 'Preise',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_preise',
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
        'versteigerung' => [
            'exclude' => true,
            'label' => 'Versteigerung',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_versteigerung',
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
        'verwaltung_objekt' => [
            'exclude' => true,
            'label' => 'VerwaltungObjekt',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_verwaltung_objekt',
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
        'verwaltung_techn' => [
            'exclude' => true,
            'label' => 'VerwaltungTechn',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_verwaltung_techn',
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
        'weitere_adresse' => [
            'exclude' => true,
            'label' => 'WeitereAdresse',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_weitere_adresse',
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
        'zustand_angaben' => [
            'exclude' => true,
            'label' => 'ZustandAngaben',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_zustand_angaben',
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
    ],
];