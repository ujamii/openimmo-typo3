<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class BebaubarNach
 * Bebaubar nach Bebauungsrichtlinien, Optionen nicht kombinierbar
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("bebaubar_nach")
 */
class BebaubarNach implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const BEBAUBAR_ATTR_34_NACHBARSCHAFT = '34_NACHBARSCHAFT';

	/**
	 */
	const BEBAUBAR_ATTR_35_AUSSENGEBIET = '35_AUSSENGEBIET';

	/**
	 */
	const BEBAUBAR_ATTR_B_PLAN = 'B_PLAN';

	/**
	 */
	const BEBAUBAR_ATTR_BAUERWARTUNGSLAND = 'BAUERWARTUNGSLAND';

	/**
	 */
	const BEBAUBAR_ATTR_BAULAND_OHNE_B_PLAN = 'BAULAND_OHNE_B_PLAN';

	/**
	 */
	const BEBAUBAR_ATTR_KEIN_BAULAND = 'KEIN BAULAND';

	/**
	 */
	const BEBAUBAR_ATTR_LAENDERSPEZIFISCH = 'LAENDERSPEZIFISCH';

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_bebaubarnach';

	/**
	 * optional
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @see BEBAUBAR_ATTR_* constants
	 * @var string
	 */
	protected $bebaubarAttr;

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
	public function getBebaubarAttr(): string {
		return $this->bebaubarAttr;
	}

	/**
	 * @return int
	 */
	public function getZustandAngaben(): int {
		return $this->zustandAngaben;
	}

	/**
	 * @param string $bebaubarAttr Setter for bebaubarAttr
	 * @return BebaubarNach
	 */
	public function setBebaubarAttr(string $bebaubarAttr): BebaubarNach {
		$this->bebaubarAttr = $bebaubarAttr;
		return $this;
	}

	/**
	 * @param int $zustandAngaben Setter for zustandAngaben
	 * @return BebaubarNach
	 */
	public function setZustandAngaben(int $zustandAngaben) {
		$this->zustandAngaben = $zustandAngaben;
		return $this;
	}
}
