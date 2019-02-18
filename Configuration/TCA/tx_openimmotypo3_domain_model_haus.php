<?php
return [
    'ctrl' => [
        'title' => 'Haus',
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
        'searchFields' => 'haustyp',
        'iconfile' => 'EXT:core/Resources/Public/Icons/T3Icons/information/information-typo3-version.svg'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, haustyp',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, haustyp, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
                'foreign_table' => 'tx_openimmotypo3_domain_model_haus',
                'foreign_table_where' => 'AND {#tx_openimmotypo3_domain_model_haus}.{#pid}=###CURRENT_PID### AND {#tx_openimmotypo3_domain_model_haus}.{#sys_language_uid} IN (-1,0)',
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
        'haustyp' => [
            'exclude' => true,
            'label' => 'Haustyp',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                    ['Apartmenthaus', 'APARTMENTHAUS'],
                    ['Bauernhaus', 'BAUERNHAUS'],
                    ['Berghuette', 'BERGHUETTE'],
                    ['Bungalow', 'BUNGALOW'],
                    ['Burg', 'BURG'],
                    ['Chalet', 'CHALET'],
                    ['Doppelhaushaelfte', 'DOPPELHAUSHAELFTE'],
                    ['Einfamilienhaus', 'EINFAMILIENHAUS'],
                    ['Ferienhaus', 'FERIENHAUS'],
                    ['Fertighaus', 'FERTIGHAUS'],
                    ['Finca', 'FINCA'],
                    ['Herrenhaus', 'HERRENHAUS'],
                    ['Keine_angabe', 'KEINE_ANGABE'],
                    ['Landhaus', 'LANDHAUS'],
                    ['Laube-datsche-gartenhaus', 'LAUBE-DATSCHE-GARTENHAUS'],
                    ['Mehrfamilienhaus', 'MEHRFAMILIENHAUS'],
                    ['Reiheneck', 'REIHENECK'],
                    ['Reihenend', 'REIHENEND'],
                    ['Reihenhaus', 'REIHENHAUS'],
                    ['Reihenmittel', 'REIHENMITTEL'],
                    ['Resthof', 'RESTHOF'],
                    ['Rustico', 'RUSTICO'],
                    ['Schloss', 'SCHLOSS'],
                    ['Stadthaus', 'STADTHAUS'],
                    ['Strandhaus', 'STRANDHAUS'],
                    ['Villa', 'VILLA'],
                    ['Zweifamilienhaus', 'ZWEIFAMILIENHAUS'],
                ],
            ],
        ],
    ],
];