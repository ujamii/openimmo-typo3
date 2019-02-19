<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Haus
 * Objektart / Typ f. Haus
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("haus")
 */
class Haus implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const HAUSTYP_APARTMENTHAUS = 'APARTMENTHAUS';

	/**
	 */
	const HAUSTYP_BAUERNHAUS = 'BAUERNHAUS';

	/**
	 */
	const HAUSTYP_BERGHUETTE = 'BERGHUETTE';

	/**
	 */
	const HAUSTYP_BUNGALOW = 'BUNGALOW';

	/**
	 */
	const HAUSTYP_BURG = 'BURG';

	/**
	 */
	const HAUSTYP_CHALET = 'CHALET';

	/**
	 */
	const HAUSTYP_DOPPELHAUSHAELFTE = 'DOPPELHAUSHAELFTE';

	/**
	 */
	const HAUSTYP_EINFAMILIENHAUS = 'EINFAMILIENHAUS';

	/**
	 */
	const HAUSTYP_FERIENHAUS = 'FERIENHAUS';

	/**
	 */
	const HAUSTYP_FERTIGHAUS = 'FERTIGHAUS';

	/**
	 */
	const HAUSTYP_FINCA = 'FINCA';

	/**
	 */
	const HAUSTYP_HERRENHAUS = 'HERRENHAUS';

	/**
	 */
	const HAUSTYP_KEINE_ANGABE = 'KEINE_ANGABE';

	/**
	 */
	const HAUSTYP_LANDHAUS = 'LANDHAUS';

	/**
	 */
	const HAUSTYP_LAUBE_DATSCHE_GARTENHAUS = 'LAUBE-DATSCHE-GARTENHAUS';

	/**
	 */
	const HAUSTYP_MEHRFAMILIENHAUS = 'MEHRFAMILIENHAUS';

	/**
	 */
	const HAUSTYP_REIHENECK = 'REIHENECK';

	/**
	 */
	const HAUSTYP_REIHENEND = 'REIHENEND';

	/**
	 */
	const HAUSTYP_REIHENHAUS = 'REIHENHAUS';

	/**
	 */
	const HAUSTYP_REIHENMITTEL = 'REIHENMITTEL';

	/**
	 */
	const HAUSTYP_RESTHOF = 'RESTHOF';

	/**
	 */
	const HAUSTYP_RUSTICO = 'RUSTICO';

	/**
	 */
	const HAUSTYP_SCHLOSS = 'SCHLOSS';

	/**
	 */
	const HAUSTYP_STADTHAUS = 'STADTHAUS';

	/**
	 */
	const HAUSTYP_STRANDHAUS = 'STRANDHAUS';

	/**
	 */
	const HAUSTYP_VILLA = 'VILLA';

	/**
	 */
	const HAUSTYP_ZWEIFAMILIENHAUS = 'ZWEIFAMILIENHAUS';

	/**
	 * optional
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @see HAUSTYP_* constants
	 * @var string
	 */
	protected $haustyp;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $objektart;

	/**
	 * @return string
	 */
	public function getHaustyp(): string {
		return $this->haustyp;
	}

	/**
	 * @return int
	 */
	public function getObjektart(): int {
		return $this->objektart;
	}

	/**
	 * @param string $haustyp Setter for haustyp
	 * @return Haus
	 */
	public function setHaustyp(string $haustyp): Haus {
		$this->haustyp = $haustyp;
		return $this;
	}

	/**
	 * @param int $objektart Setter for objektart
	 * @return Haus
	 */
	public function setObjektart(int $objektart) {
		$this->objektart = $objektart;
		return $this;
	}
}
