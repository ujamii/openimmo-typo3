<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class LageGebiet
 * Lage Gebiet, Optionen nicht kombinierbar
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("lage_gebiet")
 */
class LageGebiet implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const GEBIETE_1A = '1A';

	/**
	 */
	const GEBIETE_1B = '1B';

	/**
	 */
	const GEBIETE_GEWERBE = 'GEWERBE';

	/**
	 */
	const GEBIETE_INDUSTRIE = 'INDUSTRIE';

	/**
	 */
	const GEBIETE_MISCH = 'MISCH';

	/**
	 */
	const GEBIETE_NEBENZENTRUM = 'NEBENZENTRUM';

	/**
	 */
	const GEBIETE_NEUBAU = 'NEUBAU';

	/**
	 */
	const GEBIETE_ORTSLAGE = 'ORTSLAGE';

	/**
	 */
	const GEBIETE_SIEDLUNG = 'SIEDLUNG';

	/**
	 */
	const GEBIETE_STADTRAND = 'STADTRAND';

	/**
	 */
	const GEBIETE_STADTTEIL = 'STADTTEIL';

	/**
	 */
	const GEBIETE_STADTZENTRUM = 'STADTZENTRUM';

	/**
	 */
	const GEBIETE_WOHN = 'WOHN';

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_lagegebiet';

	/**
	 * optional
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @see GEBIETE_* constants
	 * @var string
	 */
	protected $gebiete;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $geo;

	/**
	 * @return string
	 */
	public function getGebiete(): string {
		return $this->gebiete;
	}

	/**
	 * @return int
	 */
	public function getGeo(): int {
		return $this->geo;
	}

	/**
	 * @param string $gebiete Setter for gebiete
	 * @return LageGebiet
	 */
	public function setGebiete(string $gebiete): LageGebiet {
		$this->gebiete = $gebiete;
		return $this;
	}

	/**
	 * @param int $geo Setter for geo
	 * @return LageGebiet
	 */
	public function setGeo(int $geo) {
		$this->geo = $geo;
		return $this;
	}
}
