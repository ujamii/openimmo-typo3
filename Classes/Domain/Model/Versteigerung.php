<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Versteigerung
 * Angaben zu einer Versteigerung. Wenn es ein Objekt in Zwangsverteigerung ist, dann muss das element "zwangsversteigerung" auf true/1 gesetzt werden.
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("versteigerung")
 */
class Versteigerung implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_versteigerung';

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $aktenzeichen;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $amtsgericht;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $immobilie;

	/**
	 * @Type ("float") 
	 * @var float
	 */
	protected $verkehrswert;

	/**
	 * @Type ("DateTime<'Y-m-d\TH:i:s'>") 
	 * @var \DateTime
	 */
	protected $zusatztermin;

	/**
	 * @Type ("DateTime<'Y-m-d\TH:i:s'>") 
	 * @var \DateTime
	 */
	protected $zvtermin;

	/**
	 * @Type ("boolean") 
	 * @var boolean
	 */
	protected $zwangsversteigerung;

	/**
	 * @return string
	 */
	public function getAktenzeichen(): string {
		return $this->aktenzeichen;
	}

	/**
	 * @return string
	 */
	public function getAmtsgericht(): string {
		return $this->amtsgericht;
	}

	/**
	 * @return int
	 */
	public function getImmobilie(): int {
		return $this->immobilie;
	}

	/**
	 * @return float
	 */
	public function getVerkehrswert(): float {
		return $this->verkehrswert;
	}

	/**
	 * @return \DateTime
	 */
	public function getZusatztermin(): \DateTime {
		return $this->zusatztermin;
	}

	/**
	 * @return \DateTime
	 */
	public function getZvtermin(): \DateTime {
		return $this->zvtermin;
	}

	/**
	 * @return boolean
	 */
	public function getZwangsversteigerung(): bool {
		return $this->zwangsversteigerung;
	}

	/**
	 * @param string $aktenzeichen Setter for aktenzeichen
	 * @return Versteigerung
	 */
	public function setAktenzeichen(string $aktenzeichen): Versteigerung {
		$this->aktenzeichen = $aktenzeichen;
		return $this;
	}

	/**
	 * @param string $amtsgericht Setter for amtsgericht
	 * @return Versteigerung
	 */
	public function setAmtsgericht(string $amtsgericht): Versteigerung {
		$this->amtsgericht = $amtsgericht;
		return $this;
	}

	/**
	 * @param int $immobilie Setter for immobilie
	 * @return Versteigerung
	 */
	public function setImmobilie(int $immobilie) {
		$this->immobilie = $immobilie;
		return $this;
	}

	/**
	 * @param float $verkehrswert Setter for verkehrswert
	 * @return Versteigerung
	 */
	public function setVerkehrswert(float $verkehrswert): Versteigerung {
		$this->verkehrswert = $verkehrswert;
		return $this;
	}

	/**
	 * @param \DateTime $zusatztermin Setter for zusatztermin
	 * @return Versteigerung
	 */
	public function setZusatztermin(\DateTime $zusatztermin): Versteigerung {
		$this->zusatztermin = $zusatztermin;
		return $this;
	}

	/**
	 * @param \DateTime $zvtermin Setter for zvtermin
	 * @return Versteigerung
	 */
	public function setZvtermin(\DateTime $zvtermin): Versteigerung {
		$this->zvtermin = $zvtermin;
		return $this;
	}

	/**
	 * @param boolean $zwangsversteigerung Setter for zwangsversteigerung
	 * @return Versteigerung
	 */
	public function setZwangsversteigerung(bool $zwangsversteigerung): Versteigerung {
		$this->zwangsversteigerung = $zwangsversteigerung;
		return $this;
	}
}
