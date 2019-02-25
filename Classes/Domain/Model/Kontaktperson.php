<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Kontaktperson
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("kontaktperson")
 */
class Kontaktperson implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_kontaktperson';

	/**
	 * @Type ("boolean") 
	 * @var boolean
	 */
	protected $adressfreigabe;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $anrede;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $anredeBrief;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $emailDirekt;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $emailFeedback;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $emailPrivat;

	/**
	 * @XmlList (inline = true, entry = "email_sonstige") 
	 * @Type ("array<Ujamii\OpenImmoTypo3\Domain\Model\EmailSonstige>") 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ujamii\OpenImmoTypo3\Domain\Model\EmailSonstige>
	 */
	protected $emailSonstige;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $emailZentrale;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $firma;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Foto") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Foto
	 */
	protected $foto;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $freitextfeld;

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
	 * @Type ("string") 
	 * @var string
	 */
	protected $immobilientreuhaenderid;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Land") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Land
	 */
	protected $land;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $name;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $ort;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $personennummer;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $plz;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $position;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $postfach;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $postfOrt;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $postfPlz;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $referenzId;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $strasse;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $telDurchw;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $telFax;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $telHandy;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $telPrivat;

	/**
	 * @XmlList (inline = true, entry = "tel_sonstige") 
	 * @Type ("array<Ujamii\OpenImmoTypo3\Domain\Model\TelSonstige>") 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ujamii\OpenImmoTypo3\Domain\Model\TelSonstige>
	 */
	protected $telSonstige;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $telZentrale;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $titel;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $url;

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
	 * @Type ("string") 
	 * @var string
	 */
	protected $vorname;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $zusatzfeld;

	/**
	 * @return boolean
	 */
	public function getAdressfreigabe(): bool {
		return $this->adressfreigabe;
	}

	/**
	 * @return string
	 */
	public function getAnrede(): string {
		return $this->anrede;
	}

	/**
	 * @return string
	 */
	public function getAnredeBrief(): string {
		return $this->anredeBrief;
	}

	/**
	 * @return string
	 */
	public function getEmailDirekt(): string {
		return $this->emailDirekt;
	}

	/**
	 * @return string
	 */
	public function getEmailFeedback(): string {
		return $this->emailFeedback;
	}

	/**
	 * @return string
	 */
	public function getEmailPrivat(): string {
		return $this->emailPrivat;
	}

	/**
	 * Returns array of EmailSonstige
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getEmailSonstige(): \TYPO3\CMS\Extbase\Persistence\ObjectStorage {
		return is_array($this->emailSonstige) ? self::arrayToObjectStorage($this->emailSonstige) : $this->emailSonstige;
	}

	/**
	 * @return string
	 */
	public function getEmailZentrale(): string {
		return $this->emailZentrale;
	}

	/**
	 * @return string
	 */
	public function getFirma(): string {
		return $this->firma;
	}

	/**
	 * @return Foto
	 */
	public function getFoto(): Foto {
		return $this->foto;
	}

	/**
	 * @return string
	 */
	public function getFreitextfeld(): string {
		return $this->freitextfeld;
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
	 * @return string
	 */
	public function getImmobilientreuhaenderid(): string {
		return $this->immobilientreuhaenderid;
	}

	/**
	 * @return Land
	 */
	public function getLand(): Land {
		return $this->land;
	}

	/**
	 * @return string
	 */
	public function getName(): string {
		return $this->name;
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
	public function getPersonennummer(): string {
		return $this->personennummer;
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
	public function getPosition(): string {
		return $this->position;
	}

	/**
	 * @return string
	 */
	public function getPostfach(): string {
		return $this->postfach;
	}

	/**
	 * @return string
	 */
	public function getPostfOrt(): string {
		return $this->postfOrt;
	}

	/**
	 * @return string
	 */
	public function getPostfPlz(): string {
		return $this->postfPlz;
	}

	/**
	 * @return string
	 */
	public function getReferenzId(): string {
		return $this->referenzId;
	}

	/**
	 * @return string
	 */
	public function getStrasse(): string {
		return $this->strasse;
	}

	/**
	 * @return string
	 */
	public function getTelDurchw(): string {
		return $this->telDurchw;
	}

	/**
	 * @return string
	 */
	public function getTelFax(): string {
		return $this->telFax;
	}

	/**
	 * @return string
	 */
	public function getTelHandy(): string {
		return $this->telHandy;
	}

	/**
	 * @return string
	 */
	public function getTelPrivat(): string {
		return $this->telPrivat;
	}

	/**
	 * Returns array of TelSonstige
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getTelSonstige(): \TYPO3\CMS\Extbase\Persistence\ObjectStorage {
		return is_array($this->telSonstige) ? self::arrayToObjectStorage($this->telSonstige) : $this->telSonstige;
	}

	/**
	 * @return string
	 */
	public function getTelZentrale(): string {
		return $this->telZentrale;
	}

	/**
	 * @return string
	 */
	public function getTitel(): string {
		return $this->titel;
	}

	/**
	 * @return string
	 */
	public function getUrl(): string {
		return $this->url;
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
	 * @return string
	 */
	public function getVorname(): string {
		return $this->vorname;
	}

	/**
	 * @return string
	 */
	public function getZusatzfeld(): string {
		return $this->zusatzfeld;
	}

	/**
	 * @param boolean $adressfreigabe Setter for adressfreigabe
	 * @return Kontaktperson
	 */
	public function setAdressfreigabe(bool $adressfreigabe): Kontaktperson {
		$this->adressfreigabe = $adressfreigabe;
		return $this;
	}

	/**
	 * @param string $anrede Setter for anrede
	 * @return Kontaktperson
	 */
	public function setAnrede(string $anrede): Kontaktperson {
		$this->anrede = $anrede;
		return $this;
	}

	/**
	 * @param string $anredeBrief Setter for anredeBrief
	 * @return Kontaktperson
	 */
	public function setAnredeBrief(string $anredeBrief): Kontaktperson {
		$this->anredeBrief = $anredeBrief;
		return $this;
	}

	/**
	 * @param string $emailDirekt Setter for emailDirekt
	 * @return Kontaktperson
	 */
	public function setEmailDirekt(string $emailDirekt): Kontaktperson {
		$this->emailDirekt = $emailDirekt;
		return $this;
	}

	/**
	 * @param string $emailFeedback Setter for emailFeedback
	 * @return Kontaktperson
	 */
	public function setEmailFeedback(string $emailFeedback): Kontaktperson {
		$this->emailFeedback = $emailFeedback;
		return $this;
	}

	/**
	 * @param string $emailPrivat Setter for emailPrivat
	 * @return Kontaktperson
	 */
	public function setEmailPrivat(string $emailPrivat): Kontaktperson {
		$this->emailPrivat = $emailPrivat;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $emailSonstige Setter for emailSonstige
	 * @return Kontaktperson
	 */
	public function setEmailSonstige(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $emailSonstige): Kontaktperson {
		$this->emailSonstige = $emailSonstige;
		return $this;
	}

	/**
	 * @param string $emailZentrale Setter for emailZentrale
	 * @return Kontaktperson
	 */
	public function setEmailZentrale(string $emailZentrale): Kontaktperson {
		$this->emailZentrale = $emailZentrale;
		return $this;
	}

	/**
	 * @param string $firma Setter for firma
	 * @return Kontaktperson
	 */
	public function setFirma(string $firma): Kontaktperson {
		$this->firma = $firma;
		return $this;
	}

	/**
	 * @param Foto $foto Setter for foto
	 * @return Kontaktperson
	 */
	public function setFoto(Foto $foto): Kontaktperson {
		$this->foto = $foto;
		return $this;
	}

	/**
	 * @param string $freitextfeld Setter for freitextfeld
	 * @return Kontaktperson
	 */
	public function setFreitextfeld(string $freitextfeld): Kontaktperson {
		$this->freitextfeld = $freitextfeld;
		return $this;
	}

	/**
	 * @param string $hausnummer Setter for hausnummer
	 * @return Kontaktperson
	 */
	public function setHausnummer(string $hausnummer): Kontaktperson {
		$this->hausnummer = $hausnummer;
		return $this;
	}

	/**
	 * @param int $immobilie Setter for immobilie
	 * @return Kontaktperson
	 */
	public function setImmobilie(int $immobilie) {
		$this->immobilie = $immobilie;
		return $this;
	}

	/**
	 * @param string $immobilientreuhaenderid Setter for immobilientreuhaenderid
	 * @return Kontaktperson
	 */
	public function setImmobilientreuhaenderid(string $immobilientreuhaenderid): Kontaktperson {
		$this->immobilientreuhaenderid = $immobilientreuhaenderid;
		return $this;
	}

	/**
	 * @param Land $land Setter for land
	 * @return Kontaktperson
	 */
	public function setLand(Land $land): Kontaktperson {
		$this->land = $land;
		return $this;
	}

	/**
	 * @param string $name Setter for name
	 * @return Kontaktperson
	 */
	public function setName(string $name): Kontaktperson {
		$this->name = $name;
		return $this;
	}

	/**
	 * @param string $ort Setter for ort
	 * @return Kontaktperson
	 */
	public function setOrt(string $ort): Kontaktperson {
		$this->ort = $ort;
		return $this;
	}

	/**
	 * @param string $personennummer Setter for personennummer
	 * @return Kontaktperson
	 */
	public function setPersonennummer(string $personennummer): Kontaktperson {
		$this->personennummer = $personennummer;
		return $this;
	}

	/**
	 * @param string $plz Setter for plz
	 * @return Kontaktperson
	 */
	public function setPlz(string $plz): Kontaktperson {
		$this->plz = $plz;
		return $this;
	}

	/**
	 * @param string $position Setter for position
	 * @return Kontaktperson
	 */
	public function setPosition(string $position): Kontaktperson {
		$this->position = $position;
		return $this;
	}

	/**
	 * @param string $postfach Setter for postfach
	 * @return Kontaktperson
	 */
	public function setPostfach(string $postfach): Kontaktperson {
		$this->postfach = $postfach;
		return $this;
	}

	/**
	 * @param string $postfOrt Setter for postfOrt
	 * @return Kontaktperson
	 */
	public function setPostfOrt(string $postfOrt): Kontaktperson {
		$this->postfOrt = $postfOrt;
		return $this;
	}

	/**
	 * @param string $postfPlz Setter for postfPlz
	 * @return Kontaktperson
	 */
	public function setPostfPlz(string $postfPlz): Kontaktperson {
		$this->postfPlz = $postfPlz;
		return $this;
	}

	/**
	 * @param string $referenzId Setter for referenzId
	 * @return Kontaktperson
	 */
	public function setReferenzId(string $referenzId): Kontaktperson {
		$this->referenzId = $referenzId;
		return $this;
	}

	/**
	 * @param string $strasse Setter for strasse
	 * @return Kontaktperson
	 */
	public function setStrasse(string $strasse): Kontaktperson {
		$this->strasse = $strasse;
		return $this;
	}

	/**
	 * @param string $telDurchw Setter for telDurchw
	 * @return Kontaktperson
	 */
	public function setTelDurchw(string $telDurchw): Kontaktperson {
		$this->telDurchw = $telDurchw;
		return $this;
	}

	/**
	 * @param string $telFax Setter for telFax
	 * @return Kontaktperson
	 */
	public function setTelFax(string $telFax): Kontaktperson {
		$this->telFax = $telFax;
		return $this;
	}

	/**
	 * @param string $telHandy Setter for telHandy
	 * @return Kontaktperson
	 */
	public function setTelHandy(string $telHandy): Kontaktperson {
		$this->telHandy = $telHandy;
		return $this;
	}

	/**
	 * @param string $telPrivat Setter for telPrivat
	 * @return Kontaktperson
	 */
	public function setTelPrivat(string $telPrivat): Kontaktperson {
		$this->telPrivat = $telPrivat;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $telSonstige Setter for telSonstige
	 * @return Kontaktperson
	 */
	public function setTelSonstige(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $telSonstige): Kontaktperson {
		$this->telSonstige = $telSonstige;
		return $this;
	}

	/**
	 * @param string $telZentrale Setter for telZentrale
	 * @return Kontaktperson
	 */
	public function setTelZentrale(string $telZentrale): Kontaktperson {
		$this->telZentrale = $telZentrale;
		return $this;
	}

	/**
	 * @param string $titel Setter for titel
	 * @return Kontaktperson
	 */
	public function setTitel(string $titel): Kontaktperson {
		$this->titel = $titel;
		return $this;
	}

	/**
	 * @param string $url Setter for url
	 * @return Kontaktperson
	 */
	public function setUrl(string $url): Kontaktperson {
		$this->url = $url;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedAnyfield Setter for userDefinedAnyfield
	 * @return Kontaktperson
	 */
	public function setUserDefinedAnyfield(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedAnyfield): Kontaktperson {
		$this->userDefinedAnyfield = $userDefinedAnyfield;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedExtend Setter for userDefinedExtend
	 * @return Kontaktperson
	 */
	public function setUserDefinedExtend(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedExtend): Kontaktperson {
		$this->userDefinedExtend = $userDefinedExtend;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedSimplefield Setter for userDefinedSimplefield
	 * @return Kontaktperson
	 */
	public function setUserDefinedSimplefield(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedSimplefield): Kontaktperson {
		$this->userDefinedSimplefield = $userDefinedSimplefield;
		return $this;
	}

	/**
	 * @param string $vorname Setter for vorname
	 * @return Kontaktperson
	 */
	public function setVorname(string $vorname): Kontaktperson {
		$this->vorname = $vorname;
		return $this;
	}

	/**
	 * @param string $zusatzfeld Setter for zusatzfeld
	 * @return Kontaktperson
	 */
	public function setZusatzfeld(string $zusatzfeld): Kontaktperson {
		$this->zusatzfeld = $zusatzfeld;
		return $this;
	}
}
