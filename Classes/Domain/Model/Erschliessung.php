<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Erschliessung
 * Stand der Erschließung, Optionen nicht kombinierbar
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("erschliessung")
 */
class Erschliessung implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const ERSCHL_ATTR_ORTSUEBLICHERSCHLOSSEN = 'ORTSUEBLICHERSCHLOSSEN';

	/**
	 */
	const ERSCHL_ATTR_TEILERSCHLOSSEN = 'TEILERSCHLOSSEN';

	/**
	 */
	const ERSCHL_ATTR_UNERSCHLOSSEN = 'UNERSCHLOSSEN';

	/**
	 */
	const ERSCHL_ATTR_VOLLERSCHLOSSEN = 'VOLLERSCHLOSSEN';

	/**
	 * optional
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @see ERSCHL_ATTR_* constants
	 * @var string
	 */
	protected $erschlAttr;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $zustandAngaben;

	/**
	 * @return string
	 */
	public function getErschlAttr(): string {
		return $this->erschlAttr;
	}

	/**
	 * @return int
	 */
	public function getZustandAngaben(): int {
		return $this->zustandAngaben;
	}

	/**
	 * @param string $erschlAttr Setter for erschlAttr
	 * @return Erschliessung
	 */
	public function setErschlAttr(string $erschlAttr): Erschliessung {
		$this->erschlAttr = $erschlAttr;
		return $this;
	}

	/**
	 * @param int $zustandAngaben Setter for zustandAngaben
	 * @return Erschliessung
	 */
	public function setZustandAngaben(int $zustandAngaben) {
		$this->zustandAngaben = $zustandAngaben;
		return $this;
	}
}
