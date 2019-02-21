<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Foto
 * Foto bei der Kontaktperson. Datentyp ähnlich "Anhang"foto from the kontakt person of the sender
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("foto")
 */
class Foto implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const LOCATION_EXTERN = 'EXTERN';

	/**
	 */
	const LOCATION_REMOTE = 'REMOTE';

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Daten") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Daten
	 */
	protected $daten;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $format;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $kontaktperson;

	/**
	 * required
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @see LOCATION_* constants
	 * @var string
	 */
	protected $location;

	/**
	 * @return Daten
	 */
	public function getDaten(): Daten {
		return $this->daten;
	}

	/**
	 * @return string
	 */
	public function getFormat(): string {
		return $this->format;
	}

	/**
	 * @return int
	 */
	public function getKontaktperson(): int {
		return $this->kontaktperson;
	}

	/**
	 * @return string
	 */
	public function getLocation(): string {
		return $this->location;
	}

	/**
	 * @param Daten $daten Setter for daten
	 * @return Foto
	 */
	public function setDaten(Daten $daten): Foto {
		$this->daten = $daten;
		return $this;
	}

	/**
	 * @param string $format Setter for format
	 * @return Foto
	 */
	public function setFormat(string $format): Foto {
		$this->format = $format;
		return $this;
	}

	/**
	 * @param int $kontaktperson Setter for kontaktperson
	 * @return Foto
	 */
	public function setKontaktperson(int $kontaktperson) {
		$this->kontaktperson = $kontaktperson;
		return $this;
	}

	/**
	 * @param string $location Setter for location
	 * @return Foto
	 */
	public function setLocation(string $location): Foto {
		$this->location = $location;
		return $this;
	}
}
