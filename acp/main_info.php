<?php
/**
 *
 * Simple User Gallery. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, canonknipser, http://canonknipser.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace canonknipser\sug\acp;

/**
 * Simple User Gallery ACP module info.
 */
class main_info
{
	public function module()
	{
		return array(
			'filename'	=> '\canonknipser\sug\acp\main_module',
			'title'		=> 'ACP_SUG_TITLE',
			'modes'		=> array(
				'settings'	=> array(
					'title'	=> 'ACP_SUG',
					'auth'	=> 'ext_canonknipser/sug && acl_a_board',
					'cat'	=> array('ACP_SUG_TITLE')
				),
			),
		);
	}
}
