<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class FreizeitimmobilieGewerblich
 * Objektart / Typ f. gew. Freizeitimmobilen
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("freizeitimmobilie_gewerblich")
 */
class FreizeitimmobilieGewerblich implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const FREIZEIT_TYP_FREIZEITANLAGE = 'FREIZEITANLAGE';

	/**
	 */
	const FREIZEIT_TYP_SPORTANLAGEN = 'SPORTANLAGEN';

	/**
	 */
	const FREIZEIT_TYP_VERGNUEGUNGSPARKS_UND_CENTER = 'VERGNUEGUNGSPARKS_UND_CENTER';

	/**
	 * optional
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @see FREIZEIT_TYP_* constants
	 * @var string
	 */
	protected $freizeitTyp;

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
	public function getFreizeitTyp(): string {
		return $this->freizeitTyp;
	}

	/**
	 * @return int
	 */
	public function getObjektart(): int {
		return $this->objektart;
	}

	/**
	 * @param string $freizeitTyp Setter for freizeitTyp
	 * @return FreizeitimmobilieGewerblich
	 */
	public function setFreizeitTyp(string $freizeitTyp): FreizeitimmobilieGewerblich {
		$this->freizeitTyp = $freizeitTyp;
		return $this;
	}

	/**
	 * @param int $objektart Setter for objektart
	 * @return FreizeitimmobilieGewerblich
	 */
	public function setObjektart(int $objektart) {
		$this->objektart = $objektart;
		return $this;
	}
}
