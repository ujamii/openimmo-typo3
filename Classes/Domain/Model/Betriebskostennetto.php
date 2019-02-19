<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Betriebskostennetto
 * Betriebskosten eines Objektes bei Vermietun, UmSt. im Attribut
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("betriebskostennetto")
 */
class Betriebskostennetto implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 * optional
	 *
	 * @Type ("float")
	 * @XmlAttribute 
	 * @var float
	 */
	protected $betriebskostenust;

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
	 * @param float $betriebskostenust Shortcut setter for betriebskostenust
	 * @param float $value the actual value
	 */
	public function __construct(float $betriebskostenust = null, float $value = null) {
		$this->betriebskostenust = $betriebskostenust;
		$this->value = $value;
	}

	/**
	 * @return float
	 */
	public function getBetriebskostenust(): float {
		return $this->betriebskostenust;
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
	 * @param float $betriebskostenust Setter for betriebskostenust
	 * @return Betriebskostennetto
	 */
	public function setBetriebskostenust(float $betriebskostenust): Betriebskostennetto {
		$this->betriebskostenust = $betriebskostenust;
		return $this;
	}

	/**
	 * @param int $preise Setter for preise
	 * @return Betriebskostennetto
	 */
	public function setPreise(int $preise) {
		$this->preise = $preise;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Betriebskostennetto
	 */
	public function setValue(float $value): Betriebskostennetto {
		$this->value = $value;
		return $this;
	}
}
