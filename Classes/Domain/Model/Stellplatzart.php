<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Stellplatzart
 * Welche Stellplatzarten sind vorhanden, Optionen kombinierbar, als einfache Alternative zu den stp.
 *
 * ..Elementen
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("stellplatzart")
 */
class Stellplatzart implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

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
	 * @SerializedName ("CARPORT")
	 * @var boolean
	 */
	protected $carport;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("DUPLEX")
	 * @var boolean
	 */
	protected $duplex;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("FREIPLATZ")
	 * @var boolean
	 */
	protected $freiplatz;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("GARAGE")
	 * @var boolean
	 */
	protected $garage;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("PARKHAUS")
	 * @var boolean
	 */
	protected $parkhaus;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("TIEFGARAGE")
	 * @var boolean
	 */
	protected $tiefgarage;

	/**
	 * @return int
	 */
	public function getAusstattung(): int {
		return $this->ausstattung;
	}

	/**
	 * @return boolean
	 */
	public function getCarport(): bool {
		return $this->carport;
	}

	/**
	 * @return boolean
	 */
	public function getDuplex(): bool {
		return $this->duplex;
	}

	/**
	 * @return boolean
	 */
	public function getFreiplatz(): bool {
		return $this->freiplatz;
	}

	/**
	 * @return boolean
	 */
	public function getGarage(): bool {
		return $this->garage;
	}

	/**
	 * @return boolean
	 */
	public function getParkhaus(): bool {
		return $this->parkhaus;
	}

	/**
	 * @return boolean
	 */
	public function getTiefgarage(): bool {
		return $this->tiefgarage;
	}

	/**
	 * @param int $ausstattung Setter for ausstattung
	 * @return Stellplatzart
	 */
	public function setAusstattung(int $ausstattung) {
		$this->ausstattung = $ausstattung;
		return $this;
	}

	/**
	 * @param boolean $carport Setter for carport
	 * @return Stellplatzart
	 */
	public function setCarport(bool $carport): Stellplatzart {
		$this->carport = $carport;
		return $this;
	}

	/**
	 * @param boolean $duplex Setter for duplex
	 * @return Stellplatzart
	 */
	public function setDuplex(bool $duplex): Stellplatzart {
		$this->duplex = $duplex;
		return $this;
	}

	/**
	 * @param boolean $freiplatz Setter for freiplatz
	 * @return Stellplatzart
	 */
	public function setFreiplatz(bool $freiplatz): Stellplatzart {
		$this->freiplatz = $freiplatz;
		return $this;
	}

	/**
	 * @param boolean $garage Setter for garage
	 * @return Stellplatzart
	 */
	public function setGarage(bool $garage): Stellplatzart {
		$this->garage = $garage;
		return $this;
	}

	/**
	 * @param boolean $parkhaus Setter for parkhaus
	 * @return Stellplatzart
	 */
	public function setParkhaus(bool $parkhaus): Stellplatzart {
		$this->parkhaus = $parkhaus;
		return $this;
	}

	/**
	 * @param boolean $tiefgarage Setter for tiefgarage
	 * @return Stellplatzart
	 */
	public function setTiefgarage(bool $tiefgarage): Stellplatzart {
		$this->tiefgarage = $tiefgarage;
		return $this;
	}
}
