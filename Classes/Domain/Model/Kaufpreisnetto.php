<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Kaufpreisnetto
 * Ausgewiesene Kaufpreis Netto, Optional mit Umst im Attribut. Speziell für Gewerbe
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("kaufpreisnetto")
 */
class Kaufpreisnetto implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 * optional
	 *
	 * @Type ("float")
	 * @XmlAttribute 
	 * @var float
	 */
	protected $kaufpreisust;

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
	 * @param float $kaufpreisust Shortcut setter for kaufpreisust
	 * @param float $value the actual value
	 */
	public function __construct(float $kaufpreisust = null, float $value = null) {
		$this->kaufpreisust = $kaufpreisust;
		$this->value = $value;
	}

	/**
	 * @return float
	 */
	public function getKaufpreisust(): float {
		return $this->kaufpreisust;
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
	 * @param float $kaufpreisust Setter for kaufpreisust
	 * @return Kaufpreisnetto
	 */
	public function setKaufpreisust(float $kaufpreisust): Kaufpreisnetto {
		$this->kaufpreisust = $kaufpreisust;
		return $this;
	}

	/**
	 * @param int $preise Setter for preise
	 * @return Kaufpreisnetto
	 */
	public function setPreise(int $preise) {
		$this->preise = $preise;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Kaufpreisnetto
	 */
	public function setValue(float $value): Kaufpreisnetto {
		$this->value = $value;
		return $this;
	}
}
