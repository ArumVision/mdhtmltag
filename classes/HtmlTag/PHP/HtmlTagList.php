<?php
/**
 * Classe mère permettant de générer un élément ul/ol HtmlTag
 * Root class to generate a list element as ol or ul
 * @package Common
 * @subpackage HtmlTag
 * @author Mikaël DELSOL
 * @copyright Mikaël DELSOL
 * @version 1.0
 * @date 16/12/2009
 */
/**
 * Classe mère permettant de générer un élément ul/ol HtmlTag
 * Root class to generate a list element as ol or ul
 * @package Common
 * @subpackage HtmlTag
 * @author Mikaël DELSOL
 * @copyright Mikaël DELSOL
 * @version 1.0
 * @date 16/12/2009
 */
class HtmlTagList extends HtmlTag
{
	/**
	 * Liste ordonnée
	 * @var string
	 */
	const OL = 'ol';
	/**
	 * Liste désordonnée
	 * @var string
	 */
	const UL = 'ul';
	/**
	 * Constructeur de la classe / Class constructor
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagList::__className()
	 * @return HtmlTagList
	 */
	public function __construct($_listType = HtmlTagList::UL)
	{
		if(is_string($_listType) && defined(HtmlTagList::__className() . '::' . strtoupper($_listType)))
			parent::__construct($_listType);
	}
	/**
	 * Méthode permettant d'ajouter une option au list
	 * Method to add list item element
	 *
	 * @uses HtmlTag::addValue()
	 * @param HtmlTagLi
	 */
	public function addListItem(HtmlTagLi $_HtmlTagLi)
	{
		return $this->addValue($_HtmlTagLi);
	}
	/**
	 * Méthode permettant de facilement ajouter un élément à la liste
	 * Method to create list item element
	 *
	 * @uses HtmlTag::setValue()
	 * @uses HtmlTag::addAttributes()
	 * @uses HtmlTagList::addListItem()
	 * @param mixed
	 * @param array
	 */
	public function createListItem($_content, array $_attributes = array())
	{
		$htmlListItem = new HtmlTagLi();
		$htmlListItem->setValue($_content);
		if(is_array($_attributes))
			$htmlListItem->addAttributes($_attributes);
		return $this->addListItem($htmlListItem);
	}
	/**
	 * Méthode retournant le nom du tag de la classe
	 * Method returning the list of possible tag names
	 *
	 * @uses HtmlTagList::OL
	 * @uses HtmlTagList::UL
	 * @return string HtmlTagList::OL . '|' . HtmlTagList::UL
	 */
	public static function __tagName()
	{
		return HtmlTagList::OL . '|' . HtmlTagList::UL;
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