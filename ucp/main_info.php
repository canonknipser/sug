<?php
/**
 *
 * Simple user gallery. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, canonknipser, http://canonknipser.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace canonknipser\sug\ucp;

/**
 * Simple user gallery UCP module info.
 */
class main_info
{
	function module()
	{
		return array(
			'filename'	=> '\canonknipser\sug\ucp\main_module',
			'title'		=> 'UCP_DEMO_TITLE',
			'modes'		=> array(
				'settings'	=> array(
					'title'	=> 'UCP_DEMO',
					'auth'	=> 'ext_canonknipser/sug',
					'cat'	=> array('UCP_DEMO_TITLE')
				),
			),
		);
	}
}
