<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Gesamtbelastungnetto
 * Die Summe alle Nebenkosten und Mietzinse bei Miete, UmSt. im Attribut.
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("gesamtbelastungnetto")
 */
class Gesamtbelastungnetto implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_gesamtbelastungnetto';

	/**
	 * optional
	 *
	 * @Type ("float")
	 * @XmlAttribute 
	 * @var float
	 */
	protected $gesamtbelastungust;

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
	 * @param float $gesamtbelastungust Shortcut setter for gesamtbelastungust
	 * @param float $value the actual value
	 */
	public function __construct(float $gesamtbelastungust = null, float $value = null) {
		$this->gesamtbelastungust = $gesamtbelastungust;
		$this->value = $value;
	}

	/**
	 * @return float
	 */
	public function getGesamtbelastungust(): float {
		return $this->gesamtbelastungust;
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
	 * @param float $gesamtbelastungust Setter for gesamtbelastungust
	 * @return Gesamtbelastungnetto
	 */
	public function setGesamtbelastungust(float $gesamtbelastungust): Gesamtbelastungnetto {
		$this->gesamtbelastungust = $gesamtbelastungust;
		return $this;
	}

	/**
	 * @param int $preise Setter for preise
	 * @return Gesamtbelastungnetto
	 */
	public function setPreise(int $preise) {
		$this->preise = $preise;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Gesamtbelastungnetto
	 */
	public function setValue(float $value): Gesamtbelastungnetto {
		$this->value = $value;
		return $this;
	}
}
