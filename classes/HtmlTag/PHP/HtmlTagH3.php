<?php
/**
 * Classe mère permettant de générer un élément HTML de type h3
 * Root class to generate a h3 element
 * @package Common
 * @subpackage HtmlTag
 * @author Mikaël DELSOL
 * @copyright Mikaël DELSOL
 * @version 1.0
 * @date 06/07/2010
 */
/**
 * Classe mère permettant de générer un élément HTML de type h3
 * Root class to generate a h3 element
 * @package Common
 * @subpackage HtmlTag
 * @author Mikaël DELSOL
 * @copyright Mikaël DELSOL
 * @version 1.0
 * @date 06/07/2010
 */
class HtmlTagH3 extends HtmlTagH
{
	/**
	 * Constructeur de la classe / Class constructor
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagH3::__tagName()
	 * @return HtmlTagH3
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagH3::__tagName());
	}
	/**
	 * Méthode retournant le nom du tag de la classe
	 * Method returning the tag name
	 *
	 * @uses HtmlTagH::H3
	 * @return string HtmlTagH::H3
	 */
	public static function __tagName()
	{
		return HtmlTagH::H3;
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