<?php
return [
    'ctrl' => [
        'title' => 'Land',
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
        'searchFields' => 'geo, iso_land, kontaktperson, weitere_adresse',
        'iconfile' => 'EXT:core/Resources/Public/Icons/T3Icons/information/information-typo3-version.svg'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, geo, iso_land, kontaktperson, weitere_adresse',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, geo, iso_land, kontaktperson, weitere_adresse, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
                'foreign_table' => 'tx_openimmotypo3_domain_model_land',
                'foreign_table_where' => 'AND {#tx_openimmotypo3_domain_model_land}.{#pid}=###CURRENT_PID### AND {#tx_openimmotypo3_domain_model_land}.{#sys_language_uid} IN (-1,0)',
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
        'geo' => [
            'exclude' => true,
            'label' => 'Geo',
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'iso_land' => [
            'exclude' => true,
            'label' => 'IsoLand',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                    ['Abw', 'ABW'],
                    ['Afg', 'AFG'],
                    ['Ago', 'AGO'],
                    ['Aia', 'AIA'],
                    ['Alb', 'ALB'],
                    ['And', 'AND'],
                    ['Ant', 'ANT'],
                    ['Are', 'ARE'],
                    ['Arg', 'ARG'],
                    ['Arm', 'ARM'],
                    ['Asm', 'ASM'],
                    ['Atg', 'ATG'],
                    ['Aus', 'AUS'],
                    ['Aut', 'AUT'],
                    ['Aze', 'AZE'],
                    ['Bdi', 'BDI'],
                    ['Bel', 'BEL'],
                    ['Ben', 'BEN'],
                    ['Bfa', 'BFA'],
                    ['Bgd', 'BGD'],
                    ['Bgr', 'BGR'],
                    ['Bhr', 'BHR'],
                    ['Bhs', 'BHS'],
                    ['Bih', 'BIH'],
                    ['Blr', 'BLR'],
                    ['Blz', 'BLZ'],
                    ['Bmu', 'BMU'],
                    ['Bol', 'BOL'],
                    ['Bra', 'BRA'],
                    ['Brb', 'BRB'],
                    ['Brn', 'BRN'],
                    ['Btn', 'BTN'],
                    ['Bwa', 'BWA'],
                    ['Caf', 'CAF'],
                    ['Can', 'CAN'],
                    ['Che', 'CHE'],
                    ['Chl', 'CHL'],
                    ['Chn', 'CHN'],
                    ['Civ', 'CIV'],
                    ['Cmr', 'CMR'],
                    ['Cod', 'COD'],
                    ['Cog', 'COG'],
                    ['Cok', 'COK'],
                    ['Col', 'COL'],
                    ['Com', 'COM'],
                    ['Cpv', 'CPV'],
                    ['Cri', 'CRI'],
                    ['Cub', 'CUB'],
                    ['Cym', 'CYM'],
                    ['Cyp', 'CYP'],
                    ['Cze', 'CZE'],
                    ['Deu', 'DEU'],
                    ['Dji', 'DJI'],
                    ['Dma', 'DMA'],
                    ['Dnk', 'DNK'],
                    ['Dom', 'DOM'],
                    ['Dza', 'DZA'],
                    ['Ecu', 'ECU'],
                    ['Egy', 'EGY'],
                    ['Eri', 'ERI'],
                    ['Esh', 'ESH'],
                    ['Esp', 'ESP'],
                    ['Est', 'EST'],
                    ['Eth', 'ETH'],
                    ['Fin', 'FIN'],
                    ['Fji', 'FJI'],
                    ['Flk', 'FLK'],
                    ['Fra', 'FRA'],
                    ['Fro', 'FRO'],
                    ['Fsm', 'FSM'],
                    ['Gab', 'GAB'],
                    ['Gbr', 'GBR'],
                    ['Geo', 'GEO'],
                    ['Gha', 'GHA'],
                    ['Gib', 'GIB'],
                    ['Gin', 'GIN'],
                    ['Glp', 'GLP'],
                    ['Gmb', 'GMB'],
                    ['Gnb', 'GNB'],
                    ['Gnq', 'GNQ'],
                    ['Grc', 'GRC'],
                    ['Grd', 'GRD'],
                    ['Grl', 'GRL'],
                    ['Gtm', 'GTM'],
                    ['Guf', 'GUF'],
                    ['Gum', 'GUM'],
                    ['Guy', 'GUY'],
                    ['Hkg', 'HKG'],
                    ['Hnd', 'HND'],
                    ['Hrv', 'HRV'],
                    ['Hti', 'HTI'],
                    ['Hun', 'HUN'],
                    ['Idn', 'IDN'],
                    ['Ind', 'IND'],
                    ['Irl', 'IRL'],
                    ['Irn', 'IRN'],
                    ['Irq', 'IRQ'],
                    ['Isl', 'ISL'],
                    ['Isr', 'ISR'],
                    ['Ita', 'ITA'],
                    ['Jam', 'JAM'],
                    ['Jor', 'JOR'],
                    ['Jpn', 'JPN'],
                    ['Kaz', 'KAZ'],
                    ['Ken', 'KEN'],
                    ['Kgz', 'KGZ'],
                    ['Khm', 'KHM'],
                    ['Kir', 'KIR'],
                    ['Kna', 'KNA'],
                    ['Kor', 'KOR'],
                    ['Kwt', 'KWT'],
                    ['Lao', 'LAO'],
                    ['Lbn', 'LBN'],
                    ['Lbr', 'LBR'],
                    ['Lby', 'LBY'],
                    ['Lca', 'LCA'],
                    ['Lie', 'LIE'],
                    ['Lka', 'LKA'],
                    ['Lso', 'LSO'],
                    ['Ltu', 'LTU'],
                    ['Lux', 'LUX'],
                    ['Lva', 'LVA'],
                    ['Mac', 'MAC'],
                    ['Mar', 'MAR'],
                    ['Mco', 'MCO'],
                    ['Mda', 'MDA'],
                    ['Mdg', 'MDG'],
                    ['Mdv', 'MDV'],
                    ['Mex', 'MEX'],
                    ['Mhl', 'MHL'],
                    ['Mkd', 'MKD'],
                    ['Mli', 'MLI'],
                    ['Mlt', 'MLT'],
                    ['Mmr', 'MMR'],
                    ['Mne', 'MNE'],
                    ['Mng', 'MNG'],
                    ['Mnp', 'MNP'],
                    ['Moz', 'MOZ'],
                    ['Mrt', 'MRT'],
                    ['Msr', 'MSR'],
                    ['Mtq', 'MTQ'],
                    ['Mus', 'MUS'],
                    ['Mwi', 'MWI'],
                    ['Mys', 'MYS'],
                    ['Nam', 'NAM'],
                    ['Ncl', 'NCL'],
                    ['Ner', 'NER'],
                    ['Nfk', 'NFK'],
                    ['Nga', 'NGA'],
                    ['Nic', 'NIC'],
                    ['Niu', 'NIU'],
                    ['Nld', 'NLD'],
                    ['Nor', 'NOR'],
                    ['Npl', 'NPL'],
                    ['Nru', 'NRU'],
                    ['Nzl', 'NZL'],
                    ['Omn', 'OMN'],
                    ['Pak', 'PAK'],
                    ['Pan', 'PAN'],
                    ['Pcn', 'PCN'],
                    ['Per', 'PER'],
                    ['Phl', 'PHL'],
                    ['Plw', 'PLW'],
                    ['Png', 'PNG'],
                    ['Pol', 'POL'],
                    ['Pri', 'PRI'],
                    ['Prk', 'PRK'],
                    ['Prt', 'PRT'],
                    ['Pry', 'PRY'],
                    ['Pse', 'PSE'],
                    ['Pyf', 'PYF'],
                    ['Qat', 'QAT'],
                    ['Reu', 'REU'],
                    ['Rom', 'ROM'],
                    ['Rus', 'RUS'],
                    ['Rwa', 'RWA'],
                    ['Sau', 'SAU'],
                    ['Sdn', 'SDN'],
                    ['Sen', 'SEN'],
                    ['Sgp', 'SGP'],
                    ['Shn', 'SHN'],
                    ['Sjm', 'SJM'],
                    ['Slb', 'SLB'],
                    ['Sle', 'SLE'],
                    ['Slv', 'SLV'],
                    ['Smr', 'SMR'],
                    ['Smx', 'SMX'],
                    ['Som', 'SOM'],
                    ['Spm', 'SPM'],
                    ['Srb', 'SRB'],
                    ['Stp', 'STP'],
                    ['Sur', 'SUR'],
                    ['Svk', 'SVK'],
                    ['Svn', 'SVN'],
                    ['Swe', 'SWE'],
                    ['Swz', 'SWZ'],
                    ['Syc', 'SYC'],
                    ['Syr', 'SYR'],
                    ['Tca', 'TCA'],
                    ['Tcd', 'TCD'],
                    ['Tgo', 'TGO'],
                    ['Tha', 'THA'],
                    ['Tjk', 'TJK'],
                    ['Tkl', 'TKL'],
                    ['Tkm', 'TKM'],
                    ['Tmp', 'TMP'],
                    ['Ton', 'TON'],
                    ['Tto', 'TTO'],
                    ['Tun', 'TUN'],
                    ['Tur', 'TUR'],
                    ['Tuv', 'TUV'],
                    ['Twn', 'TWN'],
                    ['Tza', 'TZA'],
                    ['Uga', 'UGA'],
                    ['Ukr', 'UKR'],
                    ['Ury', 'URY'],
                    ['Usa', 'USA'],
                    ['Uzb', 'UZB'],
                    ['Vat', 'VAT'],
                    ['Vct', 'VCT'],
                    ['Ven', 'VEN'],
                    ['Vgb', 'VGB'],
                    ['Vir', 'VIR'],
                    ['Vnm', 'VNM'],
                    ['Vut', 'VUT'],
                    ['Wlf', 'WLF'],
                    ['Wsm', 'WSM'],
                    ['Yem', 'YEM'],
                    ['Yug', 'YUG'],
                    ['Zaf', 'ZAF'],
                    ['Zmb', 'ZMB'],
                    ['Zwe', 'ZWE'],
                ],
            ],
        ],
        'kontaktperson' => [
            'exclude' => true,
            'label' => 'Kontaktperson',
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
    ],
];