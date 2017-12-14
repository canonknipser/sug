<?php
/**
 *
 * Simple User Gallery. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, canonknipser, http://canonknipser.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_SUG_TITLE'			=> 'Simple User Gallery',
));
