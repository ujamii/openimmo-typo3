<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Geokoordinaten
 * Geokoordinaten der Immobilie, Pflichtfeld, alternativ mit Ort, PLZ
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("geokoordinaten")
 */
class Geokoordinaten implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_geokoordinaten';

	/**
	 * required
	 *
	 * @Type ("float")
	 * @XmlAttribute 
	 * @var float
	 */
	protected $breitengrad;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $geo;

	/**
	 * required
	 *
	 * @Type ("float")
	 * @XmlAttribute 
	 * @var float
	 */
	protected $laengengrad;

	/**
	 * @return float
	 */
	public function getBreitengrad(): float {
		return $this->breitengrad;
	}

	/**
	 * @return int
	 */
	public function getGeo(): int {
		return $this->geo;
	}

	/**
	 * @return float
	 */
	public function getLaengengrad(): float {
		return $this->laengengrad;
	}

	/**
	 * @param float $breitengrad Setter for breitengrad
	 * @return Geokoordinaten
	 */
	public function setBreitengrad(float $breitengrad): Geokoordinaten {
		$this->breitengrad = $breitengrad;
		return $this;
	}

	/**
	 * @param int $geo Setter for geo
	 * @return Geokoordinaten
	 */
	public function setGeo(int $geo) {
		$this->geo = $geo;
		return $this;
	}

	/**
	 * @param float $laengengrad Setter for laengengrad
	 * @return Geokoordinaten
	 */
	public function setLaengengrad(float $laengengrad): Geokoordinaten {
		$this->laengengrad = $laengengrad;
		return $this;
	}
}
