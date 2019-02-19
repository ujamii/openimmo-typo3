<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Nettomieteprom2von
 * Angaben bei Gewerbe Miete, UmSt. im Attribut.
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("nettomieteprom2von")
 */
class Nettomieteprom2von implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 * optional
	 *
	 * @Type ("float")
	 * @XmlAttribute 
	 * @var float
	 */
	protected $nettomieteprom2bis;

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
	 * @param float $nettomieteprom2bis Shortcut setter for nettomieteprom2bis
	 * @param float $value the actual value
	 */
	public function __construct(float $nettomieteprom2bis = null, float $value = null) {
		$this->nettomieteprom2bis = $nettomieteprom2bis;
		$this->value = $value;
	}

	/**
	 * @return float
	 */
	public function getNettomieteprom2bis(): float {
		return $this->nettomieteprom2bis;
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
	 * @param float $nettomieteprom2bis Setter for nettomieteprom2bis
	 * @return Nettomieteprom2von
	 */
	public function setNettomieteprom2bis(float $nettomieteprom2bis): Nettomieteprom2von {
		$this->nettomieteprom2bis = $nettomieteprom2bis;
		return $this;
	}

	/**
	 * @param int $preise Setter for preise
	 * @return Nettomieteprom2von
	 */
	public function setPreise(int $preise) {
		$this->preise = $preise;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Nettomieteprom2von
	 */
	public function setValue(float $value): Nettomieteprom2von {
		$this->value = $value;
		return $this;
	}
}
