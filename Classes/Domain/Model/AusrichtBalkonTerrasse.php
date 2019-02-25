<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class AusrichtBalkonTerrasse
 * Ausrichtung der Balkone bzw. der Terrassen, Optionen kombinierbar
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("ausricht_balkon_terrasse")
 */
class AusrichtBalkonTerrasse implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_ausrichtbalkonterrasse';

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
	 * @SerializedName ("NORD")
	 * @var boolean
	 */
	protected $nord;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("NORDOST")
	 * @var boolean
	 */
	protected $nordost;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("NORDWEST")
	 * @var boolean
	 */
	protected $nordwest;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("OST")
	 * @var boolean
	 */
	protected $ost;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("SUED")
	 * @var boolean
	 */
	protected $sued;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("SUEDOST")
	 * @var boolean
	 */
	protected $suedost;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("SUEDWEST")
	 * @var boolean
	 */
	protected $suedwest;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("WEST")
	 * @var boolean
	 */
	protected $west;

	/**
	 * @return int
	 */
	public function getAusstattung(): int {
		return $this->ausstattung;
	}

	/**
	 * @return boolean
	 */
	public function getNord(): bool {
		return $this->nord;
	}

	/**
	 * @return boolean
	 */
	public function getNordost(): bool {
		return $this->nordost;
	}

	/**
	 * @return boolean
	 */
	public function getNordwest(): bool {
		return $this->nordwest;
	}

	/**
	 * @return boolean
	 */
	public function getOst(): bool {
		return $this->ost;
	}

	/**
	 * @return boolean
	 */
	public function getSued(): bool {
		return $this->sued;
	}

	/**
	 * @return boolean
	 */
	public function getSuedost(): bool {
		return $this->suedost;
	}

	/**
	 * @return boolean
	 */
	public function getSuedwest(): bool {
		return $this->suedwest;
	}

	/**
	 * @return boolean
	 */
	public function getWest(): bool {
		return $this->west;
	}

	/**
	 * @param int $ausstattung Setter for ausstattung
	 * @return AusrichtBalkonTerrasse
	 */
	public function setAusstattung(int $ausstattung) {
		$this->ausstattung = $ausstattung;
		return $this;
	}

	/**
	 * @param boolean $nord Setter for nord
	 * @return AusrichtBalkonTerrasse
	 */
	public function setNord(bool $nord): AusrichtBalkonTerrasse {
		$this->nord = $nord;
		return $this;
	}

	/**
	 * @param boolean $nordost Setter for nordost
	 * @return AusrichtBalkonTerrasse
	 */
	public function setNordost(bool $nordost): AusrichtBalkonTerrasse {
		$this->nordost = $nordost;
		return $this;
	}

	/**
	 * @param boolean $nordwest Setter for nordwest
	 * @return AusrichtBalkonTerrasse
	 */
	public function setNordwest(bool $nordwest): AusrichtBalkonTerrasse {
		$this->nordwest = $nordwest;
		return $this;
	}

	/**
	 * @param boolean $ost Setter for ost
	 * @return AusrichtBalkonTerrasse
	 */
	public function setOst(bool $ost): AusrichtBalkonTerrasse {
		$this->ost = $ost;
		return $this;
	}

	/**
	 * @param boolean $sued Setter for sued
	 * @return AusrichtBalkonTerrasse
	 */
	public function setSued(bool $sued): AusrichtBalkonTerrasse {
		$this->sued = $sued;
		return $this;
	}

	/**
	 * @param boolean $suedost Setter for suedost
	 * @return AusrichtBalkonTerrasse
	 */
	public function setSuedost(bool $suedost): AusrichtBalkonTerrasse {
		$this->suedost = $suedost;
		return $this;
	}

	/**
	 * @param boolean $suedwest Setter for suedwest
	 * @return AusrichtBalkonTerrasse
	 */
	public function setSuedwest(bool $suedwest): AusrichtBalkonTerrasse {
		$this->suedwest = $suedwest;
		return $this;
	}

	/**
	 * @param boolean $west Setter for west
	 * @return AusrichtBalkonTerrasse
	 */
	public function setWest(bool $west): AusrichtBalkonTerrasse {
		$this->west = $west;
		return $this;
	}
}
