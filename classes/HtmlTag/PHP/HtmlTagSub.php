<?php
/**
 * Classe mère permettant de générer un élément HTML de type sub
 * Root class to generate a sub element
 * @package Common
 * @subpackage HtmlTag
 * @author Mikaël DELSOL
 * @copyright Mikaël DELSOL
 * @version 1.0
 * @date 07/07/2010
 */
/**
 * Classe mère permettant de générer un élément HTML de type sub
 * Root class to generate a sub element
 * @package Common
 * @subpackage HtmlTag
 * @author Mikaël DELSOL
 * @copyright Mikaël DELSOL
 * @version 1.0
 * @date 07/07/2010
 */
class HtmlTagSub extends HtmlTag
{
	/**
	 * Constructeur de la classe / Class constructor
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagSub::__tagName()
	 * @return HtmlTagSub
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagSub::__tagName());
	}
	/**
	 * Méthode retournant le nom du tag de la classe
	 * Method returning the tag name
	 *
	 * @return string sub
	 */
	public static function __tagName()
	{
		return 'sub';
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