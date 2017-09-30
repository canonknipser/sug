<?php
/**
 *
 * Simple user gallery. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, canonknipser, http://canonknipser.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace canonknipser\sug\mcp;

/**
 * Simple user gallery MCP module info.
 */
class main_info
{
	function module()
	{
		return array(
			'filename'	=> '\canonknipser\sug\mcp\main_module',
			'title'		=> 'MCP_DEMO_TITLE',
			'modes'		=> array(
				'front'	=> array(
					'title'	=> 'MCP_DEMO',
					'auth'	=> 'ext_canonknipser/sug',
					'cat'	=> array('MCP_DEMO_TITLE')
				),
			),
		);
	}
}
