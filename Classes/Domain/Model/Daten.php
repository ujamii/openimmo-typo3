<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Daten
 * Anhangdaten
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("daten")
 */
class Daten implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_daten';

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude ()
	 * @var int
	 */
	protected $anhang;

	/**
	 * Base64 encoded binary
	 *
	 * @Type ("string")
	 * @var string
	 */
	protected $anhanginhalt;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $foto;

	/**
	 * @Type ("string") 
	 * @var string
	 */
	protected $pfad;

	/**
	 * @return int
	 */
	public function getAnhang(): int {
		return $this->anhang;
	}

	/**
	 * @return string
	 */
	public function getAnhanginhalt(): string {
		return $this->anhanginhalt;
	}

	/**
	 * @return int
	 */
	public function getFoto(): int {
		return $this->foto;
	}

	/**
	 * @return string
	 */
	public function getPfad(): string {
		return $this->pfad;
	}

	/**
	 * @param int $anhang Setter for anhang
	 * @return Daten
	 */
	public function setAnhang(int $anhang): Daten {
		$this->anhang = $anhang;
		return $this;
	}

	/**
	 * @param string $anhanginhalt Setter for anhanginhalt
	 * @return Daten
	 */
	public function setAnhanginhalt(string $anhanginhalt): Daten {
		$this->anhanginhalt = $anhanginhalt;
		return $this;
	}

	/**
	 * @param int $foto Setter for foto
	 * @return Daten
	 */
	public function setFoto(int $foto) {
		$this->foto = $foto;
		return $this;
	}

	/**
	 * @param string $pfad Setter for pfad
	 * @return Daten
	 */
	public function setPfad(string $pfad): Daten {
		$this->pfad = $pfad;
		return $this;
	}
}
