<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Ruecklagenetto
 * Vorhanden Rücklagen bei einem Kauf Objekt, UmSt. im Attribut.
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("ruecklagenetto")
 */
class Ruecklagenetto implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_ruecklagenetto';

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
	protected $ruecklageust;

	/**
	 * @Inline 
	 * @Type ("float") 
	 * @var float
	 */
	protected $value;

	/**
	 * @param float $ruecklageust Shortcut setter for ruecklageust
	 * @param float $value the actual value
	 */
	public function __construct(float $ruecklageust = null, float $value = null) {
		$this->ruecklageust = $ruecklageust;
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
	public function getRuecklageust(): float {
		return $this->ruecklageust;
	}

	/**
	 * @return float
	 */
	public function getValue(): float {
		return $this->value;
	}

	/**
	 * @param int $preise Setter for preise
	 * @return Ruecklagenetto
	 */
	public function setPreise(int $preise) {
		$this->preise = $preise;
		return $this;
	}

	/**
	 * @param float $ruecklageust Setter for ruecklageust
	 * @return Ruecklagenetto
	 */
	public function setRuecklageust(float $ruecklageust): Ruecklagenetto {
		$this->ruecklageust = $ruecklageust;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Ruecklagenetto
	 */
	public function setValue(float $value): Ruecklagenetto {
		$this->value = $value;
		return $this;
	}
}
