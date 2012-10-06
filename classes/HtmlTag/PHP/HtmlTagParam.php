<?php
/**
 * Classe m�re permettant de g�n�rer un �l�ment HTML de type param
 * Root class to generate a param element
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 07/07/2010
 */
/**
 * Classe m�re permettant de g�n�rer un �l�ment HTML de type param
 * Root class to generate a param element
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 07/07/2010
 */
class HtmlTagParam extends HtmlTag
{
	/**
	 * Constructeur de la classe / Class constructor
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagParam::__tagName()
	 * @return HtmlTagParam
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagParam::__tagName());
	}
	/**
	 * M�thode permettant de d�finir l'�l�ment param (name/value)
	 * Method to define a couple information for the current object
	 * 
	 * @uses HtmlTag::setName()
	 * @uses HtmlTag::setValue()
	 * @param string nom du param�tre / parameter name
	 * @param scalar valeur du param�tre / parameter value
	 * @return bool true|false
	 */
	public function defineParamValue($_paramName,$_paramValue)
	{
		$add = true;
		$add .= $this->setName($_paramName)?true:false;
		$add .= $this->setValue($_paramValue)?true:false;
		return $add;
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 * Method returning the tag name
	 *
	 * @return string param
	 */
	public static function __tagName()
	{
		return 'param';
	}
	/**
	 * M�thode retournant le nom de la classe telle quelle
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