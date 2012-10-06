<?php
/**
 * Classe mère permettant de générer des éléments d'un ul/ol HtmlTag
 * Root class to generate a li element
 * @package Common
 * @subpackage HtmlTag
 * @author Mikaël DELSOL
 * @copyright Mikaël DELSOL
 * @version 1.0
 * @date 16/12/2009
 */
/**
 * Classe mère permettant de générer des éléments d'un ul/ol HtmlTag
 * Root class to generate a li element
 * @package Common
 * @subpackage HtmlTag
 * @author Mikaël DELSOL
 * @copyright Mikaël DELSOL
 * @version 1.0
 * @date 16/12/2009
 */
class HtmlTagLi extends HtmlTag
{
	/**
	 * Constructeur de la classe / Class constructor
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagLi::__tagName()
	 * @return HtmlTagLi
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagLi::__tagName());
	}
	/**
	 * Méthode retournant le nom du tag de la classe
	 * Method returning the tag name
	 *
	 * @return string li
	 */
	public static function __tagName()
	{
		return 'li';
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