<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Unterkellert
 * Ist das Objekt unterkellert? Optionen nicht kombinierbar
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("unterkellert")
 */
class Unterkellert implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const KELLER_JA = 'JA';

	/**
	 */
	const KELLER_NEIN = 'NEIN';

	/**
	 */
	const KELLER_TEIL = 'TEIL';

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
	 * @see KELLER_* constants
	 * @var string
	 */
	protected $keller;

	/**
	 * @return int
	 */
	public function getAusstattung(): int {
		return $this->ausstattung;
	}

	/**
	 * @return string
	 */
	public function getKeller(): string {
		return $this->keller;
	}

	/**
	 * @param int $ausstattung Setter for ausstattung
	 * @return Unterkellert
	 */
	public function setAusstattung(int $ausstattung) {
		$this->ausstattung = $ausstattung;
		return $this;
	}

	/**
	 * @param string $keller Setter for keller
	 * @return Unterkellert
	 */
	public function setKeller(string $keller): Unterkellert {
		$this->keller = $keller;
		return $this;
	}
}
