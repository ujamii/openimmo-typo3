<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Kaufpreis
 * Gesamt- (Angebots-)Kaufpreis der Immobilie. Wenn "Auf Anfrage" dann Wert = 0 und Attribut auf TRUE
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("kaufpreis")
 */
class Kaufpreis implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_kaufpreis';

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @var boolean
	 */
	protected $aufAnfrage;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $preise;

	/**
	 * @Inline 
	 * @Type ("float") 
	 * @var float
	 */
	protected $value;

	/**
	 * @param boolean $aufAnfrage Shortcut setter for aufAnfrage
	 * @param float $value the actual value
	 */
	public function __construct(bool $aufAnfrage = null, float $value = null) {
		$this->aufAnfrage = $aufAnfrage;
		$this->value = $value;
	}

	/**
	 * @return boolean
	 */
	public function getAufAnfrage(): bool {
		return $this->aufAnfrage;
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
	public function getValue(): float {
		return $this->value;
	}

	/**
	 * @param boolean $aufAnfrage Setter for aufAnfrage
	 * @return Kaufpreis
	 */
	public function setAufAnfrage(bool $aufAnfrage): Kaufpreis {
		$this->aufAnfrage = $aufAnfrage;
		return $this;
	}

	/**
	 * @param int $preise Setter for preise
	 * @return Kaufpreis
	 */
	public function setPreise(int $preise) {
		$this->preise = $preise;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Kaufpreis
	 */
	public function setValue(float $value): Kaufpreis {
		$this->value = $value;
		return $this;
	}
}
