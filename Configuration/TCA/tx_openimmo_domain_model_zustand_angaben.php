<?php
return [
    'ctrl' => [
        'title' => 'ZustandAngaben',
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
        'searchFields' => 'sqlsafe_alter, altlasten, baujahr, bauzone, bebaubar_nach, energiepass, erschliessung, erschliessung_umfang, letztemodernisierung, user_defined_anyfield, user_defined_extend, user_defined_simplefield, verkaufstatus, zustand',
        'iconfile' => 'EXT:core/Resources/Public/Icons/T3Icons/information/information-typo3-version.svg'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, sqlsafe_alter, altlasten, baujahr, bauzone, bebaubar_nach, energiepass, erschliessung, erschliessung_umfang, letztemodernisierung, user_defined_anyfield, user_defined_extend, user_defined_simplefield, verkaufstatus, zustand',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, sqlsafe_alter, altlasten, baujahr, bauzone, bebaubar_nach, energiepass, erschliessung, erschliessung_umfang, letztemodernisierung, user_defined_anyfield, user_defined_extend, user_defined_simplefield, verkaufstatus, zustand, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
                'foreign_table_where' => 'AND {#tx_openimmo_domain_model_zustand_angaben}.{#pid}=###CURRENT_PID### AND {#tx_openimmo_domain_model_zustand_angaben}.{#sys_language_uid} IN (-1,0)',
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
        'sqlsafe_alter' => [
            'exclude' => true,
            'label' => 'Alter',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_sqlsafe_alter',
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
        'altlasten' => [
            'exclude' => true,
            'label' => 'Altlasten',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'baujahr' => [
            'exclude' => true,
            'label' => 'Baujahr',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'bauzone' => [
            'exclude' => true,
            'label' => 'Bauzone',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'bebaubar_nach' => [
            'exclude' => true,
            'label' => 'BebaubarNach',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_bebaubar_nach',
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
        'energiepass' => [
            'exclude' => true,
            'label' => 'Energiepass',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_energiepass',
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
        'erschliessung' => [
            'exclude' => true,
            'label' => 'Erschliessung',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_erschliessung',
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
        'erschliessung_umfang' => [
            'exclude' => true,
            'label' => 'ErschliessungUmfang',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_erschliessung_umfang',
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
        'letztemodernisierung' => [
            'exclude' => true,
            'label' => 'Letztemodernisierung',
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
        'verkaufstatus' => [
            'exclude' => true,
            'label' => 'Verkaufstatus',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_verkaufstatus',
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
        'zustand' => [
            'exclude' => true,
            'label' => 'Zustand',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_zustand',
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