<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Sicherheitstechnik
 * Welche Sicherheitstechnik ist geboten, Optionen kombinierbar
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("sicherheitstechnik")
 */
class Sicherheitstechnik implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_sicherheitstechnik';

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("ALARMANLAGE")
	 * @var boolean
	 */
	protected $alarmanlage;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $ausstattung;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("KAMERA")
	 * @var boolean
	 */
	protected $kamera;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("POLIZEIRUF")
	 * @var boolean
	 */
	protected $polizeiruf;

	/**
	 * @return boolean
	 */
	public function getAlarmanlage(): bool {
		return $this->alarmanlage;
	}

	/**
	 * @return int
	 */
	public function getAusstattung(): int {
		return $this->ausstattung;
	}

	/**
	 * @return boolean
	 */
	public function getKamera(): bool {
		return $this->kamera;
	}

	/**
	 * @return boolean
	 */
	public function getPolizeiruf(): bool {
		return $this->polizeiruf;
	}

	/**
	 * @param boolean $alarmanlage Setter for alarmanlage
	 * @return Sicherheitstechnik
	 */
	public function setAlarmanlage(bool $alarmanlage): Sicherheitstechnik {
		$this->alarmanlage = $alarmanlage;
		return $this;
	}

	/**
	 * @param int $ausstattung Setter for ausstattung
	 * @return Sicherheitstechnik
	 */
	public function setAusstattung(int $ausstattung) {
		$this->ausstattung = $ausstattung;
		return $this;
	}

	/**
	 * @param boolean $kamera Setter for kamera
	 * @return Sicherheitstechnik
	 */
	public function setKamera(bool $kamera): Sicherheitstechnik {
		$this->kamera = $kamera;
		return $this;
	}

	/**
	 * @param boolean $polizeiruf Setter for polizeiruf
	 * @return Sicherheitstechnik
	 */
	public function setPolizeiruf(bool $polizeiruf): Sicherheitstechnik {
		$this->polizeiruf = $polizeiruf;
		return $this;
	}
}
