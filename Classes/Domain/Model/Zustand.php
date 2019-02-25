<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Zustand
 * Zustand des Objektes, Optionen nicht kombinierbar
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("zustand")
 */
class Zustand implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_zustand';

	/**
	 */
	const ZUSTAND_ART_ABRISSOBJEKT = 'ABRISSOBJEKT';

	/**
	 */
	const ZUSTAND_ART_BAUFAELLIG = 'BAUFAELLIG';

	/**
	 */
	const ZUSTAND_ART_ENTKERNT = 'ENTKERNT';

	/**
	 */
	const ZUSTAND_ART_ERSTBEZUG = 'ERSTBEZUG';

	/**
	 */
	const ZUSTAND_ART_GEPFLEGT = 'GEPFLEGT';

	/**
	 */
	const ZUSTAND_ART_MODERNISIERT = 'MODERNISIERT';

	/**
	 */
	const ZUSTAND_ART_NACH_VEREINBARUNG = 'NACH_VEREINBARUNG';

	/**
	 */
	const ZUSTAND_ART_NEUWERTIG = 'NEUWERTIG';

	/**
	 */
	const ZUSTAND_ART_PROJEKTIERT = 'PROJEKTIERT';

	/**
	 */
	const ZUSTAND_ART_ROHBAU = 'ROHBAU';

	/**
	 */
	const ZUSTAND_ART_SANIERUNGSBEDUERFTIG = 'SANIERUNGSBEDUERFTIG';

	/**
	 */
	const ZUSTAND_ART_TEIL_SANIERT = 'TEIL_SANIERT';

	/**
	 */
	const ZUSTAND_ART_TEIL_VOLLRENOVIERT = 'TEIL_VOLLRENOVIERT';

	/**
	 */
	const ZUSTAND_ART_TEIL_VOLLRENOVIERUNGSBED = 'TEIL_VOLLRENOVIERUNGSBED';

	/**
	 */
	const ZUSTAND_ART_TEIL_VOLLSANIERT = 'TEIL_VOLLSANIERT';

	/**
	 */
	const ZUSTAND_ART_VOLL_SANIERT = 'VOLL_SANIERT';

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $zustandAngaben;

	/**
	 * optional
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @see ZUSTAND_ART_* constants
	 * @var string
	 */
	protected $zustandArt;

	/**
	 * @return int
	 */
	public function getZustandAngaben(): int {
		return $this->zustandAngaben;
	}

	/**
	 * @return string
	 */
	public function getZustandArt(): string {
		return $this->zustandArt;
	}

	/**
	 * @param int $zustandAngaben Setter for zustandAngaben
	 * @return Zustand
	 */
	public function setZustandAngaben(int $zustandAngaben) {
		$this->zustandAngaben = $zustandAngaben;
		return $this;
	}

	/**
	 * @param string $zustandArt Setter for zustandArt
	 * @return Zustand
	 */
	public function setZustandArt(string $zustandArt): Zustand {
		$this->zustandArt = $zustandArt;
		return $this;
	}
}
