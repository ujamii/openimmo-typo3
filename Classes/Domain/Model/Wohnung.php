<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Wohnung
 * Objektart / Typ f. Wohnungen
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("wohnung")
 */
class Wohnung implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_wohnung';

	/**
	 */
	const WOHNUNGTYP_APARTMENT = 'APARTMENT';

	/**
	 */
	const WOHNUNGTYP_ATTIKAWOHNUNG = 'ATTIKAWOHNUNG';

	/**
	 */
	const WOHNUNGTYP_DACHGESCHOSS = 'DACHGESCHOSS';

	/**
	 */
	const WOHNUNGTYP_ERDGESCHOSS = 'ERDGESCHOSS';

	/**
	 */
	const WOHNUNGTYP_ETAGE = 'ETAGE';

	/**
	 */
	const WOHNUNGTYP_FERIENWOHNUNG = 'FERIENWOHNUNG';

	/**
	 */
	const WOHNUNGTYP_GALERIE = 'GALERIE';

	/**
	 */
	const WOHNUNGTYP_KEINE_ANGABE = 'KEINE_ANGABE';

	/**
	 */
	const WOHNUNGTYP_LOFT_STUDIO_ATELIER = 'LOFT-STUDIO-ATELIER';

	/**
	 */
	const WOHNUNGTYP_MAISONETTE = 'MAISONETTE';

	/**
	 */
	const WOHNUNGTYP_PENTHOUSE = 'PENTHOUSE';

	/**
	 */
	const WOHNUNGTYP_ROHDACHBODEN = 'ROHDACHBODEN';

	/**
	 */
	const WOHNUNGTYP_SOUTERRAIN = 'SOUTERRAIN';

	/**
	 */
	const WOHNUNGTYP_TERRASSEN = 'TERRASSEN';

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
	 * @see WOHNUNGTYP_* constants
	 * @var string
	 */
	protected $wohnungtyp;

	/**
	 * @return int
	 */
	public function getObjektart(): int {
		return $this->objektart;
	}

	/**
	 * @return string
	 */
	public function getWohnungtyp(): string {
		return $this->wohnungtyp;
	}

	/**
	 * @param int $objektart Setter for objektart
	 * @return Wohnung
	 */
	public function setObjektart(int $objektart) {
		$this->objektart = $objektart;
		return $this;
	}

	/**
	 * @param string $wohnungtyp Setter for wohnungtyp
	 * @return Wohnung
	 */
	public function setWohnungtyp(string $wohnungtyp): Wohnung {
		$this->wohnungtyp = $wohnungtyp;
		return $this;
	}
}
