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
	 * @var Anbieter[]
	 */
	protected $anbieter;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Uebertragung") 
	 * @var Uebertragung
	 */
	protected $uebertragung;

	/**
	 * @XmlList (inline = true, entry = "user_defined_anyfield") 
	 * @Type ("array<Ujamii\OpenImmoTypo3\Domain\Model\UserDefinedAnyfield>") 
	 * @var UserDefinedAnyfield[]
	 */
	protected $userDefinedAnyfield;

	/**
	 * @XmlList (inline = true, entry = "user_defined_simplefield") 
	 * @Type ("array<Ujamii\OpenImmoTypo3\Domain\Model\UserDefinedSimplefield>") 
	 * @var UserDefinedSimplefield[]
	 */
	protected $userDefinedSimplefield;

	/**
	 * Returns array of Anbieter
	 *
	 * @return array
	 */
	public function getAnbieter(): array {
		return $this->anbieter;
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
	 * @return array
	 */
	public function getUserDefinedAnyfield(): array {
		return $this->userDefinedAnyfield;
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
	 * @param array $anbieter Setter for anbieter
	 * @return Openimmo
	 */
	public function setAnbieter(array $anbieter): Openimmo {
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
	 * @param array $userDefinedAnyfield Setter for userDefinedAnyfield
	 * @return Openimmo
	 */
	public function setUserDefinedAnyfield(array $userDefinedAnyfield): Openimmo {
		$this->userDefinedAnyfield = $userDefinedAnyfield;
		return $this;
	}

	/**
	 * @param array $userDefinedSimplefield Setter for userDefinedSimplefield
	 * @return Openimmo
	 */
	public function setUserDefinedSimplefield(array $userDefinedSimplefield): Openimmo {
		$this->userDefinedSimplefield = $userDefinedSimplefield;
		return $this;
	}
}
