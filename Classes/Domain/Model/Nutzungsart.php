<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Nutzungsart
 * nutzungsart
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("nutzungsart")
 */
class Nutzungsart implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("ANLAGE")
	 * @var boolean
	 */
	protected $anlage;

	/**
	 * required
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("GEWERBE")
	 * @var boolean
	 */
	protected $gewerbe;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $objektkategorie;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("WAZ")
	 * @var boolean
	 */
	protected $waz;

	/**
	 * required
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("WOHNEN")
	 * @var boolean
	 */
	protected $wohnen;

	/**
	 * @return boolean
	 */
	public function getAnlage(): bool {
		return $this->anlage;
	}

	/**
	 * @return boolean
	 */
	public function getGewerbe(): bool {
		return $this->gewerbe;
	}

	/**
	 * @return int
	 */
	public function getObjektkategorie(): int {
		return $this->objektkategorie;
	}

	/**
	 * @return boolean
	 */
	public function getWaz(): bool {
		return $this->waz;
	}

	/**
	 * @return boolean
	 */
	public function getWohnen(): bool {
		return $this->wohnen;
	}

	/**
	 * @param boolean $anlage Setter for anlage
	 * @return Nutzungsart
	 */
	public function setAnlage(bool $anlage): Nutzungsart {
		$this->anlage = $anlage;
		return $this;
	}

	/**
	 * @param boolean $gewerbe Setter for gewerbe
	 * @return Nutzungsart
	 */
	public function setGewerbe(bool $gewerbe): Nutzungsart {
		$this->gewerbe = $gewerbe;
		return $this;
	}

	/**
	 * @param int $objektkategorie Setter for objektkategorie
	 * @return Nutzungsart
	 */
	public function setObjektkategorie(int $objektkategorie) {
		$this->objektkategorie = $objektkategorie;
		return $this;
	}

	/**
	 * @param boolean $waz Setter for waz
	 * @return Nutzungsart
	 */
	public function setWaz(bool $waz): Nutzungsart {
		$this->waz = $waz;
		return $this;
	}

	/**
	 * @param boolean $wohnen Setter for wohnen
	 * @return Nutzungsart
	 */
	public function setWohnen(bool $wohnen): Nutzungsart {
		$this->wohnen = $wohnen;
		return $this;
	}
}
