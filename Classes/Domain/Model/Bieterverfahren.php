<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Bieterverfahren
 * Angaben zum Bieterverfahren
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("bieterverfahren")
 */
class Bieterverfahren implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 * @Type ("DateTime<'Y-m-d'>") 
	 * @var \DateTime
	 */
	protected $beginnAngebotsphase;

	/**
	 * @Type ("DateTime<'Y-m-d\TH:i:s'>") 
	 * @var \DateTime
	 */
	protected $beginnBietzeit;

	/**
	 * @Type ("DateTime<'Y-m-d'>") 
	 * @var \DateTime
	 */
	protected $besichtigungstermin;

	/**
	 * @Type ("DateTime<'Y-m-d'>") 
	 * @var \DateTime
	 */
	protected $besichtigungstermin2;

	/**
	 * @Type ("DateTime<'Y-m-d'>") 
	 * @var \DateTime
	 */
	protected $endeBietzeit;

	/**
	 * @Type ("boolean") 
	 * @var boolean
	 */
	protected $hoechstgebotZeigen;

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
	protected $mindestpreis;

	/**
	 * @XmlList (inline = true, entry = "user_defined_anyfield") 
	 * @Type ("array<Ujamii\OpenImmoTypo3\Domain\Model\UserDefinedAnyfield>") 
	 * @var UserDefinedAnyfield[]
	 */
	protected $userDefinedAnyfield;

	/**
	 * @XmlList (inline = true, entry = "user_defined_extend") 
	 * @Type ("array<Ujamii\OpenImmoTypo3\Domain\Model\UserDefinedExtend>") 
	 * @var UserDefinedExtend[]
	 */
	protected $userDefinedExtend;

	/**
	 * @XmlList (inline = true, entry = "user_defined_simplefield") 
	 * @Type ("array<Ujamii\OpenImmoTypo3\Domain\Model\UserDefinedSimplefield>") 
	 * @var UserDefinedSimplefield[]
	 */
	protected $userDefinedSimplefield;

	/**
	 * @return \DateTime
	 */
	public function getBeginnAngebotsphase(): \DateTime {
		return $this->beginnAngebotsphase;
	}

	/**
	 * @return \DateTime
	 */
	public function getBeginnBietzeit(): \DateTime {
		return $this->beginnBietzeit;
	}

	/**
	 * @return \DateTime
	 */
	public function getBesichtigungstermin(): \DateTime {
		return $this->besichtigungstermin;
	}

	/**
	 * @return \DateTime
	 */
	public function getBesichtigungstermin2(): \DateTime {
		return $this->besichtigungstermin2;
	}

	/**
	 * @return \DateTime
	 */
	public function getEndeBietzeit(): \DateTime {
		return $this->endeBietzeit;
	}

	/**
	 * @return boolean
	 */
	public function getHoechstgebotZeigen(): bool {
		return $this->hoechstgebotZeigen;
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
	public function getMindestpreis(): float {
		return $this->mindestpreis;
	}

	/**
	 * Returns array of UserDefinedAnyfield
	 *
	 * @return array
	 */
	public function getUserDefinedAnyfield(): array {
		return $this->userDefinedAnyfield;
	}

	/**
	 * Returns array of UserDefinedExtend
	 *
	 * @return array
	 */
	public function getUserDefinedExtend(): array {
		return $this->userDefinedExtend;
	}

	/**
	 * Returns array of UserDefinedSimplefield
	 *
	 * @return array
	 */
	public function getUserDefinedSimplefield(): array {
		return $this->userDefinedSimplefield;
	}

	/**
	 * @param \DateTime $beginnAngebotsphase Setter for beginnAngebotsphase
	 * @return Bieterverfahren
	 */
	public function setBeginnAngebotsphase(\DateTime $beginnAngebotsphase): Bieterverfahren {
		$this->beginnAngebotsphase = $beginnAngebotsphase;
		return $this;
	}

	/**
	 * @param \DateTime $beginnBietzeit Setter for beginnBietzeit
	 * @return Bieterverfahren
	 */
	public function setBeginnBietzeit(\DateTime $beginnBietzeit): Bieterverfahren {
		$this->beginnBietzeit = $beginnBietzeit;
		return $this;
	}

	/**
	 * @param \DateTime $besichtigungstermin Setter for besichtigungstermin
	 * @return Bieterverfahren
	 */
	public function setBesichtigungstermin(\DateTime $besichtigungstermin): Bieterverfahren {
		$this->besichtigungstermin = $besichtigungstermin;
		return $this;
	}

	/**
	 * @param \DateTime $besichtigungstermin2 Setter for besichtigungstermin2
	 * @return Bieterverfahren
	 */
	public function setBesichtigungstermin2(\DateTime $besichtigungstermin2): Bieterverfahren {
		$this->besichtigungstermin2 = $besichtigungstermin2;
		return $this;
	}

	/**
	 * @param \DateTime $endeBietzeit Setter for endeBietzeit
	 * @return Bieterverfahren
	 */
	public function setEndeBietzeit(\DateTime $endeBietzeit): Bieterverfahren {
		$this->endeBietzeit = $endeBietzeit;
		return $this;
	}

	/**
	 * @param boolean $hoechstgebotZeigen Setter for hoechstgebotZeigen
	 * @return Bieterverfahren
	 */
	public function setHoechstgebotZeigen(bool $hoechstgebotZeigen): Bieterverfahren {
		$this->hoechstgebotZeigen = $hoechstgebotZeigen;
		return $this;
	}

	/**
	 * @param int $immobilie Setter for immobilie
	 * @return Bieterverfahren
	 */
	public function setImmobilie(int $immobilie) {
		$this->immobilie = $immobilie;
		return $this;
	}

	/**
	 * @param float $mindestpreis Setter for mindestpreis
	 * @return Bieterverfahren
	 */
	public function setMindestpreis(float $mindestpreis): Bieterverfahren {
		$this->mindestpreis = $mindestpreis;
		return $this;
	}

	/**
	 * @param array $userDefinedAnyfield Setter for userDefinedAnyfield
	 * @return Bieterverfahren
	 */
	public function setUserDefinedAnyfield(array $userDefinedAnyfield): Bieterverfahren {
		$this->userDefinedAnyfield = $userDefinedAnyfield;
		return $this;
	}

	/**
	 * @param array $userDefinedExtend Setter for userDefinedExtend
	 * @return Bieterverfahren
	 */
	public function setUserDefinedExtend(array $userDefinedExtend): Bieterverfahren {
		$this->userDefinedExtend = $userDefinedExtend;
		return $this;
	}

	/**
	 * @param array $userDefinedSimplefield Setter for userDefinedSimplefield
	 * @return Bieterverfahren
	 */
	public function setUserDefinedSimplefield(array $userDefinedSimplefield): Bieterverfahren {
		$this->userDefinedSimplefield = $userDefinedSimplefield;
		return $this;
	}
}
