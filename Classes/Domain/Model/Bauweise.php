<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Bauweise
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("bauweise")
 */
class Bauweise implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

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
	 * @SerializedName ("FERTIGTEILE")
	 * @var boolean
	 */
	protected $fertigteile;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("HOLZ")
	 * @var boolean
	 */
	protected $holz;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("MASSIV")
	 * @var boolean
	 */
	protected $massiv;

	/**
	 * @return int
	 */
	public function getAusstattung(): int {
		return $this->ausstattung;
	}

	/**
	 * @return boolean
	 */
	public function getFertigteile(): bool {
		return $this->fertigteile;
	}

	/**
	 * @return boolean
	 */
	public function getHolz(): bool {
		return $this->holz;
	}

	/**
	 * @return boolean
	 */
	public function getMassiv(): bool {
		return $this->massiv;
	}

	/**
	 * @param int $ausstattung Setter for ausstattung
	 * @return Bauweise
	 */
	public function setAusstattung(int $ausstattung) {
		$this->ausstattung = $ausstattung;
		return $this;
	}

	/**
	 * @param boolean $fertigteile Setter for fertigteile
	 * @return Bauweise
	 */
	public function setFertigteile(bool $fertigteile): Bauweise {
		$this->fertigteile = $fertigteile;
		return $this;
	}

	/**
	 * @param boolean $holz Setter for holz
	 * @return Bauweise
	 */
	public function setHolz(bool $holz): Bauweise {
		$this->holz = $holz;
		return $this;
	}

	/**
	 * @param boolean $massiv Setter for massiv
	 * @return Bauweise
	 */
	public function setMassiv(bool $massiv): Bauweise {
		$this->massiv = $massiv;
		return $this;
	}
}
