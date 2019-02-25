<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Master
 * Frei wählbare alphanumerische Kennung um Objekte einem Übergeordneten Objekt zuzuordnen.
 *
 * Das Eltern Objekte hat in "gruppen_kennung" die gleiche ID wie "master". Anwendung z.b. in Neubau Projekten.
 * Damit die Anzeige des Master Objektes gesteuert werden kann, wird im Master ein Flag
 *  visible eingesetzt. Das Attribut ist dann zwingend anzugeben
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("master")
 */
class Master implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_master';

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $verwaltungTechn;

	/**
	 * required
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @var boolean
	 */
	protected $visible;

	/**
	 * @return int
	 */
	public function getVerwaltungTechn(): int {
		return $this->verwaltungTechn;
	}

	/**
	 * @return boolean
	 */
	public function getVisible(): bool {
		return $this->visible;
	}

	/**
	 * @param int $verwaltungTechn Setter for verwaltungTechn
	 * @return Master
	 */
	public function setVerwaltungTechn(int $verwaltungTechn) {
		$this->verwaltungTechn = $verwaltungTechn;
		return $this;
	}

	/**
	 * @param boolean $visible Setter for visible
	 * @return Master
	 */
	public function setVisible(bool $visible): Master {
		$this->visible = $visible;
		return $this;
	}
}
