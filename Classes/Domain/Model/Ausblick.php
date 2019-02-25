<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Ausblick
 * Welcher Ausblick ist vorhanden, Optionen nicht kombinierbar
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("ausblick")
 */
class Ausblick implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const BLICK_BERGE = 'BERGE';

	/**
	 */
	const BLICK_FERNE = 'FERNE';

	/**
	 */
	const BLICK_MEER = 'MEER';

	/**
	 */
	const BLICK_SEE = 'SEE';

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_ausblick';

	/**
	 * optional
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @see BLICK_* constants
	 * @var string
	 */
	protected $blick;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $infrastruktur;

	/**
	 * @return string
	 */
	public function getBlick(): string {
		return $this->blick;
	}

	/**
	 * @return int
	 */
	public function getInfrastruktur(): int {
		return $this->infrastruktur;
	}

	/**
	 * @param string $blick Setter for blick
	 * @return Ausblick
	 */
	public function setBlick(string $blick): Ausblick {
		$this->blick = $blick;
		return $this;
	}

	/**
	 * @param int $infrastruktur Setter for infrastruktur
	 * @return Ausblick
	 */
	public function setInfrastruktur(int $infrastruktur) {
		$this->infrastruktur = $infrastruktur;
		return $this;
	}
}
