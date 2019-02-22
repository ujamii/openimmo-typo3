<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Anhaenge
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("anhaenge")
 */
class Anhaenge implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 * @XmlList (inline = true, entry = "anhang") 
	 * @Type ("array<Ujamii\OpenImmoTypo3\Domain\Model\Anhang>") 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ujamii\OpenImmoTypo3\Domain\Model\Anhang>
	 */
	protected $anhang;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $immobilie;

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
	 * Returns array of Anhang
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getAnhang(): \TYPO3\CMS\Extbase\Persistence\ObjectStorage {
		return is_array($this->anhang) ? self::arrayToObjectStorage($this->anhang) : $this->anhang;
	}

	/**
	 * @return int
	 */
	public function getImmobilie(): int {
		return $this->immobilie;
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
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $anhang Setter for anhang
	 * @return Anhaenge
	 */
	public function setAnhang(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $anhang): Anhaenge {
		$this->anhang = $anhang;
		return $this;
	}

	/**
	 * @param int $immobilie Setter for immobilie
	 * @return Anhaenge
	 */
	public function setImmobilie(int $immobilie) {
		$this->immobilie = $immobilie;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedAnyfield Setter for userDefinedAnyfield
	 * @return Anhaenge
	 */
	public function setUserDefinedAnyfield(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedAnyfield): Anhaenge {
		$this->userDefinedAnyfield = $userDefinedAnyfield;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedExtend Setter for userDefinedExtend
	 * @return Anhaenge
	 */
	public function setUserDefinedExtend(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedExtend): Anhaenge {
		$this->userDefinedExtend = $userDefinedExtend;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedSimplefield Setter for userDefinedSimplefield
	 * @return Anhaenge
	 */
	public function setUserDefinedSimplefield(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedSimplefield): Anhaenge {
		$this->userDefinedSimplefield = $userDefinedSimplefield;
		return $this;
	}
}
