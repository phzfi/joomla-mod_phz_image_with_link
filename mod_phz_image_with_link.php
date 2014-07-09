<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_articles_latest
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

//$item = modArticlesImageBoxHelper::getArticle($params);

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
$title	= trim(htmlspecialchars($params->get('title',null)));
$link	= htmlspecialchars($params->get('link',null));
$linktext	= trim(htmlspecialchars($params->get('linktext',null)));
$font_color	= htmlspecialchars($params->get('font_color',null));
$image	= htmlspecialchars($params->get('image'));
$background_color	= htmlspecialchars($params->get('background_color'));
$width	= htmlspecialchars($params->get('boxwidth',null));
$height	= htmlspecialchars($params->get('height',null));
$opacity = htmlspecialchars($params->get('opacity'));
$text_position = htmlspecialchars($params->get('text_position'));
$target = htmlspecialchars($params->get('targetw'));

if(isset($image) && $image != '' && (strpos($image, "http") === false && strpos($image, "www") === false)) {
    $image = JURI::base() . $image;
}

require JModuleHelper::getLayoutPath('mod_phz_image_with_link', $params->get('layout', 'default'));
