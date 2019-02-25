<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ErschliessungUmfang
 * Detailbeschreibung der Massnahmen
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("erschliessung_umfang")
 */
class ErschliessungUmfang implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const ERSCHL_ATTR_GAS = 'GAS';

	/**
	 */
	const ERSCHL_ATTR_STROM = 'STROM';

	/**
	 */
	const ERSCHL_ATTR_TK = 'TK';

	/**
	 */
	const ERSCHL_ATTR_WASSER = 'WASSER';

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_erschliessungumfang';

	/**
	 * optional
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @see ERSCHL_ATTR_* constants
	 * @var string
	 */
	protected $erschlAttr;

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
	public function getErschlAttr(): string {
		return $this->erschlAttr;
	}

	/**
	 * @return int
	 */
	public function getZustandAngaben(): int {
		return $this->zustandAngaben;
	}

	/**
	 * @param string $erschlAttr Setter for erschlAttr
	 * @return ErschliessungUmfang
	 */
	public function setErschlAttr(string $erschlAttr): ErschliessungUmfang {
		$this->erschlAttr = $erschlAttr;
		return $this;
	}

	/**
	 * @param int $zustandAngaben Setter for zustandAngaben
	 * @return ErschliessungUmfang
	 */
	public function setZustandAngaben(int $zustandAngaben) {
		$this->zustandAngaben = $zustandAngaben;
		return $this;
	}
}
