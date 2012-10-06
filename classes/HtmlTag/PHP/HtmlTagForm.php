<?php
/**
 * Classe mère permettant de générer des formulaires
 * Root class to generate a form element
 * @package Common
 * @subpackage HtmlTag
 * @author Mikaël DELSOL
 * @copyright Mikaël DELSOL
 * @version 1.0
 * @date 20/12/2009
 */
/**
 * Classe mère permettant de générer des formulaires
 * Root class to generate a form element
 * @package Common
 * @subpackage HtmlTag
 * @author Mikaël DELSOL
 * @copyright Mikaël DELSOL
 * @version 1.0
 * @date 20/12/2009
 */
class HtmlTagForm extends HtmlTag
{
	/**
	 * Méthode post
	 * @var string
	 */
	const POST = 'post';
	/**
	 * Méthode get
	 * @var string
	 */
	const GET = 'get';
	/**
	 * Constructeur de la classe / Class constructor
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagForm::__tagName()
	 * @uses HtmlTag::addAttributes()
	 * @uses HtmlTag::addAttribute()
	 * @param string l'action du formulaire / value of form action
	 * @param string la méthode de transmission des données un élément HTML value of form submission method (post or get)
	 * @param string le type des données transmises / from enctype value
	 * @return HtmlTagForm
	 */
	public function __construct($_action = '#',$_method = self::POST,$_enctype = 'multipart/form-data')
	{
		parent::__construct(HtmlTagForm::__tagName());
		$this->addAttributes(array('action'=>!empty($_action)?$_action:'#','method'=>(!empty($_method) && defined(HtmlTagForm::__className() . '::' . strtoupper($_method)))?strtolower($_method):self::POST));
		if(!empty($_enctype))
			$this->addAttribute('enctype',$_enctype,true);
	}
	/**
	 * Méthode permettant d'ajouter un élément au formulaire
	 * Specific method to add field to the current form
	 *
	 * @uses HtmlTag::setValue()
	 * @uses HtmlTag::addValue()
	 * @uses HtmlTagForm::getFormFields()
	 * @uses HtmlTagForm::setFormFields()
	 * @uses HtmlTagForm::CONTAINER_TAG_NAME
	 * @param HtmlTag l'élément du formulaire
	 * @param HtmlTag le label associé à l'élément
	 * @param HtmlTag le conteneur de l'élément
	 */
	public function addFormField(HtmlTag $_field,HtmlTag $_label,$_container = null)
	{
		$container = ($_container instanceof HtmlTag)?$_container:new HtmlTagP();
		$container->addValue($_label);
		$container->addValue($_field);
		return $this->addValue($container);
	}
	/**
	 * Méthode retournant le nom du tag de la classe
	 * Method returning the tag name
	 *
	 * @return string form
	 */
	public static function __tagName()
	{
		return 'form';
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