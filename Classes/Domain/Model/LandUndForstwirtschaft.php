<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class LandUndForstwirtschaft
 * Objektart / Typ f. Land-/Forstwirtschaft
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("land_und_forstwirtschaft")
 */
class LandUndForstwirtschaft implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const LAND_TYP_ACKERBAU = 'ACKERBAU';

	/**
	 */
	const LAND_TYP_ANWESEN = 'ANWESEN';

	/**
	 */
	const LAND_TYP_AUSSIEDLERHOF = 'AUSSIEDLERHOF';

	/**
	 */
	const LAND_TYP_BAUERNHOF = 'BAUERNHOF';

	/**
	 */
	const LAND_TYP_GARTENBAU = 'GARTENBAU';

	/**
	 */
	const LAND_TYP_JAGD_UND_FORSTWIRTSCHAFT = 'JAGD_UND_FORSTWIRTSCHAFT';

	/**
	 */
	const LAND_TYP_JAGDREVIER = 'JAGDREVIER';

	/**
	 */
	const LAND_TYP_LANDWIRTSCHAFTLICHE_BETRIEBE = 'LANDWIRTSCHAFTLICHE_BETRIEBE';

	/**
	 */
	const LAND_TYP_REITERHOEFE = 'REITERHOEFE';

	/**
	 */
	const LAND_TYP_SCHEUNEN = 'SCHEUNEN';

	/**
	 */
	const LAND_TYP_SONSTIGE_LANDWIRTSCHAFTSIMMOBILIEN = 'SONSTIGE_LANDWIRTSCHAFTSIMMOBILIEN';

	/**
	 */
	const LAND_TYP_TEICH_UND_FISCHWIRTSCHAFT = 'TEICH_UND_FISCHWIRTSCHAFT';

	/**
	 */
	const LAND_TYP_VIEHWIRTSCHAFT = 'VIEHWIRTSCHAFT';

	/**
	 */
	const LAND_TYP_WEINBAU = 'WEINBAU';

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_landundforstwirtschaft';

	/**
	 * optional
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @see LAND_TYP_* constants
	 * @var string
	 */
	protected $landTyp;

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
	public function getLandTyp(): string {
		return $this->landTyp;
	}

	/**
	 * @return int
	 */
	public function getObjektart(): int {
		return $this->objektart;
	}

	/**
	 * @param string $landTyp Setter for landTyp
	 * @return LandUndForstwirtschaft
	 */
	public function setLandTyp(string $landTyp): LandUndForstwirtschaft {
		$this->landTyp = $landTyp;
		return $this;
	}

	/**
	 * @param int $objektart Setter for objektart
	 * @return LandUndForstwirtschaft
	 */
	public function setObjektart(int $objektart) {
		$this->objektart = $objektart;
		return $this;
	}
}
