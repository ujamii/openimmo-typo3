<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class MinMietdauer
 * Mindestzeitraum für den die Immobilie gemietet werden muss, Optionen nicht kombinierbar, vorrangig bei WaZ
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("min_mietdauer")
 */
class MinMietdauer implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const MIN_DAUER_JAHR = 'JAHR';

	/**
	 */
	const MIN_DAUER_MONAT = 'MONAT';

	/**
	 */
	const MIN_DAUER_TAG = 'TAG';

	/**
	 */
	const MIN_DAUER_WOCHE = 'WOCHE';

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_minmietdauer';

	/**
	 * optional
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @see MIN_DAUER_* constants
	 * @var string
	 */
	protected $minDauer;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $verwaltungObjekt;

	/**
	 * @return string
	 */
	public function getMinDauer(): string {
		return $this->minDauer;
	}

	/**
	 * @return int
	 */
	public function getVerwaltungObjekt(): int {
		return $this->verwaltungObjekt;
	}

	/**
	 * @param string $minDauer Setter for minDauer
	 * @return MinMietdauer
	 */
	public function setMinDauer(string $minDauer): MinMietdauer {
		$this->minDauer = $minDauer;
		return $this;
	}

	/**
	 * @param int $verwaltungObjekt Setter for verwaltungObjekt
	 * @return MinMietdauer
	 */
	public function setVerwaltungObjekt(int $verwaltungObjekt) {
		$this->verwaltungObjekt = $verwaltungObjekt;
		return $this;
	}
}
