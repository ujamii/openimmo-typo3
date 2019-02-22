<?php
return [
    'ctrl' => [
        'title' => 'UserDefinedSimplefield',
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
        'searchFields' => 'anbieter, anhaenge, ausstattung, bieterverfahren, feldname, flaechen, freitexte, geo, immobilie, infrastruktur, kontaktperson, objektkategorie, preise, verwaltung_objekt, verwaltung_techn, weitere_adresse, zustand_angaben',
        'iconfile' => 'EXT:core/Resources/Public/Icons/T3Icons/information/information-typo3-version.svg'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, anbieter, anhaenge, ausstattung, bieterverfahren, feldname, flaechen, freitexte, geo, immobilie, infrastruktur, kontaktperson, objektkategorie, preise, verwaltung_objekt, verwaltung_techn, weitere_adresse, zustand_angaben',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, anbieter, anhaenge, ausstattung, bieterverfahren, feldname, flaechen, freitexte, geo, immobilie, infrastruktur, kontaktperson, objektkategorie, preise, verwaltung_objekt, verwaltung_techn, weitere_adresse, zustand_angaben, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
                'foreign_table' => 'tx_openimmotypo3_domain_model_userdefinedsimplefield',
                'foreign_table_where' => 'AND {#tx_openimmotypo3_domain_model_userdefinedsimplefield}.{#pid}=###CURRENT_PID### AND {#tx_openimmotypo3_domain_model_userdefinedsimplefield}.{#sys_language_uid} IN (-1,0)',
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
        'anbieter' => [
            'exclude' => true,
            'label' => 'Anbieter',
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'anhaenge' => [
            'exclude' => true,
            'label' => 'Anhaenge',
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'ausstattung' => [
            'exclude' => true,
            'label' => 'Ausstattung',
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'bieterverfahren' => [
            'exclude' => true,
            'label' => 'Bieterverfahren',
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'feldname' => [
            'exclude' => true,
            'label' => 'Feldname',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'flaechen' => [
            'exclude' => true,
            'label' => 'Flaechen',
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'freitexte' => [
            'exclude' => true,
            'label' => 'Freitexte',
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'geo' => [
            'exclude' => true,
            'label' => 'Geo',
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'immobilie' => [
            'exclude' => true,
            'label' => 'Immobilie',
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'infrastruktur' => [
            'exclude' => true,
            'label' => 'Infrastruktur',
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'kontaktperson' => [
            'exclude' => true,
            'label' => 'Kontaktperson',
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'objektkategorie' => [
            'exclude' => true,
            'label' => 'Objektkategorie',
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'preise' => [
            'exclude' => true,
            'label' => 'Preise',
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'verwaltung_objekt' => [
            'exclude' => true,
            'label' => 'VerwaltungObjekt',
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'verwaltung_techn' => [
            'exclude' => true,
            'label' => 'VerwaltungTechn',
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'weitere_adresse' => [
            'exclude' => true,
            'label' => 'WeitereAdresse',
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'zustand_angaben' => [
            'exclude' => true,
            'label' => 'ZustandAngaben',
            'config' => [
                'type' => 'passthrough',
            ],
        ],
    ],
];