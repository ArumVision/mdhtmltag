<?php
/**
 * Class to filter the output HTML by unsing the HtmlTag classes package
 * @date 09/03/2011
 */
class OutputFilterClass
{
	/**
	 * Default method called to filter the ouput Html source code
	 *
	 * @param string 	the Html source code
	 * @return string 	the original Html source code if errors ar detected |
	 * the formatted Html source code if everythings went well
	 */
	public static function filter($_content)
	{
		/**
		 * Load froms and tos
		 */
		$ini = eZINI::instance('htmltag.ini');
		/**
		 * Define constants if set
		 */
		$keepComments = $ini->variable('Settings','KeepCommentsTags');
		if(!empty($keepComments))
			define('HTML_TAG_KEEP_COMMENTS',$keepComments == 'true'?true:false);
		$defineEveryId = $ini->variable('Settings','DefineEveryTagsId');
		if(!empty($defineEveryId))
			define('HTML_TAG_DEFINE_ID',$defineEveryId == 'true'?true:false);
		/**
		 * Load module classes
		 */
		require_once dirname(__FILE__) . '/HtmlTag/autoload.inc';
		/**
		 * Trim content
		 */
		$_content = trim($_content);
		/**
		 * HTML content ?
		 */
		if(strpos($_content,'<!DOCTYPE') !== false)
		{
			/**
			 * Get custom tags and attributes and add them if needed
			 */
			$customTags = $ini->variable('Customs','CustomTags');
			if(is_array($customTags) && count($customTags))
			{
				foreach($customTags as $customTag)
					HtmlTag::addValidTag($customTag);
			}
			$customAttributes = $ini->variable('Customs','CustomAttributes');
			if(is_array($customAttributes) && count($customAttributes))
			{
				foreach($customAttributes as $customAttribute)
					HtmlTag::addValidAttribute($customAttribute);
			}
			/**
			 * Variables which need to be replaced
			 */
			$froms = $ini->variable('ReplaceStrings','Froms');
			$tos = $ini->variable('ReplaceStrings','Tos');
			/**
			 * Loading with replacements
			 */
			if(is_array($froms) && is_array($tos) && count($froms) && count($froms) == count($tos))
				HtmlTag::loadDomDocument(str_replace($froms,$tos,$_content),true,'UTF-8');
			/**
			 * Loading without replacements
			 */
			else
				HtmlTag::loadDomDocument($_content,true,'UTF-8');
			/**
			 * If CompressHtml=enabled, then change DOM options
			 */
			if($ini->variable('Settings','CompressHtml') == 'enabled')
				HtmlTag::getDomDocument()->formatOutput = false;
			/**
			 * Generate full HTML content
			 */
			$content = HtmlTag::displayFullHtml();
			/**
			 * Return new HTML
			 */
			if(!empty($content))
				return $content;
			/**
			 * Return original HTML
			 */
			else
				return $_content;
		}
		/**
		 * Return original HTML
		 */
		else
			return $_content;
	}
}
?>