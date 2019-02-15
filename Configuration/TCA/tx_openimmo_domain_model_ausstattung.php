<?php
return [
    'ctrl' => [
        'title' => 'Ausstattung',
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
        'searchFields' => 'abstellraum, angeschl_gastronomie, ausbaustufe, ausricht_balkon_terrasse, ausstatt_kategorie, bad, barrierefrei, bauweise, befeuerung, bibliothek, boden, brauereibindung, breitband_zugang, dachboden, dachform, dvbt, dv_verkabelung, energietyp, fahrradraum, fahrstuhl, gaestewc, gartennutzung, gastterrasse, hallenhoehe, hebebuehne, heizungsart, kabelkanaele, kabel_sat_tv, kamin, kantine_cafeteria, klimatisiert, kran, kueche, moebliert, raeume_veraenderbar, rampe, rolladen, rollstuhlgerecht, sauna, seniorengerecht, serviceleistungen, sicherheitstechnik, sporteinrichtungen, stellplatzart, stromanschlusswert, swimmingpool, teekueche, telefon_ferienimmobilie, umts_empfang, unterkellert, user_defined_anyfield, user_defined_extend, user_defined_simplefield, wasch_trockenraum, wellnessbereich, wg_geeignet, wintergarten',
        'iconfile' => 'EXT:core/Resources/Public/Icons/T3Icons/information/information-typo3-version.svg'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, abstellraum, angeschl_gastronomie, ausbaustufe, ausricht_balkon_terrasse, ausstatt_kategorie, bad, barrierefrei, bauweise, befeuerung, bibliothek, boden, brauereibindung, breitband_zugang, dachboden, dachform, dvbt, dv_verkabelung, energietyp, fahrradraum, fahrstuhl, gaestewc, gartennutzung, gastterrasse, hallenhoehe, hebebuehne, heizungsart, kabelkanaele, kabel_sat_tv, kamin, kantine_cafeteria, klimatisiert, kran, kueche, moebliert, raeume_veraenderbar, rampe, rolladen, rollstuhlgerecht, sauna, seniorengerecht, serviceleistungen, sicherheitstechnik, sporteinrichtungen, stellplatzart, stromanschlusswert, swimmingpool, teekueche, telefon_ferienimmobilie, umts_empfang, unterkellert, user_defined_anyfield, user_defined_extend, user_defined_simplefield, wasch_trockenraum, wellnessbereich, wg_geeignet, wintergarten',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, abstellraum, angeschl_gastronomie, ausbaustufe, ausricht_balkon_terrasse, ausstatt_kategorie, bad, barrierefrei, bauweise, befeuerung, bibliothek, boden, brauereibindung, breitband_zugang, dachboden, dachform, dvbt, dv_verkabelung, energietyp, fahrradraum, fahrstuhl, gaestewc, gartennutzung, gastterrasse, hallenhoehe, hebebuehne, heizungsart, kabelkanaele, kabel_sat_tv, kamin, kantine_cafeteria, klimatisiert, kran, kueche, moebliert, raeume_veraenderbar, rampe, rolladen, rollstuhlgerecht, sauna, seniorengerecht, serviceleistungen, sicherheitstechnik, sporteinrichtungen, stellplatzart, stromanschlusswert, swimmingpool, teekueche, telefon_ferienimmobilie, umts_empfang, unterkellert, user_defined_anyfield, user_defined_extend, user_defined_simplefield, wasch_trockenraum, wellnessbereich, wg_geeignet, wintergarten, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
                'foreign_table_where' => 'AND {#tx_openimmo_domain_model_ausstattung}.{#pid}=###CURRENT_PID### AND {#tx_openimmo_domain_model_ausstattung}.{#sys_language_uid} IN (-1,0)',
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
        'abstellraum' => [
            'exclude' => true,
            'label' => 'Abstellraum',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'angeschl_gastronomie' => [
            'exclude' => true,
            'label' => 'AngeschlGastronomie',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_angeschl_gastronomie',
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
        'ausbaustufe' => [
            'exclude' => true,
            'label' => 'Ausbaustufe',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_ausbaustufe',
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
        'ausricht_balkon_terrasse' => [
            'exclude' => true,
            'label' => 'AusrichtBalkonTerrasse',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_ausricht_balkon_terrasse',
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
        'ausstatt_kategorie' => [
            'exclude' => true,
            'label' => 'AusstattKategorie',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                    ['Gehoben', 'GEHOBEN'],
                    ['Luxus', 'LUXUS'],
                    ['Standard', 'STANDARD'],
                ],
            ],
        ],
        'bad' => [
            'exclude' => true,
            'label' => 'Bad',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_bad',
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
        'barrierefrei' => [
            'exclude' => true,
            'label' => 'Barrierefrei',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'bauweise' => [
            'exclude' => true,
            'label' => 'Bauweise',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_bauweise',
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
        'befeuerung' => [
            'exclude' => true,
            'label' => 'Befeuerung',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_befeuerung',
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
        'bibliothek' => [
            'exclude' => true,
            'label' => 'Bibliothek',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'boden' => [
            'exclude' => true,
            'label' => 'Boden',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_boden',
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
        'brauereibindung' => [
            'exclude' => true,
            'label' => 'Brauereibindung',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'breitband_zugang' => [
            'exclude' => true,
            'label' => 'BreitbandZugang',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_breitband_zugang',
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
        'dachboden' => [
            'exclude' => true,
            'label' => 'Dachboden',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'dachform' => [
            'exclude' => true,
            'label' => 'Dachform',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_dachform',
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
        'dvbt' => [
            'exclude' => true,
            'label' => 'Dvbt',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'dv_verkabelung' => [
            'exclude' => true,
            'label' => 'DvVerkabelung',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'energietyp' => [
            'exclude' => true,
            'label' => 'Energietyp',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_energietyp',
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
        'fahrradraum' => [
            'exclude' => true,
            'label' => 'Fahrradraum',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'fahrstuhl' => [
            'exclude' => true,
            'label' => 'Fahrstuhl',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_fahrstuhl',
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
        'gaestewc' => [
            'exclude' => true,
            'label' => 'Gaestewc',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'gartennutzung' => [
            'exclude' => true,
            'label' => 'Gartennutzung',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'gastterrasse' => [
            'exclude' => true,
            'label' => 'Gastterrasse',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'hallenhoehe' => [
            'exclude' => true,
            'label' => 'Hallenhoehe',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'hebebuehne' => [
            'exclude' => true,
            'label' => 'Hebebuehne',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'heizungsart' => [
            'exclude' => true,
            'label' => 'Heizungsart',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_heizungsart',
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
        'kabelkanaele' => [
            'exclude' => true,
            'label' => 'Kabelkanaele',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'kabel_sat_tv' => [
            'exclude' => true,
            'label' => 'KabelSatTv',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'kamin' => [
            'exclude' => true,
            'label' => 'Kamin',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'kantine_cafeteria' => [
            'exclude' => true,
            'label' => 'KantineCafeteria',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'klimatisiert' => [
            'exclude' => true,
            'label' => 'Klimatisiert',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'kran' => [
            'exclude' => true,
            'label' => 'Kran',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'kueche' => [
            'exclude' => true,
            'label' => 'Kueche',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_kueche',
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
        'moebliert' => [
            'exclude' => true,
            'label' => 'Moebliert',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_moebliert',
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
        'raeume_veraenderbar' => [
            'exclude' => true,
            'label' => 'RaeumeVeraenderbar',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'rampe' => [
            'exclude' => true,
            'label' => 'Rampe',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'rolladen' => [
            'exclude' => true,
            'label' => 'Rolladen',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'rollstuhlgerecht' => [
            'exclude' => true,
            'label' => 'Rollstuhlgerecht',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'sauna' => [
            'exclude' => true,
            'label' => 'Sauna',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'seniorengerecht' => [
            'exclude' => true,
            'label' => 'Seniorengerecht',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'serviceleistungen' => [
            'exclude' => true,
            'label' => 'Serviceleistungen',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_serviceleistungen',
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
        'sicherheitstechnik' => [
            'exclude' => true,
            'label' => 'Sicherheitstechnik',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_sicherheitstechnik',
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
        'sporteinrichtungen' => [
            'exclude' => true,
            'label' => 'Sporteinrichtungen',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'stellplatzart' => [
            'exclude' => true,
            'label' => 'Stellplatzart',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_stellplatzart',
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
        'stromanschlusswert' => [
            'exclude' => true,
            'label' => 'Stromanschlusswert',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'swimmingpool' => [
            'exclude' => true,
            'label' => 'Swimmingpool',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'teekueche' => [
            'exclude' => true,
            'label' => 'Teekueche',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'telefon_ferienimmobilie' => [
            'exclude' => true,
            'label' => 'TelefonFerienimmobilie',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'umts_empfang' => [
            'exclude' => true,
            'label' => 'UmtsEmpfang',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'unterkellert' => [
            'exclude' => true,
            'label' => 'Unterkellert',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmo_domain_model_unterkellert',
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
        'wasch_trockenraum' => [
            'exclude' => true,
            'label' => 'WaschTrockenraum',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'wellnessbereich' => [
            'exclude' => true,
            'label' => 'Wellnessbereich',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'wg_geeignet' => [
            'exclude' => true,
            'label' => 'WgGeeignet',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'wintergarten' => [
            'exclude' => true,
            'label' => 'Wintergarten',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
    ],
];