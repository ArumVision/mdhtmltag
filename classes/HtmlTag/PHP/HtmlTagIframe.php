<?php
/**
 * Classe mère permettant de générer un élément HTML de type iframe
 * Root class to generate an iframe element
 * @package Common
 * @subpackage HtmlTag
 * @author Mikaël DELSOL
 * @copyright Mikaël DELSOL
 * @version 1.0
 * @date 04/09/2011
 */
/**
 * Classe mère permettant de générer un élément HTML de type iframe
 * Root class to generate an iframe element
 * @package Common
 * @subpackage HtmlTag
 * @author Mikaël DELSOL
 * @copyright Mikaël DELSOL
 * @version 1.0
 * @date 04/09/2011
 */
class HtmlTagIframe extends HtmlTag
{
	/**
	 * Constructeur de la classe / Class constructor
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagIframe::__tagName()
	 * @return HtmlTagIframe
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagIframe::__tagName());
	}
	/**
	 * Méthode retournant le nom du tag de la classe
	 * Method returning the tag name
	 *
	 * @return string i
	 */
	public static function __tagName()
	{
		return 'iframe';
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