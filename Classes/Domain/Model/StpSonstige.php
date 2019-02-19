<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class StpSonstige
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("stp_sonstige")
 */
class StpSonstige implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const PLATZART_CARPORT = 'CARPORT';

	/**
	 */
	const PLATZART_DUPLEX = 'DUPLEX';

	/**
	 */
	const PLATZART_FREIPLATZ = 'FREIPLATZ';

	/**
	 */
	const PLATZART_GARAGE = 'GARAGE';

	/**
	 */
	const PLATZART_PARKHAUS = 'PARKHAUS';

	/**
	 */
	const PLATZART_SONSTIGES = 'SONSTIGES';

	/**
	 */
	const PLATZART_TIEFGARAGE = 'TIEFGARAGE';

	/**
	 * optional
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @var string
	 */
	protected $bemerkung;

	/**
	 * optional
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @see PLATZART_* constants
	 * @var string
	 */
	protected $platzart;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $preise;

	/**
	 * @return string
	 */
	public function getBemerkung(): string {
		return $this->bemerkung;
	}

	/**
	 * @return string
	 */
	public function getPlatzart(): string {
		return $this->platzart;
	}

	/**
	 * @return int
	 */
	public function getPreise(): int {
		return $this->preise;
	}

	/**
	 * @param string $bemerkung Setter for bemerkung
	 * @return StpSonstige
	 */
	public function setBemerkung(string $bemerkung): StpSonstige {
		$this->bemerkung = $bemerkung;
		return $this;
	}

	/**
	 * @param string $platzart Setter for platzart
	 * @return StpSonstige
	 */
	public function setPlatzart(string $platzart): StpSonstige {
		$this->platzart = $platzart;
		return $this;
	}

	/**
	 * @param int $preise Setter for preise
	 * @return StpSonstige
	 */
	public function setPreise(int $preise) {
		$this->preise = $preise;
		return $this;
	}
}
