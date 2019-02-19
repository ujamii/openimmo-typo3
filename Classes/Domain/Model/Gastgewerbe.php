<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Gastgewerbe
 * Objektart / Typ f. Gastgewerbe
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("gastgewerbe")
 */
class Gastgewerbe implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const GASTGEW_TYP_BAR = 'BAR';

	/**
	 */
	const GASTGEW_TYP_CAFE = 'CAFE';

	/**
	 */
	const GASTGEW_TYP_DISCOTHEK = 'DISCOTHEK';

	/**
	 */
	const GASTGEW_TYP_EINRAUMLOKAL = 'EINRAUMLOKAL';

	/**
	 */
	const GASTGEW_TYP_GASTRONOMIE = 'GASTRONOMIE';

	/**
	 */
	const GASTGEW_TYP_GASTRONOMIE_UND_WOHNUNG = 'GASTRONOMIE_UND_WOHNUNG';

	/**
	 */
	const GASTGEW_TYP_HOTELS = 'HOTELS';

	/**
	 */
	const GASTGEW_TYP_PENSIONEN = 'PENSIONEN';

	/**
	 */
	const GASTGEW_TYP_RAUCHERLOKAL = 'RAUCHERLOKAL';

	/**
	 */
	const GASTGEW_TYP_RESTAURANT = 'RESTAURANT';

	/**
	 */
	const GASTGEW_TYP_WEITERE_BEHERBERGUNGSBETRIEBE = 'WEITERE_BEHERBERGUNGSBETRIEBE';

	/**
	 * optional
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @see GASTGEW_TYP_* constants
	 * @var string
	 */
	protected $gastgewTyp;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $objektart;

	/**
	 * @return string
	 */
	public function getGastgewTyp(): string {
		return $this->gastgewTyp;
	}

	/**
	 * @return int
	 */
	public function getObjektart(): int {
		return $this->objektart;
	}

	/**
	 * @param string $gastgewTyp Setter for gastgewTyp
	 * @return Gastgewerbe
	 */
	public function setGastgewTyp(string $gastgewTyp): Gastgewerbe {
		$this->gastgewTyp = $gastgewTyp;
		return $this;
	}

	/**
	 * @param int $objektart Setter for objektart
	 * @return Gastgewerbe
	 */
	public function setObjektart(int $objektart) {
		$this->objektart = $objektart;
		return $this;
	}
}
