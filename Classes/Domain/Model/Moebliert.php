<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Moebliert
 * Wie ist die Möblierung: Voll, Teil oder keine Aussage
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("moebliert")
 */
class Moebliert implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const MOEB_TEIL = 'TEIL';

	/**
	 */
	const MOEB_VOLL = 'VOLL';

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $ausstattung;

	/**
	 * optional
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @see MOEB_* constants
	 * @var string
	 */
	protected $moeb;

	/**
	 * @return int
	 */
	public function getAusstattung(): int {
		return $this->ausstattung;
	}

	/**
	 * @return string
	 */
	public function getMoeb(): string {
		return $this->moeb;
	}

	/**
	 * @param int $ausstattung Setter for ausstattung
	 * @return Moebliert
	 */
	public function setAusstattung(int $ausstattung) {
		$this->ausstattung = $ausstattung;
		return $this;
	}

	/**
	 * @param string $moeb Setter for moeb
	 * @return Moebliert
	 */
	public function setMoeb(string $moeb): Moebliert {
		$this->moeb = $moeb;
		return $this;
	}
}
