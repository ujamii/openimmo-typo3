<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Geo
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("geo")
 */
class Geo implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 * @Type ("int") 
	 * @var int
	 */
	protected $anzahlEtagen;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $bundesland;

	/**
	 * @Type ("int") 
	 * @var int
	 */
	protected $etage;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $flur;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $flurstueck;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $gemarkung;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $gemeindecode;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Geokoordinaten") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Geokoordinaten
	 */
	protected $geokoordinaten;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $hausnummer;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $immobilie;

	/**
	 * @Type ("boolean") 
	 * @var boolean
	 */
	protected $kartenMakro;

	/**
	 * @Type ("boolean") 
	 * @var boolean
	 */
	protected $kartenMikro;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\LageGebiet") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\LageGebiet
	 */
	protected $lageGebiet;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\LageImBau") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\LageImBau
	 */
	protected $lageImBau;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Land") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Land
	 */
	protected $land;

	/**
	 * @Type ("boolean") 
	 * @var boolean
	 */
	protected $luftbildern;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $ort;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $plz;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $regionalerZusatz;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $strasse;

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
	 * @Type ("boolean") 
	 * @var boolean
	 */
	protected $virtuelletour;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $wohnungsnr;

	/**
	 * @return int
	 */
	public function getAnzahlEtagen(): int {
		return $this->anzahlEtagen;
	}

	/**
	 * @return string
	 */
	public function getBundesland(): string {
		return $this->bundesland;
	}

	/**
	 * @return int
	 */
	public function getEtage(): int {
		return $this->etage;
	}

	/**
	 * @return string
	 */
	public function getFlur(): string {
		return $this->flur;
	}

	/**
	 * @return string
	 */
	public function getFlurstueck(): string {
		return $this->flurstueck;
	}

	/**
	 * @return string
	 */
	public function getGemarkung(): string {
		return $this->gemarkung;
	}

	/**
	 * @return string
	 */
	public function getGemeindecode(): string {
		return $this->gemeindecode;
	}

	/**
	 * @return Geokoordinaten
	 */
	public function getGeokoordinaten(): Geokoordinaten {
		return $this->geokoordinaten;
	}

	/**
	 * @return string
	 */
	public function getHausnummer(): string {
		return $this->hausnummer;
	}

	/**
	 * @return int
	 */
	public function getImmobilie(): int {
		return $this->immobilie;
	}

	/**
	 * @return boolean
	 */
	public function getKartenMakro(): bool {
		return $this->kartenMakro;
	}

	/**
	 * @return boolean
	 */
	public function getKartenMikro(): bool {
		return $this->kartenMikro;
	}

	/**
	 * @return LageGebiet
	 */
	public function getLageGebiet(): LageGebiet {
		return $this->lageGebiet;
	}

	/**
	 * @return LageImBau
	 */
	public function getLageImBau(): LageImBau {
		return $this->lageImBau;
	}

	/**
	 * @return Land
	 */
	public function getLand(): Land {
		return $this->land;
	}

	/**
	 * @return boolean
	 */
	public function getLuftbildern(): bool {
		return $this->luftbildern;
	}

	/**
	 * @return string
	 */
	public function getOrt(): string {
		return $this->ort;
	}

	/**
	 * @return string
	 */
	public function getPlz(): string {
		return $this->plz;
	}

	/**
	 * @return string
	 */
	public function getRegionalerZusatz(): string {
		return $this->regionalerZusatz;
	}

	/**
	 * @return string
	 */
	public function getStrasse(): string {
		return $this->strasse;
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
	 * @return boolean
	 */
	public function getVirtuelletour(): bool {
		return $this->virtuelletour;
	}

	/**
	 * @return string
	 */
	public function getWohnungsnr(): string {
		return $this->wohnungsnr;
	}

	/**
	 * @param int $anzahlEtagen Setter for anzahlEtagen
	 * @return Geo
	 */
	public function setAnzahlEtagen(int $anzahlEtagen): Geo {
		$this->anzahlEtagen = $anzahlEtagen;
		return $this;
	}

	/**
	 * @param string $bundesland Setter for bundesland
	 * @return Geo
	 */
	public function setBundesland(string $bundesland): Geo {
		$this->bundesland = $bundesland;
		return $this;
	}

	/**
	 * @param int $etage Setter for etage
	 * @return Geo
	 */
	public function setEtage(int $etage): Geo {
		$this->etage = $etage;
		return $this;
	}

	/**
	 * @param string $flur Setter for flur
	 * @return Geo
	 */
	public function setFlur(string $flur): Geo {
		$this->flur = $flur;
		return $this;
	}

	/**
	 * @param string $flurstueck Setter for flurstueck
	 * @return Geo
	 */
	public function setFlurstueck(string $flurstueck): Geo {
		$this->flurstueck = $flurstueck;
		return $this;
	}

	/**
	 * @param string $gemarkung Setter for gemarkung
	 * @return Geo
	 */
	public function setGemarkung(string $gemarkung): Geo {
		$this->gemarkung = $gemarkung;
		return $this;
	}

	/**
	 * @param string $gemeindecode Setter for gemeindecode
	 * @return Geo
	 */
	public function setGemeindecode(string $gemeindecode): Geo {
		$this->gemeindecode = $gemeindecode;
		return $this;
	}

	/**
	 * @param Geokoordinaten $geokoordinaten Setter for geokoordinaten
	 * @return Geo
	 */
	public function setGeokoordinaten(Geokoordinaten $geokoordinaten): Geo {
		$this->geokoordinaten = $geokoordinaten;
		return $this;
	}

	/**
	 * @param string $hausnummer Setter for hausnummer
	 * @return Geo
	 */
	public function setHausnummer(string $hausnummer): Geo {
		$this->hausnummer = $hausnummer;
		return $this;
	}

	/**
	 * @param int $immobilie Setter for immobilie
	 * @return Geo
	 */
	public function setImmobilie(int $immobilie) {
		$this->immobilie = $immobilie;
		return $this;
	}

	/**
	 * @param boolean $kartenMakro Setter for kartenMakro
	 * @return Geo
	 */
	public function setKartenMakro(bool $kartenMakro): Geo {
		$this->kartenMakro = $kartenMakro;
		return $this;
	}

	/**
	 * @param boolean $kartenMikro Setter for kartenMikro
	 * @return Geo
	 */
	public function setKartenMikro(bool $kartenMikro): Geo {
		$this->kartenMikro = $kartenMikro;
		return $this;
	}

	/**
	 * @param LageGebiet $lageGebiet Setter for lageGebiet
	 * @return Geo
	 */
	public function setLageGebiet(LageGebiet $lageGebiet): Geo {
		$this->lageGebiet = $lageGebiet;
		return $this;
	}

	/**
	 * @param LageImBau $lageImBau Setter for lageImBau
	 * @return Geo
	 */
	public function setLageImBau(LageImBau $lageImBau): Geo {
		$this->lageImBau = $lageImBau;
		return $this;
	}

	/**
	 * @param Land $land Setter for land
	 * @return Geo
	 */
	public function setLand(Land $land): Geo {
		$this->land = $land;
		return $this;
	}

	/**
	 * @param boolean $luftbildern Setter for luftbildern
	 * @return Geo
	 */
	public function setLuftbildern(bool $luftbildern): Geo {
		$this->luftbildern = $luftbildern;
		return $this;
	}

	/**
	 * @param string $ort Setter for ort
	 * @return Geo
	 */
	public function setOrt(string $ort): Geo {
		$this->ort = $ort;
		return $this;
	}

	/**
	 * @param string $plz Setter for plz
	 * @return Geo
	 */
	public function setPlz(string $plz): Geo {
		$this->plz = $plz;
		return $this;
	}

	/**
	 * @param string $regionalerZusatz Setter for regionalerZusatz
	 * @return Geo
	 */
	public function setRegionalerZusatz(string $regionalerZusatz): Geo {
		$this->regionalerZusatz = $regionalerZusatz;
		return $this;
	}

	/**
	 * @param string $strasse Setter for strasse
	 * @return Geo
	 */
	public function setStrasse(string $strasse): Geo {
		$this->strasse = $strasse;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedAnyfield Setter for userDefinedAnyfield
	 * @return Geo
	 */
	public function setUserDefinedAnyfield(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedAnyfield): Geo {
		$this->userDefinedAnyfield = $userDefinedAnyfield;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedExtend Setter for userDefinedExtend
	 * @return Geo
	 */
	public function setUserDefinedExtend(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedExtend): Geo {
		$this->userDefinedExtend = $userDefinedExtend;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedSimplefield Setter for userDefinedSimplefield
	 * @return Geo
	 */
	public function setUserDefinedSimplefield(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedSimplefield): Geo {
		$this->userDefinedSimplefield = $userDefinedSimplefield;
		return $this;
	}

	/**
	 * @param boolean $virtuelletour Setter for virtuelletour
	 * @return Geo
	 */
	public function setVirtuelletour(bool $virtuelletour): Geo {
		$this->virtuelletour = $virtuelletour;
		return $this;
	}

	/**
	 * @param string $wohnungsnr Setter for wohnungsnr
	 * @return Geo
	 */
	public function setWohnungsnr(string $wohnungsnr): Geo {
		$this->wohnungsnr = $wohnungsnr;
		return $this;
	}
}
