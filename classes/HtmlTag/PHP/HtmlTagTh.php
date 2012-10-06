<?php
/**
 * Classe mère permettant de générer un élément HTML de type th
 * Root class to generate a th element
 * @package Common
 * @subpackage HtmlTag
 * @author Mikaël DELSOL
 * @copyright Mikaël DELSOL
 * @version 1.0
 * @date 06/07/2010
 */
/**
 * Classe mère permettant de générer un élément HTML de type th
 * Root class to generate a th element
 * @package Common
 * @subpackage HtmlTag
 * @author Mikaël DELSOL
 * @copyright Mikaël DELSOL
 * @version 1.0
 * @date 06/07/2010
 */
class HtmlTagTh extends HtmlTagTableCell
{
	/**
	 * Constructeur de la classe / Class constructor
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagTh::__tagName()
	 * @return HtmlTagTh
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagTh::__tagName());
	}
	/**
	 * Méthode retournant le nom du tag de la classe
	 * Method returning the tag name
	 *
	 * @uses HtmlTagTableCell::TH
	 * @return string HtmlTagTableCell::TH
	 */
	public static function __tagName()
	{
		return HtmlTagTableCell::TH;
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