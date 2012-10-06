<?php
/**
 * Classe mère permettant de générer un élément HTML de type textarea
 * Root class to generate a textarea element
 * @package Common
 * @subpackage HtmlTag
 * @author Mikaël DELSOL
 * @copyright Mikaël DELSOL
 * @version 1.0
 * @date 20/12/2009
 */
/**
 * Classe mère permettant de générer un élément HTML de type textarea
 * Root class to generate a textarea element
 * @package Common
 * @subpackage HtmlTag
 * @author Mikaël DELSOL
 * @copyright Mikaël DELSOL
 * @version 1.0
 * @date 20/12/2009
 */
class HtmlTagTextarea extends HtmlTag
{
	/**
	 * Constructeur de la classe / Class constructor
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTag::setValue()
	 * @uses HtmlTag::setRows()
	 * @uses HtmlTag::setCols()
	 * @uses HtmlTagTextarea::__tagName()
	 * @return HtmlTagTextarea
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagTextarea::__tagName());
		$this->setRows(5);
		$this->setCols(10);
	}
	/**
	 * Méthode permettant de définir l'attribut rows
	 * Method to set rows attribute value
	 *
	 * @uses HtmlTag::addAttribute()
	 * @param int
	 */
	public function setRows($_rows)
	{
		return $this->addAttribute('rows',$_rows,true);
	}
	/**
	 * Méthode permettant de récupérer l'attribut rows
	 * Method to get rows attribute value
	 *
	 * @uses HtmlTag::getAttribute()
	 * @return int
	 */
	public function getRows()
	{
		return $this->getAttribute('rows');
	}
	/**
	 * Méthode permettant de supprimer l'attribut rows
	 * Method to unset rows attribute value
	 *
	 * @uses HtmlTag::unsetAttribute()
	 * @return bool true|false
	 */
	public function unsetRows()
	{
		return $this->unsetAttribute('rows');
	}
	/**
	 * Méthode permettant de définir l'attribut cols
	 * Method to set cols attribute value
	 *
	 * @uses HtmlTag::addAttribute()
	 * @param int
	 */
	public function setCols($_cols)
	{
		return $this->addAttribute('cols',$_cols,true);
	}
	/**
	 * Méthode permettant de récupérer l'attribut cols
	 * Method to get cols attribute value
	 *
	 * @uses HtmlTag::getAttribute()
	 * @return int
	 */
	public function getCols()
	{
		return $this->getAttribute('cols');
	}
	/**
	 * Méthode permettant de supprimer l'attribut cols
	 * Method to unset cols attribute value
	 *
	 * @uses HtmlTag::unsetAttribute()
	 * @return bool true|false
	 */
	public function unsetCols()
	{
		return $this->unsetAttribute('cols');
	}
	/**
	 * Gestion des particuliers d'attributs
	 * Override method to secure attributes definition
	 * @see HtmlTag::addAttribute()
	 *
	 * @param string nom de l'attribut
	 * @param scalar valeur de l'attribut
	 * @param bool appel depuis une méthode de HtmlTag pour définir un attribut spécifique
	 * @return bool true|false
	 */
	public function addAttribute($_attributeName, $_attributeValue, $_specificAttributeMethodCall = false)
	{
		switch ($_attributeName)
		{
			case 'cols':
			case 'rows':
				return parent::addAttribute($_attributeName,intval($_attributeValue),$_specificAttributeMethodCall);
				break;
			default:
				return parent::addAttribute($_attributeName,$_attributeValue,$_specificAttributeMethodCall);
				break;
		}
	}
	/**
	 * Méthode retournant le nom du tag de la classe
	 * Method returning the tag name
	 *
	 * @return string textarea
	 */
	public static function __tagName()
	{
		return 'textarea';
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