<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Immobilie
 * Angaben einer einzelnen Immobile
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("immobilie")
 */
class Immobilie implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_immobilie';

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $anbieter;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Anhaenge") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Anhaenge
	 */
	protected $anhaenge;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Ausstattung") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Ausstattung
	 */
	protected $ausstattung;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Bewertung") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Bewertung
	 */
	protected $bewertung;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Bieterverfahren") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Bieterverfahren
	 */
	protected $bieterverfahren;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Flaechen") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Flaechen
	 */
	protected $flaechen;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Freitexte") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Freitexte
	 */
	protected $freitexte;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Geo") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Geo
	 */
	protected $geo;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Infrastruktur") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Infrastruktur
	 */
	protected $infrastruktur;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Kontaktperson") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Kontaktperson
	 */
	protected $kontaktperson;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Objektkategorie") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Objektkategorie
	 */
	protected $objektkategorie;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Preise") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Preise
	 */
	protected $preise;

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
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Versteigerung") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Versteigerung
	 */
	protected $versteigerung;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\VerwaltungObjekt") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\VerwaltungObjekt
	 */
	protected $verwaltungObjekt;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\VerwaltungTechn") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\VerwaltungTechn
	 */
	protected $verwaltungTechn;

	/**
	 * @XmlList (inline = true, entry = "weitere_adresse") 
	 * @Type ("array<Ujamii\OpenImmoTypo3\Domain\Model\WeitereAdresse>") 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ujamii\OpenImmoTypo3\Domain\Model\WeitereAdresse>
	 */
	protected $weitereAdresse;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\ZustandAngaben") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\ZustandAngaben
	 */
	protected $zustandAngaben;

	/**
	 * @return int
	 */
	public function getAnbieter(): int {
		return $this->anbieter;
	}

	/**
	 * @return Anhaenge
	 */
	public function getAnhaenge(): Anhaenge {
		return $this->anhaenge;
	}

	/**
	 * @return Ausstattung
	 */
	public function getAusstattung(): Ausstattung {
		return $this->ausstattung;
	}

	/**
	 * @return Bewertung
	 */
	public function getBewertung(): Bewertung {
		return $this->bewertung;
	}

	/**
	 * @return Bieterverfahren
	 */
	public function getBieterverfahren(): Bieterverfahren {
		return $this->bieterverfahren;
	}

	/**
	 * @return Flaechen
	 */
	public function getFlaechen(): Flaechen {
		return $this->flaechen;
	}

	/**
	 * @return Freitexte
	 */
	public function getFreitexte(): Freitexte {
		return $this->freitexte;
	}

	/**
	 * @return Geo
	 */
	public function getGeo(): Geo {
		return $this->geo;
	}

	/**
	 * @return Infrastruktur
	 */
	public function getInfrastruktur(): Infrastruktur {
		return $this->infrastruktur;
	}

	/**
	 * @return Kontaktperson
	 */
	public function getKontaktperson(): Kontaktperson {
		return $this->kontaktperson;
	}

	/**
	 * @return Objektkategorie
	 */
	public function getObjektkategorie(): Objektkategorie {
		return $this->objektkategorie;
	}

	/**
	 * @return Preise
	 */
	public function getPreise(): Preise {
		return $this->preise;
	}

	/**
	 * Returns array of UserDefinedAnyfield
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getUserDefinedAnyfield(): \TYPO3\CMS\Extbase\Persistence\ObjectStorage {
		return is_array($this->userDefinedAnyfield) ? self::arrayToObjectStorage($this->userDefinedAnyfield) : $this->userDefinedAnyfield;
	}

	/**
	 * Returns array of UserDefinedExtend
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getUserDefinedExtend(): \TYPO3\CMS\Extbase\Persistence\ObjectStorage {
		return is_array($this->userDefinedExtend) ? self::arrayToObjectStorage($this->userDefinedExtend) : $this->userDefinedExtend;
	}

	/**
	 * Returns array of UserDefinedSimplefield
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getUserDefinedSimplefield(): \TYPO3\CMS\Extbase\Persistence\ObjectStorage {
		return is_array($this->userDefinedSimplefield) ? self::arrayToObjectStorage($this->userDefinedSimplefield) : $this->userDefinedSimplefield;
	}

	/**
	 * @return Versteigerung
	 */
	public function getVersteigerung(): Versteigerung {
		return $this->versteigerung;
	}

	/**
	 * @return VerwaltungObjekt
	 */
	public function getVerwaltungObjekt(): VerwaltungObjekt {
		return $this->verwaltungObjekt;
	}

	/**
	 * @return VerwaltungTechn
	 */
	public function getVerwaltungTechn(): VerwaltungTechn {
		return $this->verwaltungTechn;
	}

	/**
	 * Returns array of WeitereAdresse
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getWeitereAdresse(): \TYPO3\CMS\Extbase\Persistence\ObjectStorage {
		return is_array($this->weitereAdresse) ? self::arrayToObjectStorage($this->weitereAdresse) : $this->weitereAdresse;
	}

	/**
	 * @return ZustandAngaben
	 */
	public function getZustandAngaben(): ZustandAngaben {
		return $this->zustandAngaben;
	}

	/**
	 * @param int $anbieter Setter for anbieter
	 * @return Immobilie
	 */
	public function setAnbieter(int $anbieter) {
		$this->anbieter = $anbieter;
		return $this;
	}

	/**
	 * @param Anhaenge $anhaenge Setter for anhaenge
	 * @return Immobilie
	 */
	public function setAnhaenge(Anhaenge $anhaenge): Immobilie {
		$this->anhaenge = $anhaenge;
		return $this;
	}

	/**
	 * @param Ausstattung $ausstattung Setter for ausstattung
	 * @return Immobilie
	 */
	public function setAusstattung(Ausstattung $ausstattung): Immobilie {
		$this->ausstattung = $ausstattung;
		return $this;
	}

	/**
	 * @param Bewertung $bewertung Setter for bewertung
	 * @return Immobilie
	 */
	public function setBewertung(Bewertung $bewertung): Immobilie {
		$this->bewertung = $bewertung;
		return $this;
	}

	/**
	 * @param Bieterverfahren $bieterverfahren Setter for bieterverfahren
	 * @return Immobilie
	 */
	public function setBieterverfahren(Bieterverfahren $bieterverfahren): Immobilie {
		$this->bieterverfahren = $bieterverfahren;
		return $this;
	}

	/**
	 * @param Flaechen $flaechen Setter for flaechen
	 * @return Immobilie
	 */
	public function setFlaechen(Flaechen $flaechen): Immobilie {
		$this->flaechen = $flaechen;
		return $this;
	}

	/**
	 * @param Freitexte $freitexte Setter for freitexte
	 * @return Immobilie
	 */
	public function setFreitexte(Freitexte $freitexte): Immobilie {
		$this->freitexte = $freitexte;
		return $this;
	}

	/**
	 * @param Geo $geo Setter for geo
	 * @return Immobilie
	 */
	public function setGeo(Geo $geo): Immobilie {
		$this->geo = $geo;
		return $this;
	}

	/**
	 * @param Infrastruktur $infrastruktur Setter for infrastruktur
	 * @return Immobilie
	 */
	public function setInfrastruktur(Infrastruktur $infrastruktur): Immobilie {
		$this->infrastruktur = $infrastruktur;
		return $this;
	}

	/**
	 * @param Kontaktperson $kontaktperson Setter for kontaktperson
	 * @return Immobilie
	 */
	public function setKontaktperson(Kontaktperson $kontaktperson): Immobilie {
		$this->kontaktperson = $kontaktperson;
		return $this;
	}

	/**
	 * @param Objektkategorie $objektkategorie Setter for objektkategorie
	 * @return Immobilie
	 */
	public function setObjektkategorie(Objektkategorie $objektkategorie): Immobilie {
		$this->objektkategorie = $objektkategorie;
		return $this;
	}

	/**
	 * @param Preise $preise Setter for preise
	 * @return Immobilie
	 */
	public function setPreise(Preise $preise): Immobilie {
		$this->preise = $preise;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedAnyfield Setter for userDefinedAnyfield
	 * @return Immobilie
	 */
	public function setUserDefinedAnyfield(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedAnyfield): Immobilie {
		$this->userDefinedAnyfield = $userDefinedAnyfield;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedExtend Setter for userDefinedExtend
	 * @return Immobilie
	 */
	public function setUserDefinedExtend(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedExtend): Immobilie {
		$this->userDefinedExtend = $userDefinedExtend;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedSimplefield Setter for userDefinedSimplefield
	 * @return Immobilie
	 */
	public function setUserDefinedSimplefield(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedSimplefield): Immobilie {
		$this->userDefinedSimplefield = $userDefinedSimplefield;
		return $this;
	}

	/**
	 * @param Versteigerung $versteigerung Setter for versteigerung
	 * @return Immobilie
	 */
	public function setVersteigerung(Versteigerung $versteigerung): Immobilie {
		$this->versteigerung = $versteigerung;
		return $this;
	}

	/**
	 * @param VerwaltungObjekt $verwaltungObjekt Setter for verwaltungObjekt
	 * @return Immobilie
	 */
	public function setVerwaltungObjekt(VerwaltungObjekt $verwaltungObjekt): Immobilie {
		$this->verwaltungObjekt = $verwaltungObjekt;
		return $this;
	}

	/**
	 * @param VerwaltungTechn $verwaltungTechn Setter for verwaltungTechn
	 * @return Immobilie
	 */
	public function setVerwaltungTechn(VerwaltungTechn $verwaltungTechn): Immobilie {
		$this->verwaltungTechn = $verwaltungTechn;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $weitereAdresse Setter for weitereAdresse
	 * @return Immobilie
	 */
	public function setWeitereAdresse(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $weitereAdresse): Immobilie {
		$this->weitereAdresse = $weitereAdresse;
		return $this;
	}

	/**
	 * @param ZustandAngaben $zustandAngaben Setter for zustandAngaben
	 * @return Immobilie
	 */
	public function setZustandAngaben(ZustandAngaben $zustandAngaben): Immobilie {
		$this->zustandAngaben = $zustandAngaben;
		return $this;
	}
}
