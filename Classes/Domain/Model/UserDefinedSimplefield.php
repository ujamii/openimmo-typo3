<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class UserDefinedSimplefield
 * Benutzerdefinierte Angaben
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("user_defined_simplefield")
 */
class UserDefinedSimplefield implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

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
	 * required
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @var string
	 */
	protected $feldname;

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
	 * @return string
	 */
	public function getFeldname(): string {
		return $this->feldname;
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
	 * @return UserDefinedSimplefield
	 */
	public function setAnbieter(int $anbieter): UserDefinedSimplefield {
		$this->anbieter = $anbieter;
		return $this;
	}

	/**
	 * @param int $anhaenge Setter for anhaenge
	 * @return UserDefinedSimplefield
	 */
	public function setAnhaenge(int $anhaenge): UserDefinedSimplefield {
		$this->anhaenge = $anhaenge;
		return $this;
	}

	/**
	 * @param int $ausstattung Setter for ausstattung
	 * @return UserDefinedSimplefield
	 */
	public function setAusstattung(int $ausstattung): UserDefinedSimplefield {
		$this->ausstattung = $ausstattung;
		return $this;
	}

	/**
	 * @param int $bieterverfahren Setter for bieterverfahren
	 * @return UserDefinedSimplefield
	 */
	public function setBieterverfahren(int $bieterverfahren): UserDefinedSimplefield {
		$this->bieterverfahren = $bieterverfahren;
		return $this;
	}

	/**
	 * @param string $feldname Setter for feldname
	 * @return UserDefinedSimplefield
	 */
	public function setFeldname(string $feldname): UserDefinedSimplefield {
		$this->feldname = $feldname;
		return $this;
	}

	/**
	 * @param int $flaechen Setter for flaechen
	 * @return UserDefinedSimplefield
	 */
	public function setFlaechen(int $flaechen): UserDefinedSimplefield {
		$this->flaechen = $flaechen;
		return $this;
	}

	/**
	 * @param int $freitexte Setter for freitexte
	 * @return UserDefinedSimplefield
	 */
	public function setFreitexte(int $freitexte): UserDefinedSimplefield {
		$this->freitexte = $freitexte;
		return $this;
	}

	/**
	 * @param int $geo Setter for geo
	 * @return UserDefinedSimplefield
	 */
	public function setGeo(int $geo): UserDefinedSimplefield {
		$this->geo = $geo;
		return $this;
	}

	/**
	 * @param int $immobilie Setter for immobilie
	 * @return UserDefinedSimplefield
	 */
	public function setImmobilie(int $immobilie): UserDefinedSimplefield {
		$this->immobilie = $immobilie;
		return $this;
	}

	/**
	 * @param int $infrastruktur Setter for infrastruktur
	 * @return UserDefinedSimplefield
	 */
	public function setInfrastruktur(int $infrastruktur): UserDefinedSimplefield {
		$this->infrastruktur = $infrastruktur;
		return $this;
	}

	/**
	 * @param int $kontaktperson Setter for kontaktperson
	 * @return UserDefinedSimplefield
	 */
	public function setKontaktperson(int $kontaktperson): UserDefinedSimplefield {
		$this->kontaktperson = $kontaktperson;
		return $this;
	}

	/**
	 * @param int $objektkategorie Setter for objektkategorie
	 * @return UserDefinedSimplefield
	 */
	public function setObjektkategorie(int $objektkategorie): UserDefinedSimplefield {
		$this->objektkategorie = $objektkategorie;
		return $this;
	}

	/**
	 * @param int $preise Setter for preise
	 * @return UserDefinedSimplefield
	 */
	public function setPreise(int $preise): UserDefinedSimplefield {
		$this->preise = $preise;
		return $this;
	}

	/**
	 * @param int $verwaltungObjekt Setter for verwaltungObjekt
	 * @return UserDefinedSimplefield
	 */
	public function setVerwaltungObjekt(int $verwaltungObjekt): UserDefinedSimplefield {
		$this->verwaltungObjekt = $verwaltungObjekt;
		return $this;
	}

	/**
	 * @param int $verwaltungTechn Setter for verwaltungTechn
	 * @return UserDefinedSimplefield
	 */
	public function setVerwaltungTechn(int $verwaltungTechn): UserDefinedSimplefield {
		$this->verwaltungTechn = $verwaltungTechn;
		return $this;
	}

	/**
	 * @param int $weitereAdresse Setter for weitereAdresse
	 * @return UserDefinedSimplefield
	 */
	public function setWeitereAdresse(int $weitereAdresse): UserDefinedSimplefield {
		$this->weitereAdresse = $weitereAdresse;
		return $this;
	}

	/**
	 * @param int $zustandAngaben Setter for zustandAngaben
	 * @return UserDefinedSimplefield
	 */
	public function setZustandAngaben(int $zustandAngaben) {
		$this->zustandAngaben = $zustandAngaben;
		return $this;
	}
}
