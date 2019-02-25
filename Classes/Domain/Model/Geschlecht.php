<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Geschlecht
 * Soll das Objekt nur an Frauen bzw. nur an Männer vermietet werden,
 *  fehlende Angabe wird als 'Ja' interpretiert
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("geschlecht")
 */
class Geschlecht implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const GESCHL_ATTR_EGAL = 'EGAL';

	/**
	 */
	const GESCHL_ATTR_NUR_FRAU = 'NUR_FRAU';

	/**
	 */
	const GESCHL_ATTR_NUR_MANN = 'NUR_MANN';

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_geschlecht';

	/**
	 * optional
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @see GESCHL_ATTR_* constants
	 * @var string
	 */
	protected $geschlAttr;

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
	public function getGeschlAttr(): string {
		return $this->geschlAttr;
	}

	/**
	 * @return int
	 */
	public function getVerwaltungObjekt(): int {
		return $this->verwaltungObjekt;
	}

	/**
	 * @param string $geschlAttr Setter for geschlAttr
	 * @return Geschlecht
	 */
	public function setGeschlAttr(string $geschlAttr): Geschlecht {
		$this->geschlAttr = $geschlAttr;
		return $this;
	}

	/**
	 * @param int $verwaltungObjekt Setter for verwaltungObjekt
	 * @return Geschlecht
	 */
	public function setVerwaltungObjekt(int $verwaltungObjekt) {
		$this->verwaltungObjekt = $verwaltungObjekt;
		return $this;
	}
}
