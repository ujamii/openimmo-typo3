<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Infrastruktur
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("infrastruktur")
 */
class Infrastruktur implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Ausblick") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Ausblick
	 */
	protected $ausblick;

	/**
	 * @XmlList (inline = true, entry = "distanzen") 
	 * @Type ("array<Ujamii\OpenImmoTypo3\Domain\Model\Distanzen>") 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ujamii\OpenImmoTypo3\Domain\Model\Distanzen>
	 */
	protected $distanzen;

	/**
	 * @XmlList (inline = true, entry = "distanzen_sport") 
	 * @Type ("array<Ujamii\OpenImmoTypo3\Domain\Model\DistanzenSport>") 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ujamii\OpenImmoTypo3\Domain\Model\DistanzenSport>
	 */
	protected $distanzenSport;

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
	 * @Type ("boolean") 
	 * @var boolean
	 */
	protected $zulieferung;

	/**
	 * @return Ausblick
	 */
	public function getAusblick(): Ausblick {
		return $this->ausblick;
	}

	/**
	 * Returns array of Distanzen
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getDistanzen(): \TYPO3\CMS\Extbase\Persistence\ObjectStorage {
		return is_array($this->distanzen) ? self::arrayToObjectStorage($this->distanzen) : $this->distanzen;
	}

	/**
	 * Returns array of DistanzenSport
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getDistanzenSport(): \TYPO3\CMS\Extbase\Persistence\ObjectStorage {
		return is_array($this->distanzenSport) ? self::arrayToObjectStorage($this->distanzenSport) : $this->distanzenSport;
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
	 * @return boolean
	 */
	public function getZulieferung(): bool {
		return $this->zulieferung;
	}

	/**
	 * @param Ausblick $ausblick Setter for ausblick
	 * @return Infrastruktur
	 */
	public function setAusblick(Ausblick $ausblick): Infrastruktur {
		$this->ausblick = $ausblick;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $distanzen Setter for distanzen
	 * @return Infrastruktur
	 */
	public function setDistanzen(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $distanzen): Infrastruktur {
		$this->distanzen = $distanzen;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $distanzenSport Setter for distanzenSport
	 * @return Infrastruktur
	 */
	public function setDistanzenSport(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $distanzenSport): Infrastruktur {
		$this->distanzenSport = $distanzenSport;
		return $this;
	}

	/**
	 * @param int $immobilie Setter for immobilie
	 * @return Infrastruktur
	 */
	public function setImmobilie(int $immobilie) {
		$this->immobilie = $immobilie;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedAnyfield Setter for userDefinedAnyfield
	 * @return Infrastruktur
	 */
	public function setUserDefinedAnyfield(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedAnyfield): Infrastruktur {
		$this->userDefinedAnyfield = $userDefinedAnyfield;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedExtend Setter for userDefinedExtend
	 * @return Infrastruktur
	 */
	public function setUserDefinedExtend(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedExtend): Infrastruktur {
		$this->userDefinedExtend = $userDefinedExtend;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedSimplefield Setter for userDefinedSimplefield
	 * @return Infrastruktur
	 */
	public function setUserDefinedSimplefield(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $userDefinedSimplefield): Infrastruktur {
		$this->userDefinedSimplefield = $userDefinedSimplefield;
		return $this;
	}

	/**
	 * @param boolean $zulieferung Setter for zulieferung
	 * @return Infrastruktur
	 */
	public function setZulieferung(bool $zulieferung): Infrastruktur {
		$this->zulieferung = $zulieferung;
		return $this;
	}
}
