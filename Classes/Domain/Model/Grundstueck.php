<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Grundstueck
 * Objektart / Typ f. Grundstücke
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("grundstueck")
 */
class Grundstueck implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const GRUNDST_TYP_FREIZEIT = 'FREIZEIT';

	/**
	 */
	const GRUNDST_TYP_GEMISCHT = 'GEMISCHT';

	/**
	 */
	const GRUNDST_TYP_GEWERBE = 'GEWERBE';

	/**
	 */
	const GRUNDST_TYP_GEWERBEPARK = 'GEWERBEPARK';

	/**
	 */
	const GRUNDST_TYP_INDUSTRIE = 'INDUSTRIE';

	/**
	 */
	const GRUNDST_TYP_LAND_FORSTWIRSCHAFT = 'LAND_FORSTWIRSCHAFT';

	/**
	 */
	const GRUNDST_TYP_SEELIEGENSCHAFT = 'SEELIEGENSCHAFT';

	/**
	 */
	const GRUNDST_TYP_SONDERNUTZUNG = 'SONDERNUTZUNG';

	/**
	 */
	const GRUNDST_TYP_WOHNEN = 'WOHNEN';

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_grundstueck';

	/**
	 * optional
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @see GRUNDST_TYP_* constants
	 * @var string
	 */
	protected $grundstTyp;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $objektart;

	/**
	 * @return string
	 */
	public function getGrundstTyp(): string {
		return $this->grundstTyp;
	}

	/**
	 * @return int
	 */
	public function getObjektart(): int {
		return $this->objektart;
	}

	/**
	 * @param string $grundstTyp Setter for grundstTyp
	 * @return Grundstueck
	 */
	public function setGrundstTyp(string $grundstTyp): Grundstueck {
		$this->grundstTyp = $grundstTyp;
		return $this;
	}

	/**
	 * @param int $objektart Setter for objektart
	 * @return Grundstueck
	 */
	public function setObjektart(int $objektart) {
		$this->objektart = $objektart;
		return $this;
	}
}
