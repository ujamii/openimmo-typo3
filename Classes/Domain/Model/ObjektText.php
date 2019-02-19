<?php
namespace Ujamii\OpenImmoTypo3\Domain\Model;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ObjektText
 * Beschreibung in anderer Sprache. "lang" Attribut muss dann vorhanden sein. W3- Language Code Description in other Languages
 *
 * @package Ujamii\OpenImmoTypo3\Domain\Model
 * @XmlRoot ("objekt_text")
 */
class ObjektText implements \TYPO3\CMS\Extbase\DomainObject\DomainObjectInterface, \TYPO3\CMS\Extbase\Persistence\ObjectMonitoringInterface {

	use ExtbaseModelTrait;

	/**
	 * Id of the parent object for backlink purpose in TYPO3.
	 *
	 * @Exclude() 
	 * @var int
	 */
	protected $freitexte;

	/**
	 * required
	 *
	 * @Type ("string")
	 * @XmlAttribute 
	 * @var string
	 */
	protected $lang;

	/**
	 * @return int
	 */
	public function getFreitexte(): int {
		return $this->freitexte;
	}

	/**
	 * @return string
	 */
	public function getLang(): string {
		return $this->lang;
	}

	/**
	 * @param int $freitexte Setter for freitexte
	 * @return ObjektText
	 */
	public function setFreitexte(int $freitexte) {
		$this->freitexte = $freitexte;
		return $this;
	}

	/**
	 * @param string $lang Setter for lang
	 * @return ObjektText
	 */
	public function setLang(string $lang): ObjektText {
		$this->lang = $lang;
		return $this;
	}
}
