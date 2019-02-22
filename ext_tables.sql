CREATE TABLE tx_openimmotypo3_domain_model_aktion (
	aktionart text DEFAULT '' NOT NULL,
	verwaltung_techn int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_sqlsafealter (
	alter_attr text DEFAULT '' NOT NULL,
	zustand_angaben int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_anbieter (
	anbieternr text DEFAULT '' NOT NULL,
	anhang int(11) unsigned DEFAULT '0' NOT NULL,
	firma text DEFAULT '' NOT NULL,
	immobilie int(11) unsigned DEFAULT '0' NOT NULL,
	impressum text DEFAULT '' NOT NULL,
	impressum_strukt int(11) unsigned DEFAULT '0' NOT NULL,
	lizenzkennung text DEFAULT '' NOT NULL,
	openimmo int(11) unsigned DEFAULT '0' NOT NULL,
	openimmo_anid text DEFAULT '' NOT NULL,
	user_defined_anyfield int(11) unsigned DEFAULT '0' NOT NULL,
	user_defined_extend int(11) unsigned DEFAULT '0' NOT NULL,
	user_defined_simplefield int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_angeschlgastronomie (
	ausstattung int(11) unsigned DEFAULT '0' NOT NULL,
	bar smallint(5) unsigned DEFAULT '0' NOT NULL,
	hotelrestaurant smallint(5) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_anhaenge (
	anhang int(11) unsigned DEFAULT '0' NOT NULL,
	immobilie int(11) unsigned DEFAULT '0' NOT NULL,
	user_defined_anyfield int(11) unsigned DEFAULT '0' NOT NULL,
	user_defined_extend int(11) unsigned DEFAULT '0' NOT NULL,
	user_defined_simplefield int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_anhang (
	anbieter int(11) unsigned DEFAULT '0' NOT NULL,
	anhaenge int(11) unsigned DEFAULT '0' NOT NULL,
	anhangtitel text DEFAULT '' NOT NULL,
	sqlsafe_check int(11) unsigned DEFAULT '0' NOT NULL,
	daten int(11) unsigned DEFAULT '0' NOT NULL,
	format text DEFAULT '' NOT NULL,
	gruppe text DEFAULT '' NOT NULL,
	location text DEFAULT '' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_ausbaustufe (
	ausbauhaus smallint(5) unsigned DEFAULT '0' NOT NULL,
	ausstattung int(11) unsigned DEFAULT '0' NOT NULL,
	bausatzhaus smallint(5) unsigned DEFAULT '0' NOT NULL,
	schluesselfertigmitbodenplatte smallint(5) unsigned DEFAULT '0' NOT NULL,
	schluesselfertigmitkeller smallint(5) unsigned DEFAULT '0' NOT NULL,
	schluesselfertigohnebodenplatte smallint(5) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_ausblick (
	blick text DEFAULT '' NOT NULL,
	infrastruktur int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_ausrichtbalkonterrasse (
	ausstattung int(11) unsigned DEFAULT '0' NOT NULL,
	nord smallint(5) unsigned DEFAULT '0' NOT NULL,
	nordost smallint(5) unsigned DEFAULT '0' NOT NULL,
	nordwest smallint(5) unsigned DEFAULT '0' NOT NULL,
	ost smallint(5) unsigned DEFAULT '0' NOT NULL,
	sued smallint(5) unsigned DEFAULT '0' NOT NULL,
	suedost smallint(5) unsigned DEFAULT '0' NOT NULL,
	suedwest smallint(5) unsigned DEFAULT '0' NOT NULL,
	west smallint(5) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_aussencourtage (
	mit_mwst smallint(5) unsigned DEFAULT '0' NOT NULL,
	preise int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_ausstattung (
	abstellraum smallint(5) unsigned DEFAULT '0' NOT NULL,
	angeschl_gastronomie int(11) unsigned DEFAULT '0' NOT NULL,
	ausbaustufe int(11) unsigned DEFAULT '0' NOT NULL,
	ausricht_balkon_terrasse int(11) unsigned DEFAULT '0' NOT NULL,
	ausstatt_kategorie text DEFAULT '' NOT NULL,
	bad int(11) unsigned DEFAULT '0' NOT NULL,
	barrierefrei smallint(5) unsigned DEFAULT '0' NOT NULL,
	bauweise int(11) unsigned DEFAULT '0' NOT NULL,
	befeuerung int(11) unsigned DEFAULT '0' NOT NULL,
	bibliothek smallint(5) unsigned DEFAULT '0' NOT NULL,
	boden int(11) unsigned DEFAULT '0' NOT NULL,
	brauereibindung smallint(5) unsigned DEFAULT '0' NOT NULL,
	breitband_zugang int(11) unsigned DEFAULT '0' NOT NULL,
	dachboden smallint(5) unsigned DEFAULT '0' NOT NULL,
	dachform int(11) unsigned DEFAULT '0' NOT NULL,
	dvbt smallint(5) unsigned DEFAULT '0' NOT NULL,
	dv_verkabelung smallint(5) unsigned DEFAULT '0' NOT NULL,
	energietyp int(11) unsigned DEFAULT '0' NOT NULL,
	fahrradraum smallint(5) unsigned DEFAULT '0' NOT NULL,
	fahrstuhl int(11) unsigned DEFAULT '0' NOT NULL,
	gaestewc smallint(5) unsigned DEFAULT '0' NOT NULL,
	gartennutzung smallint(5) unsigned DEFAULT '0' NOT NULL,
	gastterrasse smallint(5) unsigned DEFAULT '0' NOT NULL,
	hallenhoehe double(11,2) DEFAULT '0.00' NOT NULL,
	hebebuehne smallint(5) unsigned DEFAULT '0' NOT NULL,
	heizungsart int(11) unsigned DEFAULT '0' NOT NULL,
	immobilie int(11) unsigned DEFAULT '0' NOT NULL,
	kabelkanaele smallint(5) unsigned DEFAULT '0' NOT NULL,
	kabel_sat_tv smallint(5) unsigned DEFAULT '0' NOT NULL,
	kamin smallint(5) unsigned DEFAULT '0' NOT NULL,
	kantine_cafeteria smallint(5) unsigned DEFAULT '0' NOT NULL,
	klimatisiert smallint(5) unsigned DEFAULT '0' NOT NULL,
	kran smallint(5) unsigned DEFAULT '0' NOT NULL,
	kueche int(11) unsigned DEFAULT '0' NOT NULL,
	moebliert int(11) unsigned DEFAULT '0' NOT NULL,
	raeume_veraenderbar smallint(5) unsigned DEFAULT '0' NOT NULL,
	rampe smallint(5) unsigned DEFAULT '0' NOT NULL,
	rolladen smallint(5) unsigned DEFAULT '0' NOT NULL,
	rollstuhlgerecht smallint(5) unsigned DEFAULT '0' NOT NULL,
	sauna smallint(5) unsigned DEFAULT '0' NOT NULL,
	seniorengerecht smallint(5) unsigned DEFAULT '0' NOT NULL,
	serviceleistungen int(11) unsigned DEFAULT '0' NOT NULL,
	sicherheitstechnik int(11) unsigned DEFAULT '0' NOT NULL,
	sporteinrichtungen smallint(5) unsigned DEFAULT '0' NOT NULL,
	stellplatzart int(11) unsigned DEFAULT '0' NOT NULL,
	stromanschlusswert text DEFAULT '' NOT NULL,
	swimmingpool smallint(5) unsigned DEFAULT '0' NOT NULL,
	teekueche smallint(5) unsigned DEFAULT '0' NOT NULL,
	telefon_ferienimmobilie smallint(5) unsigned DEFAULT '0' NOT NULL,
	umts_empfang smallint(5) unsigned DEFAULT '0' NOT NULL,
	unterkellert int(11) unsigned DEFAULT '0' NOT NULL,
	user_defined_anyfield int(11) unsigned DEFAULT '0' NOT NULL,
	user_defined_extend int(11) unsigned DEFAULT '0' NOT NULL,
	user_defined_simplefield int(11) unsigned DEFAULT '0' NOT NULL,
	wasch_trockenraum smallint(5) unsigned DEFAULT '0' NOT NULL,
	wellnessbereich smallint(5) unsigned DEFAULT '0' NOT NULL,
	wg_geeignet smallint(5) unsigned DEFAULT '0' NOT NULL,
	wintergarten smallint(5) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_bad (
	ausstattung int(11) unsigned DEFAULT '0' NOT NULL,
	bidet smallint(5) unsigned DEFAULT '0' NOT NULL,
	dusche smallint(5) unsigned DEFAULT '0' NOT NULL,
	fenster smallint(5) unsigned DEFAULT '0' NOT NULL,
	pissoir smallint(5) unsigned DEFAULT '0' NOT NULL,
	wanne smallint(5) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_bauweise (
	ausstattung int(11) unsigned DEFAULT '0' NOT NULL,
	fertigteile smallint(5) unsigned DEFAULT '0' NOT NULL,
	holz smallint(5) unsigned DEFAULT '0' NOT NULL,
	massiv smallint(5) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_bebaubarnach (
	bebaubar_attr text DEFAULT '' NOT NULL,
	zustand_angaben int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_befeuerung (
	alternativ smallint(5) unsigned DEFAULT '0' NOT NULL,
	ausstattung int(11) unsigned DEFAULT '0' NOT NULL,
	block smallint(5) unsigned DEFAULT '0' NOT NULL,
	elektro smallint(5) unsigned DEFAULT '0' NOT NULL,
	erdwaerme smallint(5) unsigned DEFAULT '0' NOT NULL,
	fern smallint(5) unsigned DEFAULT '0' NOT NULL,
	fluessiggas smallint(5) unsigned DEFAULT '0' NOT NULL,
	gas smallint(5) unsigned DEFAULT '0' NOT NULL,
	holz smallint(5) unsigned DEFAULT '0' NOT NULL,
	kohle smallint(5) unsigned DEFAULT '0' NOT NULL,
	luftwp smallint(5) unsigned DEFAULT '0' NOT NULL,
	oel smallint(5) unsigned DEFAULT '0' NOT NULL,
	pellet smallint(5) unsigned DEFAULT '0' NOT NULL,
	solar smallint(5) unsigned DEFAULT '0' NOT NULL,
	wasser_elektro smallint(5) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_betriebskostennetto (
	betriebskostenust double(11,2) DEFAULT '0.00' NOT NULL,
	preise int(11) unsigned DEFAULT '0' NOT NULL,
	value double(11,2) DEFAULT '0.00' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_bewertung (
	feld text DEFAULT '' NOT NULL,
	immobilie int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_bieterverfahren (
	beginn_angebotsphase datetime DEFAULT NULL,
	beginn_bietzeit int(11) unsigned DEFAULT '0' NOT NULL,
	besichtigungstermin datetime DEFAULT NULL,
	besichtigungstermin2 datetime DEFAULT NULL,
	ende_bietzeit datetime DEFAULT NULL,
	hoechstgebot_zeigen smallint(5) unsigned DEFAULT '0' NOT NULL,
	immobilie int(11) unsigned DEFAULT '0' NOT NULL,
	mindestpreis double(11,2) DEFAULT '0.00' NOT NULL,
	user_defined_anyfield int(11) unsigned DEFAULT '0' NOT NULL,
	user_defined_extend int(11) unsigned DEFAULT '0' NOT NULL,
	user_defined_simplefield int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_boden (
	ausstattung int(11) unsigned DEFAULT '0' NOT NULL,
	dielen smallint(5) unsigned DEFAULT '0' NOT NULL,
	doppelboden smallint(5) unsigned DEFAULT '0' NOT NULL,
	estrich smallint(5) unsigned DEFAULT '0' NOT NULL,
	fertigparkett smallint(5) unsigned DEFAULT '0' NOT NULL,
	fliesen smallint(5) unsigned DEFAULT '0' NOT NULL,
	granit smallint(5) unsigned DEFAULT '0' NOT NULL,
	kunststoff smallint(5) unsigned DEFAULT '0' NOT NULL,
	laminat smallint(5) unsigned DEFAULT '0' NOT NULL,
	linoleum smallint(5) unsigned DEFAULT '0' NOT NULL,
	marmor smallint(5) unsigned DEFAULT '0' NOT NULL,
	parkett smallint(5) unsigned DEFAULT '0' NOT NULL,
	stein smallint(5) unsigned DEFAULT '0' NOT NULL,
	teppich smallint(5) unsigned DEFAULT '0' NOT NULL,
	terrakotta smallint(5) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_breitbandzugang (
	art text DEFAULT '' NOT NULL,
	ausstattung int(11) unsigned DEFAULT '0' NOT NULL,
	speed double(11,2) DEFAULT '0.00' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_bueropraxen (
	buero_typ text DEFAULT '' NOT NULL,
	objektart int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_sqlsafecheck (
	anhang int(11) unsigned DEFAULT '0' NOT NULL,
	ctype text DEFAULT '' NOT NULL,
	value int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_dachform (
	ausstattung int(11) unsigned DEFAULT '0' NOT NULL,
	flachdach smallint(5) unsigned DEFAULT '0' NOT NULL,
	krueppelwalmdach smallint(5) unsigned DEFAULT '0' NOT NULL,
	mansarddach smallint(5) unsigned DEFAULT '0' NOT NULL,
	pultdach smallint(5) unsigned DEFAULT '0' NOT NULL,
	pyramidendach smallint(5) unsigned DEFAULT '0' NOT NULL,
	satteldach smallint(5) unsigned DEFAULT '0' NOT NULL,
	walmdach smallint(5) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_daten (
	anhang int(11) unsigned DEFAULT '0' NOT NULL,
	anhanginhalt text DEFAULT '' NOT NULL,
	foto int(11) unsigned DEFAULT '0' NOT NULL,
	pfad text DEFAULT '' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_distanzen (
	distanz_zu text DEFAULT '' NOT NULL,
	infrastruktur int(11) unsigned DEFAULT '0' NOT NULL,
	value double(11,2) DEFAULT '0.00' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_distanzensport (
	distanz_zu_sport text DEFAULT '' NOT NULL,
	infrastruktur int(11) unsigned DEFAULT '0' NOT NULL,
	value double(11,2) DEFAULT '0.00' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_einzelhandel (
	handel_typ text DEFAULT '' NOT NULL,
	objektart int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_emailsonstige (
	bemerkung text DEFAULT '' NOT NULL,
	emailart text DEFAULT '' NOT NULL,
	kontaktperson int(11) unsigned DEFAULT '0' NOT NULL,
	value text DEFAULT '' NOT NULL,
	weitere_adresse int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_energiepass (
	ausstelldatum datetime DEFAULT NULL,
	baujahr text DEFAULT '' NOT NULL,
	endenergiebedarf text DEFAULT '' NOT NULL,
	energieverbrauchkennwert text DEFAULT '' NOT NULL,
	epart text DEFAULT '' NOT NULL,
	epasstext text DEFAULT '' NOT NULL,
	fgeeklasse text DEFAULT '' NOT NULL,
	fgeewert text DEFAULT '' NOT NULL,
	gebaeudeart text DEFAULT '' NOT NULL,
	geg2018 text DEFAULT '' NOT NULL,
	gueltig_bis text DEFAULT '' NOT NULL,
	hwbklasse text DEFAULT '' NOT NULL,
	hwbwert text DEFAULT '' NOT NULL,
	jahrgang text DEFAULT '' NOT NULL,
	mitwarmwasser smallint(5) unsigned DEFAULT '0' NOT NULL,
	primaerenergietraeger text DEFAULT '' NOT NULL,
	stromwert text DEFAULT '' NOT NULL,
	waermewert text DEFAULT '' NOT NULL,
	wertklasse text DEFAULT '' NOT NULL,
	zustand_angaben int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_energietyp (
	ausstattung int(11) unsigned DEFAULT '0' NOT NULL,
	kfw40 smallint(5) unsigned DEFAULT '0' NOT NULL,
	kfw55 smallint(5) unsigned DEFAULT '0' NOT NULL,
	kfw60 smallint(5) unsigned DEFAULT '0' NOT NULL,
	kfw70 smallint(5) unsigned DEFAULT '0' NOT NULL,
	minergiebauweise smallint(5) unsigned DEFAULT '0' NOT NULL,
	minergie_zertifiziert smallint(5) unsigned DEFAULT '0' NOT NULL,
	neubaustandard smallint(5) unsigned DEFAULT '0' NOT NULL,
	niedrigenergie smallint(5) unsigned DEFAULT '0' NOT NULL,
	passivhaus smallint(5) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_erschliessung (
	erschl_attr text DEFAULT '' NOT NULL,
	zustand_angaben int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_erschliessungumfang (
	erschl_attr text DEFAULT '' NOT NULL,
	zustand_angaben int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_evbnetto (
	evbust double(11,2) DEFAULT '0.00' NOT NULL,
	preise int(11) unsigned DEFAULT '0' NOT NULL,
	value double(11,2) DEFAULT '0.00' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_fahrstuhl (
	ausstattung int(11) unsigned DEFAULT '0' NOT NULL,
	lasten smallint(5) unsigned DEFAULT '0' NOT NULL,
	personen smallint(5) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_flaechen (
	anzahl_badezimmer double(11,2) DEFAULT '0.00' NOT NULL,
	anzahl_balkone double(11,2) DEFAULT '0.00' NOT NULL,
	anzahl_betten double(11,2) DEFAULT '0.00' NOT NULL,
	anzahl_gewerbeeinheiten double(11,2) DEFAULT '0.00' NOT NULL,
	anzahl_logia double(11,2) DEFAULT '0.00' NOT NULL,
	anzahl_schlafzimmer double(11,2) DEFAULT '0.00' NOT NULL,
	anzahl_sep_wc double(11,2) DEFAULT '0.00' NOT NULL,
	anzahl_stellplaetze int(11) unsigned DEFAULT '0' NOT NULL,
	anzahl_tagungsraeume double(11,2) DEFAULT '0.00' NOT NULL,
	anzahl_terrassen double(11,2) DEFAULT '0.00' NOT NULL,
	anzahl_wohneinheiten double(11,2) DEFAULT '0.00' NOT NULL,
	anzahl_wohn_schlafzimmer double(11,2) DEFAULT '0.00' NOT NULL,
	anzahl_zimmer double(11,2) DEFAULT '0.00' NOT NULL,
	ausnuetzungsziffer double(11,2) DEFAULT '0.00' NOT NULL,
	balkon_terrasse_flaeche double(11,2) DEFAULT '0.00' NOT NULL,
	beheizbare_flaeche double(11,2) DEFAULT '0.00' NOT NULL,
	bgf text DEFAULT '' NOT NULL,
	bmz text DEFAULT '' NOT NULL,
	bueroflaeche double(11,2) DEFAULT '0.00' NOT NULL,
	bueroteilflaeche double(11,2) DEFAULT '0.00' NOT NULL,
	dachbodenflaeche double(11,2) DEFAULT '0.00' NOT NULL,
	einliegerwohnung smallint(5) unsigned DEFAULT '0' NOT NULL,
	fensterfront double(11,2) DEFAULT '0.00' NOT NULL,
	fensterfront_qm double(11,2) DEFAULT '0.00' NOT NULL,
	flaechebis double(11,2) DEFAULT '0.00' NOT NULL,
	flaechevon double(11,2) DEFAULT '0.00' NOT NULL,
	freiflaeche double(11,2) DEFAULT '0.00' NOT NULL,
	gartenflaeche double(11,2) DEFAULT '0.00' NOT NULL,
	gastroflaeche double(11,2) DEFAULT '0.00' NOT NULL,
	gesamtflaeche double(11,2) DEFAULT '0.00' NOT NULL,
	gfz text DEFAULT '' NOT NULL,
	grundstuecksflaeche double(11,2) DEFAULT '0.00' NOT NULL,
	grundstuecksfront double(11,2) DEFAULT '0.00' NOT NULL,
	grz text DEFAULT '' NOT NULL,
	immobilie int(11) unsigned DEFAULT '0' NOT NULL,
	kellerflaeche double(11,2) DEFAULT '0.00' NOT NULL,
	kubatur double(11,2) DEFAULT '0.00' NOT NULL,
	ladenflaeche double(11,2) DEFAULT '0.00' NOT NULL,
	lagerflaeche double(11,2) DEFAULT '0.00' NOT NULL,
	nutzflaeche double(11,2) DEFAULT '0.00' NOT NULL,
	plaetze_gastraum double(11,2) DEFAULT '0.00' NOT NULL,
	sonstflaeche double(11,2) DEFAULT '0.00' NOT NULL,
	teilbar_ab double(11,2) DEFAULT '0.00' NOT NULL,
	user_defined_anyfield int(11) unsigned DEFAULT '0' NOT NULL,
	user_defined_extend int(11) unsigned DEFAULT '0' NOT NULL,
	user_defined_simplefield int(11) unsigned DEFAULT '0' NOT NULL,
	verkaufsflaeche double(11,2) DEFAULT '0.00' NOT NULL,
	vermietbare_flaeche double(11,2) DEFAULT '0.00' NOT NULL,
	verwaltungsflaeche double(11,2) DEFAULT '0.00' NOT NULL,
	wohnflaeche double(11,2) DEFAULT '0.00' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_foto (
	daten int(11) unsigned DEFAULT '0' NOT NULL,
	format text DEFAULT '' NOT NULL,
	kontaktperson int(11) unsigned DEFAULT '0' NOT NULL,
	location text DEFAULT '' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_freitexte (
	ausstatt_beschr text DEFAULT '' NOT NULL,
	dreizeiler text DEFAULT '' NOT NULL,
	immobilie int(11) unsigned DEFAULT '0' NOT NULL,
	lage text DEFAULT '' NOT NULL,
	objektbeschreibung text DEFAULT '' NOT NULL,
	objekt_text int(11) unsigned DEFAULT '0' NOT NULL,
	objekttitel text DEFAULT '' NOT NULL,
	sonstige_angaben text DEFAULT '' NOT NULL,
	user_defined_anyfield int(11) unsigned DEFAULT '0' NOT NULL,
	user_defined_extend int(11) unsigned DEFAULT '0' NOT NULL,
	user_defined_simplefield int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_freizeitimmobiliegewerblich (
	freizeit_typ text DEFAULT '' NOT NULL,
	objektart int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_gastgewerbe (
	gastgew_typ text DEFAULT '' NOT NULL,
	objektart int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_geo (
	anzahl_etagen int(11) unsigned DEFAULT '0' NOT NULL,
	bundesland text DEFAULT '' NOT NULL,
	etage int(11) unsigned DEFAULT '0' NOT NULL,
	flur text DEFAULT '' NOT NULL,
	flurstueck text DEFAULT '' NOT NULL,
	gemarkung text DEFAULT '' NOT NULL,
	gemeindecode text DEFAULT '' NOT NULL,
	geokoordinaten int(11) unsigned DEFAULT '0' NOT NULL,
	hausnummer text DEFAULT '' NOT NULL,
	immobilie int(11) unsigned DEFAULT '0' NOT NULL,
	karten_makro smallint(5) unsigned DEFAULT '0' NOT NULL,
	karten_mikro smallint(5) unsigned DEFAULT '0' NOT NULL,
	lage_gebiet int(11) unsigned DEFAULT '0' NOT NULL,
	lage_im_bau int(11) unsigned DEFAULT '0' NOT NULL,
	land int(11) unsigned DEFAULT '0' NOT NULL,
	luftbildern smallint(5) unsigned DEFAULT '0' NOT NULL,
	ort text DEFAULT '' NOT NULL,
	plz text DEFAULT '' NOT NULL,
	regionaler_zusatz text DEFAULT '' NOT NULL,
	strasse text DEFAULT '' NOT NULL,
	user_defined_anyfield int(11) unsigned DEFAULT '0' NOT NULL,
	user_defined_extend int(11) unsigned DEFAULT '0' NOT NULL,
	user_defined_simplefield int(11) unsigned DEFAULT '0' NOT NULL,
	virtuelletour smallint(5) unsigned DEFAULT '0' NOT NULL,
	wohnungsnr text DEFAULT '' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_geokoordinaten (
	breitengrad double(11,2) DEFAULT '0.00' NOT NULL,
	geo int(11) unsigned DEFAULT '0' NOT NULL,
	laengengrad double(11,2) DEFAULT '0.00' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_gesamtbelastungnetto (
	gesamtbelastungust double(11,2) DEFAULT '0.00' NOT NULL,
	preise int(11) unsigned DEFAULT '0' NOT NULL,
	value double(11,2) DEFAULT '0.00' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_gesamtkostenprom2von (
	gesamtkostenprom2bis double(11,2) DEFAULT '0.00' NOT NULL,
	preise int(11) unsigned DEFAULT '0' NOT NULL,
	value double(11,2) DEFAULT '0.00' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_gesamtmietenetto (
	gesamtmieteust double(11,2) DEFAULT '0.00' NOT NULL,
	preise int(11) unsigned DEFAULT '0' NOT NULL,
	value double(11,2) DEFAULT '0.00' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_geschlecht (
	geschl_attr text DEFAULT '' NOT NULL,
	verwaltung_objekt int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_grundstueck (
	grundst_typ text DEFAULT '' NOT NULL,
	objektart int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_hallenlagerprod (
	hallen_typ text DEFAULT '' NOT NULL,
	objektart int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_hauptmietzinsnetto (
	hauptmietzinsust double(11,2) DEFAULT '0.00' NOT NULL,
	preise int(11) unsigned DEFAULT '0' NOT NULL,
	value double(11,2) DEFAULT '0.00' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_haus (
	haustyp text DEFAULT '' NOT NULL,
	objektart int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_heizkostennetto (
	heizkostenust double(11,2) DEFAULT '0.00' NOT NULL,
	preise int(11) unsigned DEFAULT '0' NOT NULL,
	value double(11,2) DEFAULT '0.00' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_heizungsart (
	ausstattung int(11) unsigned DEFAULT '0' NOT NULL,
	etage smallint(5) unsigned DEFAULT '0' NOT NULL,
	fern smallint(5) unsigned DEFAULT '0' NOT NULL,
	fussboden smallint(5) unsigned DEFAULT '0' NOT NULL,
	ofen smallint(5) unsigned DEFAULT '0' NOT NULL,
	zentral smallint(5) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_immobilie (
	anbieter int(11) unsigned DEFAULT '0' NOT NULL,
	anhaenge int(11) unsigned DEFAULT '0' NOT NULL,
	ausstattung int(11) unsigned DEFAULT '0' NOT NULL,
	bewertung int(11) unsigned DEFAULT '0' NOT NULL,
	bieterverfahren int(11) unsigned DEFAULT '0' NOT NULL,
	flaechen int(11) unsigned DEFAULT '0' NOT NULL,
	freitexte int(11) unsigned DEFAULT '0' NOT NULL,
	geo int(11) unsigned DEFAULT '0' NOT NULL,
	infrastruktur int(11) unsigned DEFAULT '0' NOT NULL,
	kontaktperson int(11) unsigned DEFAULT '0' NOT NULL,
	objektkategorie int(11) unsigned DEFAULT '0' NOT NULL,
	preise int(11) unsigned DEFAULT '0' NOT NULL,
	user_defined_anyfield int(11) unsigned DEFAULT '0' NOT NULL,
	user_defined_extend int(11) unsigned DEFAULT '0' NOT NULL,
	user_defined_simplefield int(11) unsigned DEFAULT '0' NOT NULL,
	versteigerung int(11) unsigned DEFAULT '0' NOT NULL,
	verwaltung_objekt int(11) unsigned DEFAULT '0' NOT NULL,
	verwaltung_techn int(11) unsigned DEFAULT '0' NOT NULL,
	weitere_adresse int(11) unsigned DEFAULT '0' NOT NULL,
	zustand_angaben int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_impressumstrukt (
	anbieter int(11) unsigned DEFAULT '0' NOT NULL,
	berufsaufsichtsbehoerde text DEFAULT '' NOT NULL,
	firmenanschrift text DEFAULT '' NOT NULL,
	firmenname text DEFAULT '' NOT NULL,
	handelsregister text DEFAULT '' NOT NULL,
	handelsregister_nr text DEFAULT '' NOT NULL,
	steuernummer text DEFAULT '' NOT NULL,
	telefon text DEFAULT '' NOT NULL,
	umsst_id text DEFAULT '' NOT NULL,
	vertretungsberechtigter text DEFAULT '' NOT NULL,
	weiteres text DEFAULT '' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_infrastruktur (
	ausblick int(11) unsigned DEFAULT '0' NOT NULL,
	distanzen int(11) unsigned DEFAULT '0' NOT NULL,
	distanzen_sport int(11) unsigned DEFAULT '0' NOT NULL,
	immobilie int(11) unsigned DEFAULT '0' NOT NULL,
	user_defined_anyfield int(11) unsigned DEFAULT '0' NOT NULL,
	user_defined_extend int(11) unsigned DEFAULT '0' NOT NULL,
	user_defined_simplefield int(11) unsigned DEFAULT '0' NOT NULL,
	zulieferung smallint(5) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_innencourtage (
	mit_mwst smallint(5) unsigned DEFAULT '0' NOT NULL,
	preise int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_kaufpreis (
	auf_anfrage smallint(5) unsigned DEFAULT '0' NOT NULL,
	preise int(11) unsigned DEFAULT '0' NOT NULL,
	value double(11,2) DEFAULT '0.00' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_kaufpreisnetto (
	kaufpreisust double(11,2) DEFAULT '0.00' NOT NULL,
	preise int(11) unsigned DEFAULT '0' NOT NULL,
	value double(11,2) DEFAULT '0.00' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_kontaktperson (
	adressfreigabe smallint(5) unsigned DEFAULT '0' NOT NULL,
	anrede text DEFAULT '' NOT NULL,
	anrede_brief text DEFAULT '' NOT NULL,
	email_direkt text DEFAULT '' NOT NULL,
	email_feedback text DEFAULT '' NOT NULL,
	email_privat text DEFAULT '' NOT NULL,
	email_sonstige int(11) unsigned DEFAULT '0' NOT NULL,
	email_zentrale text DEFAULT '' NOT NULL,
	firma text DEFAULT '' NOT NULL,
	foto int(11) unsigned DEFAULT '0' NOT NULL,
	freitextfeld text DEFAULT '' NOT NULL,
	hausnummer text DEFAULT '' NOT NULL,
	immobilie int(11) unsigned DEFAULT '0' NOT NULL,
	immobilientreuhaenderid text DEFAULT '' NOT NULL,
	land int(11) unsigned DEFAULT '0' NOT NULL,
	name text DEFAULT '' NOT NULL,
	ort text DEFAULT '' NOT NULL,
	personennummer text DEFAULT '' NOT NULL,
	plz text DEFAULT '' NOT NULL,
	position text DEFAULT '' NOT NULL,
	postfach text DEFAULT '' NOT NULL,
	postf_ort text DEFAULT '' NOT NULL,
	postf_plz text DEFAULT '' NOT NULL,
	referenz_id text DEFAULT '' NOT NULL,
	strasse text DEFAULT '' NOT NULL,
	tel_durchw text DEFAULT '' NOT NULL,
	tel_fax text DEFAULT '' NOT NULL,
	tel_handy text DEFAULT '' NOT NULL,
	tel_privat text DEFAULT '' NOT NULL,
	tel_sonstige int(11) unsigned DEFAULT '0' NOT NULL,
	tel_zentrale text DEFAULT '' NOT NULL,
	titel text DEFAULT '' NOT NULL,
	url text DEFAULT '' NOT NULL,
	user_defined_anyfield int(11) unsigned DEFAULT '0' NOT NULL,
	user_defined_extend int(11) unsigned DEFAULT '0' NOT NULL,
	user_defined_simplefield int(11) unsigned DEFAULT '0' NOT NULL,
	vorname text DEFAULT '' NOT NULL,
	zusatzfeld text DEFAULT '' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_kueche (
	ausstattung int(11) unsigned DEFAULT '0' NOT NULL,
	ebk smallint(5) unsigned DEFAULT '0' NOT NULL,
	offen smallint(5) unsigned DEFAULT '0' NOT NULL,
	pantry smallint(5) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_lagegebiet (
	gebiete text DEFAULT '' NOT NULL,
	geo int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_lageimbau (
	geo int(11) unsigned DEFAULT '0' NOT NULL,
	hinten smallint(5) unsigned DEFAULT '0' NOT NULL,
	links smallint(5) unsigned DEFAULT '0' NOT NULL,
	rechts smallint(5) unsigned DEFAULT '0' NOT NULL,
	vorne smallint(5) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_land (
	geo int(11) unsigned DEFAULT '0' NOT NULL,
	iso_land text DEFAULT '' NOT NULL,
	kontaktperson int(11) unsigned DEFAULT '0' NOT NULL,
	weitere_adresse int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_landundforstwirtschaft (
	land_typ text DEFAULT '' NOT NULL,
	objektart int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_master (
	verwaltung_techn int(11) unsigned DEFAULT '0' NOT NULL,
	visible smallint(5) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_maxmietdauer (
	max_dauer text DEFAULT '' NOT NULL,
	verwaltung_objekt int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_mieteinnahmenist (
	periode text DEFAULT '' NOT NULL,
	preise int(11) unsigned DEFAULT '0' NOT NULL,
	value double(11,2) DEFAULT '0.00' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_mieteinnahmensoll (
	periode text DEFAULT '' NOT NULL,
	preise int(11) unsigned DEFAULT '0' NOT NULL,
	value double(11,2) DEFAULT '0.00' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_minmietdauer (
	min_dauer text DEFAULT '' NOT NULL,
	verwaltung_objekt int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_moebliert (
	ausstattung int(11) unsigned DEFAULT '0' NOT NULL,
	moeb text DEFAULT '' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_monatlichekostennetto (
	monatlichekostenust double(11,2) DEFAULT '0.00' NOT NULL,
	preise int(11) unsigned DEFAULT '0' NOT NULL,
	value double(11,2) DEFAULT '0.00' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_nebenkostenprom2von (
	nebenkostenprom2bis double(11,2) DEFAULT '0.00' NOT NULL,
	preise int(11) unsigned DEFAULT '0' NOT NULL,
	value double(11,2) DEFAULT '0.00' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_nettomieteprom2von (
	nettomieteprom2bis double(11,2) DEFAULT '0.00' NOT NULL,
	preise int(11) unsigned DEFAULT '0' NOT NULL,
	value double(11,2) DEFAULT '0.00' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_nutzungsart (
	anlage smallint(5) unsigned DEFAULT '0' NOT NULL,
	gewerbe smallint(5) unsigned DEFAULT '0' NOT NULL,
	objektkategorie int(11) unsigned DEFAULT '0' NOT NULL,
	waz smallint(5) unsigned DEFAULT '0' NOT NULL,
	wohnen smallint(5) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_objekttext (
	freitexte int(11) unsigned DEFAULT '0' NOT NULL,
	lang text DEFAULT '' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_objektart (
	buero_praxen int(11) unsigned DEFAULT '0' NOT NULL,
	einzelhandel int(11) unsigned DEFAULT '0' NOT NULL,
	freizeitimmobilie_gewerblich int(11) unsigned DEFAULT '0' NOT NULL,
	gastgewerbe int(11) unsigned DEFAULT '0' NOT NULL,
	grundstueck int(11) unsigned DEFAULT '0' NOT NULL,
	hallen_lager_prod int(11) unsigned DEFAULT '0' NOT NULL,
	haus int(11) unsigned DEFAULT '0' NOT NULL,
	land_und_forstwirtschaft int(11) unsigned DEFAULT '0' NOT NULL,
	objektart_zusatz text DEFAULT '' NOT NULL,
	objektkategorie int(11) unsigned DEFAULT '0' NOT NULL,
	parken int(11) unsigned DEFAULT '0' NOT NULL,
	sonstige int(11) unsigned DEFAULT '0' NOT NULL,
	wohnung int(11) unsigned DEFAULT '0' NOT NULL,
	zimmer int(11) unsigned DEFAULT '0' NOT NULL,
	zinshaus_renditeobjekt int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_objektkategorie (
	immobilie int(11) unsigned DEFAULT '0' NOT NULL,
	nutzungsart int(11) unsigned DEFAULT '0' NOT NULL,
	objektart int(11) unsigned DEFAULT '0' NOT NULL,
	user_defined_anyfield int(11) unsigned DEFAULT '0' NOT NULL,
	user_defined_extend int(11) unsigned DEFAULT '0' NOT NULL,
	user_defined_simplefield int(11) unsigned DEFAULT '0' NOT NULL,
	vermarktungsart int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_parken (
	objektart int(11) unsigned DEFAULT '0' NOT NULL,
	parken_typ text DEFAULT '' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_preiszeiteinheit (
	preise int(11) unsigned DEFAULT '0' NOT NULL,
	zeiteinheit text DEFAULT '' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_preise (
	abstand double(11,2) DEFAULT '0.00' NOT NULL,
	aussen_courtage int(11) unsigned DEFAULT '0' NOT NULL,
	betriebskostennetto int(11) unsigned DEFAULT '0' NOT NULL,
	courtage_hinweis text DEFAULT '' NOT NULL,
	erbpacht double(11,2) DEFAULT '0.00' NOT NULL,
	erschliessungskosten double(11,2) DEFAULT '0.00' NOT NULL,
	evbnetto int(11) unsigned DEFAULT '0' NOT NULL,
	freitext_preis text DEFAULT '' NOT NULL,
	gesamtbelastungbrutto double(11,2) DEFAULT '0.00' NOT NULL,
	gesamtbelastungnetto int(11) unsigned DEFAULT '0' NOT NULL,
	gesamtkostenprom2von int(11) unsigned DEFAULT '0' NOT NULL,
	gesamtmietebrutto double(11,2) DEFAULT '0.00' NOT NULL,
	gesamtmietenetto int(11) unsigned DEFAULT '0' NOT NULL,
	geschaeftsguthaben double(11,2) DEFAULT '0.00' NOT NULL,
	hauptmietzinsnetto int(11) unsigned DEFAULT '0' NOT NULL,
	hausgeld double(11,2) DEFAULT '0.00' NOT NULL,
	heizkosten double(11,2) DEFAULT '0.00' NOT NULL,
	heizkosten_enthalten smallint(5) unsigned DEFAULT '0' NOT NULL,
	heizkostennetto int(11) unsigned DEFAULT '0' NOT NULL,
	immobilie int(11) unsigned DEFAULT '0' NOT NULL,
	innen_courtage int(11) unsigned DEFAULT '0' NOT NULL,
	kaltmiete double(11,2) DEFAULT '0.00' NOT NULL,
	kaufpreis int(11) unsigned DEFAULT '0' NOT NULL,
	kaufpreisbrutto double(11,2) DEFAULT '0.00' NOT NULL,
	kaufpreisnetto int(11) unsigned DEFAULT '0' NOT NULL,
	kaufpreis_pro_qm double(11,2) DEFAULT '0.00' NOT NULL,
	kaution double(11,2) DEFAULT '0.00' NOT NULL,
	kaution_text text DEFAULT '' NOT NULL,
	mieteinnahmen_ist int(11) unsigned DEFAULT '0' NOT NULL,
	mieteinnahmen_soll int(11) unsigned DEFAULT '0' NOT NULL,
	mietpreis_pro_qm double(11,2) DEFAULT '0.00' NOT NULL,
	mietzuschlaege double(11,2) DEFAULT '0.00' NOT NULL,
	monatlichekostenbrutto double(11,2) DEFAULT '0.00' NOT NULL,
	monatlichekostennetto int(11) unsigned DEFAULT '0' NOT NULL,
	mwst_gesamt double(11,2) DEFAULT '0.00' NOT NULL,
	mwst_satz double(11,2) DEFAULT '0.00' NOT NULL,
	nebenkosten double(11,2) DEFAULT '0.00' NOT NULL,
	nebenkostenprom2von int(11) unsigned DEFAULT '0' NOT NULL,
	nettokaltmiete double(11,2) DEFAULT '0.00' NOT NULL,
	nettomieteprom2von int(11) unsigned DEFAULT '0' NOT NULL,
	nettorendite double(11,2) DEFAULT '0.00' NOT NULL,
	nettorendite_ist double(11,2) DEFAULT '0.00' NOT NULL,
	nettorendite_soll double(11,2) DEFAULT '0.00' NOT NULL,
	pacht double(11,2) DEFAULT '0.00' NOT NULL,
	pauschalmiete double(11,2) DEFAULT '0.00' NOT NULL,
	preis_zeiteinheit int(11) unsigned DEFAULT '0' NOT NULL,
	preis_zeitraum_bis datetime DEFAULT NULL,
	preis_zeitraum_von datetime DEFAULT NULL,
	provisionbrutto double(11,2) DEFAULT '0.00' NOT NULL,
	provisionnetto int(11) unsigned DEFAULT '0' NOT NULL,
	provisionspflichtig smallint(5) unsigned DEFAULT '0' NOT NULL,
	provision_teilen int(11) unsigned DEFAULT '0' NOT NULL,
	richtpreis double(11,2) DEFAULT '0.00' NOT NULL,
	richtpreisprom2 double(11,2) DEFAULT '0.00' NOT NULL,
	ruecklagenetto int(11) unsigned DEFAULT '0' NOT NULL,
	sonstigekostennetto int(11) unsigned DEFAULT '0' NOT NULL,
	sonstigemietenetto int(11) unsigned DEFAULT '0' NOT NULL,
	stp_carport int(11) unsigned DEFAULT '0' NOT NULL,
	stp_duplex int(11) unsigned DEFAULT '0' NOT NULL,
	stp_freiplatz int(11) unsigned DEFAULT '0' NOT NULL,
	stp_garage int(11) unsigned DEFAULT '0' NOT NULL,
	stp_parkhaus int(11) unsigned DEFAULT '0' NOT NULL,
	stp_sonstige int(11) unsigned DEFAULT '0' NOT NULL,
	stp_tiefgarage int(11) unsigned DEFAULT '0' NOT NULL,
	summemietenetto int(11) unsigned DEFAULT '0' NOT NULL,
	user_defined_anyfield int(11) unsigned DEFAULT '0' NOT NULL,
	user_defined_extend int(11) unsigned DEFAULT '0' NOT NULL,
	user_defined_simplefield int(11) unsigned DEFAULT '0' NOT NULL,
	waehrung int(11) unsigned DEFAULT '0' NOT NULL,
	warmmiete double(11,2) DEFAULT '0.00' NOT NULL,
	x_fache text DEFAULT '' NOT NULL,
	zzg_mehrwertsteuer smallint(5) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_provisionteilen (
	preise int(11) unsigned DEFAULT '0' NOT NULL,
	wert text DEFAULT '' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_provisionnetto (
	preise int(11) unsigned DEFAULT '0' NOT NULL,
	provisionust double(11,2) DEFAULT '0.00' NOT NULL,
	value double(11,2) DEFAULT '0.00' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_ruecklagenetto (
	preise int(11) unsigned DEFAULT '0' NOT NULL,
	ruecklageust double(11,2) DEFAULT '0.00' NOT NULL,
	value double(11,2) DEFAULT '0.00' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_serviceleistungen (
	ausstattung int(11) unsigned DEFAULT '0' NOT NULL,
	betreutes_wohnen smallint(5) unsigned DEFAULT '0' NOT NULL,
	catering smallint(5) unsigned DEFAULT '0' NOT NULL,
	einkauf smallint(5) unsigned DEFAULT '0' NOT NULL,
	reinigung smallint(5) unsigned DEFAULT '0' NOT NULL,
	wachdienst smallint(5) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_sicherheitstechnik (
	alarmanlage smallint(5) unsigned DEFAULT '0' NOT NULL,
	ausstattung int(11) unsigned DEFAULT '0' NOT NULL,
	kamera smallint(5) unsigned DEFAULT '0' NOT NULL,
	polizeiruf smallint(5) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_sonstige (
	objektart int(11) unsigned DEFAULT '0' NOT NULL,
	sonstige_typ text DEFAULT '' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_sonstigekostennetto (
	preise int(11) unsigned DEFAULT '0' NOT NULL,
	sonstigekostenust double(11,2) DEFAULT '0.00' NOT NULL,
	value double(11,2) DEFAULT '0.00' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_sonstigemietenetto (
	preise int(11) unsigned DEFAULT '0' NOT NULL,
	sonstigemieteust double(11,2) DEFAULT '0.00' NOT NULL,
	value double(11,2) DEFAULT '0.00' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_stellplatzart (
	ausstattung int(11) unsigned DEFAULT '0' NOT NULL,
	carport smallint(5) unsigned DEFAULT '0' NOT NULL,
	duplex smallint(5) unsigned DEFAULT '0' NOT NULL,
	freiplatz smallint(5) unsigned DEFAULT '0' NOT NULL,
	garage smallint(5) unsigned DEFAULT '0' NOT NULL,
	parkhaus smallint(5) unsigned DEFAULT '0' NOT NULL,
	tiefgarage smallint(5) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_stpcarport (
	anzahl int(11) unsigned DEFAULT '0' NOT NULL,
	preise int(11) unsigned DEFAULT '0' NOT NULL,
	stellplatzkaufpreis double(11,2) DEFAULT '0.00' NOT NULL,
	stellplatzmiete double(11,2) DEFAULT '0.00' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_stpduplex (
	anzahl int(11) unsigned DEFAULT '0' NOT NULL,
	preise int(11) unsigned DEFAULT '0' NOT NULL,
	stellplatzkaufpreis double(11,2) DEFAULT '0.00' NOT NULL,
	stellplatzmiete double(11,2) DEFAULT '0.00' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_stpfreiplatz (
	anzahl int(11) unsigned DEFAULT '0' NOT NULL,
	preise int(11) unsigned DEFAULT '0' NOT NULL,
	stellplatzkaufpreis double(11,2) DEFAULT '0.00' NOT NULL,
	stellplatzmiete double(11,2) DEFAULT '0.00' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_stpgarage (
	anzahl int(11) unsigned DEFAULT '0' NOT NULL,
	preise int(11) unsigned DEFAULT '0' NOT NULL,
	stellplatzkaufpreis double(11,2) DEFAULT '0.00' NOT NULL,
	stellplatzmiete double(11,2) DEFAULT '0.00' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_stpparkhaus (
	anzahl int(11) unsigned DEFAULT '0' NOT NULL,
	preise int(11) unsigned DEFAULT '0' NOT NULL,
	stellplatzkaufpreis double(11,2) DEFAULT '0.00' NOT NULL,
	stellplatzmiete double(11,2) DEFAULT '0.00' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_stpsonstige (
	bemerkung text DEFAULT '' NOT NULL,
	platzart text DEFAULT '' NOT NULL,
	preise int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_stptiefgarage (
	anzahl int(11) unsigned DEFAULT '0' NOT NULL,
	preise int(11) unsigned DEFAULT '0' NOT NULL,
	stellplatzkaufpreis double(11,2) DEFAULT '0.00' NOT NULL,
	stellplatzmiete double(11,2) DEFAULT '0.00' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_summemietenetto (
	preise int(11) unsigned DEFAULT '0' NOT NULL,
	summemieteust double(11,2) DEFAULT '0.00' NOT NULL,
	value double(11,2) DEFAULT '0.00' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_telsonstige (
	bemerkung text DEFAULT '' NOT NULL,
	kontaktperson int(11) unsigned DEFAULT '0' NOT NULL,
	telefonart text DEFAULT '' NOT NULL,
	value text DEFAULT '' NOT NULL,
	weitere_adresse int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_uebertragung (
	art text DEFAULT '' NOT NULL,
	modus text DEFAULT '' NOT NULL,
	openimmo int(11) unsigned DEFAULT '0' NOT NULL,
	regi_id text DEFAULT '' NOT NULL,
	sendersoftware text DEFAULT '' NOT NULL,
	senderversion text DEFAULT '' NOT NULL,
	techn_email text DEFAULT '' NOT NULL,
	timestamp int(11) unsigned DEFAULT '0' NOT NULL,
	umfang text DEFAULT '' NOT NULL,
	version text DEFAULT '' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_unterkellert (
	ausstattung int(11) unsigned DEFAULT '0' NOT NULL,
	keller text DEFAULT '' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedanyfield (
	anbieter int(11) unsigned DEFAULT '0' NOT NULL,
	anhaenge int(11) unsigned DEFAULT '0' NOT NULL,
	ausstattung int(11) unsigned DEFAULT '0' NOT NULL,
	bieterverfahren int(11) unsigned DEFAULT '0' NOT NULL,
	flaechen int(11) unsigned DEFAULT '0' NOT NULL,
	freitexte int(11) unsigned DEFAULT '0' NOT NULL,
	geo int(11) unsigned DEFAULT '0' NOT NULL,
	immobilie int(11) unsigned DEFAULT '0' NOT NULL,
	infrastruktur int(11) unsigned DEFAULT '0' NOT NULL,
	kontaktperson int(11) unsigned DEFAULT '0' NOT NULL,
	objektkategorie int(11) unsigned DEFAULT '0' NOT NULL,
	openimmo int(11) unsigned DEFAULT '0' NOT NULL,
	preise int(11) unsigned DEFAULT '0' NOT NULL,
	verwaltung_objekt int(11) unsigned DEFAULT '0' NOT NULL,
	verwaltung_techn int(11) unsigned DEFAULT '0' NOT NULL,
	weitere_adresse int(11) unsigned DEFAULT '0' NOT NULL,
	zustand_angaben int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedextend (
	anbieter int(11) unsigned DEFAULT '0' NOT NULL,
	anhaenge int(11) unsigned DEFAULT '0' NOT NULL,
	ausstattung int(11) unsigned DEFAULT '0' NOT NULL,
	bieterverfahren int(11) unsigned DEFAULT '0' NOT NULL,
	feld text DEFAULT '' NOT NULL,
	flaechen int(11) unsigned DEFAULT '0' NOT NULL,
	freitexte int(11) unsigned DEFAULT '0' NOT NULL,
	geo int(11) unsigned DEFAULT '0' NOT NULL,
	immobilie int(11) unsigned DEFAULT '0' NOT NULL,
	infrastruktur int(11) unsigned DEFAULT '0' NOT NULL,
	kontaktperson int(11) unsigned DEFAULT '0' NOT NULL,
	objektkategorie int(11) unsigned DEFAULT '0' NOT NULL,
	preise int(11) unsigned DEFAULT '0' NOT NULL,
	verwaltung_objekt int(11) unsigned DEFAULT '0' NOT NULL,
	verwaltung_techn int(11) unsigned DEFAULT '0' NOT NULL,
	weitere_adresse int(11) unsigned DEFAULT '0' NOT NULL,
	zustand_angaben int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedsimplefield (
	anbieter int(11) unsigned DEFAULT '0' NOT NULL,
	anhaenge int(11) unsigned DEFAULT '0' NOT NULL,
	ausstattung int(11) unsigned DEFAULT '0' NOT NULL,
	bieterverfahren int(11) unsigned DEFAULT '0' NOT NULL,
	feldname text DEFAULT '' NOT NULL,
	flaechen int(11) unsigned DEFAULT '0' NOT NULL,
	freitexte int(11) unsigned DEFAULT '0' NOT NULL,
	geo int(11) unsigned DEFAULT '0' NOT NULL,
	immobilie int(11) unsigned DEFAULT '0' NOT NULL,
	infrastruktur int(11) unsigned DEFAULT '0' NOT NULL,
	kontaktperson int(11) unsigned DEFAULT '0' NOT NULL,
	objektkategorie int(11) unsigned DEFAULT '0' NOT NULL,
	openimmo int(11) unsigned DEFAULT '0' NOT NULL,
	preise int(11) unsigned DEFAULT '0' NOT NULL,
	verwaltung_objekt int(11) unsigned DEFAULT '0' NOT NULL,
	verwaltung_techn int(11) unsigned DEFAULT '0' NOT NULL,
	weitere_adresse int(11) unsigned DEFAULT '0' NOT NULL,
	zustand_angaben int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_verkaufstatus (
	stand text DEFAULT '' NOT NULL,
	zustand_angaben int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_vermarktungsart (
	erbpacht smallint(5) unsigned DEFAULT '0' NOT NULL,
	kauf smallint(5) unsigned DEFAULT '0' NOT NULL,
	leasing smallint(5) unsigned DEFAULT '0' NOT NULL,
	miete_pacht smallint(5) unsigned DEFAULT '0' NOT NULL,
	objektkategorie int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_versteigerung (
	aktenzeichen text DEFAULT '' NOT NULL,
	amtsgericht text DEFAULT '' NOT NULL,
	immobilie int(11) unsigned DEFAULT '0' NOT NULL,
	verkehrswert double(11,2) DEFAULT '0.00' NOT NULL,
	zusatztermin int(11) unsigned DEFAULT '0' NOT NULL,
	zvtermin int(11) unsigned DEFAULT '0' NOT NULL,
	zwangsversteigerung smallint(5) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_verwaltungobjekt (
	abdatum datetime DEFAULT NULL,
	als_ferien smallint(5) unsigned DEFAULT '0' NOT NULL,
	bisdatum datetime DEFAULT NULL,
	branchen text DEFAULT '' NOT NULL,
	denkmalgeschuetzt smallint(5) unsigned DEFAULT '0' NOT NULL,
	geschlecht int(11) unsigned DEFAULT '0' NOT NULL,
	gewerbliche_nutzung smallint(5) unsigned DEFAULT '0' NOT NULL,
	gruppennummer text DEFAULT '' NOT NULL,
	haustiere smallint(5) unsigned DEFAULT '0' NOT NULL,
	hochhaus smallint(5) unsigned DEFAULT '0' NOT NULL,
	immobilie int(11) unsigned DEFAULT '0' NOT NULL,
	laufzeit double(11,2) DEFAULT '0.00' NOT NULL,
	max_mietdauer int(11) unsigned DEFAULT '0' NOT NULL,
	max_personen int(11) unsigned DEFAULT '0' NOT NULL,
	min_mietdauer int(11) unsigned DEFAULT '0' NOT NULL,
	nichtraucher smallint(5) unsigned DEFAULT '0' NOT NULL,
	objektadresse_freigeben smallint(5) unsigned DEFAULT '0' NOT NULL,
	user_defined_anyfield int(11) unsigned DEFAULT '0' NOT NULL,
	user_defined_extend int(11) unsigned DEFAULT '0' NOT NULL,
	user_defined_simplefield int(11) unsigned DEFAULT '0' NOT NULL,
	verfuegbar_ab text DEFAULT '' NOT NULL,
	vermietet smallint(5) unsigned DEFAULT '0' NOT NULL,
	versteigerungstermin datetime DEFAULT NULL,
	wbs_sozialwohnung smallint(5) unsigned DEFAULT '0' NOT NULL,
	zugang text DEFAULT '' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_verwaltungtechn (
	aktion int(11) unsigned DEFAULT '0' NOT NULL,
	aktiv_bis datetime DEFAULT NULL,
	aktiv_von datetime DEFAULT NULL,
	gruppen_kennung text DEFAULT '' NOT NULL,
	immobilie int(11) unsigned DEFAULT '0' NOT NULL,
	kennung_ursprung text DEFAULT '' NOT NULL,
	master int(11) unsigned DEFAULT '0' NOT NULL,
	objektnr_extern text DEFAULT '' NOT NULL,
	objektnr_intern text DEFAULT '' NOT NULL,
	openimmo_obid text DEFAULT '' NOT NULL,
	sprache text DEFAULT '' NOT NULL,
	stand_vom datetime DEFAULT NULL,
	user_defined_anyfield int(11) unsigned DEFAULT '0' NOT NULL,
	user_defined_extend int(11) unsigned DEFAULT '0' NOT NULL,
	user_defined_simplefield int(11) unsigned DEFAULT '0' NOT NULL,
	weitergabe_generell smallint(5) unsigned DEFAULT '0' NOT NULL,
	weitergabe_negativ text DEFAULT '' NOT NULL,
	weitergabe_positiv text DEFAULT '' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_waehrung (
	iso_waehrung text DEFAULT '' NOT NULL,
	preise int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_weitereadresse (
	adressart text DEFAULT '' NOT NULL,
	adressfreigabe smallint(5) unsigned DEFAULT '0' NOT NULL,
	anrede text DEFAULT '' NOT NULL,
	anrede_brief text DEFAULT '' NOT NULL,
	email_direkt text DEFAULT '' NOT NULL,
	email_privat text DEFAULT '' NOT NULL,
	email_sonstige int(11) unsigned DEFAULT '0' NOT NULL,
	email_zentrale text DEFAULT '' NOT NULL,
	firma text DEFAULT '' NOT NULL,
	freitextfeld text DEFAULT '' NOT NULL,
	hausnummer text DEFAULT '' NOT NULL,
	immobilie int(11) unsigned DEFAULT '0' NOT NULL,
	land int(11) unsigned DEFAULT '0' NOT NULL,
	name text DEFAULT '' NOT NULL,
	ort text DEFAULT '' NOT NULL,
	personennummer text DEFAULT '' NOT NULL,
	plz text DEFAULT '' NOT NULL,
	postfach text DEFAULT '' NOT NULL,
	postf_ort text DEFAULT '' NOT NULL,
	postf_plz text DEFAULT '' NOT NULL,
	strasse text DEFAULT '' NOT NULL,
	tel_durchw text DEFAULT '' NOT NULL,
	tel_fax text DEFAULT '' NOT NULL,
	tel_handy text DEFAULT '' NOT NULL,
	tel_privat text DEFAULT '' NOT NULL,
	tel_sonstige int(11) unsigned DEFAULT '0' NOT NULL,
	tel_zentrale text DEFAULT '' NOT NULL,
	titel text DEFAULT '' NOT NULL,
	url text DEFAULT '' NOT NULL,
	user_defined_anyfield int(11) unsigned DEFAULT '0' NOT NULL,
	user_defined_extend int(11) unsigned DEFAULT '0' NOT NULL,
	user_defined_simplefield int(11) unsigned DEFAULT '0' NOT NULL,
	vorname text DEFAULT '' NOT NULL,
	zusatzfeld text DEFAULT '' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_wohnung (
	objektart int(11) unsigned DEFAULT '0' NOT NULL,
	wohnungtyp text DEFAULT '' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_zimmer (
	objektart int(11) unsigned DEFAULT '0' NOT NULL,
	zimmertyp text DEFAULT '' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_zinshausrenditeobjekt (
	objektart int(11) unsigned DEFAULT '0' NOT NULL,
	zins_typ text DEFAULT '' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_zustand (
	zustand_angaben int(11) unsigned DEFAULT '0' NOT NULL,
	zustand_art text DEFAULT '' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_zustandangaben (
	sqlsafe_alter int(11) unsigned DEFAULT '0' NOT NULL,
	altlasten text DEFAULT '' NOT NULL,
	baujahr text DEFAULT '' NOT NULL,
	bauzone text DEFAULT '' NOT NULL,
	bebaubar_nach int(11) unsigned DEFAULT '0' NOT NULL,
	energiepass int(11) unsigned DEFAULT '0' NOT NULL,
	erschliessung int(11) unsigned DEFAULT '0' NOT NULL,
	erschliessung_umfang int(11) unsigned DEFAULT '0' NOT NULL,
	immobilie int(11) unsigned DEFAULT '0' NOT NULL,
	letztemodernisierung text DEFAULT '' NOT NULL,
	user_defined_anyfield int(11) unsigned DEFAULT '0' NOT NULL,
	user_defined_extend int(11) unsigned DEFAULT '0' NOT NULL,
	user_defined_simplefield int(11) unsigned DEFAULT '0' NOT NULL,
	verkaufstatus int(11) unsigned DEFAULT '0' NOT NULL,
	zustand int(11) unsigned DEFAULT '0' NOT NULL
);
CREATE TABLE tx_openimmotypo3_domain_model_immobilie (
    anbieter int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedanyfield (
    anbieter int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedextend (
    anbieter int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedsimplefield (
    anbieter int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_anhang (
    anhaenge int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedanyfield (
    anhaenge int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedextend (
    anhaenge int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedsimplefield (
    anhaenge int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_serviceleistungen (
    ausstattung int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_stellplatzart (
    ausstattung int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedanyfield (
    ausstattung int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedextend (
    ausstattung int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedsimplefield (
    ausstattung int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedanyfield (
    bieterverfahren int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedextend (
    bieterverfahren int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedsimplefield (
    bieterverfahren int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedanyfield (
    flaechen int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedextend (
    flaechen int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedsimplefield (
    flaechen int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedanyfield (
    freitexte int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedextend (
    freitexte int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedsimplefield (
    freitexte int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedanyfield (
    geo int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedextend (
    geo int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedsimplefield (
    geo int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedanyfield (
    immobilie int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedextend (
    immobilie int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedsimplefield (
    immobilie int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_weitereadresse (
    immobilie int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_distanzen (
    infrastruktur int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_distanzensport (
    infrastruktur int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedanyfield (
    infrastruktur int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedextend (
    infrastruktur int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedsimplefield (
    infrastruktur int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_emailsonstige (
    kontaktperson int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_telsonstige (
    kontaktperson int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedanyfield (
    kontaktperson int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedextend (
    kontaktperson int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedsimplefield (
    kontaktperson int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_bueropraxen (
    objektart int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_einzelhandel (
    objektart int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_freizeitimmobiliegewerblich (
    objektart int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_gastgewerbe (
    objektart int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_grundstueck (
    objektart int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_hallenlagerprod (
    objektart int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_haus (
    objektart int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_landundforstwirtschaft (
    objektart int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_parken (
    objektart int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_sonstige (
    objektart int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_wohnung (
    objektart int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_zimmer (
    objektart int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_zinshausrenditeobjekt (
    objektart int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedanyfield (
    objektkategorie int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedextend (
    objektkategorie int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedsimplefield (
    objektkategorie int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_stpsonstige (
    preise int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedanyfield (
    preise int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedextend (
    preise int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedsimplefield (
    preise int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedanyfield (
    verwaltung_objekt int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedextend (
    verwaltung_objekt int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedsimplefield (
    verwaltung_objekt int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedanyfield (
    verwaltung_techn int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedextend (
    verwaltung_techn int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedsimplefield (
    verwaltung_techn int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_emailsonstige (
    weitere_adresse int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_telsonstige (
    weitere_adresse int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedanyfield (
    weitere_adresse int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedextend (
    weitere_adresse int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedsimplefield (
    weitere_adresse int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_energiepass (
    zustand_angaben int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedanyfield (
    zustand_angaben int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedextend (
    zustand_angaben int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_openimmotypo3_domain_model_userdefinedsimplefield (
    zustand_angaben int(11) unsigned DEFAULT '0' NOT NULL
);
