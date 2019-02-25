<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Zimmer
 * Objekart / Typ f. Zimmer
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("zimmer")
 */
class Zimmer implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_zimmer';

	/**
	 */
	const ZIMMERTYP_ZIMMER = 'ZIMMER';

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $objektart;

	/**
	 * optional
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @see ZIMMERTYP_* constants
	 * @var string
	 */
	protected $zimmertyp;

	/**
	 * @return int
	 */
	public function getObjektart(): int {
		return $this->objektart;
	}

	/**
	 * @return string
	 */
	public function getZimmertyp(): string {
		return $this->zimmertyp;
	}

	/**
	 * @param int $objektart Setter for objektart
	 * @return Zimmer
	 */
	public function setObjektart(int $objektart) {
		$this->objektart = $objektart;
		return $this;
	}

	/**
	 * @param string $zimmertyp Setter for zimmertyp
	 * @return Zimmer
	 */
	public function setZimmertyp(string $zimmertyp): Zimmer {
		$this->zimmertyp = $zimmertyp;
		return $this;
	}
}
