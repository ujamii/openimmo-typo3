<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class AussenCourtage
 * Courtage, die der Kunde zu zahlen hat, als Betrag in ? / % / MM, daher Textfeld
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("aussen_courtage")
 */
class AussenCourtage implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_aussencourtage';

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @var boolean
	 */
	protected $mitMwst;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $preise;

	/**
	 * @return boolean
	 */
	public function getMitMwst(): bool {
		return $this->mitMwst;
	}

	/**
	 * @return int
	 */
	public function getPreise(): int {
		return $this->preise;
	}

	/**
	 * @param boolean $mitMwst Setter for mitMwst
	 * @return AussenCourtage
	 */
	public function setMitMwst(bool $mitMwst): AussenCourtage {
		$this->mitMwst = $mitMwst;
		return $this;
	}

	/**
	 * @param int $preise Setter for preise
	 * @return AussenCourtage
	 */
	public function setPreise(int $preise) {
		$this->preise = $preise;
		return $this;
	}
}
