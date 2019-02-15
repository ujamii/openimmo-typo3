<?php
return [
    'ctrl' => [
        'title' => 'Flaechen',
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
        'searchFields' => 'anzahl_badezimmer, anzahl_balkone, anzahl_betten, anzahl_gewerbeeinheiten, anzahl_logia, anzahl_schlafzimmer, anzahl_sep_wc, anzahl_stellplaetze, anzahl_tagungsraeume, anzahl_terrassen, anzahl_wohneinheiten, anzahl_wohn_schlafzimmer, anzahl_zimmer, ausnuetzungsziffer, balkon_terrasse_flaeche, beheizbare_flaeche, bgf, bmz, bueroflaeche, bueroteilflaeche, dachbodenflaeche, einliegerwohnung, fensterfront, fensterfront_qm, flaechebis, flaechevon, freiflaeche, gartenflaeche, gastroflaeche, gesamtflaeche, gfz, grundstuecksflaeche, grundstuecksfront, grz, kellerflaeche, kubatur, ladenflaeche, lagerflaeche, nutzflaeche, plaetze_gastraum, sonstflaeche, teilbar_ab, user_defined_anyfield, user_defined_extend, user_defined_simplefield, verkaufsflaeche, vermietbare_flaeche, verwaltungsflaeche, wohnflaeche',
        'iconfile' => 'EXT:core/Resources/Public/Icons/T3Icons/information/information-typo3-version.svg'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, anzahl_badezimmer, anzahl_balkone, anzahl_betten, anzahl_gewerbeeinheiten, anzahl_logia, anzahl_schlafzimmer, anzahl_sep_wc, anzahl_stellplaetze, anzahl_tagungsraeume, anzahl_terrassen, anzahl_wohneinheiten, anzahl_wohn_schlafzimmer, anzahl_zimmer, ausnuetzungsziffer, balkon_terrasse_flaeche, beheizbare_flaeche, bgf, bmz, bueroflaeche, bueroteilflaeche, dachbodenflaeche, einliegerwohnung, fensterfront, fensterfront_qm, flaechebis, flaechevon, freiflaeche, gartenflaeche, gastroflaeche, gesamtflaeche, gfz, grundstuecksflaeche, grundstuecksfront, grz, kellerflaeche, kubatur, ladenflaeche, lagerflaeche, nutzflaeche, plaetze_gastraum, sonstflaeche, teilbar_ab, user_defined_anyfield, user_defined_extend, user_defined_simplefield, verkaufsflaeche, vermietbare_flaeche, verwaltungsflaeche, wohnflaeche',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, anzahl_badezimmer, anzahl_balkone, anzahl_betten, anzahl_gewerbeeinheiten, anzahl_logia, anzahl_schlafzimmer, anzahl_sep_wc, anzahl_stellplaetze, anzahl_tagungsraeume, anzahl_terrassen, anzahl_wohneinheiten, anzahl_wohn_schlafzimmer, anzahl_zimmer, ausnuetzungsziffer, balkon_terrasse_flaeche, beheizbare_flaeche, bgf, bmz, bueroflaeche, bueroteilflaeche, dachbodenflaeche, einliegerwohnung, fensterfront, fensterfront_qm, flaechebis, flaechevon, freiflaeche, gartenflaeche, gastroflaeche, gesamtflaeche, gfz, grundstuecksflaeche, grundstuecksfront, grz, kellerflaeche, kubatur, ladenflaeche, lagerflaeche, nutzflaeche, plaetze_gastraum, sonstflaeche, teilbar_ab, user_defined_anyfield, user_defined_extend, user_defined_simplefield, verkaufsflaeche, vermietbare_flaeche, verwaltungsflaeche, wohnflaeche, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
                'foreign_table_where' => 'AND {#tx_openimmo_domain_model_flaechen}.{#pid}=###CURRENT_PID### AND {#tx_openimmo_domain_model_flaechen}.{#sys_language_uid} IN (-1,0)',
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
        'anzahl_badezimmer' => [
            'exclude' => true,
            'label' => 'AnzahlBadezimmer',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'anzahl_balkone' => [
            'exclude' => true,
            'label' => 'AnzahlBalkone',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'anzahl_betten' => [
            'exclude' => true,
            'label' => 'AnzahlBetten',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'anzahl_gewerbeeinheiten' => [
            'exclude' => true,
            'label' => 'AnzahlGewerbeeinheiten',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'anzahl_logia' => [
            'exclude' => true,
            'label' => 'AnzahlLogia',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'anzahl_schlafzimmer' => [
            'exclude' => true,
            'label' => 'AnzahlSchlafzimmer',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'anzahl_sep_wc' => [
            'exclude' => true,
            'label' => 'AnzahlSepWc',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'anzahl_stellplaetze' => [
            'exclude' => true,
            'label' => 'AnzahlStellplaetze',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ],
        ],
        'anzahl_tagungsraeume' => [
            'exclude' => true,
            'label' => 'AnzahlTagungsraeume',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'anzahl_terrassen' => [
            'exclude' => true,
            'label' => 'AnzahlTerrassen',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'anzahl_wohneinheiten' => [
            'exclude' => true,
            'label' => 'AnzahlWohneinheiten',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'anzahl_wohn_schlafzimmer' => [
            'exclude' => true,
            'label' => 'AnzahlWohnSchlafzimmer',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'anzahl_zimmer' => [
            'exclude' => true,
            'label' => 'AnzahlZimmer',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'ausnuetzungsziffer' => [
            'exclude' => true,
            'label' => 'Ausnuetzungsziffer',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'balkon_terrasse_flaeche' => [
            'exclude' => true,
            'label' => 'BalkonTerrasseFlaeche',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'beheizbare_flaeche' => [
            'exclude' => true,
            'label' => 'BeheizbareFlaeche',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'bgf' => [
            'exclude' => true,
            'label' => 'Bgf',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'bmz' => [
            'exclude' => true,
            'label' => 'Bmz',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'bueroflaeche' => [
            'exclude' => true,
            'label' => 'Bueroflaeche',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'bueroteilflaeche' => [
            'exclude' => true,
            'label' => 'Bueroteilflaeche',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'dachbodenflaeche' => [
            'exclude' => true,
            'label' => 'Dachbodenflaeche',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'einliegerwohnung' => [
            'exclude' => true,
            'label' => 'Einliegerwohnung',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'fensterfront' => [
            'exclude' => true,
            'label' => 'Fensterfront',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'fensterfront_qm' => [
            'exclude' => true,
            'label' => 'FensterfrontQm',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'flaechebis' => [
            'exclude' => true,
            'label' => 'Flaechebis',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'flaechevon' => [
            'exclude' => true,
            'label' => 'Flaechevon',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'freiflaeche' => [
            'exclude' => true,
            'label' => 'Freiflaeche',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'gartenflaeche' => [
            'exclude' => true,
            'label' => 'Gartenflaeche',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'gastroflaeche' => [
            'exclude' => true,
            'label' => 'Gastroflaeche',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'gesamtflaeche' => [
            'exclude' => true,
            'label' => 'Gesamtflaeche',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'gfz' => [
            'exclude' => true,
            'label' => 'Gfz',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'grundstuecksflaeche' => [
            'exclude' => true,
            'label' => 'Grundstuecksflaeche',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'grundstuecksfront' => [
            'exclude' => true,
            'label' => 'Grundstuecksfront',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'grz' => [
            'exclude' => true,
            'label' => 'Grz',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'kellerflaeche' => [
            'exclude' => true,
            'label' => 'Kellerflaeche',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'kubatur' => [
            'exclude' => true,
            'label' => 'Kubatur',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'ladenflaeche' => [
            'exclude' => true,
            'label' => 'Ladenflaeche',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'lagerflaeche' => [
            'exclude' => true,
            'label' => 'Lagerflaeche',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'nutzflaeche' => [
            'exclude' => true,
            'label' => 'Nutzflaeche',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'plaetze_gastraum' => [
            'exclude' => true,
            'label' => 'PlaetzeGastraum',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'sonstflaeche' => [
            'exclude' => true,
            'label' => 'Sonstflaeche',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'teilbar_ab' => [
            'exclude' => true,
            'label' => 'TeilbarAb',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
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
        'verkaufsflaeche' => [
            'exclude' => true,
            'label' => 'Verkaufsflaeche',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'vermietbare_flaeche' => [
            'exclude' => true,
            'label' => 'VermietbareFlaeche',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'verwaltungsflaeche' => [
            'exclude' => true,
            'label' => 'Verwaltungsflaeche',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'wohnflaeche' => [
            'exclude' => true,
            'label' => 'Wohnflaeche',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
    ],
];