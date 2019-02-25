<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Provisionnetto
 * Wenn unterschiedliche Provisionen anfallen, dann hier Netto und UmSt. einzeln
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("provisionnetto")
 */
class Provisionnetto implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_provisionnetto';

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
	protected $provisionust;

	/**
	 * @Inline 
	 * @Type ("float") 
	 * @var float
	 */
	protected $value;

	/**
	 * @param float $provisionust Shortcut setter for provisionust
	 * @param float $value the actual value
	 */
	public function __construct(float $provisionust = null, float $value = null) {
		$this->provisionust = $provisionust;
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
	public function getProvisionust(): float {
		return $this->provisionust;
	}

	/**
	 * @return float
	 */
	public function getValue(): float {
		return $this->value;
	}

	/**
	 * @param int $preise Setter for preise
	 * @return Provisionnetto
	 */
	public function setPreise(int $preise) {
		$this->preise = $preise;
		return $this;
	}

	/**
	 * @param float $provisionust Setter for provisionust
	 * @return Provisionnetto
	 */
	public function setProvisionust(float $provisionust): Provisionnetto {
		$this->provisionust = $provisionust;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Provisionnetto
	 */
	public function setValue(float $value): Provisionnetto {
		$this->value = $value;
		return $this;
	}
}
