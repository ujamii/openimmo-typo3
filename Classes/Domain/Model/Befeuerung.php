<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Befeuerung
 * Welche Befeuerungsarten sind vorhanden, Optionen kombinierbar
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("befeuerung")
 */
class Befeuerung implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_befeuerung';

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("ALTERNATIV")
	 * @var boolean
	 */
	protected $alternativ;

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
	 * @SerializedName ("BLOCK")
	 * @var boolean
	 */
	protected $block;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("ELEKTRO")
	 * @var boolean
	 */
	protected $elektro;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("ERDWAERME")
	 * @var boolean
	 */
	protected $erdwaerme;

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
	 * @SerializedName ("FLUESSIGGAS")
	 * @var boolean
	 */
	protected $fluessiggas;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("GAS")
	 * @var boolean
	 */
	protected $gas;

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
	 * @SerializedName ("KOHLE")
	 * @var boolean
	 */
	protected $kohle;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("LUFTWP")
	 * @var boolean
	 */
	protected $luftwp;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("OEL")
	 * @var boolean
	 */
	protected $oel;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("PELLET")
	 * @var boolean
	 */
	protected $pellet;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("SOLAR")
	 * @var boolean
	 */
	protected $solar;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("WASSER-ELEKTRO")
	 * @var boolean
	 */
	protected $wasserElektro;

	/**
	 * @return boolean
	 */
	public function getAlternativ(): bool {
		return $this->alternativ;
	}

	/**
	 * @return int
	 */
	public function getAusstattung(): int {
		return $this->ausstattung;
	}

	/**
	 * @return boolean
	 */
	public function getBlock(): bool {
		return $this->block;
	}

	/**
	 * @return boolean
	 */
	public function getElektro(): bool {
		return $this->elektro;
	}

	/**
	 * @return boolean
	 */
	public function getErdwaerme(): bool {
		return $this->erdwaerme;
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
	public function getFluessiggas(): bool {
		return $this->fluessiggas;
	}

	/**
	 * @return boolean
	 */
	public function getGas(): bool {
		return $this->gas;
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
	public function getKohle(): bool {
		return $this->kohle;
	}

	/**
	 * @return boolean
	 */
	public function getLuftwp(): bool {
		return $this->luftwp;
	}

	/**
	 * @return boolean
	 */
	public function getOel(): bool {
		return $this->oel;
	}

	/**
	 * @return boolean
	 */
	public function getPellet(): bool {
		return $this->pellet;
	}

	/**
	 * @return boolean
	 */
	public function getSolar(): bool {
		return $this->solar;
	}

	/**
	 * @return boolean
	 */
	public function getWasserElektro(): bool {
		return $this->wasserElektro;
	}

	/**
	 * @param boolean $alternativ Setter for alternativ
	 * @return Befeuerung
	 */
	public function setAlternativ(bool $alternativ): Befeuerung {
		$this->alternativ = $alternativ;
		return $this;
	}

	/**
	 * @param int $ausstattung Setter for ausstattung
	 * @return Befeuerung
	 */
	public function setAusstattung(int $ausstattung) {
		$this->ausstattung = $ausstattung;
		return $this;
	}

	/**
	 * @param boolean $block Setter for block
	 * @return Befeuerung
	 */
	public function setBlock(bool $block): Befeuerung {
		$this->block = $block;
		return $this;
	}

	/**
	 * @param boolean $elektro Setter for elektro
	 * @return Befeuerung
	 */
	public function setElektro(bool $elektro): Befeuerung {
		$this->elektro = $elektro;
		return $this;
	}

	/**
	 * @param boolean $erdwaerme Setter for erdwaerme
	 * @return Befeuerung
	 */
	public function setErdwaerme(bool $erdwaerme): Befeuerung {
		$this->erdwaerme = $erdwaerme;
		return $this;
	}

	/**
	 * @param boolean $fern Setter for fern
	 * @return Befeuerung
	 */
	public function setFern(bool $fern): Befeuerung {
		$this->fern = $fern;
		return $this;
	}

	/**
	 * @param boolean $fluessiggas Setter for fluessiggas
	 * @return Befeuerung
	 */
	public function setFluessiggas(bool $fluessiggas): Befeuerung {
		$this->fluessiggas = $fluessiggas;
		return $this;
	}

	/**
	 * @param boolean $gas Setter for gas
	 * @return Befeuerung
	 */
	public function setGas(bool $gas): Befeuerung {
		$this->gas = $gas;
		return $this;
	}

	/**
	 * @param boolean $holz Setter for holz
	 * @return Befeuerung
	 */
	public function setHolz(bool $holz): Befeuerung {
		$this->holz = $holz;
		return $this;
	}

	/**
	 * @param boolean $kohle Setter for kohle
	 * @return Befeuerung
	 */
	public function setKohle(bool $kohle): Befeuerung {
		$this->kohle = $kohle;
		return $this;
	}

	/**
	 * @param boolean $luftwp Setter for luftwp
	 * @return Befeuerung
	 */
	public function setLuftwp(bool $luftwp): Befeuerung {
		$this->luftwp = $luftwp;
		return $this;
	}

	/**
	 * @param boolean $oel Setter for oel
	 * @return Befeuerung
	 */
	public function setOel(bool $oel): Befeuerung {
		$this->oel = $oel;
		return $this;
	}

	/**
	 * @param boolean $pellet Setter for pellet
	 * @return Befeuerung
	 */
	public function setPellet(bool $pellet): Befeuerung {
		$this->pellet = $pellet;
		return $this;
	}

	/**
	 * @param boolean $solar Setter for solar
	 * @return Befeuerung
	 */
	public function setSolar(bool $solar): Befeuerung {
		$this->solar = $solar;
		return $this;
	}

	/**
	 * @param boolean $wasserElektro Setter for wasserElektro
	 * @return Befeuerung
	 */
	public function setWasserElektro(bool $wasserElektro): Befeuerung {
		$this->wasserElektro = $wasserElektro;
		return $this;
	}
}
