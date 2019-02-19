<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Sonstigekostennetto
 * Anganen bei Miet-Objekten, UmSt. im Attribut.
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("sonstigekostennetto")
 */
class Sonstigekostennetto implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

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
	protected $sonstigekostenust;

	/**
	 * @Inline 
	 * @Type ("float") 
	 * @var float
	 */
	protected $value;

	/**
	 * @param float $sonstigekostenust Shortcut setter for sonstigekostenust
	 * @param float $value the actual value
	 */
	public function __construct(float $sonstigekostenust = null, float $value = null) {
		$this->sonstigekostenust = $sonstigekostenust;
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
	public function getSonstigekostenust(): float {
		return $this->sonstigekostenust;
	}

	/**
	 * @return float
	 */
	public function getValue(): float {
		return $this->value;
	}

	/**
	 * @param int $preise Setter for preise
	 * @return Sonstigekostennetto
	 */
	public function setPreise(int $preise) {
		$this->preise = $preise;
		return $this;
	}

	/**
	 * @param float $sonstigekostenust Setter for sonstigekostenust
	 * @return Sonstigekostennetto
	 */
	public function setSonstigekostenust(float $sonstigekostenust): Sonstigekostennetto {
		$this->sonstigekostenust = $sonstigekostenust;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Sonstigekostennetto
	 */
	public function setValue(float $value): Sonstigekostennetto {
		$this->value = $value;
		return $this;
	}
}
