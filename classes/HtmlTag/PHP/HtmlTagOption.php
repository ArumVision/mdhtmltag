<?php
/**
 * Classe mère permettant de générer des options d'un select HtmlTag
 * Root class to generate an option element
 * @package Common
 * @subpackage HtmlTag
 * @author Mikaël DELSOL
 * @copyright Mikaël DELSOL
 * @version 1.0
 * @date 16/12/2009
 */
/**
 * Classe mère permettant de générer des options d'un select HtmlTag
 * Root class to generate an option element
 * @package Common
 * @subpackage HtmlTag
 * @author Mikaël DELSOL
 * @copyright Mikaël DELSOL
 * @version 1.0
 * @date 16/12/2009
 */
class HtmlTagOption extends HtmlTag
{
	/**
	 * Constructeur de la classe / Class constructor
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagOption::__tagName()
	 * @uses HtmlTag::setValue()
	 * @return HtmlTagOption
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagOption::__tagName());
	}
	/**
	 * Méthode permettant d'indiquer que l'option est séléctionnée
	 * Method to set attrubute selected or deselected
	 *
	 * @uses HtmlTag::addAttribute
	 * @uses HtmlTagOption::unsetSelected
	 * @param bool selected
	 * @return bool true|false
	 */
	public function setSelected($_selected = true)
	{
		return $_selected?$this->addAttribute('selected','selected',true):$this->unsetSelected();
	}
	/**
	 * Méthode permettant de d'indiquer que l'option n'est plus sélectionnée
	 * Method to unset attrubute selected or deselected
	 * 
	 * @uses Htmltag::removeAttribute()
	 * @return bool true|false
	 */
	public function unsetSelected()
	{
		return $this->unsetAttribute('selected');
	}
	/**
	 * Surcharge de la méthode afin de forcer la définition de l'attribut value et non pas la valeur innerHTML si c'est l'attribut value qui est passé en paramètre
	 * Override method to force value attribute definition if its the value attribute which is passed as first argument
	 * @see HtmlTag::addAttribute()
	 * 
	 * @param string valeur de l'attribut HtmlTag
	 * @param mixed|HtmlTag valeur de l'élément HtmlTag
	 * @param bool appel depuis une méthode de HtmlTag pour définir un attribut spécifique / true if the method calling is the attribute method
	 * @return bool true|false selon la validité de l'attribut
	 */
	public function addAttribute($_attributeName, $_attributeValue, $_specificAttributeMethodCall = false)
	{
		return parent::addAttribute($_attributeName,$_attributeValue,$_specificAttributeMethodCall || ($_attributeName == 'value'));
	}
	/**
	 * Surcharge de la méthode afin de forcer al définition dl'attribut value et non pas la valeur innerHTML si c'est l'attribut value qui est passé en paramètre
	 * Override method to force value attribute definition if its the value attribute is present
	 * @see HtmlTag::addAttributes()
	 *
	 * @uses HtmlTag::addAttribute()
	 * @param array les attributs de l'élément HTML
	 * @return bool true|false selon la validité de l'attribut
	 */
	public function addAttributes(array $_attributes)
	{
		$return = true;
		if(count($_attributes) > 0)
		{
			while(list($attrName,$attrValue) = each($_attributes))
			{
				if(is_scalar($attrName))
				{
					$setAttr = 'set' . ucfirst($attrName);
					/**
					 * Méthode set{Attribute} définie ? => on l'utilise si la valeur est bien une chaine de caractères,
					 * sinon on passe par la méthode générique addAttribute()
					 * If attribute method (set{Attribute}) is defined, we use it, otherwise, we use the generic method addAttribute
					 */
					if(method_exists($this,$setAttr) && $setAttr != 'setValue')
						$return &= $this->$setAttr($attrValue)?true:false;
					/**
					 * Sinon méthode générique d'ajout d'attribut à l'élément
					 * otherwise, we use the generic method
					 */
					else
						$return &= $this->addAttribute($attrName,$attrValue)?true:false;
				}
				else
					$return &= false;
			}
		}
		return $return;
	}
	/**
	 * Méthode retournant le nom du tag de la classe
	 * Method returning the tag name
	 *
	 * @return string option
	 */
	public static function __tagName()
	{
		return 'option';
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