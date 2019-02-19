<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Bad
 * Welche Eigenschaft besitzt das Bad, Optionen kombinierbar
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("bad")
 */
class Bad implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

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
	 * @SerializedName ("BIDET")
	 * @var boolean
	 */
	protected $bidet;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("DUSCHE")
	 * @var boolean
	 */
	protected $dusche;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("FENSTER")
	 * @var boolean
	 */
	protected $fenster;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("PISSOIR")
	 * @var boolean
	 */
	protected $pissoir;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("WANNE")
	 * @var boolean
	 */
	protected $wanne;

	/**
	 * @return int
	 */
	public function getAusstattung(): int {
		return $this->ausstattung;
	}

	/**
	 * @return boolean
	 */
	public function getBidet(): bool {
		return $this->bidet;
	}

	/**
	 * @return boolean
	 */
	public function getDusche(): bool {
		return $this->dusche;
	}

	/**
	 * @return boolean
	 */
	public function getFenster(): bool {
		return $this->fenster;
	}

	/**
	 * @return boolean
	 */
	public function getPissoir(): bool {
		return $this->pissoir;
	}

	/**
	 * @return boolean
	 */
	public function getWanne(): bool {
		return $this->wanne;
	}

	/**
	 * @param int $ausstattung Setter for ausstattung
	 * @return Bad
	 */
	public function setAusstattung(int $ausstattung) {
		$this->ausstattung = $ausstattung;
		return $this;
	}

	/**
	 * @param boolean $bidet Setter for bidet
	 * @return Bad
	 */
	public function setBidet(bool $bidet): Bad {
		$this->bidet = $bidet;
		return $this;
	}

	/**
	 * @param boolean $dusche Setter for dusche
	 * @return Bad
	 */
	public function setDusche(bool $dusche): Bad {
		$this->dusche = $dusche;
		return $this;
	}

	/**
	 * @param boolean $fenster Setter for fenster
	 * @return Bad
	 */
	public function setFenster(bool $fenster): Bad {
		$this->fenster = $fenster;
		return $this;
	}

	/**
	 * @param boolean $pissoir Setter for pissoir
	 * @return Bad
	 */
	public function setPissoir(bool $pissoir): Bad {
		$this->pissoir = $pissoir;
		return $this;
	}

	/**
	 * @param boolean $wanne Setter for wanne
	 * @return Bad
	 */
	public function setWanne(bool $wanne): Bad {
		$this->wanne = $wanne;
		return $this;
	}
}
