<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Preise
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("preise")
 */
class Preise implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 * @Type ("float") 
	 * @var float
	 */
	protected $abstand;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\AussenCourtage") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\AussenCourtage
	 */
	protected $aussenCourtage;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Betriebskostennetto") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Betriebskostennetto
	 */
	protected $betriebskostennetto;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $courtageHinweis;

	/**
	 * @Type ("float") 
	 * @var float
	 */
	protected $erbpacht;

	/**
	 * @Type ("float") 
	 * @var float
	 */
	protected $erschliessungskosten;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Evbnetto") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Evbnetto
	 */
	protected $evbnetto;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $freitextPreis;

	/**
	 * @Type ("float") 
	 * @var float
	 */
	protected $gesamtbelastungbrutto;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Gesamtbelastungnetto") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Gesamtbelastungnetto
	 */
	protected $gesamtbelastungnetto;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Gesamtkostenprom2von") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Gesamtkostenprom2von
	 */
	protected $gesamtkostenprom2von;

	/**
	 * @Type ("float") 
	 * @var float
	 */
	protected $gesamtmietebrutto;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Gesamtmietenetto") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Gesamtmietenetto
	 */
	protected $gesamtmietenetto;

	/**
	 * @Type ("float") 
	 * @var float
	 */
	protected $geschaeftsguthaben;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Hauptmietzinsnetto") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Hauptmietzinsnetto
	 */
	protected $hauptmietzinsnetto;

	/**
	 * @Type ("float") 
	 * @var float
	 */
	protected $hausgeld;

	/**
	 * @Type ("float") 
	 * @var float
	 */
	protected $heizkosten;

	/**
	 * @Type ("boolean") 
	 * @var boolean
	 */
	protected $heizkostenEnthalten;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Heizkostennetto") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Heizkostennetto
	 */
	protected $heizkostennetto;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $immobilie;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\InnenCourtage") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\InnenCourtage
	 */
	protected $innenCourtage;

	/**
	 * @Type ("float") 
	 * @var float
	 */
	protected $kaltmiete;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Kaufpreis") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Kaufpreis
	 */
	protected $kaufpreis;

	/**
	 * @Type ("float") 
	 * @var float
	 */
	protected $kaufpreisbrutto;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Kaufpreisnetto") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Kaufpreisnetto
	 */
	protected $kaufpreisnetto;

	/**
	 * @Type ("float") 
	 * @var float
	 */
	protected $kaufpreisProQm;

	/**
	 * @Type ("float") 
	 * @var float
	 */
	protected $kaution;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $kautionText;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\MieteinnahmenIst") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\MieteinnahmenIst
	 */
	protected $mieteinnahmenIst;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\MieteinnahmenSoll") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\MieteinnahmenSoll
	 */
	protected $mieteinnahmenSoll;

	/**
	 * @Type ("float") 
	 * @var float
	 */
	protected $mietpreisProQm;

	/**
	 * @Type ("float") 
	 * @var float
	 */
	protected $mietzuschlaege;

	/**
	 * @Type ("float") 
	 * @var float
	 */
	protected $monatlichekostenbrutto;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Monatlichekostennetto") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Monatlichekostennetto
	 */
	protected $monatlichekostennetto;

	/**
	 * @Type ("float") 
	 * @var float
	 */
	protected $mwstGesamt;

	/**
	 * @Type ("float") 
	 * @var float
	 */
	protected $mwstSatz;

	/**
	 * @Type ("float") 
	 * @var float
	 */
	protected $nebenkosten;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Nebenkostenprom2von") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Nebenkostenprom2von
	 */
	protected $nebenkostenprom2von;

	/**
	 * @Type ("float") 
	 * @var float
	 */
	protected $nettokaltmiete;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Nettomieteprom2von") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Nettomieteprom2von
	 */
	protected $nettomieteprom2von;

	/**
	 * @Type ("float") 
	 * @var float
	 */
	protected $nettorendite;

	/**
	 * @Type ("float") 
	 * @var float
	 */
	protected $nettorenditeIst;

	/**
	 * @Type ("float") 
	 * @var float
	 */
	protected $nettorenditeSoll;

	/**
	 * @Type ("float") 
	 * @var float
	 */
	protected $pacht;

	/**
	 * @Type ("float") 
	 * @var float
	 */
	protected $pauschalmiete;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\PreisZeiteinheit") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\PreisZeiteinheit
	 */
	protected $preisZeiteinheit;

	/**
	 * @Type ("DateTime<'Y-m-d'>") 
	 * @var \DateTime
	 */
	protected $preisZeitraumBis;

	/**
	 * @Type ("DateTime<'Y-m-d'>") 
	 * @var \DateTime
	 */
	protected $preisZeitraumVon;

	/**
	 * @Type ("float") 
	 * @var float
	 */
	protected $provisionbrutto;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Provisionnetto") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Provisionnetto
	 */
	protected $provisionnetto;

	/**
	 * @Type ("boolean") 
	 * @var boolean
	 */
	protected $provisionspflichtig;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\ProvisionTeilen") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\ProvisionTeilen
	 */
	protected $provisionTeilen;

	/**
	 * @Type ("float") 
	 * @var float
	 */
	protected $richtpreis;

	/**
	 * @Type ("float") 
	 * @var float
	 */
	protected $richtpreisprom2;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Ruecklagenetto") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Ruecklagenetto
	 */
	protected $ruecklagenetto;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Sonstigekostennetto") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Sonstigekostennetto
	 */
	protected $sonstigekostennetto;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Sonstigemietenetto") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Sonstigemietenetto
	 */
	protected $sonstigemietenetto;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\StpCarport") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\StpCarport
	 */
	protected $stpCarport;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\StpDuplex") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\StpDuplex
	 */
	protected $stpDuplex;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\StpFreiplatz") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\StpFreiplatz
	 */
	protected $stpFreiplatz;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\StpGarage") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\StpGarage
	 */
	protected $stpGarage;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\StpParkhaus") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\StpParkhaus
	 */
	protected $stpParkhaus;

	/**
	 * @XmlList (inline = true, entry = "stp_sonstige") 
	 * @Type ("array<Ujamii\OpenImmoTypo3\Domain\Model\StpSonstige>") 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ujamii\OpenImmoTypo3\Domain\Model\StpSonstige>
	 */
	protected $stpSonstige;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\StpTiefgarage") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\StpTiefgarage
	 */
	protected $stpTiefgarage;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Summemietenetto") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Summemietenetto
	 */
	protected $summemietenetto;

	/**
	 * @XmlList (inline = true, entry = "user_defined_anyfield") 
	 * @Type ("array<Ujamii\OpenImmoTypo3\Domain\Model\UserDefinedAnyfield>") 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ujamii\OpenImmoTypo3\Domain\Model\UserDefinedAnyfield>
	 */
	protected $userDefinedAnyfield;

	/**
	 * @XmlList (inline = true, entry = "user_defined_extend") 
	 * @Type ("array<Ujamii\OpenImmoTypo3\Domain\Model\UserDefinedExtend>") 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ujamii\OpenImmoTypo3\Domain\Model\UserDefinedExtend>
	 */
	protected $userDefinedExtend;

	/**
	 * @XmlList (inline = true, entry = "user_defined_simplefield") 
	 * @Type ("array<Ujamii\OpenImmoTypo3\Domain\Model\UserDefinedSimplefield>") 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ujamii\OpenImmoTypo3\Domain\Model\UserDefinedSimplefield>
	 */
	protected $userDefinedSimplefield;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Waehrung") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Waehrung
	 */
	protected $waehrung;

	/**
	 * @Type ("float") 
	 * @var float
	 */
	protected $warmmiete;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $xFache;

	/**
	 * @Type ("boolean") 
	 * @var boolean
	 */
	protected $zzgMehrwertsteuer;

	/**
	 * @return float
	 */
	public function getAbstand(): float {
		return $this->abstand;
	}

	/**
	 * @return AussenCourtage
	 */
	public function getAussenCourtage(): AussenCourtage {
		return $this->aussenCourtage;
	}

	/**
	 * @return Betriebskostennetto
	 */
	public function getBetriebskostennetto(): Betriebskostennetto {
		return $this->betriebskostennetto;
	}

	/**
	 * @return string
	 */
	public function getCourtageHinweis(): string {
		return $this->courtageHinweis;
	}

	/**
	 * @return float
	 */
	public function getErbpacht(): float {
		return $this->erbpacht;
	}

	/**
	 * @return float
	 */
	public function getErschliessungskosten(): float {
		return $this->erschliessungskosten;
	}

	/**
	 * @return Evbnetto
	 */
	public function getEvbnetto(): Evbnetto {
		return $this->evbnetto;
	}

	/**
	 * @return string
	 */
	public function getFreitextPreis(): string {
		return $this->freitextPreis;
	}

	/**
	 * @return float
	 */
	public function getGesamtbelastungbrutto(): float {
		return $this->gesamtbelastungbrutto;
	}

	/**
	 * @return Gesamtbelastungnetto
	 */
	public function getGesamtbelastungnetto(): Gesamtbelastungnetto {
		return $this->gesamtbelastungnetto;
	}

	/**
	 * @return Gesamtkostenprom2von
	 */
	public function getGesamtkostenprom2von(): Gesamtkostenprom2von {
		return $this->gesamtkostenprom2von;
	}

	/**
	 * @return float
	 */
	public function getGesamtmietebrutto(): float {
		return $this->gesamtmietebrutto;
	}

	/**
	 * @return Gesamtmietenetto
	 */
	public function getGesamtmietenetto(): Gesamtmietenetto {
		return $this->gesamtmietenetto;
	}

	/**
	 * @return float
	 */
	public function getGeschaeftsguthaben(): float {
		return $this->geschaeftsguthaben;
	}

	/**
	 * @return Hauptmietzinsnetto
	 */
	public function getHauptmietzinsnetto(): Hauptmietzinsnetto {
		return $this->hauptmietzinsnetto;
	}

	/**
	 * @return float
	 */
	public function getHausgeld(): float {
		return $this->hausgeld;
	}

	/**
	 * @return float
	 */
	public function getHeizkosten(): float {
		return $this->heizkosten;
	}

	/**
	 * @return boolean
	 */
	public function getHeizkostenEnthalten(): bool {
		return $this->heizkostenEnthalten;
	}

	/**
	 * @return Heizkostennetto
	 */
	public function getHeizkostennetto(): Heizkostennetto {
		return $this->heizkostennetto;
	}

	/**
	 * @return int
	 */
	public function getImmobilie(): int {
		return $this->immobilie;
	}

	/**
	 * @return InnenCourtage
	 */
	public function getInnenCourtage(): InnenCourtage {
		return $this->innenCourtage;
	}

	/**
	 * @return float
	 */
	public function getKaltmiete(): float {
		return $this->kaltmiete;
	}

	/**
	 * @return Kaufpreis
	 */
	public function getKaufpreis(): Kaufpreis {
		return $this->kaufpreis;
	}

	/**
	 * @return float
	 */
	public function getKaufpreisbrutto(): float {
		return $this->kaufpreisbrutto;
	}

	/**
	 * @return Kaufpreisnetto
	 */
	public function getKaufpreisnetto(): Kaufpreisnetto {
		return $this->kaufpreisnetto;
	}

	/**
	 * @return float
	 */
	public function getKaufpreisProQm(): float {
		return $this->kaufpreisProQm;
	}

	/**
	 * @return float
	 */
	public function getKaution(): float {
		return $this->kaution;
	}

	/**
	 * @return string
	 */
	public function getKautionText(): string {
		return $this->kautionText;
	}

	/**
	 * @return MieteinnahmenIst
	 */
	public function getMieteinnahmenIst(): MieteinnahmenIst {
		return $this->mieteinnahmenIst;
	}

	/**
	 * @return MieteinnahmenSoll
	 */
	public function getMieteinnahmenSoll(): MieteinnahmenSoll {
		return $this->mieteinnahmenSoll;
	}

	/**
	 * @return float
	 */
	public function getMietpreisProQm(): float {
		return $this->mietpreisProQm;
	}

	/**
	 * @return float
	 */
	public function getMietzuschlaege(): float {
		return $this->mietzuschlaege;
	}

	/**
	 * @return float
	 */
	public function getMonatlichekostenbrutto(): float {
		return $this->monatlichekostenbrutto;
	}

	/**
	 * @return Monatlichekostennetto
	 */
	public function getMonatlichekostennetto(): Monatlichekostennetto {
		return $this->monatlichekostennetto;
	}

	/**
	 * @return float
	 */
	public function getMwstGesamt(): float {
		return $this->mwstGesamt;
	}

	/**
	 * @return float
	 */
	public function getMwstSatz(): float {
		return $this->mwstSatz;
	}

	/**
	 * @return float
	 */
	public function getNebenkosten(): float {
		return $this->nebenkosten;
	}

	/**
	 * @return Nebenkostenprom2von
	 */
	public function getNebenkostenprom2von(): Nebenkostenprom2von {
		return $this->nebenkostenprom2von;
	}

	/**
	 * @return float
	 */
	public function getNettokaltmiete(): float {
		return $this->nettokaltmiete;
	}

	/**
	 * @return Nettomieteprom2von
	 */
	public function getNettomieteprom2von(): Nettomieteprom2von {
		return $this->nettomieteprom2von;
	}

	/**
	 * @return float
	 */
	public function getNettorendite(): float {
		return $this->nettorendite;
	}

	/**
	 * @return float
	 */
	public function getNettorenditeIst(): float {
		return $this->nettorenditeIst;
	}

	/**
	 * @return float
	 */
	public function getNettorenditeSoll(): float {
		return $this->nettorenditeSoll;
	}

	/**
	 * @return float
	 */
	public function getPacht(): float {
		return $this->pacht;
	}

	/**
	 * @return float
	 */
	public function getPauschalmiete(): float {
		return $this->pauschalmiete;
	}

	/**
	 * @return PreisZeiteinheit
	 */
	public function getPreisZeiteinheit(): PreisZeiteinheit {
		return $this->preisZeiteinheit;
	}

	/**
	 * @return \DateTime
	 */
	public function getPreisZeitraumBis(): \DateTime {
		return $this->preisZeitraumBis;
	}

	/**
	 * @return \DateTime
	 */
	public function getPreisZeitraumVon(): \DateTime {
		return $this->preisZeitraumVon;
	}

	/**
	 * @return float
	 */
	public function getProvisionbrutto(): float {
		return $this->provisionbrutto;
	}

	/**
	 * @return Provisionnetto
	 */
	public function getProvisionnetto(): Provisionnetto {
		return $this->provisionnetto;
	}

	/**
	 * @return boolean
	 */
	public function getProvisionspflichtig(): bool {
		return $this->provisionspflichtig;
	}

	/**
	 * @return ProvisionTeilen
	 */
	public function getProvisionTeilen(): ProvisionTeilen {
		return $this->provisionTeilen;
	}

	/**
	 * @return float
	 */
	public function getRichtpreis(): float {
		return $this->richtpreis;
	}

	/**
	 * @return float
	 */
	public function getRichtpreisprom2(): float {
		return $this->richtpreisprom2;
	}

	/**
	 * @return Ruecklagenetto
	 */
	public function getRuecklagenetto(): Ruecklagenetto {
		return $this->ruecklagenetto;
	}

	/**
	 * @return Sonstigekostennetto
	 */
	public function getSonstigekostennetto(): Sonstigekostennetto {
		return $this->sonstigekostennetto;
	}

	/**
	 * @return Sonstigemietenetto
	 */
	public function getSonstigemietenetto(): Sonstigemietenetto {
		return $this->sonstigemietenetto;
	}

	/**
	 * @return StpCarport
	 */
	public function getStpCarport(): StpCarport {
		return $this->stpCarport;
	}

	/**
	 * @return StpDuplex
	 */
	public function getStpDuplex(): StpDuplex {
		return $this->stpDuplex;
	}

	/**
	 * @return StpFreiplatz
	 */
	public function getStpFreiplatz(): StpFreiplatz {
		return $this->stpFreiplatz;
	}

	/**
	 * @return StpGarage
	 */
	public function getStpGarage(): StpGarage {
		return $this->stpGarage;
	}

	/**
	 * @return StpParkhaus
	 */
	public function getStpParkhaus(): StpParkhaus {
		return $this->stpParkhaus;
	}

	/**
	 * Returns array of StpSonstige
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getStpSonstige(): \TYPO3\CMS\Extbase\Persistence\ObjectStorage {
		return $this->stpSonstige;
	}

	/**
	 * @return StpTiefgarage
	 */
	public function getStpTiefgarage(): StpTiefgarage {
		return $this->stpTiefgarage;
	}

	/**
	 * @return Summemietenetto
	 */
	public function getSummemietenetto(): Summemietenetto {
		return $this->summemietenetto;
	}

	/**
	 * Returns array of UserDefinedAnyfield
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getUserDefinedAnyfield(): \TYPO3\CMS\Extbase\Persistence\ObjectStorage {
		return $this->userDefinedAnyfield;
	}

	/**
	 * Returns array of UserDefinedExtend
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getUserDefinedExtend(): \TYPO3\CMS\Extbase\Persistence\ObjectStorage {
		return $this->userDefinedExtend;
	}

	/**
	 * Returns array of UserDefinedSimplefield
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getUserDefinedSimplefield(): \TYPO3\CMS\Extbase\Persistence\ObjectStorage {
		return $this->userDefinedSimplefield;
	}

	/**
	 * @return Waehrung
	 */
	public function getWaehrung(): Waehrung {
		return $this->waehrung;
	}

	/**
	 * @return float
	 */
	public function getWarmmiete(): float {
		return $this->warmmiete;
	}

	/**
	 * @return string
	 */
	public function getXFache(): string {
		return $this->xFache;
	}

	/**
	 * @return boolean
	 */
	public function getZzgMehrwertsteuer(): bool {
		return $this->zzgMehrwertsteuer;
	}

	/**
	 * @param float $abstand Setter for abstand
	 * @return Preise
	 */
	public function setAbstand(float $abstand): Preise {
		$this->abstand = $abstand;
		return $this;
	}

	/**
	 * @param AussenCourtage $aussenCourtage Setter for aussenCourtage
	 * @return Preise
	 */
	public function setAussenCourtage(AussenCourtage $aussenCourtage): Preise {
		$this->aussenCourtage = $aussenCourtage;
		return $this;
	}

	/**
	 * @param Betriebskostennetto $betriebskostennetto Setter for betriebskostennetto
	 * @return Preise
	 */
	public function setBetriebskostennetto(Betriebskostennetto $betriebskostennetto): Preise {
		$this->betriebskostennetto = $betriebskostennetto;
		return $this;
	}

	/**
	 * @param string $courtageHinweis Setter for courtageHinweis
	 * @return Preise
	 */
	public function setCourtageHinweis(string $courtageHinweis): Preise {
		$this->courtageHinweis = $courtageHinweis;
		return $this;
	}

	/**
	 * @param float $erbpacht Setter for erbpacht
	 * @return Preise
	 */
	public function setErbpacht(float $erbpacht): Preise {
		$this->erbpacht = $erbpacht;
		return $this;
	}

	/**
	 * @param float $erschliessungskosten Setter for erschliessungskosten
	 * @return Preise
	 */
	public function setErschliessungskosten(float $erschliessungskosten): Preise {
		$this->erschliessungskosten = $erschliessungskosten;
		return $this;
	}

	/**
	 * @param Evbnetto $evbnetto Setter for evbnetto
	 * @return Preise
	 */
	public function setEvbnetto(Evbnetto $evbnetto): Preise {
		$this->evbnetto = $evbnetto;
		return $this;
	}

	/**
	 * @param string $freitextPreis Setter for freitextPreis
	 * @return Preise
	 */
	public function setFreitextPreis(string $freitextPreis): Preise {
		$this->freitextPreis = $freitextPreis;
		return $this;
	}

	/**
	 * @param float $gesamtbelastungbrutto Setter for gesamtbelastungbrutto
	 * @return Preise
	 */
	public function setGesamtbelastungbrutto(float $gesamtbelastungbrutto): Preise {
		$this->gesamtbelastungbrutto = $gesamtbelastungbrutto;
		return $this;
	}

	/**
	 * @param Gesamtbelastungnetto $gesamtbelastungnetto Setter for gesamtbelastungnetto
	 * @return Preise
	 */
	public function setGesamtbelastungnetto(Gesamtbelastungnetto $gesamtbelastungnetto): Preise {
		$this->gesamtbelastungnetto = $gesamtbelastungnetto;
		return $this;
	}

	/**
	 * @param Gesamtkostenprom2von $gesamtkostenprom2von Setter for gesamtkostenprom2von
	 * @return Preise
	 */
	public function setGesamtkostenprom2von(Gesamtkostenprom2von $gesamtkostenprom2von): Preise {
		$this->gesamtkostenprom2von = $gesamtkostenprom2von;
		return $this;
	}

	/**
	 * @param float $gesamtmietebrutto Setter for gesamtmietebrutto
	 * @return Preise
	 */
	public function setGesamtmietebrutto(float $gesamtmietebrutto): Preise {
		$this->gesamtmietebrutto = $gesamtmietebrutto;
		return $this;
	}

	/**
	 * @param Gesamtmietenetto $gesamtmietenetto Setter for gesamtmietenetto
	 * @return Preise
	 */
	public function setGesamtmietenetto(Gesamtmietenetto $gesamtmietenetto): Preise {
		$this->gesamtmietenetto = $gesamtmietenetto;
		return $this;
	}

	/**
	 * @param float $geschaeftsguthaben Setter for geschaeftsguthaben
	 * @return Preise
	 */
	public function setGeschaeftsguthaben(float $geschaeftsguthaben): Preise {
		$this->geschaeftsguthaben = $geschaeftsguthaben;
		return $this;
	}

	/**
	 * @param Hauptmietzinsnetto $hauptmietzinsnetto Setter for hauptmietzinsnetto
	 * @return Preise
	 */
	public function setHauptmietzinsnetto(Hauptmietzinsnetto $hauptmietzinsnetto): Preise {
		$this->hauptmietzinsnetto = $hauptmietzinsnetto;
		return $this;
	}

	/**
	 * @param float $hausgeld Setter for hausgeld
	 * @return Preise
	 */
	public function setHausgeld(float $hausgeld): Preise {
		$this->hausgeld = $hausgeld;
		return $this;
	}

	/**
	 * @param float $heizkosten Setter for heizkosten
	 * @return Preise
	 */
	public function setHeizkosten(float $heizkosten): Preise {
		$this->heizkosten = $heizkosten;
		return $this;
	}

	/**
	 * @param boolean $heizkostenEnthalten Setter for heizkostenEnthalten
	 * @return Preise
	 */
	public function setHeizkostenEnthalten(bool $heizkostenEnthalten): Preise {
		$this->heizkostenEnthalten = $heizkostenEnthalten;
		return $this;
	}

	/**
	 * @param Heizkostennetto $heizkostennetto Setter for heizkostennetto
	 * @return Preise
	 */
	public function setHeizkostennetto(Heizkostennetto $heizkostennetto): Preise {
		$this->heizkostennetto = $heizkostennetto;
		return $this;
	}

	/**
	 * @param int $immobilie Setter for immobilie
	 * @return Preise
	 */
	public function setImmobilie(int $immobilie) {
		$this->immobilie = $immobilie;
		return $this;
	}

	/**
	 * @param InnenCourtage $innenCourtage Setter for innenCourtage
	 * @return Preise
	 */
	public function setInnenCourtage(InnenCourtage $innenCourtage): Preise {
		$this->innenCourtage = $innenCourtage;
		return $this;
	}

	/**
	 * @param float $kaltmiete Setter for kaltmiete
	 * @return Preise
	 */
	public function setKaltmiete(float $kaltmiete): Preise {
		$this->kaltmiete = $kaltmiete;
		return $this;
	}

	/**
	 * @param Kaufpreis $kaufpreis Setter for kaufpreis
	 * @return Preise
	 */
	public function setKaufpreis(Kaufpreis $kaufpreis): Preise {
		$this->kaufpreis = $kaufpreis;
		return $this;
	}

	/**
	 * @param float $kaufpreisbrutto Setter for kaufpreisbrutto
	 * @return Preise
	 */
	public function setKaufpreisbrutto(float $kaufpreisbrutto): Preise {
		$this->kaufpreisbrutto = $kaufpreisbrutto;
		return $this;
	}

	/**
	 * @param Kaufpreisnetto $kaufpreisnetto Setter for kaufpreisnetto
	 * @return Preise
	 */
	public function setKaufpreisnetto(Kaufpreisnetto $kaufpreisnetto): Preise {
		$this->kaufpreisnetto = $kaufpreisnetto;
		return $this;
	}

	/**
	 * @param float $kaufpreisProQm Setter for kaufpreisProQm
	 * @return Preise
	 */
	public function setKaufpreisProQm(float $kaufpreisProQm): Preise {
		$this->kaufpreisProQm = $kaufpreisProQm;
		return $this;
	}

	/**
	 * @param float $kaution Setter for kaution
	 * @return Preise
	 */
	public function setKaution(float $kaution): Preise {
		$this->kaution = $kaution;
		return $this;
	}

	/**
	 * @param string $kautionText Setter for kautionText
	 * @return Preise
	 */
	public function setKautionText(string $kautionText): Preise {
		$this->kautionText = $kautionText;
		return $this;
	}

	/**
	 * @param MieteinnahmenIst $mieteinnahmenIst Setter for mieteinnahmenIst
	 * @return Preise
	 */
	public function setMieteinnahmenIst(MieteinnahmenIst $mieteinnahmenIst): Preise {
		$this->mieteinnahmenIst = $mieteinnahmenIst;
		return $this;
	}

	/**
	 * @param MieteinnahmenSoll $mieteinnahmenSoll Setter for mieteinnahmenSoll
	 * @return Preise
	 */
	public function setMieteinnahmenSoll(MieteinnahmenSoll $mieteinnahmenSoll): Preise {
		$this->mieteinnahmenSoll = $mieteinnahmenSoll;
		return $this;
	}

	/**
	 * @param float $mietpreisProQm Setter for mietpreisProQm
	 * @return Preise
	 */
	public function setMietpreisProQm(float $mietpreisProQm): Preise {
		$this->mietpreisProQm = $mietpreisProQm;
		return $this;
	}

	/**
	 * @param float $mietzuschlaege Setter for mietzuschlaege
	 * @return Preise
	 */
	public function setMietzuschlaege(float $mietzuschlaege): Preise {
		$this->mietzuschlaege = $mietzuschlaege;
		return $this;
	}

	/**
	 * @param float $monatlichekostenbrutto Setter for monatlichekostenbrutto
	 * @return Preise
	 */
	public function setMonatlichekostenbrutto(float $monatlichekostenbrutto): Preise {
		$this->monatlichekostenbrutto = $monatlichekostenbrutto;
		return $this;
	}

	/**
	 * @param Monatlichekostennetto $monatlichekostennetto Setter for monatlichekostennetto
	 * @return Preise
	 */
	public function setMonatlichekostennetto(Monatlichekostennetto $monatlichekostennetto): Preise {
		$this->monatlichekostennetto = $monatlichekostennetto;
		return $this;
	}

	/**
	 * @param float $mwstGesamt Setter for mwstGesamt
	 * @return Preise
	 */
	public function setMwstGesamt(float $mwstGesamt): Preise {
		$this->mwstGesamt = $mwstGesamt;
		return $this;
	}

	/**
	 * @param float $mwstSatz Setter for mwstSatz
	 * @return Preise
	 */
	public function setMwstSatz(float $mwstSatz): Preise {
		$this->mwstSatz = $mwstSatz;
		return $this;
	}

	/**
	 * @param float $nebenkosten Setter for nebenkosten
	 * @return Preise
	 */
	public function setNebenkosten(float $nebenkosten): Preise {
		$this->nebenkosten = $nebenkosten;
		return $this;
	}

	/**
	 * @param Nebenkostenprom2von $nebenkostenprom2von Setter for nebenkostenprom2von
	 * @return Preise
	 */
	public function setNebenkostenprom2von(Nebenkostenprom2von $nebenkostenprom2von): Preise {
		$this->nebenkostenprom2von = $nebenkostenprom2von;
		return $this;
	}

	/**
	 * @param float $nettokaltmiete Setter for nettokaltmiete
	 * @return Preise
	 */
	public function setNettokaltmiete(float $nettokaltmiete): Preise {
		$this->nettokaltmiete = $nettokaltmiete;
		return $this;
	}

	/**
	 * @param Nettomieteprom2von $nettomieteprom2von Setter for nettomieteprom2von
	 * @return Preise
	 */
	public function setNettomieteprom2von(Nettomieteprom2von $nettomieteprom2von): Preise {
		$this->nettomieteprom2von = $nettomieteprom2von;
		return $this;
	}

	/**
	 * @param float $nettorendite Setter for nettorendite
	 * @return Preise
	 */
	public function setNettorendite(float $nettorendite): Preise {
		$this->nettorendite = $nettorendite;
		return $this;
	}

	/**
	 * @param float $nettorenditeIst Setter for nettorenditeIst
	 * @return Preise
	 */
	public function setNettorenditeIst(float $nettorenditeIst): Preise {
		$this->nettorenditeIst = $nettorenditeIst;
		return $this;
	}

	/**
	 * @param float $nettorenditeSoll Setter for nettorenditeSoll
	 * @return Preise
	 */
	public function setNettorenditeSoll(float $nettorenditeSoll): Preise {
		$this->nettorenditeSoll = $nettorenditeSoll;
		return $this;
	}

	/**
	 * @param float $pacht Setter for pacht
	 * @return Preise
	 */
	public function setPacht(float $pacht): Preise {
		$this->pacht = $pacht;
		return $this;
	}

	/**
	 * @param float $pauschalmiete Setter for pauschalmiete
	 * @return Preise
	 */
	public function setPauschalmiete(float $pauschalmiete): Preise {
		$this->pauschalmiete = $pauschalmiete;
		return $this;
	}

	/**
	 * @param PreisZeiteinheit $preisZeiteinheit Setter for preisZeiteinheit
	 * @return Preise
	 */
	public function setPreisZeiteinheit(PreisZeiteinheit $preisZeiteinheit): Preise {
		$this->preisZeiteinheit = $preisZeiteinheit;
		return $this;
	}

	/**
	 * @param \DateTime $preisZeitraumBis Setter for preisZeitraumBis
	 * @return Preise
	 */
	public function setPreisZeitraumBis(\DateTime $preisZeitraumBis): Preise {
		$this->preisZeitraumBis = $preisZeitraumBis;
		return $this;
	}

	/**
	 * @param \DateTime $preisZeitraumVon Setter for preisZeitraumVon
	 * @return Preise
	 */
	public function setPreisZeitraumVon(\DateTime $preisZeitraumVon): Preise {
		$this->preisZeitraumVon = $preisZeitraumVon;
		return $this;
	}

	/**
	 * @param float $provisionbrutto Setter for provisionbrutto
	 * @return Preise
	 */
	public function setProvisionbrutto(float $provisionbrutto): Preise {
		$this->provisionbrutto = $provisionbrutto;
		return $this;
	}

	/**
	 * @param Provisionnetto $provisionnetto Setter for provisionnetto
	 * @return Preise
	 */
	public function setProvisionnetto(Provisionnetto $provisionnetto): Preise {
		$this->provisionnetto = $provisionnetto;
		return $this;
	}

	/**
	 * @param boolean $provisionspflichtig Setter for provisionspflichtig
	 * @return Preise
	 */
	public function setProvisionspflichtig(bool $provisionspflichtig): Preise {
		$this->provisionspflichtig = $provisionspflichtig;
		return $this;
	}

	/**
	 * @param ProvisionTeilen $provisionTeilen Setter for provisionTeilen
	 * @return Preise
	 */
	public function setProvisionTeilen(ProvisionTeilen $provisionTeilen): Preise {
		$this->provisionTeilen = $provisionTeilen;
		return $this;
	}

	/**
	 * @param float $richtpreis Setter for richtpreis
	 * @return Preise
	 */
	public function setRichtpreis(float $richtpreis): Preise {
		$this->richtpreis = $richtpreis;
		return $this;
	}

	/**
	 * @param float $richtpreisprom2 Setter for richtpreisprom2
	 * @return Preise
	 */
	public function setRichtpreisprom2(float $richtpreisprom2): Preise {
		$this->richtpreisprom2 = $richtpreisprom2;
		return $this;
	}

	/**
	 * @param Ruecklagenetto $ruecklagenetto Setter for ruecklagenetto
	 * @return Preise
	 */
	public function setRuecklagenetto(Ruecklagenetto $ruecklagenetto): Preise {
		$this->ruecklagenetto = $ruecklagenetto;
		return $this;
	}

	/**
	 * @param Sonstigekostennetto $sonstigekostennetto Setter for sonstigekostennetto
	 * @return Preise
	 */
	public function setSonstigekostennetto(Sonstigekostennetto $sonstigekostennetto): Preise {
		$this->sonstigekostennetto = $sonstigekostennetto;
		return $this;
	}

	/**
	 * @param Sonstigemietenetto $sonstigemietenetto Setter for sonstigemietenetto
	 * @return Preise
	 */
	public function setSonstigemietenetto(Sonstigemietenetto $sonstigemietenetto): Preise {
		$this->sonstigemietenetto = $sonstigemietenetto;
		return $this;
	}

	/**
	 * @param StpCarport $stpCarport Setter for stpCarport
	 * @return Preise
	 */
	public function setStpCarport(StpCarport $stpCarport): Preise {
		$this->stpCarport = $stpCarport;
		return $this;
	}

	/**
	 * @param StpDuplex $stpDuplex Setter for stpDuplex
	 * @return Preise
	 */
	public function setStpDuplex(StpDuplex $stpDuplex): Preise {
		$this->stpDuplex = $stpDuplex;
		return $this;
	}

	/**
	 * @param StpFreiplatz $stpFreiplatz Setter for stpFreiplatz
	 * @return Preise
	 */
	public function setStpFreiplatz(StpFreiplatz $stpFreiplatz): Preise {
		$this->stpFreiplatz = $stpFreiplatz;
		return $this;
	}

	/**
	 * @param StpGarage $stpGarage Setter for stpGarage
	 * @return Preise
	 */
	public function setStpGarage(StpGarage $stpGarage): Preise {
		$this->stpGarage = $stpGarage;
		return $this;
	}

	/**
	 * @param StpParkhaus $stpParkhaus Setter for stpParkhaus
	 * @return Preise
	 */
	public function setStpParkhaus(StpParkhaus $stpParkhaus): Preise {
		$this->stpParkhaus = $stpParkhaus;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $stpSonstige Setter for stpSonstige
	 * @return Preise
	 */
	public function setStpSonstige(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $stpSonstige): Preise {
		$this->stpSonstige = $stpSonstige;
		return $this;
	}

	/**
	 * @param StpTiefgarage $stpTiefgarage Setter for stpTiefgarage
	 * @return Preise
	 */
	public function setStpTiefgarage(StpTiefgarage $stpTiefgarage): Preise {
		$this->stpTiefgarage = $stpTiefgarage;
		return $this;
	}

	/**
	 * @param Summemietenetto $summemietenetto Setter for summemietenetto
	 * @return Preise
	 */
	public function setSummemietenetto(Summemietenetto $summemietenetto): Preise {
		$this->summemietenetto = $summemietenetto;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedAnyfield Setter for userDefinedAnyfield
	 * @return Preise
	 */
	public function setUserDefinedAnyfield(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedAnyfield): Preise {
		$this->userDefinedAnyfield = $userDefinedAnyfield;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedExtend Setter for userDefinedExtend
	 * @return Preise
	 */
	public function setUserDefinedExtend(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedExtend): Preise {
		$this->userDefinedExtend = $userDefinedExtend;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedSimplefield Setter for userDefinedSimplefield
	 * @return Preise
	 */
	public function setUserDefinedSimplefield(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedSimplefield): Preise {
		$this->userDefinedSimplefield = $userDefinedSimplefield;
		return $this;
	}

	/**
	 * @param Waehrung $waehrung Setter for waehrung
	 * @return Preise
	 */
	public function setWaehrung(Waehrung $waehrung): Preise {
		$this->waehrung = $waehrung;
		return $this;
	}

	/**
	 * @param float $warmmiete Setter for warmmiete
	 * @return Preise
	 */
	public function setWarmmiete(float $warmmiete): Preise {
		$this->warmmiete = $warmmiete;
		return $this;
	}

	/**
	 * @param string $xFache Setter for xFache
	 * @return Preise
	 */
	public function setXFache(string $xFache): Preise {
		$this->xFache = $xFache;
		return $this;
	}

	/**
	 * @param boolean $zzgMehrwertsteuer Setter for zzgMehrwertsteuer
	 * @return Preise
	 */
	public function setZzgMehrwertsteuer(bool $zzgMehrwertsteuer): Preise {
		$this->zzgMehrwertsteuer = $zzgMehrwertsteuer;
		return $this;
	}
}
