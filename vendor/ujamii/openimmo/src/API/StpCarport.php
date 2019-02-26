<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class StpCarport
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("stp_carport") 
 */
class StpCarport {

	/**
	 * optional
	 *
	 * @Type("int") 
	 * @XmlAttribute 
	 * @var int
	 */
	protected $anzahl;

	/**
	 * optional
	 *
	 * @Type("float") 
	 * @XmlAttribute 
	 * @var float
	 */
	protected $stellplatzkaufpreis;

	/**
	 * optional
	 *
	 * @Type("float") 
	 * @XmlAttribute 
	 * @var float
	 */
	protected $stellplatzmiete;

	/**
	 * @return int
	 */
	public function getAnzahl(): int {
		return $this->anzahl;
	}

	/**
	 * @return float
	 */
	public function getStellplatzkaufpreis(): float {
		return $this->stellplatzkaufpreis;
	}

	/**
	 * @return float
	 */
	public function getStellplatzmiete(): float {
		return $this->stellplatzmiete;
	}

	/**
	 * @param int $anzahl Setter for anzahl
	 * @return StpCarport
	 */
	public function setAnzahl(int $anzahl) {
		$this->anzahl = $anzahl;
		return $this;
	}

	/**
	 * @param float $stellplatzkaufpreis Setter for stellplatzkaufpreis
	 * @return StpCarport
	 */
	public function setStellplatzkaufpreis(float $stellplatzkaufpreis) {
		$this->stellplatzkaufpreis = $stellplatzkaufpreis;
		return $this;
	}

	/**
	 * @param float $stellplatzmiete Setter for stellplatzmiete
	 * @return StpCarport
	 */
	public function setStellplatzmiete(float $stellplatzmiete) {
		$this->stellplatzmiete = $stellplatzmiete;
		return $this;
	}
}