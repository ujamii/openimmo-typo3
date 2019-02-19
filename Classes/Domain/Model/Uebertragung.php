<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Uebertragung
 * Übertragungsangaben
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("uebertragung")
 */
class Uebertragung implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const ART_OFFLINE = 'OFFLINE';

	/**
	 */
	const ART_ONLINE = 'ONLINE';

	/**
	 */
	const MODUS_CHANGE = 'CHANGE';

	/**
	 */
	const MODUS_DELETE = 'DELETE';

	/**
	 */
	const MODUS_NEW = 'NEW';

	/**
	 */
	const UMFANG_TEIL = 'TEIL';

	/**
	 */
	const UMFANG_VOLL = 'VOLL';

	/**
	 * required
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @see ART_* constants
	 * @var string
	 */
	protected $art;

	/**
	 * optional
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @see MODUS_* constants
	 * @var string
	 */
	protected $modus;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $openimmo;

	/**
	 * optional
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @var string
	 */
	protected $regiId;

	/**
	 * required
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @var string
	 */
	protected $sendersoftware;

	/**
	 * required
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @var string
	 */
	protected $senderversion;

	/**
	 * optional
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @var string
	 */
	protected $technEmail;

	/**
	 * optional
	 *
	 * @Type ("DateTime<'Y-m-d\TH:i:s'>")
	 * @XmlAttribute 
	 * @var \DateTime
	 */
	protected $timestamp;

	/**
	 * required
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @see UMFANG_* constants
	 * @var string
	 */
	protected $umfang;

	/**
	 * required
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @var string
	 */
	protected $version;

	/**
	 * @return string
	 */
	public function getArt(): string {
		return $this->art;
	}

	/**
	 * @return string
	 */
	public function getModus(): string {
		return $this->modus;
	}

	/**
	 * @return int
	 */
	public function getOpenimmo(): int {
		return $this->openimmo;
	}

	/**
	 * @return string
	 */
	public function getRegiId(): string {
		return $this->regiId;
	}

	/**
	 * @return string
	 */
	public function getSendersoftware(): string {
		return $this->sendersoftware;
	}

	/**
	 * @return string
	 */
	public function getSenderversion(): string {
		return $this->senderversion;
	}

	/**
	 * @return string
	 */
	public function getTechnEmail(): string {
		return $this->technEmail;
	}

	/**
	 * @return \DateTime
	 */
	public function getTimestamp(): \DateTime {
		return $this->timestamp;
	}

	/**
	 * @return string
	 */
	public function getUmfang(): string {
		return $this->umfang;
	}

	/**
	 * @return string
	 */
	public function getVersion(): string {
		return $this->version;
	}

	/**
	 * @param string $art Setter for art
	 * @return Uebertragung
	 */
	public function setArt(string $art): Uebertragung {
		$this->art = $art;
		return $this;
	}

	/**
	 * @param string $modus Setter for modus
	 * @return Uebertragung
	 */
	public function setModus(string $modus): Uebertragung {
		$this->modus = $modus;
		return $this;
	}

	/**
	 * @param int $openimmo Setter for openimmo
	 * @return Uebertragung
	 */
	public function setOpenimmo(int $openimmo) {
		$this->openimmo = $openimmo;
		return $this;
	}

	/**
	 * @param string $regiId Setter for regiId
	 * @return Uebertragung
	 */
	public function setRegiId(string $regiId): Uebertragung {
		$this->regiId = $regiId;
		return $this;
	}

	/**
	 * @param string $sendersoftware Setter for sendersoftware
	 * @return Uebertragung
	 */
	public function setSendersoftware(string $sendersoftware): Uebertragung {
		$this->sendersoftware = $sendersoftware;
		return $this;
	}

	/**
	 * @param string $senderversion Setter for senderversion
	 * @return Uebertragung
	 */
	public function setSenderversion(string $senderversion): Uebertragung {
		$this->senderversion = $senderversion;
		return $this;
	}

	/**
	 * @param string $technEmail Setter for technEmail
	 * @return Uebertragung
	 */
	public function setTechnEmail(string $technEmail): Uebertragung {
		$this->technEmail = $technEmail;
		return $this;
	}

	/**
	 * @param \DateTime $timestamp Setter for timestamp
	 * @return Uebertragung
	 */
	public function setTimestamp(\DateTime $timestamp): Uebertragung {
		$this->timestamp = $timestamp;
		return $this;
	}

	/**
	 * @param string $umfang Setter for umfang
	 * @return Uebertragung
	 */
	public function setUmfang(string $umfang): Uebertragung {
		$this->umfang = $umfang;
		return $this;
	}

	/**
	 * @param string $version Setter for version
	 * @return Uebertragung
	 */
	public function setVersion(string $version): Uebertragung {
		$this->version = $version;
		return $this;
	}
}
