<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Energiepass
 * Energiepass/Ausweis ab 7/2008 vorgeschrieben
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("energiepass")
 */
class Energiepass implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const EPART_BEDARF = 'BEDARF';

	/**
	 */
	const EPART_VERBRAUCH = 'VERBRAUCH';

	/**
	 */
	const GEBAEUDEART_NICHTWOHN = 'nichtwohn';

	/**
	 */
	const GEBAEUDEART_WOHN = 'wohn';

	/**
	 */
	const JAHRGANG_2008 = '2008';

	/**
	 */
	const JAHRGANG_2014 = '2014';

	/**
	 */
	const JAHRGANG_BEI_BESICHTIGUNG = 'bei_besichtigung';

	/**
	 */
	const JAHRGANG_NICHT_NOETIG = 'nicht_noetig';

	/**
	 */
	const JAHRGANG_OHNE = 'ohne';

	/**
	 * @Type ("DateTime<'Y-m-d'>") 
	 * @var \DateTime
	 */
	protected $ausstelldatum;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $baujahr;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $endenergiebedarf;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $energieverbrauchkennwert;

	/**
	 * @Type ("string") 
	 * @see EPART_* constants
	 * @var string
	 */
	protected $epart;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $epasstext;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $fgeeklasse;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $fgeewert;

	/**
	 * @Type ("string") 
	 * @see GEBAEUDEART_* constants
	 * @var string
	 */
	protected $gebaeudeart;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $geg2018;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $gueltigBis;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $hwbklasse;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $hwbwert;

	/**
	 * @Type ("string") 
	 * @see JAHRGANG_* constants
	 * @var string
	 */
	protected $jahrgang;

	/**
	 * @Type ("boolean") 
	 * @var boolean
	 */
	protected $mitwarmwasser;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $primaerenergietraeger;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $stromwert;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $waermewert;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $wertklasse;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $zustandAngaben;

	/**
	 * @return \DateTime
	 */
	public function getAusstelldatum(): \DateTime {
		return $this->ausstelldatum;
	}

	/**
	 * @return string
	 */
	public function getBaujahr(): string {
		return $this->baujahr;
	}

	/**
	 * @return string
	 */
	public function getEndenergiebedarf(): string {
		return $this->endenergiebedarf;
	}

	/**
	 * @return string
	 */
	public function getEnergieverbrauchkennwert(): string {
		return $this->energieverbrauchkennwert;
	}

	/**
	 * @return string
	 */
	public function getEpart(): string {
		return $this->epart;
	}

	/**
	 * @return string
	 */
	public function getEpasstext(): string {
		return $this->epasstext;
	}

	/**
	 * @return string
	 */
	public function getFgeeklasse(): string {
		return $this->fgeeklasse;
	}

	/**
	 * @return string
	 */
	public function getFgeewert(): string {
		return $this->fgeewert;
	}

	/**
	 * @return string
	 */
	public function getGebaeudeart(): string {
		return $this->gebaeudeart;
	}

	/**
	 * @return string
	 */
	public function getGeg2018(): string {
		return $this->geg2018;
	}

	/**
	 * @return string
	 */
	public function getGueltigBis(): string {
		return $this->gueltigBis;
	}

	/**
	 * @return string
	 */
	public function getHwbklasse(): string {
		return $this->hwbklasse;
	}

	/**
	 * @return string
	 */
	public function getHwbwert(): string {
		return $this->hwbwert;
	}

	/**
	 * @return string
	 */
	public function getJahrgang(): string {
		return $this->jahrgang;
	}

	/**
	 * @return boolean
	 */
	public function getMitwarmwasser(): bool {
		return $this->mitwarmwasser;
	}

	/**
	 * @return string
	 */
	public function getPrimaerenergietraeger(): string {
		return $this->primaerenergietraeger;
	}

	/**
	 * @return string
	 */
	public function getStromwert(): string {
		return $this->stromwert;
	}

	/**
	 * @return string
	 */
	public function getWaermewert(): string {
		return $this->waermewert;
	}

	/**
	 * @return string
	 */
	public function getWertklasse(): string {
		return $this->wertklasse;
	}

	/**
	 * @return int
	 */
	public function getZustandAngaben(): int {
		return $this->zustandAngaben;
	}

	/**
	 * @param \DateTime $ausstelldatum Setter for ausstelldatum
	 * @return Energiepass
	 */
	public function setAusstelldatum(\DateTime $ausstelldatum): Energiepass {
		$this->ausstelldatum = $ausstelldatum;
		return $this;
	}

	/**
	 * @param string $baujahr Setter for baujahr
	 * @return Energiepass
	 */
	public function setBaujahr(string $baujahr): Energiepass {
		$this->baujahr = $baujahr;
		return $this;
	}

	/**
	 * @param string $endenergiebedarf Setter for endenergiebedarf
	 * @return Energiepass
	 */
	public function setEndenergiebedarf(string $endenergiebedarf): Energiepass {
		$this->endenergiebedarf = $endenergiebedarf;
		return $this;
	}

	/**
	 * @param string $energieverbrauchkennwert Setter for energieverbrauchkennwert
	 * @return Energiepass
	 */
	public function setEnergieverbrauchkennwert(string $energieverbrauchkennwert): Energiepass {
		$this->energieverbrauchkennwert = $energieverbrauchkennwert;
		return $this;
	}

	/**
	 * @param string $epart Setter for epart
	 * @return Energiepass
	 */
	public function setEpart(string $epart): Energiepass {
		$this->epart = $epart;
		return $this;
	}

	/**
	 * @param string $epasstext Setter for epasstext
	 * @return Energiepass
	 */
	public function setEpasstext(string $epasstext): Energiepass {
		$this->epasstext = $epasstext;
		return $this;
	}

	/**
	 * @param string $fgeeklasse Setter for fgeeklasse
	 * @return Energiepass
	 */
	public function setFgeeklasse(string $fgeeklasse): Energiepass {
		$this->fgeeklasse = $fgeeklasse;
		return $this;
	}

	/**
	 * @param string $fgeewert Setter for fgeewert
	 * @return Energiepass
	 */
	public function setFgeewert(string $fgeewert): Energiepass {
		$this->fgeewert = $fgeewert;
		return $this;
	}

	/**
	 * @param string $gebaeudeart Setter for gebaeudeart
	 * @return Energiepass
	 */
	public function setGebaeudeart(string $gebaeudeart): Energiepass {
		$this->gebaeudeart = $gebaeudeart;
		return $this;
	}

	/**
	 * @param string $geg2018 Setter for geg2018
	 * @return Energiepass
	 */
	public function setGeg2018(string $geg2018): Energiepass {
		$this->geg2018 = $geg2018;
		return $this;
	}

	/**
	 * @param string $gueltigBis Setter for gueltigBis
	 * @return Energiepass
	 */
	public function setGueltigBis(string $gueltigBis): Energiepass {
		$this->gueltigBis = $gueltigBis;
		return $this;
	}

	/**
	 * @param string $hwbklasse Setter for hwbklasse
	 * @return Energiepass
	 */
	public function setHwbklasse(string $hwbklasse): Energiepass {
		$this->hwbklasse = $hwbklasse;
		return $this;
	}

	/**
	 * @param string $hwbwert Setter for hwbwert
	 * @return Energiepass
	 */
	public function setHwbwert(string $hwbwert): Energiepass {
		$this->hwbwert = $hwbwert;
		return $this;
	}

	/**
	 * @param string $jahrgang Setter for jahrgang
	 * @return Energiepass
	 */
	public function setJahrgang(string $jahrgang): Energiepass {
		$this->jahrgang = $jahrgang;
		return $this;
	}

	/**
	 * @param boolean $mitwarmwasser Setter for mitwarmwasser
	 * @return Energiepass
	 */
	public function setMitwarmwasser(bool $mitwarmwasser): Energiepass {
		$this->mitwarmwasser = $mitwarmwasser;
		return $this;
	}

	/**
	 * @param string $primaerenergietraeger Setter for primaerenergietraeger
	 * @return Energiepass
	 */
	public function setPrimaerenergietraeger(string $primaerenergietraeger): Energiepass {
		$this->primaerenergietraeger = $primaerenergietraeger;
		return $this;
	}

	/**
	 * @param string $stromwert Setter for stromwert
	 * @return Energiepass
	 */
	public function setStromwert(string $stromwert): Energiepass {
		$this->stromwert = $stromwert;
		return $this;
	}

	/**
	 * @param string $waermewert Setter for waermewert
	 * @return Energiepass
	 */
	public function setWaermewert(string $waermewert): Energiepass {
		$this->waermewert = $waermewert;
		return $this;
	}

	/**
	 * @param string $wertklasse Setter for wertklasse
	 * @return Energiepass
	 */
	public function setWertklasse(string $wertklasse): Energiepass {
		$this->wertklasse = $wertklasse;
		return $this;
	}

	/**
	 * @param int $zustandAngaben Setter for zustandAngaben
	 * @return Energiepass
	 */
	public function setZustandAngaben(int $zustandAngaben) {
		$this->zustandAngaben = $zustandAngaben;
		return $this;
	}
}
