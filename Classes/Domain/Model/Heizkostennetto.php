<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Heizkostennetto
 * Die Heizkosten einer Einheit als Nettowert. Die Umsatzsteuer optional im Attribut
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("heizkostennetto")
 */
class Heizkostennetto implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_heizkostennetto';

	/**
	 * optional
	 *
	 * @Type ("float")
	 * @XmlAttribute 
	 * @var float
	 */
	protected $heizkostenust;

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
	 * @param float $heizkostenust Shortcut setter for heizkostenust
	 * @param float $value the actual value
	 */
	public function __construct(float $heizkostenust = null, float $value = null) {
		$this->heizkostenust = $heizkostenust;
		$this->value = $value;
	}

	/**
	 * @return float
	 */
	public function getHeizkostenust(): float {
		return $this->heizkostenust;
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
	 * @param float $heizkostenust Setter for heizkostenust
	 * @return Heizkostennetto
	 */
	public function setHeizkostenust(float $heizkostenust): Heizkostennetto {
		$this->heizkostenust = $heizkostenust;
		return $this;
	}

	/**
	 * @param int $preise Setter for preise
	 * @return Heizkostennetto
	 */
	public function setPreise(int $preise) {
		$this->preise = $preise;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Heizkostennetto
	 */
	public function setValue(float $value): Heizkostennetto {
		$this->value = $value;
		return $this;
	}
}
