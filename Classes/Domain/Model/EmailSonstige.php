<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class EmailSonstige
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("email_sonstige")
 */
class EmailSonstige implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const EMAILART_EM_DIREKT = 'EM_DIREKT';

	/**
	 */
	const EMAILART_EM_PRIVAT = 'EM_PRIVAT';

	/**
	 */
	const EMAILART_EM_SONSTIGE = 'EM_SONSTIGE';

	/**
	 */
	const EMAILART_EM_ZENTRALE = 'EM_ZENTRALE';

	/**
	 * optional
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @var string
	 */
	protected $bemerkung;

	/**
	 * optional
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @see EMAILART_* constants
	 * @var string
	 */
	protected $emailart;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude ()
	 * @var int
	 */
	protected $kontaktperson;

	/**
	 * @Inline 
	 * @Type ("string") 
	 * @var string
	 */
	protected $value;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $weitereAdresse;

	/**
	 * @param string $emailart Shortcut setter for emailart
	 * @param string $bemerkung Shortcut setter for bemerkung
	 * @param string $value the actual value
	 */
	public function __construct(string $emailart = null, string $bemerkung = null, string $value = null) {
		$this->emailart = $emailart;
		$this->bemerkung = $bemerkung;
		$this->value = $value;
	}

	/**
	 * @return string
	 */
	public function getBemerkung(): string {
		return $this->bemerkung;
	}

	/**
	 * @return string
	 */
	public function getEmailart(): string {
		return $this->emailart;
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
	public function getValue(): string {
		return $this->value;
	}

	/**
	 * @return int
	 */
	public function getWeitereAdresse(): int {
		return $this->weitereAdresse;
	}

	/**
	 * @param string $bemerkung Setter for bemerkung
	 * @return EmailSonstige
	 */
	public function setBemerkung(string $bemerkung): EmailSonstige {
		$this->bemerkung = $bemerkung;
		return $this;
	}

	/**
	 * @param string $emailart Setter for emailart
	 * @return EmailSonstige
	 */
	public function setEmailart(string $emailart): EmailSonstige {
		$this->emailart = $emailart;
		return $this;
	}

	/**
	 * @param int $kontaktperson Setter for kontaktperson
	 * @return EmailSonstige
	 */
	public function setKontaktperson(int $kontaktperson): EmailSonstige {
		$this->kontaktperson = $kontaktperson;
		return $this;
	}

	/**
	 * @param string $value Setter for value
	 * @return EmailSonstige
	 */
	public function setValue(string $value): EmailSonstige {
		$this->value = $value;
		return $this;
	}

	/**
	 * @param int $weitereAdresse Setter for weitereAdresse
	 * @return EmailSonstige
	 */
	public function setWeitereAdresse(int $weitereAdresse) {
		$this->weitereAdresse = $weitereAdresse;
		return $this;
	}
}
