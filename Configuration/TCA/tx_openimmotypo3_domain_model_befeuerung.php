<?php
return [
    'ctrl' => [
        'title' => 'Befeuerung',
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
        'searchFields' => 'alternativ, block, elektro, erdwaerme, fern, fluessiggas, gas, holz, kohle, luftwp, oel, pellet, solar, wasser_elektro',
        'iconfile' => 'EXT:core/Resources/Public/Icons/T3Icons/information/information-typo3-version.svg'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, alternativ, block, elektro, erdwaerme, fern, fluessiggas, gas, holz, kohle, luftwp, oel, pellet, solar, wasser_elektro',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, alternativ, block, elektro, erdwaerme, fern, fluessiggas, gas, holz, kohle, luftwp, oel, pellet, solar, wasser_elektro, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
                'foreign_table' => 'tx_openimmotypo3_domain_model_befeuerung',
                'foreign_table_where' => 'AND {#tx_openimmotypo3_domain_model_befeuerung}.{#pid}=###CURRENT_PID### AND {#tx_openimmotypo3_domain_model_befeuerung}.{#sys_language_uid} IN (-1,0)',
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
        'alternativ' => [
            'exclude' => true,
            'label' => 'Alternativ',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'block' => [
            'exclude' => true,
            'label' => 'Block',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'elektro' => [
            'exclude' => true,
            'label' => 'Elektro',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'erdwaerme' => [
            'exclude' => true,
            'label' => 'Erdwaerme',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'fern' => [
            'exclude' => true,
            'label' => 'Fern',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'fluessiggas' => [
            'exclude' => true,
            'label' => 'Fluessiggas',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'gas' => [
            'exclude' => true,
            'label' => 'Gas',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'holz' => [
            'exclude' => true,
            'label' => 'Holz',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'kohle' => [
            'exclude' => true,
            'label' => 'Kohle',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'luftwp' => [
            'exclude' => true,
            'label' => 'Luftwp',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'oel' => [
            'exclude' => true,
            'label' => 'Oel',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'pellet' => [
            'exclude' => true,
            'label' => 'Pellet',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'solar' => [
            'exclude' => true,
            'label' => 'Solar',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'wasser_elektro' => [
            'exclude' => true,
            'label' => 'WasserElektro',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
    ],
];