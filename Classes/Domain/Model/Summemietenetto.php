<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Summemietenetto
 * Gesamtsumme der Mietkosten, UmSt. im Attribut.
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("summemietenetto")
 */
class Summemietenetto implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

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
	protected $summemieteust;

	/**
	 * @Inline 
	 * @Type ("float") 
	 * @var float
	 */
	protected $value;

	/**
	 * @param float $summemieteust Shortcut setter for summemieteust
	 * @param float $value the actual value
	 */
	public function __construct(float $summemieteust = null, float $value = null) {
		$this->summemieteust = $summemieteust;
		$this->value = $value;
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
	public function getSummemieteust(): float {
		return $this->summemieteust;
	}

	/**
	 * @return float
	 */
	public function getValue(): float {
		return $this->value;
	}

	/**
	 * @param int $preise Setter for preise
	 * @return Summemietenetto
	 */
	public function setPreise(int $preise) {
		$this->preise = $preise;
		return $this;
	}

	/**
	 * @param float $summemieteust Setter for summemieteust
	 * @return Summemietenetto
	 */
	public function setSummemieteust(float $summemieteust): Summemietenetto {
		$this->summemieteust = $summemieteust;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Summemietenetto
	 */
	public function setValue(float $value): Summemietenetto {
		$this->value = $value;
		return $this;
	}
}
