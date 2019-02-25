<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class VerwaltungTechn
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("verwaltung_techn")
 */
class VerwaltungTechn implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_verwaltungtechn';

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Aktion") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Aktion
	 */
	protected $aktion;

	/**
	 * @Type ("DateTime<'Y-m-d'>") 
	 * @var \DateTime
	 */
	protected $aktivBis;

	/**
	 * @Type ("DateTime<'Y-m-d'>") 
	 * @var \DateTime
	 */
	protected $aktivVon;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $gruppenKennung;

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
	protected $kennungUrsprung;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Master") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Master
	 */
	protected $master;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $objektnrExtern;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $objektnrIntern;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $openimmoObid;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $sprache;

	/**
	 * @Type ("DateTime<'Y-m-d'>") 
	 * @var \DateTime
	 */
	protected $standVom;

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
	protected $weitergabeGenerell;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $weitergabeNegativ;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $weitergabePositiv;

	/**
	 * @return Aktion
	 */
	public function getAktion(): Aktion {
		return $this->aktion;
	}

	/**
	 * @return \DateTime
	 */
	public function getAktivBis(): \DateTime {
		return $this->aktivBis;
	}

	/**
	 * @return \DateTime
	 */
	public function getAktivVon(): \DateTime {
		return $this->aktivVon;
	}

	/**
	 * @return string
	 */
	public function getGruppenKennung(): string {
		return $this->gruppenKennung;
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
	public function getKennungUrsprung(): string {
		return $this->kennungUrsprung;
	}

	/**
	 * @return Master
	 */
	public function getMaster(): Master {
		return $this->master;
	}

	/**
	 * @return string
	 */
	public function getObjektnrExtern(): string {
		return $this->objektnrExtern;
	}

	/**
	 * @return string
	 */
	public function getObjektnrIntern(): string {
		return $this->objektnrIntern;
	}

	/**
	 * @return string
	 */
	public function getOpenimmoObid(): string {
		return $this->openimmoObid;
	}

	/**
	 * @return string
	 */
	public function getSprache(): string {
		return $this->sprache;
	}

	/**
	 * @return \DateTime
	 */
	public function getStandVom(): \DateTime {
		return $this->standVom;
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
	 * @return boolean
	 */
	public function getWeitergabeGenerell(): bool {
		return $this->weitergabeGenerell;
	}

	/**
	 * @return string
	 */
	public function getWeitergabeNegativ(): string {
		return $this->weitergabeNegativ;
	}

	/**
	 * @return string
	 */
	public function getWeitergabePositiv(): string {
		return $this->weitergabePositiv;
	}

	/**
	 * @param Aktion $aktion Setter for aktion
	 * @return VerwaltungTechn
	 */
	public function setAktion(Aktion $aktion): VerwaltungTechn {
		$this->aktion = $aktion;
		return $this;
	}

	/**
	 * @param \DateTime $aktivBis Setter for aktivBis
	 * @return VerwaltungTechn
	 */
	public function setAktivBis(\DateTime $aktivBis): VerwaltungTechn {
		$this->aktivBis = $aktivBis;
		return $this;
	}

	/**
	 * @param \DateTime $aktivVon Setter for aktivVon
	 * @return VerwaltungTechn
	 */
	public function setAktivVon(\DateTime $aktivVon): VerwaltungTechn {
		$this->aktivVon = $aktivVon;
		return $this;
	}

	/**
	 * @param string $gruppenKennung Setter for gruppenKennung
	 * @return VerwaltungTechn
	 */
	public function setGruppenKennung(string $gruppenKennung): VerwaltungTechn {
		$this->gruppenKennung = $gruppenKennung;
		return $this;
	}

	/**
	 * @param int $immobilie Setter for immobilie
	 * @return VerwaltungTechn
	 */
	public function setImmobilie(int $immobilie) {
		$this->immobilie = $immobilie;
		return $this;
	}

	/**
	 * @param string $kennungUrsprung Setter for kennungUrsprung
	 * @return VerwaltungTechn
	 */
	public function setKennungUrsprung(string $kennungUrsprung): VerwaltungTechn {
		$this->kennungUrsprung = $kennungUrsprung;
		return $this;
	}

	/**
	 * @param Master $master Setter for master
	 * @return VerwaltungTechn
	 */
	public function setMaster(Master $master): VerwaltungTechn {
		$this->master = $master;
		return $this;
	}

	/**
	 * @param string $objektnrExtern Setter for objektnrExtern
	 * @return VerwaltungTechn
	 */
	public function setObjektnrExtern(string $objektnrExtern): VerwaltungTechn {
		$this->objektnrExtern = $objektnrExtern;
		return $this;
	}

	/**
	 * @param string $objektnrIntern Setter for objektnrIntern
	 * @return VerwaltungTechn
	 */
	public function setObjektnrIntern(string $objektnrIntern): VerwaltungTechn {
		$this->objektnrIntern = $objektnrIntern;
		return $this;
	}

	/**
	 * @param string $openimmoObid Setter for openimmoObid
	 * @return VerwaltungTechn
	 */
	public function setOpenimmoObid(string $openimmoObid): VerwaltungTechn {
		$this->openimmoObid = $openimmoObid;
		return $this;
	}

	/**
	 * @param string $sprache Setter for sprache
	 * @return VerwaltungTechn
	 */
	public function setSprache(string $sprache): VerwaltungTechn {
		$this->sprache = $sprache;
		return $this;
	}

	/**
	 * @param \DateTime $standVom Setter for standVom
	 * @return VerwaltungTechn
	 */
	public function setStandVom(\DateTime $standVom): VerwaltungTechn {
		$this->standVom = $standVom;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedAnyfield Setter for userDefinedAnyfield
	 * @return VerwaltungTechn
	 */
	public function setUserDefinedAnyfield(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedAnyfield): VerwaltungTechn {
		$this->userDefinedAnyfield = $userDefinedAnyfield;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedExtend Setter for userDefinedExtend
	 * @return VerwaltungTechn
	 */
	public function setUserDefinedExtend(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedExtend): VerwaltungTechn {
		$this->userDefinedExtend = $userDefinedExtend;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedSimplefield Setter for userDefinedSimplefield
	 * @return VerwaltungTechn
	 */
	public function setUserDefinedSimplefield(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedSimplefield): VerwaltungTechn {
		$this->userDefinedSimplefield = $userDefinedSimplefield;
		return $this;
	}

	/**
	 * @param boolean $weitergabeGenerell Setter for weitergabeGenerell
	 * @return VerwaltungTechn
	 */
	public function setWeitergabeGenerell(bool $weitergabeGenerell): VerwaltungTechn {
		$this->weitergabeGenerell = $weitergabeGenerell;
		return $this;
	}

	/**
	 * @param string $weitergabeNegativ Setter for weitergabeNegativ
	 * @return VerwaltungTechn
	 */
	public function setWeitergabeNegativ(string $weitergabeNegativ): VerwaltungTechn {
		$this->weitergabeNegativ = $weitergabeNegativ;
		return $this;
	}

	/**
	 * @param string $weitergabePositiv Setter for weitergabePositiv
	 * @return VerwaltungTechn
	 */
	public function setWeitergabePositiv(string $weitergabePositiv): VerwaltungTechn {
		$this->weitergabePositiv = $weitergabePositiv;
		return $this;
	}
}
