<?php
/**
 * Classe mère permettant de générer un élément HTML de type code
 * Root class to generate a code element
 * @package Common
 * @subpackage HtmlTag
 * @author Mikaël DELSOL
 * @copyright Mikaël DELSOL
 * @version 1.0
 * @date 05/11/2010
 */
/**
 * Classe mère permettant de générer un élément HTML de type code
 * Root class to generate a code element
 * @package Common
 * @subpackage HtmlTag
 * @author Mikaël DELSOL
 * @copyright Mikaël DELSOL
 * @version 1.0
 * @date 05/11/2010
 */
class HtmlTagCode extends HtmlTag
{
	/**
	 * Constructeur de la classe / Class constructor
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagCode::__tagName()
	 * @return HtmlTagCode
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagCode::__tagName());
	}
	/**
	 * Méthode retournant le nom du tag de la classe
	 * Method returning the tag name
	 *
	 * @return string code
	 */
	public static function __tagName()
	{
		return 'code';
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