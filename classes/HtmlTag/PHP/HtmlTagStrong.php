<?php
/**
 * Classe mère permettant de générer un élément HTML de type strong
 * Root class to generate a strong element
 * @package Common
 * @subpackage HtmlTag
 * @author Mikaël DELSOL
 * @copyright Mikaël DELSOL
 * @version 1.0
 * @date 06/07/2010
 */
/**
 * Classe mère permettant de générer un élément HTML de type strong
 * Root class to generate a strong element
 * @package Common
 * @subpackage HtmlTag
 * @author Mikaël DELSOL
 * @copyright Mikaël DELSOL
 * @version 1.0
 * @date 06/07/2010
 */
class HtmlTagStrong extends HtmlTag
{
	/**
	 * Constructeur de la classe / Class constructor
	 * @see parent::__construct()
	 *
	 * @uses HtmlTagStrong::__tagName()
	 * @return HtmlTagStrong
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagStrong::__tagName());
	}
	/**
	 * Méthode retournant le nom du tag de la classe
	 * Method returning the tag name
	 *
	 * @return string strong
	 */
	public static function __tagName()
	{
		return 'strong';
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