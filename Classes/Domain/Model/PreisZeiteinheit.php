<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class PreisZeiteinheit
 * Zeiteinheit für die der Preis gilt, vorrangig bei Ferienobjekten
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("preis_zeiteinheit")
 */
class PreisZeiteinheit implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const ZEITEINHEIT_JAHR = 'JAHR';

	/**
	 */
	const ZEITEINHEIT_MONAT = 'MONAT';

	/**
	 */
	const ZEITEINHEIT_TAG = 'TAG';

	/**
	 */
	const ZEITEINHEIT_WOCHE = 'WOCHE';

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $preise;

	/**
	 * optional
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @see ZEITEINHEIT_* constants
	 * @var string
	 */
	protected $zeiteinheit;

	/**
	 * @return int
	 */
	public function getPreise(): int {
		return $this->preise;
	}

	/**
	 * @return string
	 */
	public function getZeiteinheit(): string {
		return $this->zeiteinheit;
	}

	/**
	 * @param int $preise Setter for preise
	 * @return PreisZeiteinheit
	 */
	public function setPreise(int $preise) {
		$this->preise = $preise;
		return $this;
	}

	/**
	 * @param string $zeiteinheit Setter for zeiteinheit
	 * @return PreisZeiteinheit
	 */
	public function setZeiteinheit(string $zeiteinheit): PreisZeiteinheit {
		$this->zeiteinheit = $zeiteinheit;
		return $this;
	}
}
