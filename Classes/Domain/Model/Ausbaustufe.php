<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Ausbaustufe
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("ausbaustufe")
 */
class Ausbaustufe implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("AUSBAUHAUS")
	 * @var boolean
	 */
	protected $ausbauhaus;

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
	 * @SerializedName ("BAUSATZHAUS")
	 * @var boolean
	 */
	protected $bausatzhaus;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("SCHLUESSELFERTIGMITBODENPLATTE")
	 * @var boolean
	 */
	protected $schluesselfertigmitbodenplatte;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("SCHLUESSELFERTIGMITKELLER")
	 * @var boolean
	 */
	protected $schluesselfertigmitkeller;

	/**
	 * optional
	 *
	 * @Type ("boolean")
	 * @XmlAttribute 
	 * @SerializedName ("SCHLUESSELFERTIGOHNEBODENPLATTE")
	 * @var boolean
	 */
	protected $schluesselfertigohnebodenplatte;

	/**
	 * @return boolean
	 */
	public function getAusbauhaus(): bool {
		return $this->ausbauhaus;
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
	public function getBausatzhaus(): bool {
		return $this->bausatzhaus;
	}

	/**
	 * @return boolean
	 */
	public function getSchluesselfertigmitbodenplatte(): bool {
		return $this->schluesselfertigmitbodenplatte;
	}

	/**
	 * @return boolean
	 */
	public function getSchluesselfertigmitkeller(): bool {
		return $this->schluesselfertigmitkeller;
	}

	/**
	 * @return boolean
	 */
	public function getSchluesselfertigohnebodenplatte(): bool {
		return $this->schluesselfertigohnebodenplatte;
	}

	/**
	 * @param boolean $ausbauhaus Setter for ausbauhaus
	 * @return Ausbaustufe
	 */
	public function setAusbauhaus(bool $ausbauhaus): Ausbaustufe {
		$this->ausbauhaus = $ausbauhaus;
		return $this;
	}

	/**
	 * @param int $ausstattung Setter for ausstattung
	 * @return Ausbaustufe
	 */
	public function setAusstattung(int $ausstattung) {
		$this->ausstattung = $ausstattung;
		return $this;
	}

	/**
	 * @param boolean $bausatzhaus Setter for bausatzhaus
	 * @return Ausbaustufe
	 */
	public function setBausatzhaus(bool $bausatzhaus): Ausbaustufe {
		$this->bausatzhaus = $bausatzhaus;
		return $this;
	}

	/**
	 * @param boolean $schluesselfertigmitbodenplatte Setter for schluesselfertigmitbodenplatte
	 * @return Ausbaustufe
	 */
	public function setSchluesselfertigmitbodenplatte(bool $schluesselfertigmitbodenplatte): Ausbaustufe {
		$this->schluesselfertigmitbodenplatte = $schluesselfertigmitbodenplatte;
		return $this;
	}

	/**
	 * @param boolean $schluesselfertigmitkeller Setter for schluesselfertigmitkeller
	 * @return Ausbaustufe
	 */
	public function setSchluesselfertigmitkeller(bool $schluesselfertigmitkeller): Ausbaustufe {
		$this->schluesselfertigmitkeller = $schluesselfertigmitkeller;
		return $this;
	}

	/**
	 * @param boolean $schluesselfertigohnebodenplatte Setter for schluesselfertigohnebodenplatte
	 * @return Ausbaustufe
	 */
	public function setSchluesselfertigohnebodenplatte(bool $schluesselfertigohnebodenplatte): Ausbaustufe {
		$this->schluesselfertigohnebodenplatte = $schluesselfertigohnebodenplatte;
		return $this;
	}
}
