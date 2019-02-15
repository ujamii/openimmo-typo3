<?php
return [
    'ctrl' => [
        'title' => 'Kontaktperson',
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
        'searchFields' => 'adressfreigabe, anrede, anrede_brief, email_direkt, email_feedback, email_privat, email_sonstige, email_zentrale, firma, foto, freitextfeld, hausnummer, immobilientreuhaenderid, land, name, ort, personennummer, plz, position, postfach, postf_ort, postf_plz, referenz_id, strasse, tel_durchw, tel_fax, tel_handy, tel_privat, tel_sonstige, tel_zentrale, titel, url, user_defined_anyfield, user_defined_extend, user_defined_simplefield, vorname, zusatzfeld',
        'iconfile' => 'EXT:core/Resources/Public/Icons/T3Icons/information/information-typo3-version.svg'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, adressfreigabe, anrede, anrede_brief, email_direkt, email_feedback, email_privat, email_sonstige, email_zentrale, firma, foto, freitextfeld, hausnummer, immobilientreuhaenderid, land, name, ort, personennummer, plz, position, postfach, postf_ort, postf_plz, referenz_id, strasse, tel_durchw, tel_fax, tel_handy, tel_privat, tel_sonstige, tel_zentrale, titel, url, user_defined_anyfield, user_defined_extend, user_defined_simplefield, vorname, zusatzfeld',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, adressfreigabe, anrede, anrede_brief, email_direkt, email_feedback, email_privat, email_sonstige, email_zentrale, firma, foto, freitextfeld, hausnummer, immobilientreuhaenderid, land, name, ort, personennummer, plz, position, postfach, postf_ort, postf_plz, referenz_id, strasse, tel_durchw, tel_fax, tel_handy, tel_privat, tel_sonstige, tel_zentrale, titel, url, user_defined_anyfield, user_defined_extend, user_defined_simplefield, vorname, zusatzfeld, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
                'foreign_table_where' => 'AND {#tx_openimmo_domain_model_kontaktperson}.{#pid}=###CURRENT_PID### AND {#tx_openimmo_domain_model_kontaktperson}.{#sys_language_uid} IN (-1,0)',
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
        'adressfreigabe' => [
            'exclude' => true,
            'label' => 'Adressfreigabe',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'anrede' => [
            'exclude' => true,
            'label' => 'Anrede',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'anrede_brief' => [
            'exclude' => true,
            'label' => 'AnredeBrief',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'email_direkt' => [
            'exclude' => true,
            'label' => 'EmailDirekt',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'email_feedback' => [
            'exclude' => true,
            'label' => 'EmailFeedback',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'email_privat' => [
            'exclude' => true,
            'label' => 'EmailPrivat',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'email_sonstige' => [
            'exclude' => true,
            'label' => 'EmailSonstige',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_email_sonstige',
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
        'email_zentrale' => [
            'exclude' => true,
            'label' => 'EmailZentrale',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'firma' => [
            'exclude' => true,
            'label' => 'Firma',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'foto' => [
            'exclude' => true,
            'label' => 'Foto',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_foto',
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
        'freitextfeld' => [
            'exclude' => true,
            'label' => 'Freitextfeld',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'hausnummer' => [
            'exclude' => true,
            'label' => 'Hausnummer',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'immobilientreuhaenderid' => [
            'exclude' => true,
            'label' => 'Immobilientreuhaenderid',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'land' => [
            'exclude' => true,
            'label' => 'Land',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_land',
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
        'name' => [
            'exclude' => true,
            'label' => 'Name',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'ort' => [
            'exclude' => true,
            'label' => 'Ort',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'personennummer' => [
            'exclude' => true,
            'label' => 'Personennummer',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'plz' => [
            'exclude' => true,
            'label' => 'Plz',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'position' => [
            'exclude' => true,
            'label' => 'Position',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'postfach' => [
            'exclude' => true,
            'label' => 'Postfach',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'postf_ort' => [
            'exclude' => true,
            'label' => 'PostfOrt',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'postf_plz' => [
            'exclude' => true,
            'label' => 'PostfPlz',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'referenz_id' => [
            'exclude' => true,
            'label' => 'ReferenzId',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'strasse' => [
            'exclude' => true,
            'label' => 'Strasse',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'tel_durchw' => [
            'exclude' => true,
            'label' => 'TelDurchw',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'tel_fax' => [
            'exclude' => true,
            'label' => 'TelFax',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'tel_handy' => [
            'exclude' => true,
            'label' => 'TelHandy',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'tel_privat' => [
            'exclude' => true,
            'label' => 'TelPrivat',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'tel_sonstige' => [
            'exclude' => true,
            'label' => 'TelSonstige',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_tel_sonstige',
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
        'tel_zentrale' => [
            'exclude' => true,
            'label' => 'TelZentrale',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'titel' => [
            'exclude' => true,
            'label' => 'Titel',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'url' => [
            'exclude' => true,
            'label' => 'Url',
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
        'vorname' => [
            'exclude' => true,
            'label' => 'Vorname',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'zusatzfeld' => [
            'exclude' => true,
            'label' => 'Zusatzfeld',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
    ],
];