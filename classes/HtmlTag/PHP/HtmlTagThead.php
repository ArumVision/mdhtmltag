<?php
/**
 * Classe mère permettant de générer un élément HTML de type thead
 * Root class to generate a thead element
 * @package Common
 * @subpackage HtmlTag
 * @author Mikaël DELSOL
 * @copyright Mikaël DELSOL
 * @version 1.0
 * @date 06/07/2010
 */
/**
 * Classe mère permettant de générer un élément HTML de type thead
 * Root class to generate a thead element
 * @package Common
 * @subpackage HtmlTag
 * @author Mikaël DELSOL
 * @copyright Mikaël DELSOL
 * @version 1.0
 * @date 06/07/2010
 */
class HtmlTagThead extends HtmlTagTableTPart
{
	/**
	 * Constructeur de la classe / Class constructor
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagThead::__tagName()
	 * @return HtmlTagThead
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagThead::__tagName());
	}
	/**
	 * Méthode retournant le nom du tag de la classe
	 * Method returning the tag name
	 *
	 * @uses HtmlTagTableTPart::THEAD
	 * @return string HtmlTagTableTPart::THEAD
	 */
	public static function __tagName()
	{
		return HtmlTagTableTPart::THEAD;
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