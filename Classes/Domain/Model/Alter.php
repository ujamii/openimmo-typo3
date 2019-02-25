<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Alter
 * Ist es ein Neu- oder Altbau, Optionen nicht kombinierbar
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("alter")
 */
class Alter implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const ALTER_ATTR_ALTBAU = 'ALTBAU';

	/**
	 */
	const ALTER_ATTR_NEUBAU = 'NEUBAU';

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_sqlsafealter';

	/**
	 * optional
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @see ALTER_ATTR_* constants
	 * @var string
	 */
	protected $alterAttr;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $zustandAngaben;

	/**
	 * @return string
	 */
	public function getAlterAttr(): string {
		return $this->alterAttr;
	}

	/**
	 * @return int
	 */
	public function getZustandAngaben(): int {
		return $this->zustandAngaben;
	}

	/**
	 * @param string $alterAttr Setter for alterAttr
	 * @return Alter
	 */
	public function setAlterAttr(string $alterAttr): Alter {
		$this->alterAttr = $alterAttr;
		return $this;
	}

	/**
	 * @param int $zustandAngaben Setter for zustandAngaben
	 * @return Alter
	 */
	public function setZustandAngaben(int $zustandAngaben) {
		$this->zustandAngaben = $zustandAngaben;
		return $this;
	}
}
