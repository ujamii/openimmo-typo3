<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Objektkategorie
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("objektkategorie")
 */
class Objektkategorie implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $immobilie;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Nutzungsart") 
	 * @var Nutzungsart
	 */
	protected $nutzungsart;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Objektart") 
	 * @var Objektart
	 */
	protected $objektart;

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
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Vermarktungsart") 
	 * @var Vermarktungsart
	 */
	protected $vermarktungsart;

	/**
	 * @return int
	 */
	public function getImmobilie(): int {
		return $this->immobilie;
	}

	/**
	 * @return Nutzungsart
	 */
	public function getNutzungsart(): Nutzungsart {
		return $this->nutzungsart;
	}

	/**
	 * @return Objektart
	 */
	public function getObjektart(): Objektart {
		return $this->objektart;
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
	 * @return Vermarktungsart
	 */
	public function getVermarktungsart(): Vermarktungsart {
		return $this->vermarktungsart;
	}

	/**
	 * @param int $immobilie Setter for immobilie
	 * @return Objektkategorie
	 */
	public function setImmobilie(int $immobilie) {
		$this->immobilie = $immobilie;
		return $this;
	}

	/**
	 * @param Nutzungsart $nutzungsart Setter for nutzungsart
	 * @return Objektkategorie
	 */
	public function setNutzungsart(Nutzungsart $nutzungsart): Objektkategorie {
		$this->nutzungsart = $nutzungsart;
		return $this;
	}

	/**
	 * @param Objektart $objektart Setter for objektart
	 * @return Objektkategorie
	 */
	public function setObjektart(Objektart $objektart): Objektkategorie {
		$this->objektart = $objektart;
		return $this;
	}

	/**
	 * @param array $userDefinedAnyfield Setter for userDefinedAnyfield
	 * @return Objektkategorie
	 */
	public function setUserDefinedAnyfield(array $userDefinedAnyfield): Objektkategorie {
		$this->userDefinedAnyfield = $userDefinedAnyfield;
		return $this;
	}

	/**
	 * @param array $userDefinedExtend Setter for userDefinedExtend
	 * @return Objektkategorie
	 */
	public function setUserDefinedExtend(array $userDefinedExtend): Objektkategorie {
		$this->userDefinedExtend = $userDefinedExtend;
		return $this;
	}

	/**
	 * @param array $userDefinedSimplefield Setter for userDefinedSimplefield
	 * @return Objektkategorie
	 */
	public function setUserDefinedSimplefield(array $userDefinedSimplefield): Objektkategorie {
		$this->userDefinedSimplefield = $userDefinedSimplefield;
		return $this;
	}

	/**
	 * @param Vermarktungsart $vermarktungsart Setter for vermarktungsart
	 * @return Objektkategorie
	 */
	public function setVermarktungsart(Vermarktungsart $vermarktungsart): Objektkategorie {
		$this->vermarktungsart = $vermarktungsart;
		return $this;
	}
}
