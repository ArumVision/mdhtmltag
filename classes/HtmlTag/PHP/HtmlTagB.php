<?php
/**
 * Classe mère permettant de générer un élément HTML de type b
 * Root class to generate a b element
 * @package Common
 * @subpackage HtmlTag
 * @author Mikaël DELSOL
 * @copyright Mikaël DELSOL
 * @version 1.0
 * @date 06/07/2010
 */
/**
 * Classe mère permettant de générer un élément HTML de type b
 * Root class to generate a b element
 * @package Common
 * @subpackage HtmlTag
 * @author Mikaël DELSOL
 * @copyright Mikaël DELSOL
 * @version 1.0
 * @date 06/07/2010
 */
class HtmlTagB extends HtmlTag
{
	/**
	 * Constructeur de la classe / Class constructor
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagB::__tagName()
	 * @return HtmlTagB
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagB::__tagName());
	}
	/**
	 * Méthode retournant le nom du tag de la classe
	 * Method returning the tag name
	 *
	 * @return string b
	 */
	public static function __tagName()
	{
		return 'b';
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