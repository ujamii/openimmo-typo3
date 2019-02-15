<?php
return [
    'ctrl' => [
        'title' => 'Ausbaustufe',
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
        'searchFields' => 'ausbauhaus, bausatzhaus, schluesselfertigmitbodenplatte, schluesselfertigmitkeller, schluesselfertigohnebodenplatte',
        'iconfile' => 'EXT:core/Resources/Public/Icons/T3Icons/information/information-typo3-version.svg'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, ausbauhaus, bausatzhaus, schluesselfertigmitbodenplatte, schluesselfertigmitkeller, schluesselfertigohnebodenplatte',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, ausbauhaus, bausatzhaus, schluesselfertigmitbodenplatte, schluesselfertigmitkeller, schluesselfertigohnebodenplatte, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
                'foreign_table_where' => 'AND {#tx_openimmo_domain_model_ausbaustufe}.{#pid}=###CURRENT_PID### AND {#tx_openimmo_domain_model_ausbaustufe}.{#sys_language_uid} IN (-1,0)',
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
        'ausbauhaus' => [
            'exclude' => true,
            'label' => 'Ausbauhaus',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'bausatzhaus' => [
            'exclude' => true,
            'label' => 'Bausatzhaus',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'schluesselfertigmitbodenplatte' => [
            'exclude' => true,
            'label' => 'Schluesselfertigmitbodenplatte',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'schluesselfertigmitkeller' => [
            'exclude' => true,
            'label' => 'Schluesselfertigmitkeller',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'schluesselfertigohnebodenplatte' => [
            'exclude' => true,
            'label' => 'Schluesselfertigohnebodenplatte',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
    ],
];