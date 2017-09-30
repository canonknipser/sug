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
 * Simple user gallery MCP module.
 */
class main_module
{
	var $u_action;

	function main($id, $mode)
	{
		global $template, $user;

		$this->tpl_name = 'mcp_demo_body';
		$this->page_title = $user->lang('MCP_DEMO_TITLE');
		add_form_key('acme/demo');

		$template->assign_var('U_POST_ACTION', $this->u_action);
	}
}
