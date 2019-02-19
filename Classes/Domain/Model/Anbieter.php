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
	 * @Type ("string") 
	 * @var string
	 */
	protected $anbieternr;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Anhang") 
	 * @var Anhang
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
	 * @var Immobilie[]
	 */
	protected $immobilie;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $impressum;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\ImpressumStrukt") 
	 * @var ImpressumStrukt
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
	 * @var UserDefinedAnyfield[]
	 */
	protected $userDefinedAnyfield;

	/**
	 * @XmlList (inline = true, entry = "user_defined_extend") 
	 * @Type ("array<Ujamii\OpenImmoTypo3\Domain\Model\UserDefinedExtend>") 
	 * @var UserDefinedExtend[]
	 */
	protected $userDefinedExtend;

	/**
	 * @XmlList (inline = true, entry = "user_defined_simplefield") 
	 * @Type ("array<Ujamii\OpenImmoTypo3\Domain\Model\UserDefinedSimplefield>") 
	 * @var UserDefinedSimplefield[]
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
	 * @return array
	 */
	public function getImmobilie(): array {
		return $this->immobilie;
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
	 * @return array
	 */
	public function getUserDefinedAnyfield(): array {
		return $this->userDefinedAnyfield;
	}

	/**
	 * Returns array of UserDefinedExtend
	 *
	 * @return array
	 */
	public function getUserDefinedExtend(): array {
		return $this->userDefinedExtend;
	}

	/**
	 * Returns array of UserDefinedSimplefield
	 *
	 * @return array
	 */
	public function getUserDefinedSimplefield(): array {
		return $this->userDefinedSimplefield;
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
	 * @param array $immobilie Setter for immobilie
	 * @return Anbieter
	 */
	public function setImmobilie(array $immobilie): Anbieter {
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
	 * @param array $userDefinedAnyfield Setter for userDefinedAnyfield
	 * @return Anbieter
	 */
	public function setUserDefinedAnyfield(array $userDefinedAnyfield): Anbieter {
		$this->userDefinedAnyfield = $userDefinedAnyfield;
		return $this;
	}

	/**
	 * @param array $userDefinedExtend Setter for userDefinedExtend
	 * @return Anbieter
	 */
	public function setUserDefinedExtend(array $userDefinedExtend): Anbieter {
		$this->userDefinedExtend = $userDefinedExtend;
		return $this;
	}

	/**
	 * @param array $userDefinedSimplefield Setter for userDefinedSimplefield
	 * @return Anbieter
	 */
	public function setUserDefinedSimplefield(array $userDefinedSimplefield): Anbieter {
		$this->userDefinedSimplefield = $userDefinedSimplefield;
		return $this;
	}
}
