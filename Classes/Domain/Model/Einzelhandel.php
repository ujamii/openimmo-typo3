<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Einzelhandel
 * Objektart / Typ f. Handel
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("einzelhandel")
 */
class Einzelhandel implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const HANDEL_TYP_AUSSTELLUNGSFLAECHE = 'AUSSTELLUNGSFLAECHE';

	/**
	 */
	const HANDEL_TYP_EINKAUFSZENTRUM = 'EINKAUFSZENTRUM';

	/**
	 */
	const HANDEL_TYP_EINZELHANDELSLADEN = 'EINZELHANDELSLADEN';

	/**
	 */
	const HANDEL_TYP_FACTORY_OUTLET = 'FACTORY_OUTLET';

	/**
	 */
	const HANDEL_TYP_KAUFHAUS = 'KAUFHAUS';

	/**
	 */
	const HANDEL_TYP_KIOSK = 'KIOSK';

	/**
	 */
	const HANDEL_TYP_LADENLOKAL = 'LADENLOKAL';

	/**
	 */
	const HANDEL_TYP_VERBRAUCHERMARKT = 'VERBRAUCHERMARKT';

	/**
	 */
	const HANDEL_TYP_VERKAUFSFLAECHE = 'VERKAUFSFLAECHE';

	/**
	 * optional
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @see HANDEL_TYP_* constants
	 * @var string
	 */
	protected $handelTyp;

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
	public function getHandelTyp(): string {
		return $this->handelTyp;
	}

	/**
	 * @return int
	 */
	public function getObjektart(): int {
		return $this->objektart;
	}

	/**
	 * @param string $handelTyp Setter for handelTyp
	 * @return Einzelhandel
	 */
	public function setHandelTyp(string $handelTyp): Einzelhandel {
		$this->handelTyp = $handelTyp;
		return $this;
	}

	/**
	 * @param int $objektart Setter for objektart
	 * @return Einzelhandel
	 */
	public function setObjektart(int $objektart) {
		$this->objektart = $objektart;
		return $this;
	}
}
