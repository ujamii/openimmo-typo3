<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class DistanzenSport
 * Welche Distanz zu dem ausgewählen Sport-/Freizeitziel besteht(Angabe in km),
 *  Optionen nicht kombinierbar, Distanzelement ist mehrfach erfassbar
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("distanzen_sport")
 */
class DistanzenSport implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const DISTANZ_ZU_SPORT_MEER = 'MEER';

	/**
	 */
	const DISTANZ_ZU_SPORT_NAHERHOLUNG = 'NAHERHOLUNG';

	/**
	 */
	const DISTANZ_ZU_SPORT_SEE = 'SEE';

	/**
	 */
	const DISTANZ_ZU_SPORT_SKIGEBIET = 'SKIGEBIET';

	/**
	 */
	const DISTANZ_ZU_SPORT_SPORTANLAGEN = 'SPORTANLAGEN';

	/**
	 */
	const DISTANZ_ZU_SPORT_STRAND = 'STRAND';

	/**
	 */
	const DISTANZ_ZU_SPORT_WANDERGEBIETE = 'WANDERGEBIETE';

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_distanzensport';

	/**
	 * required
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @see DISTANZ_ZU_SPORT_* constants
	 * @var string
	 */
	protected $distanzZuSport;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $infrastruktur;

	/**
	 * @Inline 
	 * @Type ("float") 
	 * @var float
	 */
	protected $value;

	/**
	 * @param string $distanzZuSport Shortcut setter for distanzZuSport
	 * @param float $value the actual value
	 */
	public function __construct(string $distanzZuSport = null, float $value = null) {
		$this->distanzZuSport = $distanzZuSport;
		$this->value = $value;
	}

	/**
	 * @return string
	 */
	public function getDistanzZuSport(): string {
		return $this->distanzZuSport;
	}

	/**
	 * @return int
	 */
	public function getInfrastruktur(): int {
		return $this->infrastruktur;
	}

	/**
	 * @return float
	 */
	public function getValue(): float {
		return $this->value;
	}

	/**
	 * @param string $distanzZuSport Setter for distanzZuSport
	 * @return DistanzenSport
	 */
	public function setDistanzZuSport(string $distanzZuSport): DistanzenSport {
		$this->distanzZuSport = $distanzZuSport;
		return $this;
	}

	/**
	 * @param int $infrastruktur Setter for infrastruktur
	 * @return DistanzenSport
	 */
	public function setInfrastruktur(int $infrastruktur) {
		$this->infrastruktur = $infrastruktur;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return DistanzenSport
	 */
	public function setValue(float $value): DistanzenSport {
		$this->value = $value;
		return $this;
	}
}
