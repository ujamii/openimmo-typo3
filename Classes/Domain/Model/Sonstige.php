<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Sonstige
 * Objektart / Typ f. Sonstiges
 * Bitte ab Version 1.2.3 die Attribute GARAGEN, PARKFLACHE nicht mehr verwenden.
 *
 * Objekte befinden sich jetzt unter Element parken.
 * Aus kompatibilitätegründen bleiben die Attribute NOCH! erhalten.
 * In nachfolgenden Versionen wird die Unterstützung an dieser Stelle eingestellt.
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("sonstige")
 */
class Sonstige implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const SONSTIGE_TYP_KRANKENHAUS = 'KRANKENHAUS';

	/**
	 */
	const SONSTIGE_TYP_PARKHAUS = 'PARKHAUS';

	/**
	 */
	const SONSTIGE_TYP_SONSTIGE = 'SONSTIGE';

	/**
	 */
	const SONSTIGE_TYP_TANKSTELLE = 'TANKSTELLE';

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_sonstige';

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
	 * @see SONSTIGE_TYP_* constants
	 * @var string
	 */
	protected $sonstigeTyp;

	/**
	 * @return int
	 */
	public function getObjektart(): int {
		return $this->objektart;
	}

	/**
	 * @return string
	 */
	public function getSonstigeTyp(): string {
		return $this->sonstigeTyp;
	}

	/**
	 * @param int $objektart Setter for objektart
	 * @return Sonstige
	 */
	public function setObjektart(int $objektart) {
		$this->objektart = $objektart;
		return $this;
	}

	/**
	 * @param string $sonstigeTyp Setter for sonstigeTyp
	 * @return Sonstige
	 */
	public function setSonstigeTyp(string $sonstigeTyp): Sonstige {
		$this->sonstigeTyp = $sonstigeTyp;
		return $this;
	}
}
