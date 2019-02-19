<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class UserDefinedAnyfield
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("user_defined_anyfield")
 */
class UserDefinedAnyfield implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

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
	protected $openimmo;

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
	public function getOpenimmo(): int {
		return $this->openimmo;
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
	 * @return UserDefinedAnyfield
	 */
	public function setAnbieter(int $anbieter): UserDefinedAnyfield {
		$this->anbieter = $anbieter;
		return $this;
	}

	/**
	 * @param int $anhaenge Setter for anhaenge
	 * @return UserDefinedAnyfield
	 */
	public function setAnhaenge(int $anhaenge): UserDefinedAnyfield {
		$this->anhaenge = $anhaenge;
		return $this;
	}

	/**
	 * @param int $ausstattung Setter for ausstattung
	 * @return UserDefinedAnyfield
	 */
	public function setAusstattung(int $ausstattung): UserDefinedAnyfield {
		$this->ausstattung = $ausstattung;
		return $this;
	}

	/**
	 * @param int $bieterverfahren Setter for bieterverfahren
	 * @return UserDefinedAnyfield
	 */
	public function setBieterverfahren(int $bieterverfahren): UserDefinedAnyfield {
		$this->bieterverfahren = $bieterverfahren;
		return $this;
	}

	/**
	 * @param int $flaechen Setter for flaechen
	 * @return UserDefinedAnyfield
	 */
	public function setFlaechen(int $flaechen): UserDefinedAnyfield {
		$this->flaechen = $flaechen;
		return $this;
	}

	/**
	 * @param int $freitexte Setter for freitexte
	 * @return UserDefinedAnyfield
	 */
	public function setFreitexte(int $freitexte): UserDefinedAnyfield {
		$this->freitexte = $freitexte;
		return $this;
	}

	/**
	 * @param int $geo Setter for geo
	 * @return UserDefinedAnyfield
	 */
	public function setGeo(int $geo): UserDefinedAnyfield {
		$this->geo = $geo;
		return $this;
	}

	/**
	 * @param int $immobilie Setter for immobilie
	 * @return UserDefinedAnyfield
	 */
	public function setImmobilie(int $immobilie): UserDefinedAnyfield {
		$this->immobilie = $immobilie;
		return $this;
	}

	/**
	 * @param int $infrastruktur Setter for infrastruktur
	 * @return UserDefinedAnyfield
	 */
	public function setInfrastruktur(int $infrastruktur): UserDefinedAnyfield {
		$this->infrastruktur = $infrastruktur;
		return $this;
	}

	/**
	 * @param int $kontaktperson Setter for kontaktperson
	 * @return UserDefinedAnyfield
	 */
	public function setKontaktperson(int $kontaktperson): UserDefinedAnyfield {
		$this->kontaktperson = $kontaktperson;
		return $this;
	}

	/**
	 * @param int $objektkategorie Setter for objektkategorie
	 * @return UserDefinedAnyfield
	 */
	public function setObjektkategorie(int $objektkategorie): UserDefinedAnyfield {
		$this->objektkategorie = $objektkategorie;
		return $this;
	}

	/**
	 * @param int $openimmo Setter for openimmo
	 * @return UserDefinedAnyfield
	 */
	public function setOpenimmo(int $openimmo): UserDefinedAnyfield {
		$this->openimmo = $openimmo;
		return $this;
	}

	/**
	 * @param int $preise Setter for preise
	 * @return UserDefinedAnyfield
	 */
	public function setPreise(int $preise): UserDefinedAnyfield {
		$this->preise = $preise;
		return $this;
	}

	/**
	 * @param int $verwaltungObjekt Setter for verwaltungObjekt
	 * @return UserDefinedAnyfield
	 */
	public function setVerwaltungObjekt(int $verwaltungObjekt): UserDefinedAnyfield {
		$this->verwaltungObjekt = $verwaltungObjekt;
		return $this;
	}

	/**
	 * @param int $verwaltungTechn Setter for verwaltungTechn
	 * @return UserDefinedAnyfield
	 */
	public function setVerwaltungTechn(int $verwaltungTechn): UserDefinedAnyfield {
		$this->verwaltungTechn = $verwaltungTechn;
		return $this;
	}

	/**
	 * @param int $weitereAdresse Setter for weitereAdresse
	 * @return UserDefinedAnyfield
	 */
	public function setWeitereAdresse(int $weitereAdresse): UserDefinedAnyfield {
		$this->weitereAdresse = $weitereAdresse;
		return $this;
	}

	/**
	 * @param int $zustandAngaben Setter for zustandAngaben
	 * @return UserDefinedAnyfield
	 */
	public function setZustandAngaben(int $zustandAngaben) {
		$this->zustandAngaben = $zustandAngaben;
		return $this;
	}
}
