<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Nebenkostenprom2von
 * Angaben bei Gewerbe Miete,UmSt. im Attribut.
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("nebenkostenprom2von")
 */
class Nebenkostenprom2von implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_nebenkostenprom2von';

	/**
	 * optional
	 *
	 * @Type ("float")
	 * @XmlAttribute 
	 * @var float
	 */
	protected $nebenkostenprom2bis;

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
	 * @param float $nebenkostenprom2bis Shortcut setter for nebenkostenprom2bis
	 * @param float $value the actual value
	 */
	public function __construct(float $nebenkostenprom2bis = null, float $value = null) {
		$this->nebenkostenprom2bis = $nebenkostenprom2bis;
		$this->value = $value;
	}

	/**
	 * @return float
	 */
	public function getNebenkostenprom2bis(): float {
		return $this->nebenkostenprom2bis;
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
	 * @param float $nebenkostenprom2bis Setter for nebenkostenprom2bis
	 * @return Nebenkostenprom2von
	 */
	public function setNebenkostenprom2bis(float $nebenkostenprom2bis): Nebenkostenprom2von {
		$this->nebenkostenprom2bis = $nebenkostenprom2bis;
		return $this;
	}

	/**
	 * @param int $preise Setter for preise
	 * @return Nebenkostenprom2von
	 */
	public function setPreise(int $preise) {
		$this->preise = $preise;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Nebenkostenprom2von
	 */
	public function setValue(float $value): Nebenkostenprom2von {
		$this->value = $value;
		return $this;
	}
}
