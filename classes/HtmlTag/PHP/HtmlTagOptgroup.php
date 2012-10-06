<?php
/**
 * Classe mère permettant de générer un élément HTML de type optgroup
 * Root class to generate an optgroup element
 * @package Common
 * @subpackage HtmlTag
 * @author Mikaël DELSOL
 * @copyright Mikaël DELSOL
 * @version 1.0
 * @date 06/07/2010
 */
/**
 * Classe mère permettant de générer un élément HTML de type optgroup
 * Root class to generate an optgroup element
 * @package Common
 * @subpackage HtmlTag
 * @author Mikaël DELSOL
 * @copyright Mikaël DELSOL
 * @version 1.0
 * @date 06/07/2010
 */
class HtmlTagOptgroup extends HtmlTag
{
	/**
	 * Constructeur de la classe / Class constructor
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagOptgroup::__tagName()
	 * @return HtmlTagOptgroup
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagOptgroup::__tagName());
	}
	/**
	 * Méthode permettant de définir l'attribut 'label' de l'élément HtmlTag
	 * Method to set label attribute value
	 *
	 * @uses HtmlTag::addAttribute()
	 * @param string la valeur de label
	 * @return bool true|false
	 */
	public function setLabel($_label)
	{
		return $this->addAttribute('label',$_label,true);
	}
	/**
	 * Méthode permettant de récupérer l'attribut 'label' de l'élément HtmlTag
	 * Method to get label attribute value
	 *
	 * @uses HtmlTag::getAttribute()
	 * @return string|null
	 */
	public function getLabel()
	{
		return $this->getAttribute('label');
	}
	/**
	 * Méthode permettant de supprimer l'attribut 'label' de l'élément HtmlTag
	 * Method to unset label attribute value
	 *
	 * @uses HtmlTag::removeAttribute()
	 * @return bool true|false
	 */
	public function unsetLabel()
	{
		return $this->removeAttribute('label');
	}
	/**
	 * On s'assure que les éléments passés à l'optgroup soient bien du type option
	 * Override method to secure added values
	 * @see parent::setValue()
	 * 
	 * @param HtmlTagOption
	 * @return bool true|false
	 */
	public function setValue($_option)
	{
		return ($_option instanceof HtmlTagOption)?parent::setValue($_option):false;
	}
	/**
	 * Méthode retournant le nom du tag de la classe
	 * Method returning the tag name
	 *
	 * @return string optgroup
	 */
	public static function __tagName()
	{
		return 'optgroup';
	}
	/**
	 * Méthode retournant le nom de la classe telle quelle
	 * Method returning the class name
	 *
	 * @return string __CLASS__
	 */
	public static function __className()
	{
		return __CLASS__;
	}
}
?>