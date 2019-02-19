<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Heizungsart
 * Welche Heizungsarten sind vorhanden, Optionen kombinierbar
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("heizungsart")
 */
class Heizungsart implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

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
	 * @SerializedName ("ETAGE")
	 * @var boolean
	 */
	protected $etage;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("FERN")
	 * @var boolean
	 */
	protected $fern;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("FUSSBODEN")
	 * @var boolean
	 */
	protected $fussboden;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("OFEN")
	 * @var boolean
	 */
	protected $ofen;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("ZENTRAL")
	 * @var boolean
	 */
	protected $zentral;

	/**
	 * @return int
	 */
	public function getAusstattung(): int {
		return $this->ausstattung;
	}

	/**
	 * @return boolean
	 */
	public function getEtage(): bool {
		return $this->etage;
	}

	/**
	 * @return boolean
	 */
	public function getFern(): bool {
		return $this->fern;
	}

	/**
	 * @return boolean
	 */
	public function getFussboden(): bool {
		return $this->fussboden;
	}

	/**
	 * @return boolean
	 */
	public function getOfen(): bool {
		return $this->ofen;
	}

	/**
	 * @return boolean
	 */
	public function getZentral(): bool {
		return $this->zentral;
	}

	/**
	 * @param int $ausstattung Setter for ausstattung
	 * @return Heizungsart
	 */
	public function setAusstattung(int $ausstattung) {
		$this->ausstattung = $ausstattung;
		return $this;
	}

	/**
	 * @param boolean $etage Setter for etage
	 * @return Heizungsart
	 */
	public function setEtage(bool $etage): Heizungsart {
		$this->etage = $etage;
		return $this;
	}

	/**
	 * @param boolean $fern Setter for fern
	 * @return Heizungsart
	 */
	public function setFern(bool $fern): Heizungsart {
		$this->fern = $fern;
		return $this;
	}

	/**
	 * @param boolean $fussboden Setter for fussboden
	 * @return Heizungsart
	 */
	public function setFussboden(bool $fussboden): Heizungsart {
		$this->fussboden = $fussboden;
		return $this;
	}

	/**
	 * @param boolean $ofen Setter for ofen
	 * @return Heizungsart
	 */
	public function setOfen(bool $ofen): Heizungsart {
		$this->ofen = $ofen;
		return $this;
	}

	/**
	 * @param boolean $zentral Setter for zentral
	 * @return Heizungsart
	 */
	public function setZentral(bool $zentral): Heizungsart {
		$this->zentral = $zentral;
		return $this;
	}
}
