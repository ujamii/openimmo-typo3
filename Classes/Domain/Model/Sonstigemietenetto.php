<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Sonstigemietenetto
 * Ergänzenden Mietkosten, UmSt. im Attribut.
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("sonstigemietenetto")
 */
class Sonstigemietenetto implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_sonstigemietenetto';

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
	protected $sonstigemieteust;

	/**
	 * @Inline 
	 * @Type ("float") 
	 * @var float
	 */
	protected $value;

	/**
	 * @param float $sonstigemieteust Shortcut setter for sonstigemieteust
	 * @param float $value the actual value
	 */
	public function __construct(float $sonstigemieteust = null, float $value = null) {
		$this->sonstigemieteust = $sonstigemieteust;
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
	public function getSonstigemieteust(): float {
		return $this->sonstigemieteust;
	}

	/**
	 * @return float
	 */
	public function getValue(): float {
		return $this->value;
	}

	/**
	 * @param int $preise Setter for preise
	 * @return Sonstigemietenetto
	 */
	public function setPreise(int $preise) {
		$this->preise = $preise;
		return $this;
	}

	/**
	 * @param float $sonstigemieteust Setter for sonstigemieteust
	 * @return Sonstigemietenetto
	 */
	public function setSonstigemieteust(float $sonstigemieteust): Sonstigemietenetto {
		$this->sonstigemieteust = $sonstigemieteust;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Sonstigemietenetto
	 */
	public function setValue(float $value): Sonstigemietenetto {
		$this->value = $value;
		return $this;
	}
}
