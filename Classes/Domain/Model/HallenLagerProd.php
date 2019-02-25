<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class HallenLagerProd
 * Objektart / Typ f. Hallen/Lager/Produktion
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("hallen_lager_prod")
 */
class HallenLagerProd implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const HALLEN_TYP_FREIFLAECHEN = 'FREIFLAECHEN';

	/**
	 */
	const HALLEN_TYP_HALLE = 'HALLE';

	/**
	 */
	const HALLEN_TYP_HOCHREGALLAGER = 'HOCHREGALLAGER';

	/**
	 */
	const HALLEN_TYP_INDUSTRIEHALLE = 'INDUSTRIEHALLE';

	/**
	 */
	const HALLEN_TYP_KUEHLHAUS = 'KUEHLHAUS';

	/**
	 */
	const HALLEN_TYP_LAGER = 'LAGER';

	/**
	 */
	const HALLEN_TYP_LAGER_MIT_FREIFLAECHE = 'LAGER_MIT_FREIFLAECHE';

	/**
	 */
	const HALLEN_TYP_LAGERFLAECHEN = 'LAGERFLAECHEN';

	/**
	 */
	const HALLEN_TYP_PRODUKTION = 'PRODUKTION';

	/**
	 */
	const HALLEN_TYP_SERVICE = 'SERVICE';

	/**
	 */
	const HALLEN_TYP_SPEDITIONSLAGER = 'SPEDITIONSLAGER';

	/**
	 */
	const HALLEN_TYP_WERKSTATT = 'WERKSTATT';

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_hallenlagerprod';

	/**
	 * optional
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @see HALLEN_TYP_* constants
	 * @var string
	 */
	protected $hallenTyp;

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
	public function getHallenTyp(): string {
		return $this->hallenTyp;
	}

	/**
	 * @return int
	 */
	public function getObjektart(): int {
		return $this->objektart;
	}

	/**
	 * @param string $hallenTyp Setter for hallenTyp
	 * @return HallenLagerProd
	 */
	public function setHallenTyp(string $hallenTyp): HallenLagerProd {
		$this->hallenTyp = $hallenTyp;
		return $this;
	}

	/**
	 * @param int $objektart Setter for objektart
	 * @return HallenLagerProd
	 */
	public function setObjektart(int $objektart) {
		$this->objektart = $objektart;
		return $this;
	}
}
