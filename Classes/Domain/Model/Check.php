<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Check
 * Angabe von Daten für die Prüfung auf ein Update
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("check")
 */
class Check implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 */
	const CTYPE_DATETIME = 'DATETIME';

	/**
	 */
	const CTYPE_ETAG = 'ETAG';

	/**
	 */
	const CTYPE_MD5 = 'MD5';

	/**
	 */
	const TABLE_NAME = 'tx_openimmotypo3_domain_model_sqlsafecheck';

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $anhang;

	/**
	 * required
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @see CTYPE_* constants
	 * @var string
	 */
	protected $ctype;

	/**
	 * @Type ("DateTime<'Y-m-d\TH:i:s'>") 
	 * @Inline 
	 * @var \DateTime
	 */
	protected $value;

	/**
	 * @param string $ctype Shortcut setter for ctype
	 * @param \DateTime $value the actual value
	 */
	public function __construct(string $ctype = null, \DateTime $value = null) {
		$this->ctype = $ctype;
		$this->value = $value;
	}

	/**
	 * @return int
	 */
	public function getAnhang(): int {
		return $this->anhang;
	}

	/**
	 * @return string
	 */
	public function getCtype(): string {
		return $this->ctype;
	}

	/**
	 * @return \DateTime
	 */
	public function getValue(): \DateTime {
		return $this->value;
	}

	/**
	 * @param int $anhang Setter for anhang
	 * @return Check
	 */
	public function setAnhang(int $anhang) {
		$this->anhang = $anhang;
		return $this;
	}

	/**
	 * @param string $ctype Setter for ctype
	 * @return Check
	 */
	public function setCtype(string $ctype): Check {
		$this->ctype = $ctype;
		return $this;
	}

	/**
	 * @param \DateTime $value Setter for value
	 * @return Check
	 */
	public function setValue(\DateTime $value): Check {
		$this->value = $value;
		return $this;
	}
}
