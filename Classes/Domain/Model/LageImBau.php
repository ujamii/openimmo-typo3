<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class LageImBau
 * Angabe über die Lage der Immobilie im Gesamtgebäude, Optionen kombinierbar
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("lage_im_bau")
 */
class LageImBau implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_lageimbau';

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $geo;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("HINTEN")
	 * @var boolean
	 */
	protected $hinten;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("LINKS")
	 * @var boolean
	 */
	protected $links;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("RECHTS")
	 * @var boolean
	 */
	protected $rechts;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("VORNE")
	 * @var boolean
	 */
	protected $vorne;

	/**
	 * @return int
	 */
	public function getGeo(): int {
		return $this->geo;
	}

	/**
	 * @return boolean
	 */
	public function getHinten(): bool {
		return $this->hinten;
	}

	/**
	 * @return boolean
	 */
	public function getLinks(): bool {
		return $this->links;
	}

	/**
	 * @return boolean
	 */
	public function getRechts(): bool {
		return $this->rechts;
	}

	/**
	 * @return boolean
	 */
	public function getVorne(): bool {
		return $this->vorne;
	}

	/**
	 * @param int $geo Setter for geo
	 * @return LageImBau
	 */
	public function setGeo(int $geo) {
		$this->geo = $geo;
		return $this;
	}

	/**
	 * @param boolean $hinten Setter for hinten
	 * @return LageImBau
	 */
	public function setHinten(bool $hinten): LageImBau {
		$this->hinten = $hinten;
		return $this;
	}

	/**
	 * @param boolean $links Setter for links
	 * @return LageImBau
	 */
	public function setLinks(bool $links): LageImBau {
		$this->links = $links;
		return $this;
	}

	/**
	 * @param boolean $rechts Setter for rechts
	 * @return LageImBau
	 */
	public function setRechts(bool $rechts): LageImBau {
		$this->rechts = $rechts;
		return $this;
	}

	/**
	 * @param boolean $vorne Setter for vorne
	 * @return LageImBau
	 */
	public function setVorne(bool $vorne): LageImBau {
		$this->vorne = $vorne;
		return $this;
	}
}
