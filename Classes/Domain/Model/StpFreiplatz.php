<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class StpFreiplatz
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("stp_freiplatz")
 */
class StpFreiplatz implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_stpfreiplatz';

	/**
	 * optional
	 *
	 * @Type ("int")
	 * @XmlAttribute 
	 * @var int
	 */
	protected $anzahl;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $preise;

	/**
	 * optional
	 *
	 * @Type ("float")
	 * @XmlAttribute 
	 * @var float
	 */
	protected $stellplatzkaufpreis;

	/**
	 * optional
	 *
	 * @Type ("float")
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
	 * @return int
	 */
	public function getPreise(): int {
		return $this->preise;
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
	 * @return StpFreiplatz
	 */
	public function setAnzahl(int $anzahl): StpFreiplatz {
		$this->anzahl = $anzahl;
		return $this;
	}

	/**
	 * @param int $preise Setter for preise
	 * @return StpFreiplatz
	 */
	public function setPreise(int $preise) {
		$this->preise = $preise;
		return $this;
	}

	/**
	 * @param float $stellplatzkaufpreis Setter for stellplatzkaufpreis
	 * @return StpFreiplatz
	 */
	public function setStellplatzkaufpreis(float $stellplatzkaufpreis): StpFreiplatz {
		$this->stellplatzkaufpreis = $stellplatzkaufpreis;
		return $this;
	}

	/**
	 * @param float $stellplatzmiete Setter for stellplatzmiete
	 * @return StpFreiplatz
	 */
	public function setStellplatzmiete(float $stellplatzmiete): StpFreiplatz {
		$this->stellplatzmiete = $stellplatzmiete;
		return $this;
	}
}
