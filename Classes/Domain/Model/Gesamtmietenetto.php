<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Gesamtmietenetto
 * Summe alle Mietzins Zahlungen, UmSt. im Attribut.
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("gesamtmietenetto")
 */
class Gesamtmietenetto implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 * optional
	 *
	 * @Type ("float")
	 * @XmlAttribute 
	 * @var float
	 */
	protected $gesamtmieteust;

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
	 * @param float $gesamtmieteust Shortcut setter for gesamtmieteust
	 * @param float $value the actual value
	 */
	public function __construct(float $gesamtmieteust = null, float $value = null) {
		$this->gesamtmieteust = $gesamtmieteust;
		$this->value = $value;
	}

	/**
	 * @return float
	 */
	public function getGesamtmieteust(): float {
		return $this->gesamtmieteust;
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
	 * @param float $gesamtmieteust Setter for gesamtmieteust
	 * @return Gesamtmietenetto
	 */
	public function setGesamtmieteust(float $gesamtmieteust): Gesamtmietenetto {
		$this->gesamtmieteust = $gesamtmieteust;
		return $this;
	}

	/**
	 * @param int $preise Setter for preise
	 * @return Gesamtmietenetto
	 */
	public function setPreise(int $preise) {
		$this->preise = $preise;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Gesamtmietenetto
	 */
	public function setValue(float $value): Gesamtmietenetto {
		$this->value = $value;
		return $this;
	}
}
