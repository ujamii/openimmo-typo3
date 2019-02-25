<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class BueroPraxen
 * Objektart / Typ f. Büro/Praxen
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("buero_praxen")
 */
class BueroPraxen implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const BUERO_TYP_AUSSTELLUNGSFLAECHE = 'AUSSTELLUNGSFLAECHE';

	/**
	 */
	const BUERO_TYP_BUEROFLAECHE = 'BUEROFLAECHE';

	/**
	 */
	const BUERO_TYP_BUEROHAUS = 'BUEROHAUS';

	/**
	 */
	const BUERO_TYP_BUEROZENTRUM = 'BUEROZENTRUM';

	/**
	 */
	const BUERO_TYP_COWORKING = 'COWORKING';

	/**
	 */
	const BUERO_TYP_LOFT_ATELIER = 'LOFT_ATELIER';

	/**
	 */
	const BUERO_TYP_PRAXIS = 'PRAXIS';

	/**
	 */
	const BUERO_TYP_PRAXISFLAECHE = 'PRAXISFLAECHE';

	/**
	 */
	const BUERO_TYP_PRAXISHAUS = 'PRAXISHAUS';

	/**
	 */
	const BUERO_TYP_SHARED_OFFICE = 'SHARED_OFFICE';

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_bueropraxen';

	/**
	 * optional
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @see BUERO_TYP_* constants
	 * @var string
	 */
	protected $bueroTyp;

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
	public function getBueroTyp(): string {
		return $this->bueroTyp;
	}

	/**
	 * @return int
	 */
	public function getObjektart(): int {
		return $this->objektart;
	}

	/**
	 * @param string $bueroTyp Setter for bueroTyp
	 * @return BueroPraxen
	 */
	public function setBueroTyp(string $bueroTyp): BueroPraxen {
		$this->bueroTyp = $bueroTyp;
		return $this;
	}

	/**
	 * @param int $objektart Setter for objektart
	 * @return BueroPraxen
	 */
	public function setObjektart(int $objektart) {
		$this->objektart = $objektart;
		return $this;
	}
}
