<?php
return [
    'ctrl' => [
        'title' => 'Boden',
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
        'searchFields' => 'ausstattung, dielen, doppelboden, estrich, fertigparkett, fliesen, granit, kunststoff, laminat, linoleum, marmor, parkett, stein, teppich, terrakotta',
        'iconfile' => 'EXT:core/Resources/Public/Icons/T3Icons/information/information-typo3-version.svg'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, ausstattung, dielen, doppelboden, estrich, fertigparkett, fliesen, granit, kunststoff, laminat, linoleum, marmor, parkett, stein, teppich, terrakotta',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, ausstattung, dielen, doppelboden, estrich, fertigparkett, fliesen, granit, kunststoff, laminat, linoleum, marmor, parkett, stein, teppich, terrakotta, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
                'foreign_table' => 'tx_openimmotypo3_domain_model_boden',
                'foreign_table_where' => 'AND {#tx_openimmotypo3_domain_model_boden}.{#pid}=###CURRENT_PID### AND {#tx_openimmotypo3_domain_model_boden}.{#sys_language_uid} IN (-1,0)',
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
        'dielen' => [
            'exclude' => true,
            'label' => 'Dielen',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'doppelboden' => [
            'exclude' => true,
            'label' => 'Doppelboden',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'estrich' => [
            'exclude' => true,
            'label' => 'Estrich',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'fertigparkett' => [
            'exclude' => true,
            'label' => 'Fertigparkett',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'fliesen' => [
            'exclude' => true,
            'label' => 'Fliesen',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'granit' => [
            'exclude' => true,
            'label' => 'Granit',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'kunststoff' => [
            'exclude' => true,
            'label' => 'Kunststoff',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'laminat' => [
            'exclude' => true,
            'label' => 'Laminat',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'linoleum' => [
            'exclude' => true,
            'label' => 'Linoleum',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'marmor' => [
            'exclude' => true,
            'label' => 'Marmor',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'parkett' => [
            'exclude' => true,
            'label' => 'Parkett',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'stein' => [
            'exclude' => true,
            'label' => 'Stein',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'teppich' => [
            'exclude' => true,
            'label' => 'Teppich',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'terrakotta' => [
            'exclude' => true,
            'label' => 'Terrakotta',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
    ],
];