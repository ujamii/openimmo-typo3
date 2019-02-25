<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Vermarktungsart
 * Vermarktungsart, Optionen kombinierbar, Kauf + Miete
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("vermarktungsart")
 */
class Vermarktungsart implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_vermarktungsart';

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("ERBPACHT")
	 * @var boolean
	 */
	protected $erbpacht;

	/**
	 * required
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("KAUF")
	 * @var boolean
	 */
	protected $kauf;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("LEASING")
	 * @var boolean
	 */
	protected $leasing;

	/**
	 * required
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("MIETE_PACHT")
	 * @var boolean
	 */
	protected $mietePacht;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $objektkategorie;

	/**
	 * @return boolean
	 */
	public function getErbpacht(): bool {
		return $this->erbpacht;
	}

	/**
	 * @return boolean
	 */
	public function getKauf(): bool {
		return $this->kauf;
	}

	/**
	 * @return boolean
	 */
	public function getLeasing(): bool {
		return $this->leasing;
	}

	/**
	 * @return boolean
	 */
	public function getMietePacht(): bool {
		return $this->mietePacht;
	}

	/**
	 * @return int
	 */
	public function getObjektkategorie(): int {
		return $this->objektkategorie;
	}

	/**
	 * @param boolean $erbpacht Setter for erbpacht
	 * @return Vermarktungsart
	 */
	public function setErbpacht(bool $erbpacht): Vermarktungsart {
		$this->erbpacht = $erbpacht;
		return $this;
	}

	/**
	 * @param boolean $kauf Setter for kauf
	 * @return Vermarktungsart
	 */
	public function setKauf(bool $kauf): Vermarktungsart {
		$this->kauf = $kauf;
		return $this;
	}

	/**
	 * @param boolean $leasing Setter for leasing
	 * @return Vermarktungsart
	 */
	public function setLeasing(bool $leasing): Vermarktungsart {
		$this->leasing = $leasing;
		return $this;
	}

	/**
	 * @param boolean $mietePacht Setter for mietePacht
	 * @return Vermarktungsart
	 */
	public function setMietePacht(bool $mietePacht): Vermarktungsart {
		$this->mietePacht = $mietePacht;
		return $this;
	}

	/**
	 * @param int $objektkategorie Setter for objektkategorie
	 * @return Vermarktungsart
	 */
	public function setObjektkategorie(int $objektkategorie) {
		$this->objektkategorie = $objektkategorie;
		return $this;
	}
}
