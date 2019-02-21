<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Objektart
 * Objektarten
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("objektart")
 */
class Objektart implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 * @XmlList (inline = true, entry = "buero_praxen") 
	 * @Type ("array<Ujamii\OpenImmoTypo3\Domain\Model\BueroPraxen>") 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ujamii\OpenImmoTypo3\Domain\Model\BueroPraxen>
	 */
	protected $bueroPraxen;

	/**
	 * @XmlList (inline = true, entry = "einzelhandel") 
	 * @Type ("array<Ujamii\OpenImmoTypo3\Domain\Model\Einzelhandel>") 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ujamii\OpenImmoTypo3\Domain\Model\Einzelhandel>
	 */
	protected $einzelhandel;

	/**
	 * @XmlList (inline = true, entry = "freizeitimmobilie_gewerblich") 
	 * @Type ("array<Ujamii\OpenImmoTypo3\Domain\Model\FreizeitimmobilieGewerblich>") 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ujamii\OpenImmoTypo3\Domain\Model\FreizeitimmobilieGewerblich>
	 */
	protected $freizeitimmobilieGewerblich;

	/**
	 * @XmlList (inline = true, entry = "gastgewerbe") 
	 * @Type ("array<Ujamii\OpenImmoTypo3\Domain\Model\Gastgewerbe>") 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ujamii\OpenImmoTypo3\Domain\Model\Gastgewerbe>
	 */
	protected $gastgewerbe;

	/**
	 * @XmlList (inline = true, entry = "grundstueck") 
	 * @Type ("array<Ujamii\OpenImmoTypo3\Domain\Model\Grundstueck>") 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ujamii\OpenImmoTypo3\Domain\Model\Grundstueck>
	 */
	protected $grundstueck;

	/**
	 * @XmlList (inline = true, entry = "hallen_lager_prod") 
	 * @Type ("array<Ujamii\OpenImmoTypo3\Domain\Model\HallenLagerProd>") 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ujamii\OpenImmoTypo3\Domain\Model\HallenLagerProd>
	 */
	protected $hallenLagerProd;

	/**
	 * @XmlList (inline = true, entry = "haus") 
	 * @Type ("array<Ujamii\OpenImmoTypo3\Domain\Model\Haus>") 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ujamii\OpenImmoTypo3\Domain\Model\Haus>
	 */
	protected $haus;

	/**
	 * @XmlList (inline = true, entry = "land_und_forstwirtschaft") 
	 * @Type ("array<Ujamii\OpenImmoTypo3\Domain\Model\LandUndForstwirtschaft>") 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ujamii\OpenImmoTypo3\Domain\Model\LandUndForstwirtschaft>
	 */
	protected $landUndForstwirtschaft;

	/**
	 * @XmlList (inline = true, entry = "objektart_zusatz") 
	 * @Type ("string") 
	 * @var string[]
	 */
	protected $objektartZusatz;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $objektkategorie;

	/**
	 * @XmlList (inline = true, entry = "parken") 
	 * @Type ("array<Ujamii\OpenImmoTypo3\Domain\Model\Parken>") 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ujamii\OpenImmoTypo3\Domain\Model\Parken>
	 */
	protected $parken;

	/**
	 * @XmlList (inline = true, entry = "sonstige") 
	 * @Type ("array<Ujamii\OpenImmoTypo3\Domain\Model\Sonstige>") 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ujamii\OpenImmoTypo3\Domain\Model\Sonstige>
	 */
	protected $sonstige;

	/**
	 * @XmlList (inline = true, entry = "wohnung") 
	 * @Type ("array<Ujamii\OpenImmoTypo3\Domain\Model\Wohnung>") 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ujamii\OpenImmoTypo3\Domain\Model\Wohnung>
	 */
	protected $wohnung;

	/**
	 * @XmlList (inline = true, entry = "zimmer") 
	 * @Type ("array<Ujamii\OpenImmoTypo3\Domain\Model\Zimmer>") 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ujamii\OpenImmoTypo3\Domain\Model\Zimmer>
	 */
	protected $zimmer;

	/**
	 * @XmlList (inline = true, entry = "zinshaus_renditeobjekt") 
	 * @Type ("array<Ujamii\OpenImmoTypo3\Domain\Model\ZinshausRenditeobjekt>") 
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ujamii\OpenImmoTypo3\Domain\Model\ZinshausRenditeobjekt>
	 */
	protected $zinshausRenditeobjekt;

	/**
	 * Returns array of BueroPraxen
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getBueroPraxen(): \TYPO3\CMS\Extbase\Persistence\ObjectStorage {
		return $this->bueroPraxen;
	}

	/**
	 * Returns array of Einzelhandel
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getEinzelhandel(): \TYPO3\CMS\Extbase\Persistence\ObjectStorage {
		return $this->einzelhandel;
	}

	/**
	 * Returns array of FreizeitimmobilieGewerblich
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getFreizeitimmobilieGewerblich(): \TYPO3\CMS\Extbase\Persistence\ObjectStorage {
		return $this->freizeitimmobilieGewerblich;
	}

	/**
	 * Returns array of Gastgewerbe
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getGastgewerbe(): \TYPO3\CMS\Extbase\Persistence\ObjectStorage {
		return $this->gastgewerbe;
	}

	/**
	 * Returns array of Grundstueck
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getGrundstueck(): \TYPO3\CMS\Extbase\Persistence\ObjectStorage {
		return $this->grundstueck;
	}

	/**
	 * Returns array of HallenLagerProd
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getHallenLagerProd(): \TYPO3\CMS\Extbase\Persistence\ObjectStorage {
		return $this->hallenLagerProd;
	}

	/**
	 * Returns array of Haus
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getHaus(): \TYPO3\CMS\Extbase\Persistence\ObjectStorage {
		return $this->haus;
	}

	/**
	 * Returns array of LandUndForstwirtschaft
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getLandUndForstwirtschaft(): \TYPO3\CMS\Extbase\Persistence\ObjectStorage {
		return $this->landUndForstwirtschaft;
	}

	/**
	 * Returns array of string
	 *
	 * @return array
	 */
	public function getObjektartZusatz(): array {
		return $this->objektartZusatz;
	}

	/**
	 * @return int
	 */
	public function getObjektkategorie(): int {
		return $this->objektkategorie;
	}

	/**
	 * Returns array of Parken
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getParken(): \TYPO3\CMS\Extbase\Persistence\ObjectStorage {
		return $this->parken;
	}

	/**
	 * Returns array of Sonstige
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getSonstige(): \TYPO3\CMS\Extbase\Persistence\ObjectStorage {
		return $this->sonstige;
	}

	/**
	 * Returns array of Wohnung
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getWohnung(): \TYPO3\CMS\Extbase\Persistence\ObjectStorage {
		return $this->wohnung;
	}

	/**
	 * Returns array of Zimmer
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getZimmer(): \TYPO3\CMS\Extbase\Persistence\ObjectStorage {
		return $this->zimmer;
	}

	/**
	 * Returns array of ZinshausRenditeobjekt
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getZinshausRenditeobjekt(): \TYPO3\CMS\Extbase\Persistence\ObjectStorage {
		return $this->zinshausRenditeobjekt;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $bueroPraxen Setter for bueroPraxen
	 * @return Objektart
	 */
	public function setBueroPraxen(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $bueroPraxen): Objektart {
		$this->bueroPraxen = $bueroPraxen;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $einzelhandel Setter for einzelhandel
	 * @return Objektart
	 */
	public function setEinzelhandel(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $einzelhandel): Objektart {
		$this->einzelhandel = $einzelhandel;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $freizeitimmobilieGewerblich Setter for freizeitimmobilieGewerblich
	 * @return Objektart
	 */
	public function setFreizeitimmobilieGewerblich(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $freizeitimmobilieGewerblich): Objektart {
		$this->freizeitimmobilieGewerblich = $freizeitimmobilieGewerblich;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $gastgewerbe Setter for gastgewerbe
	 * @return Objektart
	 */
	public function setGastgewerbe(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $gastgewerbe): Objektart {
		$this->gastgewerbe = $gastgewerbe;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $grundstueck Setter for grundstueck
	 * @return Objektart
	 */
	public function setGrundstueck(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $grundstueck): Objektart {
		$this->grundstueck = $grundstueck;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $hallenLagerProd Setter for hallenLagerProd
	 * @return Objektart
	 */
	public function setHallenLagerProd(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $hallenLagerProd): Objektart {
		$this->hallenLagerProd = $hallenLagerProd;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $haus Setter for haus
	 * @return Objektart
	 */
	public function setHaus(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $haus): Objektart {
		$this->haus = $haus;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $landUndForstwirtschaft Setter for landUndForstwirtschaft
	 * @return Objektart
	 */
	public function setLandUndForstwirtschaft(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $landUndForstwirtschaft): Objektart {
		$this->landUndForstwirtschaft = $landUndForstwirtschaft;
		return $this;
	}

	/**
	 * @param array $objektartZusatz Setter for objektartZusatz
	 * @return Objektart
	 */
	public function setObjektartZusatz(array $objektartZusatz): Objektart {
		$this->objektartZusatz = $objektartZusatz;
		return $this;
	}

	/**
	 * @param int $objektkategorie Setter for objektkategorie
	 * @return Objektart
	 */
	public function setObjektkategorie(int $objektkategorie) {
		$this->objektkategorie = $objektkategorie;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $parken Setter for parken
	 * @return Objektart
	 */
	public function setParken(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $parken): Objektart {
		$this->parken = $parken;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $sonstige Setter for sonstige
	 * @return Objektart
	 */
	public function setSonstige(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $sonstige): Objektart {
		$this->sonstige = $sonstige;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $wohnung Setter for wohnung
	 * @return Objektart
	 */
	public function setWohnung(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $wohnung): Objektart {
		$this->wohnung = $wohnung;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $zimmer Setter for zimmer
	 * @return Objektart
	 */
	public function setZimmer(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $zimmer): Objektart {
		$this->zimmer = $zimmer;
		return $this;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $zinshausRenditeobjekt Setter for zinshausRenditeobjekt
	 * @return Objektart
	 */
	public function setZinshausRenditeobjekt(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $zinshausRenditeobjekt): Objektart {
		$this->zinshausRenditeobjekt = $zinshausRenditeobjekt;
		return $this;
	}
}
