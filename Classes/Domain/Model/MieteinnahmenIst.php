<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class MieteinnahmenIst
 * Mieteinnahmen pro Periode, Momentan-/Isteinnahmen (Ohne Periode = JAHR)
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("mieteinnahmen_ist")
 */
class MieteinnahmenIst implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const PERIODE_JAHR = 'JAHR';

	/**
	 */
	const PERIODE_MONAT = 'MONAT';

	/**
	 */
	const PERIODE_TAG = 'TAG';

	/**
	 */
	const PERIODE_WOCHE = 'WOCHE';

	/**
	 * optional
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @see PERIODE_* constants
	 * @var string
	 */
	protected $periode;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $preise;

	/**
	 * @Inline 
	 * @Type ("float") 
	 * @var float
	 */
	protected $value;

	/**
	 * @param string $periode Shortcut setter for periode
	 * @param float $value the actual value
	 */
	public function __construct(string $periode = null, float $value = null) {
		$this->periode = $periode;
		$this->value = $value;
	}

	/**
	 * @return string
	 */
	public function getPeriode(): string {
		return $this->periode;
	}

	/**
	 * @return int
	 */
	public function getPreise(): int {
		return $this->preise;
	}

	/**
	 * @return float
	 */
	public function getValue(): float {
		return $this->value;
	}

	/**
	 * @param string $periode Setter for periode
	 * @return MieteinnahmenIst
	 */
	public function setPeriode(string $periode): MieteinnahmenIst {
		$this->periode = $periode;
		return $this;
	}

	/**
	 * @param int $preise Setter for preise
	 * @return MieteinnahmenIst
	 */
	public function setPreise(int $preise) {
		$this->preise = $preise;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return MieteinnahmenIst
	 */
	public function setValue(float $value): MieteinnahmenIst {
		$this->value = $value;
		return $this;
	}
}
