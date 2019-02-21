<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Anhang
 * Element für Anhänge
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("anhang")
 */
class Anhang implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const GRUPPE_ANBIETERLOGO = 'ANBIETERLOGO';

	/**
	 */
	const GRUPPE_ANBOBJURL = 'ANBOBJURL';

	/**
	 */
	const GRUPPE_AUSSENANSICHTEN = 'AUSSENANSICHTEN';

	/**
	 */
	const GRUPPE_BILD = 'BILD';

	/**
	 */
	const GRUPPE_DOKUMENTE = 'DOKUMENTE';

	/**
	 */
	const GRUPPE_EPASS_SKALA = 'EPASS-SKALA';

	/**
	 */
	const GRUPPE_FILM = 'FILM';

	/**
	 */
	const GRUPPE_FILMLINK = 'FILMLINK';

	/**
	 */
	const GRUPPE_GRUNDRISS = 'GRUNDRISS';

	/**
	 */
	const GRUPPE_INNENANSICHTEN = 'INNENANSICHTEN';

	/**
	 */
	const GRUPPE_KARTEN_LAGEPLAN = 'KARTEN_LAGEPLAN';

	/**
	 */
	const GRUPPE_LINKS = 'LINKS';

	/**
	 */
	const GRUPPE_PANORAMA = 'PANORAMA';

	/**
	 */
	const GRUPPE_QRCODE = 'QRCODE';

	/**
	 */
	const GRUPPE_TITELBILD = 'TITELBILD';

	/**
	 */
	const LOCATION_EXTERN = 'EXTERN';

	/**
	 */
	const LOCATION_INTERN = 'INTERN';

	/**
	 */
	const LOCATION_REMOTE = 'REMOTE';

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude ()
	 * @var int
	 */
	protected $anbieter;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $anhaenge;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $anhangtitel;

	/**
	 * @Type ("Ujamii\OpenImmoTypo3\Domain\Model\Check") 
	 * @var \Ujamii\OpenImmoTypo3\Domain\Model\Check
	 */
	protected $check;

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
	 * optional
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @see GRUPPE_* constants
	 * @var string
	 */
	protected $gruppe;

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
	 * @return int
	 */
	public function getAnbieter(): int {
		return $this->anbieter;
	}

	/**
	 * @return int
	 */
	public function getAnhaenge(): int {
		return $this->anhaenge;
	}

	/**
	 * @return string
	 */
	public function getAnhangtitel(): string {
		return $this->anhangtitel;
	}

	/**
	 * @return Check
	 */
	public function getCheck(): Check {
		return $this->check;
	}

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
	 * @return string
	 */
	public function getGruppe(): string {
		return $this->gruppe;
	}

	/**
	 * @return string
	 */
	public function getLocation(): string {
		return $this->location;
	}

	/**
	 * @param int $anbieter Setter for anbieter
	 * @return Anhang
	 */
	public function setAnbieter(int $anbieter): Anhang {
		$this->anbieter = $anbieter;
		return $this;
	}

	/**
	 * @param int $anhaenge Setter for anhaenge
	 * @return Anhang
	 */
	public function setAnhaenge(int $anhaenge) {
		$this->anhaenge = $anhaenge;
		return $this;
	}

	/**
	 * @param string $anhangtitel Setter for anhangtitel
	 * @return Anhang
	 */
	public function setAnhangtitel(string $anhangtitel): Anhang {
		$this->anhangtitel = $anhangtitel;
		return $this;
	}

	/**
	 * @param Check $check Setter for check
	 * @return Anhang
	 */
	public function setCheck(Check $check): Anhang {
		$this->check = $check;
		return $this;
	}

	/**
	 * @param Daten $daten Setter for daten
	 * @return Anhang
	 */
	public function setDaten(Daten $daten): Anhang {
		$this->daten = $daten;
		return $this;
	}

	/**
	 * @param string $format Setter for format
	 * @return Anhang
	 */
	public function setFormat(string $format): Anhang {
		$this->format = $format;
		return $this;
	}

	/**
	 * @param string $gruppe Setter for gruppe
	 * @return Anhang
	 */
	public function setGruppe(string $gruppe): Anhang {
		$this->gruppe = $gruppe;
		return $this;
	}

	/**
	 * @param string $location Setter for location
	 * @return Anhang
	 */
	public function setLocation(string $location): Anhang {
		$this->location = $location;
		return $this;
	}
}
