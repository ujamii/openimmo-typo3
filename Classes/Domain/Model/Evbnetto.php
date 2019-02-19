<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Evbnetto
 * Erhaltungs- und Verbesserungsbeitrag. Ähnlich Instanthaltungsrücklage, UmSt. im Attribut.
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("evbnetto")
 */
class Evbnetto implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 * optional
	 *
	 * @Type ("float")
	 * @XmlAttribute 
	 * @var float
	 */
	protected $evbust;

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
	 * @param float $evbust Shortcut setter for evbust
	 * @param float $value the actual value
	 */
	public function __construct(float $evbust = null, float $value = null) {
		$this->evbust = $evbust;
		$this->value = $value;
	}

	/**
	 * @return float
	 */
	public function getEvbust(): float {
		return $this->evbust;
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
	 * @param float $evbust Setter for evbust
	 * @return Evbnetto
	 */
	public function setEvbust(float $evbust): Evbnetto {
		$this->evbust = $evbust;
		return $this;
	}

	/**
	 * @param int $preise Setter for preise
	 * @return Evbnetto
	 */
	public function setPreise(int $preise) {
		$this->preise = $preise;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Evbnetto
	 */
	public function setValue(float $value): Evbnetto {
		$this->value = $value;
		return $this;
	}
}
