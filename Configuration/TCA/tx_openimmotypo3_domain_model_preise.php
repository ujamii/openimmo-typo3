<?php
return [
    'ctrl' => [
        'title' => 'Preise',
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
        'searchFields' => 'abstand, aussen_courtage, betriebskostennetto, courtage_hinweis, erbpacht, erschliessungskosten, evbnetto, freitext_preis, gesamtbelastungbrutto, gesamtbelastungnetto, gesamtkostenprom2von, gesamtmietebrutto, gesamtmietenetto, geschaeftsguthaben, hauptmietzinsnetto, hausgeld, heizkosten, heizkosten_enthalten, heizkostennetto, innen_courtage, kaltmiete, kaufpreis, kaufpreisbrutto, kaufpreisnetto, kaufpreis_pro_qm, kaution, kaution_text, mieteinnahmen_ist, mieteinnahmen_soll, mietpreis_pro_qm, mietzuschlaege, monatlichekostenbrutto, monatlichekostennetto, mwst_gesamt, mwst_satz, nebenkosten, nebenkostenprom2von, nettokaltmiete, nettomieteprom2von, nettorendite, nettorendite_ist, nettorendite_soll, pacht, pauschalmiete, preis_zeiteinheit, preis_zeitraum_bis, preis_zeitraum_von, provisionbrutto, provisionnetto, provisionspflichtig, provision_teilen, richtpreis, richtpreisprom2, ruecklagenetto, sonstigekostennetto, sonstigemietenetto, stp_carport, stp_duplex, stp_freiplatz, stp_garage, stp_parkhaus, stp_sonstige, stp_tiefgarage, summemietenetto, user_defined_anyfield, user_defined_extend, user_defined_simplefield, waehrung, warmmiete, x_fache, zzg_mehrwertsteuer',
        'iconfile' => 'EXT:core/Resources/Public/Icons/T3Icons/information/information-typo3-version.svg'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, abstand, aussen_courtage, betriebskostennetto, courtage_hinweis, erbpacht, erschliessungskosten, evbnetto, freitext_preis, gesamtbelastungbrutto, gesamtbelastungnetto, gesamtkostenprom2von, gesamtmietebrutto, gesamtmietenetto, geschaeftsguthaben, hauptmietzinsnetto, hausgeld, heizkosten, heizkosten_enthalten, heizkostennetto, innen_courtage, kaltmiete, kaufpreis, kaufpreisbrutto, kaufpreisnetto, kaufpreis_pro_qm, kaution, kaution_text, mieteinnahmen_ist, mieteinnahmen_soll, mietpreis_pro_qm, mietzuschlaege, monatlichekostenbrutto, monatlichekostennetto, mwst_gesamt, mwst_satz, nebenkosten, nebenkostenprom2von, nettokaltmiete, nettomieteprom2von, nettorendite, nettorendite_ist, nettorendite_soll, pacht, pauschalmiete, preis_zeiteinheit, preis_zeitraum_bis, preis_zeitraum_von, provisionbrutto, provisionnetto, provisionspflichtig, provision_teilen, richtpreis, richtpreisprom2, ruecklagenetto, sonstigekostennetto, sonstigemietenetto, stp_carport, stp_duplex, stp_freiplatz, stp_garage, stp_parkhaus, stp_sonstige, stp_tiefgarage, summemietenetto, user_defined_anyfield, user_defined_extend, user_defined_simplefield, waehrung, warmmiete, x_fache, zzg_mehrwertsteuer',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, abstand, aussen_courtage, betriebskostennetto, courtage_hinweis, erbpacht, erschliessungskosten, evbnetto, freitext_preis, gesamtbelastungbrutto, gesamtbelastungnetto, gesamtkostenprom2von, gesamtmietebrutto, gesamtmietenetto, geschaeftsguthaben, hauptmietzinsnetto, hausgeld, heizkosten, heizkosten_enthalten, heizkostennetto, innen_courtage, kaltmiete, kaufpreis, kaufpreisbrutto, kaufpreisnetto, kaufpreis_pro_qm, kaution, kaution_text, mieteinnahmen_ist, mieteinnahmen_soll, mietpreis_pro_qm, mietzuschlaege, monatlichekostenbrutto, monatlichekostennetto, mwst_gesamt, mwst_satz, nebenkosten, nebenkostenprom2von, nettokaltmiete, nettomieteprom2von, nettorendite, nettorendite_ist, nettorendite_soll, pacht, pauschalmiete, preis_zeiteinheit, preis_zeitraum_bis, preis_zeitraum_von, provisionbrutto, provisionnetto, provisionspflichtig, provision_teilen, richtpreis, richtpreisprom2, ruecklagenetto, sonstigekostennetto, sonstigemietenetto, stp_carport, stp_duplex, stp_freiplatz, stp_garage, stp_parkhaus, stp_sonstige, stp_tiefgarage, summemietenetto, user_defined_anyfield, user_defined_extend, user_defined_simplefield, waehrung, warmmiete, x_fache, zzg_mehrwertsteuer, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
                'foreign_table' => 'tx_openimmotypo3_domain_model_preise',
                'foreign_table_where' => 'AND {#tx_openimmotypo3_domain_model_preise}.{#pid}=###CURRENT_PID### AND {#tx_openimmotypo3_domain_model_preise}.{#sys_language_uid} IN (-1,0)',
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
        'abstand' => [
            'exclude' => true,
            'label' => 'Abstand',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'aussen_courtage' => [
            'exclude' => true,
            'label' => 'AussenCourtage',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_aussen_courtage',
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
        'betriebskostennetto' => [
            'exclude' => true,
            'label' => 'Betriebskostennetto',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_betriebskostennetto',
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
        'courtage_hinweis' => [
            'exclude' => true,
            'label' => 'CourtageHinweis',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'erbpacht' => [
            'exclude' => true,
            'label' => 'Erbpacht',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'erschliessungskosten' => [
            'exclude' => true,
            'label' => 'Erschliessungskosten',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'evbnetto' => [
            'exclude' => true,
            'label' => 'Evbnetto',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_evbnetto',
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
        'freitext_preis' => [
            'exclude' => true,
            'label' => 'FreitextPreis',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'gesamtbelastungbrutto' => [
            'exclude' => true,
            'label' => 'Gesamtbelastungbrutto',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'gesamtbelastungnetto' => [
            'exclude' => true,
            'label' => 'Gesamtbelastungnetto',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_gesamtbelastungnetto',
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
        'gesamtkostenprom2von' => [
            'exclude' => true,
            'label' => 'Gesamtkostenprom2von',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_gesamtkostenprom2von',
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
        'gesamtmietebrutto' => [
            'exclude' => true,
            'label' => 'Gesamtmietebrutto',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'gesamtmietenetto' => [
            'exclude' => true,
            'label' => 'Gesamtmietenetto',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_gesamtmietenetto',
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
        'geschaeftsguthaben' => [
            'exclude' => true,
            'label' => 'Geschaeftsguthaben',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'hauptmietzinsnetto' => [
            'exclude' => true,
            'label' => 'Hauptmietzinsnetto',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_hauptmietzinsnetto',
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
        'hausgeld' => [
            'exclude' => true,
            'label' => 'Hausgeld',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'heizkosten' => [
            'exclude' => true,
            'label' => 'Heizkosten',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'heizkosten_enthalten' => [
            'exclude' => true,
            'label' => 'HeizkostenEnthalten',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'heizkostennetto' => [
            'exclude' => true,
            'label' => 'Heizkostennetto',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_heizkostennetto',
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
        'innen_courtage' => [
            'exclude' => true,
            'label' => 'InnenCourtage',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_innen_courtage',
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
        'kaltmiete' => [
            'exclude' => true,
            'label' => 'Kaltmiete',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'kaufpreis' => [
            'exclude' => true,
            'label' => 'Kaufpreis',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_kaufpreis',
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
        'kaufpreisbrutto' => [
            'exclude' => true,
            'label' => 'Kaufpreisbrutto',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'kaufpreisnetto' => [
            'exclude' => true,
            'label' => 'Kaufpreisnetto',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_kaufpreisnetto',
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
        'kaufpreis_pro_qm' => [
            'exclude' => true,
            'label' => 'KaufpreisProQm',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'kaution' => [
            'exclude' => true,
            'label' => 'Kaution',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'kaution_text' => [
            'exclude' => true,
            'label' => 'KautionText',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'mieteinnahmen_ist' => [
            'exclude' => true,
            'label' => 'MieteinnahmenIst',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_mieteinnahmen_ist',
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
        'mieteinnahmen_soll' => [
            'exclude' => true,
            'label' => 'MieteinnahmenSoll',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_mieteinnahmen_soll',
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
        'mietpreis_pro_qm' => [
            'exclude' => true,
            'label' => 'MietpreisProQm',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'mietzuschlaege' => [
            'exclude' => true,
            'label' => 'Mietzuschlaege',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'monatlichekostenbrutto' => [
            'exclude' => true,
            'label' => 'Monatlichekostenbrutto',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'monatlichekostennetto' => [
            'exclude' => true,
            'label' => 'Monatlichekostennetto',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_monatlichekostennetto',
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
        'mwst_gesamt' => [
            'exclude' => true,
            'label' => 'MwstGesamt',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'mwst_satz' => [
            'exclude' => true,
            'label' => 'MwstSatz',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'nebenkosten' => [
            'exclude' => true,
            'label' => 'Nebenkosten',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'nebenkostenprom2von' => [
            'exclude' => true,
            'label' => 'Nebenkostenprom2von',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_nebenkostenprom2von',
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
        'nettokaltmiete' => [
            'exclude' => true,
            'label' => 'Nettokaltmiete',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'nettomieteprom2von' => [
            'exclude' => true,
            'label' => 'Nettomieteprom2von',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_nettomieteprom2von',
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
        'nettorendite' => [
            'exclude' => true,
            'label' => 'Nettorendite',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'nettorendite_ist' => [
            'exclude' => true,
            'label' => 'NettorenditeIst',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'nettorendite_soll' => [
            'exclude' => true,
            'label' => 'NettorenditeSoll',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'pacht' => [
            'exclude' => true,
            'label' => 'Pacht',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'pauschalmiete' => [
            'exclude' => true,
            'label' => 'Pauschalmiete',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'preis_zeiteinheit' => [
            'exclude' => true,
            'label' => 'PreisZeiteinheit',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_preis_zeiteinheit',
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
        'preis_zeitraum_bis' => [
            'exclude' => true,
            'label' => 'PreisZeitraumBis',
            'config' => [
                'dbType' => 'datetime',
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 12,
                'eval' => 'datetime',
                'default' => null,
            ],
        ],
        'preis_zeitraum_von' => [
            'exclude' => true,
            'label' => 'PreisZeitraumVon',
            'config' => [
                'dbType' => 'datetime',
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 12,
                'eval' => 'datetime',
                'default' => null,
            ],
        ],
        'provisionbrutto' => [
            'exclude' => true,
            'label' => 'Provisionbrutto',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'provisionnetto' => [
            'exclude' => true,
            'label' => 'Provisionnetto',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_provisionnetto',
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
        'provisionspflichtig' => [
            'exclude' => true,
            'label' => 'Provisionspflichtig',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'provision_teilen' => [
            'exclude' => true,
            'label' => 'ProvisionTeilen',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_provision_teilen',
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
        'richtpreis' => [
            'exclude' => true,
            'label' => 'Richtpreis',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'richtpreisprom2' => [
            'exclude' => true,
            'label' => 'Richtpreisprom2',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'ruecklagenetto' => [
            'exclude' => true,
            'label' => 'Ruecklagenetto',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_ruecklagenetto',
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
        'sonstigekostennetto' => [
            'exclude' => true,
            'label' => 'Sonstigekostennetto',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_sonstigekostennetto',
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
        'sonstigemietenetto' => [
            'exclude' => true,
            'label' => 'Sonstigemietenetto',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_sonstigemietenetto',
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
        'stp_carport' => [
            'exclude' => true,
            'label' => 'StpCarport',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_stp_carport',
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
        'stp_duplex' => [
            'exclude' => true,
            'label' => 'StpDuplex',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_stp_duplex',
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
        'stp_freiplatz' => [
            'exclude' => true,
            'label' => 'StpFreiplatz',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_stp_freiplatz',
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
        'stp_garage' => [
            'exclude' => true,
            'label' => 'StpGarage',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_stp_garage',
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
        'stp_parkhaus' => [
            'exclude' => true,
            'label' => 'StpParkhaus',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_stp_parkhaus',
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
        'stp_sonstige' => [
            'exclude' => true,
            'label' => 'StpSonstige',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_stp_sonstige',
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
        'stp_tiefgarage' => [
            'exclude' => true,
            'label' => 'StpTiefgarage',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_stp_tiefgarage',
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
        'summemietenetto' => [
            'exclude' => true,
            'label' => 'Summemietenetto',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_summemietenetto',
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
        'waehrung' => [
            'exclude' => true,
            'label' => 'Waehrung',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openimmotypo3_domain_model_waehrung',
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
        'warmmiete' => [
            'exclude' => true,
            'label' => 'Warmmiete',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'x_fache' => [
            'exclude' => true,
            'label' => 'XFache',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'zzg_mehrwertsteuer' => [
            'exclude' => true,
            'label' => 'ZzgMehrwertsteuer',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
    ],
];