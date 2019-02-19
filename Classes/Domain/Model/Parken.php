<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Parken
 * Objektart für diverse Parkplatz Angaben
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("parken")
 */
class Parken implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const PARKEN_TYP_BOOTSLIEGEPLATZ = 'BOOTSLIEGEPLATZ';

	/**
	 */
	const PARKEN_TYP_CARPORT = 'CARPORT';

	/**
	 */
	const PARKEN_TYP_DOPPELGARAGE = 'DOPPELGARAGE';

	/**
	 */
	const PARKEN_TYP_DUPLEX = 'DUPLEX';

	/**
	 */
	const PARKEN_TYP_EINZELGARAGE = 'EINZELGARAGE';

	/**
	 */
	const PARKEN_TYP_PARKHAUS = 'PARKHAUS';

	/**
	 */
	const PARKEN_TYP_PARKPLATZ_STROM = 'PARKPLATZ_STROM';

	/**
	 */
	const PARKEN_TYP_STELLPLATZ = 'STELLPLATZ';

	/**
	 */
	const PARKEN_TYP_TIEFGARAGE = 'TIEFGARAGE';

	/**
	 */
	const PARKEN_TYP_TIEFGARAGENSTELLPLATZ = 'TIEFGARAGENSTELLPLATZ';

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
	 * @see PARKEN_TYP_* constants
	 * @var string
	 */
	protected $parkenTyp;

	/**
	 * @return int
	 */
	public function getObjektart(): int {
		return $this->objektart;
	}

	/**
	 * @return string
	 */
	public function getParkenTyp(): string {
		return $this->parkenTyp;
	}

	/**
	 * @param int $objektart Setter for objektart
	 * @return Parken
	 */
	public function setObjektart(int $objektart) {
		$this->objektart = $objektart;
		return $this;
	}

	/**
	 * @param string $parkenTyp Setter for parkenTyp
	 * @return Parken
	 */
	public function setParkenTyp(string $parkenTyp): Parken {
		$this->parkenTyp = $parkenTyp;
		return $this;
	}
}
