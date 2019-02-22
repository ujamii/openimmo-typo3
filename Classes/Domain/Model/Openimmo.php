<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Openimmo
 * Dokument ElementRoot Element
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("openimmo")
 */
class Openimmo implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 * @XmlList (inline = true, entry = "anbieter") 
	 * @Type ("array<Ujamii\OpenImmoTypo3\Domain\Model\Anbieter>") 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ujamii\OpenImmoTypo3\Domain\Model\Anbieter>
	 */
	protected $anbieter;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Uebertragung") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Uebertragung
	 */
	protected $uebertragung;

	/**
	 * @XmlList (inline = true, entry = "user_defined_anyfield") 
	 * @Type ("array<Ujamii\OpenImmoTypo3\Domain\Model\UserDefinedAnyfield>") 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ujamii\OpenImmoTypo3\Domain\Model\UserDefinedAnyfield>
	 */
	protected $userDefinedAnyfield;

	/**
	 * @XmlList (inline = true, entry = "user_defined_simplefield") 
	 * @Type ("array<Ujamii\OpenImmoTypo3\Domain\Model\UserDefinedSimplefield>") 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ujamii\OpenImmoTypo3\Domain\Model\UserDefinedSimplefield>
	 */
	protected $userDefinedSimplefield;

	/**
	 * Returns array of Anbieter
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getAnbieter(): \TYPO3\CMS\Extbase\Persistence\ObjectStorage {
		return is_array($this->anbieter) ? self::arrayToObjectStorage($this->anbieter) : $this->anbieter;
	}

	/**
	 * @return Uebertragung
	 */
	public function getUebertragung(): Uebertragung {
		return $this->uebertragung;
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
	 * Returns array of UserDefinedSimplefield
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getUserDefinedSimplefield(): \TYPO3\CMS\Extbase\Persistence\ObjectStorage {
		return is_array($this->userDefinedSimplefield) ? self::arrayToObjectStorage($this->userDefinedSimplefield) : $this->userDefinedSimplefield;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $anbieter Setter for anbieter
	 * @return Openimmo
	 */
	public function setAnbieter(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $anbieter): Openimmo {
		$this->anbieter = $anbieter;
		return $this;
	}

	/**
	 * @param Uebertragung $uebertragung Setter for uebertragung
	 * @return Openimmo
	 */
	public function setUebertragung(Uebertragung $uebertragung): Openimmo {
		$this->uebertragung = $uebertragung;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedAnyfield Setter for userDefinedAnyfield
	 * @return Openimmo
	 */
	public function setUserDefinedAnyfield(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedAnyfield): Openimmo {
		$this->userDefinedAnyfield = $userDefinedAnyfield;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedSimplefield Setter for userDefinedSimplefield
	 * @return Openimmo
	 */
	public function setUserDefinedSimplefield(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedSimplefield): Openimmo {
		$this->userDefinedSimplefield = $userDefinedSimplefield;
		return $this;
	}
}
