<?php
/**
 * Classe mère permettant de générer un élément HTML de type object
 * Root class to generate an object element
 * @package Common
 * @subpackage HtmlTag
 * @author Mikaël DELSOL
 * @copyright Mikaël DELSOL
 * @version 1.0
 * @date 07/07/2010
 */
/**
 * Classe mère permettant de générer un élément HTML de type object
 * Root class to generate an object element
 * @package Common
 * @subpackage HtmlTag
 * @author Mikaël DELSOL
 * @copyright Mikaël DELSOL
 * @version 1.0
 * @date 07/07/2010
 */
class HtmlTagObject extends HtmlTag
{
	/**
	 * Constructeur de la classe / Class constructor
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagObject::__tagName()
	 * @return HtmlTagObject
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagObject::__tagName());
	}
	/**
	 * Méthode permettant de définir une valeur d'un paramètre
	 * Method to add a param to the current object element
	 * 
	 * @uses HtmlTagObject::setValue()
	 * @uses HtmlTagParam::defineParamValue()
	 * @uses HtmlTag::addValue()
	 * @param string nom du paramètre / parameter name
	 * @param scalar valeur du paramètre / parameter value
	 * @return bool true|false
	 */
	public function addParam($_paramName,$_paramValue)
	{
		if(is_string($_paramName) && is_scalar($_paramValue))
		{
			$param = new HtmlTagParam();
			return $param->defineParamValue($_paramName,$_paramValue)?$this->setValue($param):false;
		}
		else
			return false;
	}
	/**
	 * On s'assure que les éléments passés à l'objet soient bien du type param
	 * Override method to secure added values
	 * @see parent::setValue()
	 * 
	 * @param HtmlTagParam
	 * @return bool true|false
	 */
	public function setValue($_param)
	{
		return (($_param instanceof HtmlTagParam) || ($_param instanceof HtmlTagEmbed) || ($_param instanceof HtmlTagObject))?parent::setValue($_param):false;
	}
	/**
	 * Méthode retournant le nom du tag de la classe
	 * Method returning the tag name
	 *
	 * @return string object
	 */
	public static function __tagName()
	{
		return 'object';
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