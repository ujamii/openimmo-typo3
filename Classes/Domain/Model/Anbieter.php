<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Anbieter
 * Anbieterangaben
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("anbieter")
 */
class Anbieter implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_anbieter';

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $anbieternr;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Anhang") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Anhang
	 */
	protected $anhang;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $firma;

	/**
	 * @XmlList (inline = true, entry = "immobilie") 
	 * @Type ("array<Ujamii\OpenImmoTypo3\Domain\Model\Immobilie>") 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ujamii\OpenImmoTypo3\Domain\Model\Immobilie>
	 */
	protected $immobilie;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $impressum;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\ImpressumStrukt") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\ImpressumStrukt
	 */
	protected $impressumStrukt;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $lizenzkennung;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $openimmo;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $openimmoAnid;

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
	 * @return string
	 */
	public function getAnbieternr(): string {
		return $this->anbieternr;
	}

	/**
	 * @return Anhang
	 */
	public function getAnhang(): Anhang {
		return $this->anhang;
	}

	/**
	 * @return string
	 */
	public function getFirma(): string {
		return $this->firma;
	}

	/**
	 * Returns array of Immobilie
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getImmobilie(): \TYPO3\CMS\Extbase\Persistence\ObjectStorage {
		return is_array($this->immobilie) ? self::arrayToObjectStorage($this->immobilie) : $this->immobilie;
	}

	/**
	 * @return string
	 */
	public function getImpressum(): string {
		return $this->impressum;
	}

	/**
	 * @return ImpressumStrukt
	 */
	public function getImpressumStrukt(): ImpressumStrukt {
		return $this->impressumStrukt;
	}

	/**
	 * @return string
	 */
	public function getLizenzkennung(): string {
		return $this->lizenzkennung;
	}

	/**
	 * @return int
	 */
	public function getOpenimmo(): int {
		return $this->openimmo;
	}

	/**
	 * @return string
	 */
	public function getOpenimmoAnid(): string {
		return $this->openimmoAnid;
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
	 * @param string $anbieternr Setter for anbieternr
	 * @return Anbieter
	 */
	public function setAnbieternr(string $anbieternr): Anbieter {
		$this->anbieternr = $anbieternr;
		return $this;
	}

	/**
	 * @param Anhang $anhang Setter for anhang
	 * @return Anbieter
	 */
	public function setAnhang(Anhang $anhang): Anbieter {
		$this->anhang = $anhang;
		return $this;
	}

	/**
	 * @param string $firma Setter for firma
	 * @return Anbieter
	 */
	public function setFirma(string $firma): Anbieter {
		$this->firma = $firma;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $immobilie Setter for immobilie
	 * @return Anbieter
	 */
	public function setImmobilie(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $immobilie): Anbieter {
		$this->immobilie = $immobilie;
		return $this;
	}

	/**
	 * @param string $impressum Setter for impressum
	 * @return Anbieter
	 */
	public function setImpressum(string $impressum): Anbieter {
		$this->impressum = $impressum;
		return $this;
	}

	/**
	 * @param ImpressumStrukt $impressumStrukt Setter for impressumStrukt
	 * @return Anbieter
	 */
	public function setImpressumStrukt(ImpressumStrukt $impressumStrukt): Anbieter {
		$this->impressumStrukt = $impressumStrukt;
		return $this;
	}

	/**
	 * @param string $lizenzkennung Setter for lizenzkennung
	 * @return Anbieter
	 */
	public function setLizenzkennung(string $lizenzkennung): Anbieter {
		$this->lizenzkennung = $lizenzkennung;
		return $this;
	}

	/**
	 * @param int $openimmo Setter for openimmo
	 * @return Anbieter
	 */
	public function setOpenimmo(int $openimmo) {
		$this->openimmo = $openimmo;
		return $this;
	}

	/**
	 * @param string $openimmoAnid Setter for openimmoAnid
	 * @return Anbieter
	 */
	public function setOpenimmoAnid(string $openimmoAnid): Anbieter {
		$this->openimmoAnid = $openimmoAnid;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedAnyfield Setter for userDefinedAnyfield
	 * @return Anbieter
	 */
	public function setUserDefinedAnyfield(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedAnyfield): Anbieter {
		$this->userDefinedAnyfield = $userDefinedAnyfield;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedExtend Setter for userDefinedExtend
	 * @return Anbieter
	 */
	public function setUserDefinedExtend(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedExtend): Anbieter {
		$this->userDefinedExtend = $userDefinedExtend;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedSimplefield Setter for userDefinedSimplefield
	 * @return Anbieter
	 */
	public function setUserDefinedSimplefield(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedSimplefield): Anbieter {
		$this->userDefinedSimplefield = $userDefinedSimplefield;
		return $this;
	}
}
