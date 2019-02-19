<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Monatlichekostennetto
 * Summe der Monatlichen Kosten einer Wohnung als Information für einen Käufer (Netto), Umst im Attribut.
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("monatlichekostennetto")
 */
class Monatlichekostennetto implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 * optional
	 *
	 * @Type ("float")
	 * @XmlAttribute 
	 * @var float
	 */
	protected $monatlichekostenust;

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
	 * @param float $monatlichekostenust Shortcut setter for monatlichekostenust
	 * @param float $value the actual value
	 */
	public function __construct(float $monatlichekostenust = null, float $value = null) {
		$this->monatlichekostenust = $monatlichekostenust;
		$this->value = $value;
	}

	/**
	 * @return float
	 */
	public function getMonatlichekostenust(): float {
		return $this->monatlichekostenust;
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
	 * @param float $monatlichekostenust Setter for monatlichekostenust
	 * @return Monatlichekostennetto
	 */
	public function setMonatlichekostenust(float $monatlichekostenust): Monatlichekostennetto {
		$this->monatlichekostenust = $monatlichekostenust;
		return $this;
	}

	/**
	 * @param int $preise Setter for preise
	 * @return Monatlichekostennetto
	 */
	public function setPreise(int $preise) {
		$this->preise = $preise;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Monatlichekostennetto
	 */
	public function setValue(float $value): Monatlichekostennetto {
		$this->value = $value;
		return $this;
	}
}
