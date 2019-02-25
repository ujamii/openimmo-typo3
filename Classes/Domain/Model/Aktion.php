<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Aktion
 * Aktion für Objekt. Wenn nicht vorhanden, dann "ADD", als neu.
 *
 * Change= Update der Objektdaten, Delete = Löschen des Objektes
 *  Referenz= Die Möglichkeit Objekte in Portalen als Verkauft oder Archiv zu definieren.
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("aktion")
 */
class Aktion implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const AKTIONART_CHANGE = 'CHANGE';

	/**
	 */
	const AKTIONART_DELETE = 'DELETE';

	/**
	 */
	const AKTIONART_REFERENZ = 'REFERENZ';

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_aktion';

	/**
	 * optional
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @see AKTIONART_* constants
	 * @var string
	 */
	protected $aktionart;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $verwaltungTechn;

	/**
	 * @return string
	 */
	public function getAktionart(): string {
		return $this->aktionart;
	}

	/**
	 * @return int
	 */
	public function getVerwaltungTechn(): int {
		return $this->verwaltungTechn;
	}

	/**
	 * @param string $aktionart Setter for aktionart
	 * @return Aktion
	 */
	public function setAktionart(string $aktionart): Aktion {
		$this->aktionart = $aktionart;
		return $this;
	}

	/**
	 * @param int $verwaltungTechn Setter for verwaltungTechn
	 * @return Aktion
	 */
	public function setVerwaltungTechn(int $verwaltungTechn) {
		$this->verwaltungTechn = $verwaltungTechn;
		return $this;
	}
}
