<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Kueche
 * Welche Eigenschaften besitzt die Küche, Optionen kombinierbar
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("kueche")
 */
class Kueche implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_kueche';

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
	 * @SerializedName ("EBK")
	 * @var boolean
	 */
	protected $ebk;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("OFFEN")
	 * @var boolean
	 */
	protected $offen;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("PANTRY")
	 * @var boolean
	 */
	protected $pantry;

	/**
	 * @return int
	 */
	public function getAusstattung(): int {
		return $this->ausstattung;
	}

	/**
	 * @return boolean
	 */
	public function getEbk(): bool {
		return $this->ebk;
	}

	/**
	 * @return boolean
	 */
	public function getOffen(): bool {
		return $this->offen;
	}

	/**
	 * @return boolean
	 */
	public function getPantry(): bool {
		return $this->pantry;
	}

	/**
	 * @param int $ausstattung Setter for ausstattung
	 * @return Kueche
	 */
	public function setAusstattung(int $ausstattung) {
		$this->ausstattung = $ausstattung;
		return $this;
	}

	/**
	 * @param boolean $ebk Setter for ebk
	 * @return Kueche
	 */
	public function setEbk(bool $ebk): Kueche {
		$this->ebk = $ebk;
		return $this;
	}

	/**
	 * @param boolean $offen Setter for offen
	 * @return Kueche
	 */
	public function setOffen(bool $offen): Kueche {
		$this->offen = $offen;
		return $this;
	}

	/**
	 * @param boolean $pantry Setter for pantry
	 * @return Kueche
	 */
	public function setPantry(bool $pantry): Kueche {
		$this->pantry = $pantry;
		return $this;
	}
}
