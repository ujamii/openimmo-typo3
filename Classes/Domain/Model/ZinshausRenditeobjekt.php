<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ZinshausRenditeobjekt
 * Objektyp / Typ f. Zins und Renditehäuser
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("zinshaus_renditeobjekt")
 */
class ZinshausRenditeobjekt implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_zinshausrenditeobjekt';

	/**
	 */
	const ZINS_TYP_BETREUTES_WOHNEN = 'BETREUTES-WOHNEN';

	/**
	 */
	const ZINS_TYP_BUEROGEBAEUDE = 'BUEROGEBAEUDE';

	/**
	 */
	const ZINS_TYP_EINKAUFSCENTREN = 'EINKAUFSCENTREN';

	/**
	 */
	const ZINS_TYP_GESCHAEFTSHAUS = 'GESCHAEFTSHAUS';

	/**
	 */
	const ZINS_TYP_INDUSTRIEANLAGEN = 'INDUSTRIEANLAGEN';

	/**
	 */
	const ZINS_TYP_MEHRFAMILIENHAUS = 'MEHRFAMILIENHAUS';

	/**
	 */
	const ZINS_TYP_PFLEGEHEIM = 'PFLEGEHEIM';

	/**
	 */
	const ZINS_TYP_SANATORIUM = 'SANATORIUM';

	/**
	 */
	const ZINS_TYP_SB_MAERKTE = 'SB_MAERKTE';

	/**
	 */
	const ZINS_TYP_SENIORENHEIM = 'SENIORENHEIM';

	/**
	 */
	const ZINS_TYP_VERBRAUCHERMAERKTE = 'VERBRAUCHERMAERKTE';

	/**
	 */
	const ZINS_TYP_WOHN_UND_GESCHAEFTSHAUS = 'WOHN_UND_GESCHAEFTSHAUS';

	/**
	 */
	const ZINS_TYP_WOHNANLAGEN = 'WOHNANLAGEN';

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
	 * @see ZINS_TYP_* constants
	 * @var string
	 */
	protected $zinsTyp;

	/**
	 * @return int
	 */
	public function getObjektart(): int {
		return $this->objektart;
	}

	/**
	 * @return string
	 */
	public function getZinsTyp(): string {
		return $this->zinsTyp;
	}

	/**
	 * @param int $objektart Setter for objektart
	 * @return ZinshausRenditeobjekt
	 */
	public function setObjektart(int $objektart) {
		$this->objektart = $objektart;
		return $this;
	}

	/**
	 * @param string $zinsTyp Setter for zinsTyp
	 * @return ZinshausRenditeobjekt
	 */
	public function setZinsTyp(string $zinsTyp): ZinshausRenditeobjekt {
		$this->zinsTyp = $zinsTyp;
		return $this;
	}
}
