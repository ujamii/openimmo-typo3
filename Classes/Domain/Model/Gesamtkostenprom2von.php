<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Gesamtkostenprom2von
 * Gesamtkosten bei Gewerbeobjekten Von - Bis.
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("gesamtkostenprom2von")
 */
class Gesamtkostenprom2von implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 * optional
	 *
	 * @Type ("float")
	 * @XmlAttribute 
	 * @var float
	 */
	protected $gesamtkostenprom2bis;

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
	 * @param float $gesamtkostenprom2bis Shortcut setter for gesamtkostenprom2bis
	 * @param float $value the actual value
	 */
	public function __construct(float $gesamtkostenprom2bis = null, float $value = null) {
		$this->gesamtkostenprom2bis = $gesamtkostenprom2bis;
		$this->value = $value;
	}

	/**
	 * @return float
	 */
	public function getGesamtkostenprom2bis(): float {
		return $this->gesamtkostenprom2bis;
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
	 * @param float $gesamtkostenprom2bis Setter for gesamtkostenprom2bis
	 * @return Gesamtkostenprom2von
	 */
	public function setGesamtkostenprom2bis(float $gesamtkostenprom2bis): Gesamtkostenprom2von {
		$this->gesamtkostenprom2bis = $gesamtkostenprom2bis;
		return $this;
	}

	/**
	 * @param int $preise Setter for preise
	 * @return Gesamtkostenprom2von
	 */
	public function setPreise(int $preise) {
		$this->preise = $preise;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Gesamtkostenprom2von
	 */
	public function setValue(float $value): Gesamtkostenprom2von {
		$this->value = $value;
		return $this;
	}
}
