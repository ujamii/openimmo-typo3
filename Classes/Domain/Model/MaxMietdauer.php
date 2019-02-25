<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class MaxMietdauer
 * Maximalzeitraum für den die Immobilie gemietet werdenkann, Optionen nicht kombinierbar, vorrangig bei WaZ
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("max_mietdauer")
 */
class MaxMietdauer implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const MAX_DAUER_JAHR = 'JAHR';

	/**
	 */
	const MAX_DAUER_MONAT = 'MONAT';

	/**
	 */
	const MAX_DAUER_TAG = 'TAG';

	/**
	 */
	const MAX_DAUER_WOCHE = 'WOCHE';

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_maxmietdauer';

	/**
	 * optional
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @see MAX_DAUER_* constants
	 * @var string
	 */
	protected $maxDauer;

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
	public function getMaxDauer(): string {
		return $this->maxDauer;
	}

	/**
	 * @return int
	 */
	public function getVerwaltungObjekt(): int {
		return $this->verwaltungObjekt;
	}

	/**
	 * @param string $maxDauer Setter for maxDauer
	 * @return MaxMietdauer
	 */
	public function setMaxDauer(string $maxDauer): MaxMietdauer {
		$this->maxDauer = $maxDauer;
		return $this;
	}

	/**
	 * @param int $verwaltungObjekt Setter for verwaltungObjekt
	 * @return MaxMietdauer
	 */
	public function setVerwaltungObjekt(int $verwaltungObjekt) {
		$this->verwaltungObjekt = $verwaltungObjekt;
		return $this;
	}
}
