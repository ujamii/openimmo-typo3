<?php
return [
    'ctrl' => [
        'title' => 'Energiepass',
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
        'searchFields' => 'ausstelldatum, baujahr, endenergiebedarf, energieverbrauchkennwert, epart, epasstext, fgeeklasse, fgeewert, gebaeudeart, geg2018, gueltig_bis, hwbklasse, hwbwert, jahrgang, mitwarmwasser, primaerenergietraeger, stromwert, waermewert, wertklasse',
        'iconfile' => 'EXT:core/Resources/Public/Icons/T3Icons/information/information-typo3-version.svg'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, ausstelldatum, baujahr, endenergiebedarf, energieverbrauchkennwert, epart, epasstext, fgeeklasse, fgeewert, gebaeudeart, geg2018, gueltig_bis, hwbklasse, hwbwert, jahrgang, mitwarmwasser, primaerenergietraeger, stromwert, waermewert, wertklasse',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, ausstelldatum, baujahr, endenergiebedarf, energieverbrauchkennwert, epart, epasstext, fgeeklasse, fgeewert, gebaeudeart, geg2018, gueltig_bis, hwbklasse, hwbwert, jahrgang, mitwarmwasser, primaerenergietraeger, stromwert, waermewert, wertklasse, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
                'foreign_table_where' => 'AND {#tx_openimmo_domain_model_energiepass}.{#pid}=###CURRENT_PID### AND {#tx_openimmo_domain_model_energiepass}.{#sys_language_uid} IN (-1,0)',
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
        'ausstelldatum' => [
            'exclude' => true,
            'label' => 'Ausstelldatum',
            'config' => [
                'dbType' => 'datetime',
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 12,
                'eval' => 'datetime',
                'default' => null,
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
        'endenergiebedarf' => [
            'exclude' => true,
            'label' => 'Endenergiebedarf',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'energieverbrauchkennwert' => [
            'exclude' => true,
            'label' => 'Energieverbrauchkennwert',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'epart' => [
            'exclude' => true,
            'label' => 'Epart',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                    ['Bedarf', 'BEDARF'],
                    ['Verbrauch', 'VERBRAUCH'],
                ],
            ],
        ],
        'epasstext' => [
            'exclude' => true,
            'label' => 'Epasstext',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'fgeeklasse' => [
            'exclude' => true,
            'label' => 'Fgeeklasse',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'fgeewert' => [
            'exclude' => true,
            'label' => 'Fgeewert',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'gebaeudeart' => [
            'exclude' => true,
            'label' => 'Gebaeudeart',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                    ['Nichtwohn', 'nichtwohn'],
                    ['Wohn', 'wohn'],
                ],
            ],
        ],
        'geg2018' => [
            'exclude' => true,
            'label' => 'Geg2018',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'gueltig_bis' => [
            'exclude' => true,
            'label' => 'GueltigBis',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'hwbklasse' => [
            'exclude' => true,
            'label' => 'Hwbklasse',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'hwbwert' => [
            'exclude' => true,
            'label' => 'Hwbwert',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'jahrgang' => [
            'exclude' => true,
            'label' => 'Jahrgang',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                    ['2008', '2008'],
                    ['2014', '2014'],
                    ['Bei_besichtigung', 'bei_besichtigung'],
                    ['Nicht_noetig', 'nicht_noetig'],
                    ['Ohne', 'ohne'],
                ],
            ],
        ],
        'mitwarmwasser' => [
            'exclude' => true,
            'label' => 'Mitwarmwasser',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'primaerenergietraeger' => [
            'exclude' => true,
            'label' => 'Primaerenergietraeger',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'stromwert' => [
            'exclude' => true,
            'label' => 'Stromwert',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'waermewert' => [
            'exclude' => true,
            'label' => 'Waermewert',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'wertklasse' => [
            'exclude' => true,
            'label' => 'Wertklasse',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
    ],
];