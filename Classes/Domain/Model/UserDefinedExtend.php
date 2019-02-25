<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class UserDefinedExtend
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("user_defined_extend")
 */
class UserDefinedExtend implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_userdefinedextend';

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude ()
	 * @var int
	 */
	protected $anbieter;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude ()
	 * @var int
	 */
	protected $anhaenge;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude ()
	 * @var int
	 */
	protected $ausstattung;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude ()
	 * @var int
	 */
	protected $bieterverfahren;

	/**
	 * @XmlList (inline = true, entry = "feld") 
	 * @Type ("string") 
	 * @var string[]
	 */
	protected $feld;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude ()
	 * @var int
	 */
	protected $flaechen;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude ()
	 * @var int
	 */
	protected $freitexte;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude ()
	 * @var int
	 */
	protected $geo;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude ()
	 * @var int
	 */
	protected $immobilie;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude ()
	 * @var int
	 */
	protected $infrastruktur;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude ()
	 * @var int
	 */
	protected $kontaktperson;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude ()
	 * @var int
	 */
	protected $objektkategorie;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude ()
	 * @var int
	 */
	protected $preise;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude ()
	 * @var int
	 */
	protected $verwaltungObjekt;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude ()
	 * @var int
	 */
	protected $verwaltungTechn;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude ()
	 * @var int
	 */
	protected $weitereAdresse;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $zustandAngaben;

	/**
	 * @return int
	 */
	public function getAnbieter(): int {
		return $this->anbieter;
	}

	/**
	 * @return int
	 */
	public function getAnhaenge(): int {
		return $this->anhaenge;
	}

	/**
	 * @return int
	 */
	public function getAusstattung(): int {
		return $this->ausstattung;
	}

	/**
	 * @return int
	 */
	public function getBieterverfahren(): int {
		return $this->bieterverfahren;
	}

	/**
	 * Returns array of string
	 *
	 * @return array
	 */
	public function getFeld(): array {
		return $this->feld;
	}

	/**
	 * @return int
	 */
	public function getFlaechen(): int {
		return $this->flaechen;
	}

	/**
	 * @return int
	 */
	public function getFreitexte(): int {
		return $this->freitexte;
	}

	/**
	 * @return int
	 */
	public function getGeo(): int {
		return $this->geo;
	}

	/**
	 * @return int
	 */
	public function getImmobilie(): int {
		return $this->immobilie;
	}

	/**
	 * @return int
	 */
	public function getInfrastruktur(): int {
		return $this->infrastruktur;
	}

	/**
	 * @return int
	 */
	public function getKontaktperson(): int {
		return $this->kontaktperson;
	}

	/**
	 * @return int
	 */
	public function getObjektkategorie(): int {
		return $this->objektkategorie;
	}

	/**
	 * @return int
	 */
	public function getPreise(): int {
		return $this->preise;
	}

	/**
	 * @return int
	 */
	public function getVerwaltungObjekt(): int {
		return $this->verwaltungObjekt;
	}

	/**
	 * @return int
	 */
	public function getVerwaltungTechn(): int {
		return $this->verwaltungTechn;
	}

	/**
	 * @return int
	 */
	public function getWeitereAdresse(): int {
		return $this->weitereAdresse;
	}

	/**
	 * @return int
	 */
	public function getZustandAngaben(): int {
		return $this->zustandAngaben;
	}

	/**
	 * @param int $anbieter Setter for anbieter
	 * @return UserDefinedExtend
	 */
	public function setAnbieter(int $anbieter): UserDefinedExtend {
		$this->anbieter = $anbieter;
		return $this;
	}

	/**
	 * @param int $anhaenge Setter for anhaenge
	 * @return UserDefinedExtend
	 */
	public function setAnhaenge(int $anhaenge): UserDefinedExtend {
		$this->anhaenge = $anhaenge;
		return $this;
	}

	/**
	 * @param int $ausstattung Setter for ausstattung
	 * @return UserDefinedExtend
	 */
	public function setAusstattung(int $ausstattung): UserDefinedExtend {
		$this->ausstattung = $ausstattung;
		return $this;
	}

	/**
	 * @param int $bieterverfahren Setter for bieterverfahren
	 * @return UserDefinedExtend
	 */
	public function setBieterverfahren(int $bieterverfahren): UserDefinedExtend {
		$this->bieterverfahren = $bieterverfahren;
		return $this;
	}

	/**
	 * @param array $feld Setter for feld
	 * @return UserDefinedExtend
	 */
	public function setFeld(array $feld): UserDefinedExtend {
		$this->feld = $feld;
		return $this;
	}

	/**
	 * @param int $flaechen Setter for flaechen
	 * @return UserDefinedExtend
	 */
	public function setFlaechen(int $flaechen): UserDefinedExtend {
		$this->flaechen = $flaechen;
		return $this;
	}

	/**
	 * @param int $freitexte Setter for freitexte
	 * @return UserDefinedExtend
	 */
	public function setFreitexte(int $freitexte): UserDefinedExtend {
		$this->freitexte = $freitexte;
		return $this;
	}

	/**
	 * @param int $geo Setter for geo
	 * @return UserDefinedExtend
	 */
	public function setGeo(int $geo): UserDefinedExtend {
		$this->geo = $geo;
		return $this;
	}

	/**
	 * @param int $immobilie Setter for immobilie
	 * @return UserDefinedExtend
	 */
	public function setImmobilie(int $immobilie): UserDefinedExtend {
		$this->immobilie = $immobilie;
		return $this;
	}

	/**
	 * @param int $infrastruktur Setter for infrastruktur
	 * @return UserDefinedExtend
	 */
	public function setInfrastruktur(int $infrastruktur): UserDefinedExtend {
		$this->infrastruktur = $infrastruktur;
		return $this;
	}

	/**
	 * @param int $kontaktperson Setter for kontaktperson
	 * @return UserDefinedExtend
	 */
	public function setKontaktperson(int $kontaktperson): UserDefinedExtend {
		$this->kontaktperson = $kontaktperson;
		return $this;
	}

	/**
	 * @param int $objektkategorie Setter for objektkategorie
	 * @return UserDefinedExtend
	 */
	public function setObjektkategorie(int $objektkategorie): UserDefinedExtend {
		$this->objektkategorie = $objektkategorie;
		return $this;
	}

	/**
	 * @param int $preise Setter for preise
	 * @return UserDefinedExtend
	 */
	public function setPreise(int $preise): UserDefinedExtend {
		$this->preise = $preise;
		return $this;
	}

	/**
	 * @param int $verwaltungObjekt Setter for verwaltungObjekt
	 * @return UserDefinedExtend
	 */
	public function setVerwaltungObjekt(int $verwaltungObjekt): UserDefinedExtend {
		$this->verwaltungObjekt = $verwaltungObjekt;
		return $this;
	}

	/**
	 * @param int $verwaltungTechn Setter for verwaltungTechn
	 * @return UserDefinedExtend
	 */
	public function setVerwaltungTechn(int $verwaltungTechn): UserDefinedExtend {
		$this->verwaltungTechn = $verwaltungTechn;
		return $this;
	}

	/**
	 * @param int $weitereAdresse Setter for weitereAdresse
	 * @return UserDefinedExtend
	 */
	public function setWeitereAdresse(int $weitereAdresse): UserDefinedExtend {
		$this->weitereAdresse = $weitereAdresse;
		return $this;
	}

	/**
	 * @param int $zustandAngaben Setter for zustandAngaben
	 * @return UserDefinedExtend
	 */
	public function setZustandAngaben(int $zustandAngaben) {
		$this->zustandAngaben = $zustandAngaben;
		return $this;
	}
}
