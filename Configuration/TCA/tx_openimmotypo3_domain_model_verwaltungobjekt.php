<?php
return [
    'ctrl' => [
        'title' => 'VerwaltungObjekt',
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
        'searchFields' => 'abdatum, als_ferien, bisdatum, branchen, denkmalgeschuetzt, geschlecht, gewerbliche_nutzung, gruppennummer, haustiere, hochhaus, immobilie, laufzeit, max_mietdauer, max_personen, min_mietdauer, nichtraucher, objektadresse_freigeben, user_defined_anyfield, user_defined_extend, user_defined_simplefield, verfuegbar_ab, vermietet, versteigerungstermin, wbs_sozialwohnung, zugang',
        'iconfile' => 'EXT:core/Resources/Public/Icons/T3Icons/information/information-typo3-version.svg'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, abdatum, als_ferien, bisdatum, branchen, denkmalgeschuetzt, geschlecht, gewerbliche_nutzung, gruppennummer, haustiere, hochhaus, immobilie, laufzeit, max_mietdauer, max_personen, min_mietdauer, nichtraucher, objektadresse_freigeben, user_defined_anyfield, user_defined_extend, user_defined_simplefield, verfuegbar_ab, vermietet, versteigerungstermin, wbs_sozialwohnung, zugang',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, abdatum, als_ferien, bisdatum, branchen, denkmalgeschuetzt, geschlecht, gewerbliche_nutzung, gruppennummer, haustiere, hochhaus, immobilie, laufzeit, max_mietdauer, max_personen, min_mietdauer, nichtraucher, objektadresse_freigeben, user_defined_anyfield, user_defined_extend, user_defined_simplefield, verfuegbar_ab, vermietet, versteigerungstermin, wbs_sozialwohnung, zugang, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
                'foreign_table' => 'tx_openimmotypo3_domain_model_verwaltungobjekt',
                'foreign_table_where' => 'AND {#tx_openimmotypo3_domain_model_verwaltungobjekt}.{#pid}=###CURRENT_PID### AND {#tx_openimmotypo3_domain_model_verwaltungobjekt}.{#sys_language_uid} IN (-1,0)',
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
        'abdatum' => [
            'exclude' => true,
            'label' => 'Abdatum',
            'config' => [
                'dbType' => 'datetime',
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 12,
                'eval' => 'datetime',
                'default' => null,
            ],
        ],
        'als_ferien' => [
            'exclude' => true,
            'label' => 'AlsFerien',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'bisdatum' => [
            'exclude' => true,
            'label' => 'Bisdatum',
            'config' => [
                'dbType' => 'datetime',
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 12,
                'eval' => 'datetime',
                'default' => null,
            ],
        ],
        'branchen' => [
            'exclude' => true,
            'label' => 'Branchen',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'denkmalgeschuetzt' => [
            'exclude' => true,
            'label' => 'Denkmalgeschuetzt',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'geschlecht' => [
            'exclude' => true,
            'label' => 'Geschlecht',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_geschlecht',
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
        'gewerbliche_nutzung' => [
            'exclude' => true,
            'label' => 'GewerblicheNutzung',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'gruppennummer' => [
            'exclude' => true,
            'label' => 'Gruppennummer',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'haustiere' => [
            'exclude' => true,
            'label' => 'Haustiere',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'hochhaus' => [
            'exclude' => true,
            'label' => 'Hochhaus',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'immobilie' => [
            'exclude' => true,
            'label' => 'Immobilie',
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'laufzeit' => [
            'exclude' => true,
            'label' => 'Laufzeit',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'max_mietdauer' => [
            'exclude' => true,
            'label' => 'MaxMietdauer',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_maxmietdauer',
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
        'max_personen' => [
            'exclude' => true,
            'label' => 'MaxPersonen',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ],
        ],
        'min_mietdauer' => [
            'exclude' => true,
            'label' => 'MinMietdauer',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_minmietdauer',
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
        'nichtraucher' => [
            'exclude' => true,
            'label' => 'Nichtraucher',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'objektadresse_freigeben' => [
            'exclude' => true,
            'label' => 'ObjektadresseFreigeben',
            'config' => [
                'type' => 'check',
                'default' => 0,
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
        'verfuegbar_ab' => [
            'exclude' => true,
            'label' => 'VerfuegbarAb',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'vermietet' => [
            'exclude' => true,
            'label' => 'Vermietet',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'versteigerungstermin' => [
            'exclude' => true,
            'label' => 'Versteigerungstermin',
            'config' => [
                'dbType' => 'datetime',
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 12,
                'eval' => 'datetime',
                'default' => null,
            ],
        ],
        'wbs_sozialwohnung' => [
            'exclude' => true,
            'label' => 'WbsSozialwohnung',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'zugang' => [
            'exclude' => true,
            'label' => 'Zugang',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
    ],
];