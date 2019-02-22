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
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Nutzungsart
	 */
	protected $nutzungsart;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Objektart") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Objektart
	 */
	protected $objektart;

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
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Vermarktungsart") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Vermarktungsart
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
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedAnyfield Setter for userDefinedAnyfield
	 * @return Objektkategorie
	 */
	public function setUserDefinedAnyfield(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedAnyfield): Objektkategorie {
		$this->userDefinedAnyfield = $userDefinedAnyfield;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedExtend Setter for userDefinedExtend
	 * @return Objektkategorie
	 */
	public function setUserDefinedExtend(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedExtend): Objektkategorie {
		$this->userDefinedExtend = $userDefinedExtend;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedSimplefield Setter for userDefinedSimplefield
	 * @return Objektkategorie
	 */
	public function setUserDefinedSimplefield(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedSimplefield): Objektkategorie {
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
