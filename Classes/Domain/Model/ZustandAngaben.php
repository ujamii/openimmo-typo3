<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ZustandAngaben
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("zustand_angaben")
 */
class ZustandAngaben implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Alter") 
	 * @var Alter
	 */
	protected $alter;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $altlasten;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $baujahr;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $bauzone;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\BebaubarNach") 
	 * @var BebaubarNach
	 */
	protected $bebaubarNach;

	/**
	 * @XmlList (inline = true, entry = "energiepass") 
	 * @Type ("array<Ujamii\OpenImmoTypo3\Domain\Model\Energiepass>") 
	 * @var Energiepass[]
	 */
	protected $energiepass;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Erschliessung") 
	 * @var Erschliessung
	 */
	protected $erschliessung;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\ErschliessungUmfang") 
	 * @var ErschliessungUmfang
	 */
	protected $erschliessungUmfang;

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
	protected $letztemodernisierung;

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
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Verkaufstatus") 
	 * @var Verkaufstatus
	 */
	protected $verkaufstatus;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Zustand") 
	 * @var Zustand
	 */
	protected $zustand;

	/**
	 * @return Alter
	 */
	public function getAlter(): Alter {
		return $this->alter;
	}

	/**
	 * @return string
	 */
	public function getAltlasten(): string {
		return $this->altlasten;
	}

	/**
	 * @return string
	 */
	public function getBaujahr(): string {
		return $this->baujahr;
	}

	/**
	 * @return string
	 */
	public function getBauzone(): string {
		return $this->bauzone;
	}

	/**
	 * @return BebaubarNach
	 */
	public function getBebaubarNach(): BebaubarNach {
		return $this->bebaubarNach;
	}

	/**
	 * Returns array of Energiepass
	 *
	 * @return array
	 */
	public function getEnergiepass(): array {
		return $this->energiepass;
	}

	/**
	 * @return Erschliessung
	 */
	public function getErschliessung(): Erschliessung {
		return $this->erschliessung;
	}

	/**
	 * @return ErschliessungUmfang
	 */
	public function getErschliessungUmfang(): ErschliessungUmfang {
		return $this->erschliessungUmfang;
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
	public function getLetztemodernisierung(): string {
		return $this->letztemodernisierung;
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
	 * @return Verkaufstatus
	 */
	public function getVerkaufstatus(): Verkaufstatus {
		return $this->verkaufstatus;
	}

	/**
	 * @return Zustand
	 */
	public function getZustand(): Zustand {
		return $this->zustand;
	}

	/**
	 * @param Alter $alter Setter for alter
	 * @return ZustandAngaben
	 */
	public function setAlter(Alter $alter): ZustandAngaben {
		$this->alter = $alter;
		return $this;
	}

	/**
	 * @param string $altlasten Setter for altlasten
	 * @return ZustandAngaben
	 */
	public function setAltlasten(string $altlasten): ZustandAngaben {
		$this->altlasten = $altlasten;
		return $this;
	}

	/**
	 * @param string $baujahr Setter for baujahr
	 * @return ZustandAngaben
	 */
	public function setBaujahr(string $baujahr): ZustandAngaben {
		$this->baujahr = $baujahr;
		return $this;
	}

	/**
	 * @param string $bauzone Setter for bauzone
	 * @return ZustandAngaben
	 */
	public function setBauzone(string $bauzone): ZustandAngaben {
		$this->bauzone = $bauzone;
		return $this;
	}

	/**
	 * @param BebaubarNach $bebaubarNach Setter for bebaubarNach
	 * @return ZustandAngaben
	 */
	public function setBebaubarNach(BebaubarNach $bebaubarNach): ZustandAngaben {
		$this->bebaubarNach = $bebaubarNach;
		return $this;
	}

	/**
	 * @param array $energiepass Setter for energiepass
	 * @return ZustandAngaben
	 */
	public function setEnergiepass(array $energiepass): ZustandAngaben {
		$this->energiepass = $energiepass;
		return $this;
	}

	/**
	 * @param Erschliessung $erschliessung Setter for erschliessung
	 * @return ZustandAngaben
	 */
	public function setErschliessung(Erschliessung $erschliessung): ZustandAngaben {
		$this->erschliessung = $erschliessung;
		return $this;
	}

	/**
	 * @param ErschliessungUmfang $erschliessungUmfang Setter for erschliessungUmfang
	 * @return ZustandAngaben
	 */
	public function setErschliessungUmfang(ErschliessungUmfang $erschliessungUmfang): ZustandAngaben {
		$this->erschliessungUmfang = $erschliessungUmfang;
		return $this;
	}

	/**
	 * @param int $immobilie Setter for immobilie
	 * @return ZustandAngaben
	 */
	public function setImmobilie(int $immobilie) {
		$this->immobilie = $immobilie;
		return $this;
	}

	/**
	 * @param string $letztemodernisierung Setter for letztemodernisierung
	 * @return ZustandAngaben
	 */
	public function setLetztemodernisierung(string $letztemodernisierung): ZustandAngaben {
		$this->letztemodernisierung = $letztemodernisierung;
		return $this;
	}

	/**
	 * @param array $userDefinedAnyfield Setter for userDefinedAnyfield
	 * @return ZustandAngaben
	 */
	public function setUserDefinedAnyfield(array $userDefinedAnyfield): ZustandAngaben {
		$this->userDefinedAnyfield = $userDefinedAnyfield;
		return $this;
	}

	/**
	 * @param array $userDefinedExtend Setter for userDefinedExtend
	 * @return ZustandAngaben
	 */
	public function setUserDefinedExtend(array $userDefinedExtend): ZustandAngaben {
		$this->userDefinedExtend = $userDefinedExtend;
		return $this;
	}

	/**
	 * @param array $userDefinedSimplefield Setter for userDefinedSimplefield
	 * @return ZustandAngaben
	 */
	public function setUserDefinedSimplefield(array $userDefinedSimplefield): ZustandAngaben {
		$this->userDefinedSimplefield = $userDefinedSimplefield;
		return $this;
	}

	/**
	 * @param Verkaufstatus $verkaufstatus Setter for verkaufstatus
	 * @return ZustandAngaben
	 */
	public function setVerkaufstatus(Verkaufstatus $verkaufstatus): ZustandAngaben {
		$this->verkaufstatus = $verkaufstatus;
		return $this;
	}

	/**
	 * @param Zustand $zustand Setter for zustand
	 * @return ZustandAngaben
	 */
	public function setZustand(Zustand $zustand): ZustandAngaben {
		$this->zustand = $zustand;
		return $this;
	}
}
