<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Fahrstuhl
 * Welche Art von Fahrstuhl, Aufzug, Lift - Mehrfachnennung möglich
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("fahrstuhl")
 */
class Fahrstuhl implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $ausstattung;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("LASTEN")
	 * @var boolean
	 */
	protected $lasten;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("PERSONEN")
	 * @var boolean
	 */
	protected $personen;

	/**
	 * @return int
	 */
	public function getAusstattung(): int {
		return $this->ausstattung;
	}

	/**
	 * @return boolean
	 */
	public function getLasten(): bool {
		return $this->lasten;
	}

	/**
	 * @return boolean
	 */
	public function getPersonen(): bool {
		return $this->personen;
	}

	/**
	 * @param int $ausstattung Setter for ausstattung
	 * @return Fahrstuhl
	 */
	public function setAusstattung(int $ausstattung) {
		$this->ausstattung = $ausstattung;
		return $this;
	}

	/**
	 * @param boolean $lasten Setter for lasten
	 * @return Fahrstuhl
	 */
	public function setLasten(bool $lasten): Fahrstuhl {
		$this->lasten = $lasten;
		return $this;
	}

	/**
	 * @param boolean $personen Setter for personen
	 * @return Fahrstuhl
	 */
	public function setPersonen(bool $personen): Fahrstuhl {
		$this->personen = $personen;
		return $this;
	}
}
