<?php
return [
    'ctrl' => [
        'title' => 'Energietyp',
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
        'searchFields' => 'ausstattung, kfw40, kfw55, kfw60, kfw70, minergiebauweise, minergie_zertifiziert, neubaustandard, niedrigenergie, passivhaus',
        'iconfile' => 'EXT:core/Resources/Public/Icons/T3Icons/information/information-typo3-version.svg'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, ausstattung, kfw40, kfw55, kfw60, kfw70, minergiebauweise, minergie_zertifiziert, neubaustandard, niedrigenergie, passivhaus',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, ausstattung, kfw40, kfw55, kfw60, kfw70, minergiebauweise, minergie_zertifiziert, neubaustandard, niedrigenergie, passivhaus, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
                'foreign_table' => 'tx_openimmotypo3_domain_model_energietyp',
                'foreign_table_where' => 'AND {#tx_openimmotypo3_domain_model_energietyp}.{#pid}=###CURRENT_PID### AND {#tx_openimmotypo3_domain_model_energietyp}.{#sys_language_uid} IN (-1,0)',
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
        'ausstattung' => [
            'exclude' => true,
            'label' => 'Ausstattung',
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'kfw40' => [
            'exclude' => true,
            'label' => 'Kfw40',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'kfw55' => [
            'exclude' => true,
            'label' => 'Kfw55',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'kfw60' => [
            'exclude' => true,
            'label' => 'Kfw60',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'kfw70' => [
            'exclude' => true,
            'label' => 'Kfw70',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'minergiebauweise' => [
            'exclude' => true,
            'label' => 'Minergiebauweise',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'minergie_zertifiziert' => [
            'exclude' => true,
            'label' => 'MinergieZertifiziert',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'neubaustandard' => [
            'exclude' => true,
            'label' => 'Neubaustandard',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'niedrigenergie' => [
            'exclude' => true,
            'label' => 'Niedrigenergie',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'passivhaus' => [
            'exclude' => true,
            'label' => 'Passivhaus',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
    ],
];