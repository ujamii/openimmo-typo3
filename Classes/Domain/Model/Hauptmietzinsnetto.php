<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Hauptmietzinsnetto
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("hauptmietzinsnetto")
 */
class Hauptmietzinsnetto implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_hauptmietzinsnetto';

	/**
	 * optional
	 *
	 * @Type ("float")
	 * @XmlAttribute 
	 * @var float
	 */
	protected $hauptmietzinsust;

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
	 * @param float $hauptmietzinsust Shortcut setter for hauptmietzinsust
	 * @param float $value the actual value
	 */
	public function __construct(float $hauptmietzinsust = null, float $value = null) {
		$this->hauptmietzinsust = $hauptmietzinsust;
		$this->value = $value;
	}

	/**
	 * @return float
	 */
	public function getHauptmietzinsust(): float {
		return $this->hauptmietzinsust;
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
	 * @param float $hauptmietzinsust Setter for hauptmietzinsust
	 * @return Hauptmietzinsnetto
	 */
	public function setHauptmietzinsust(float $hauptmietzinsust): Hauptmietzinsnetto {
		$this->hauptmietzinsust = $hauptmietzinsust;
		return $this;
	}

	/**
	 * @param int $preise Setter for preise
	 * @return Hauptmietzinsnetto
	 */
	public function setPreise(int $preise) {
		$this->preise = $preise;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Hauptmietzinsnetto
	 */
	public function setValue(float $value): Hauptmietzinsnetto {
		$this->value = $value;
		return $this;
	}
}
