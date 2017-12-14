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
 * Simple User Gallery ACP module.
 */
class main_module
{
	public $page_title;
	public $tpl_name;
	public $u_action;

	public function main($id, $mode)
	{
		global $config, $request, $template, $user;

		$user->add_lang_ext('canonknipser/sug', 'common');
		$this->tpl_name = 'acp_ck_sug_body';
		$this->page_title = $user->lang('ACP_SUG_TITLE');
		add_form_key('canonknipser/sug');

		if ($request->is_set_post('submit'))
		{
			if (!check_form_key('canonknipser/sug'))
			{
				trigger_error('FORM_INVALID', E_USER_WARNING);
			}

			$config->set('ck_sug_config1', $request->variable('ck_sug_config1', 0));

			trigger_error($user->lang('ACP_DEMO_SETTING_SAVED') . adm_back_link($this->u_action));
		}

		$template->assign_vars(array(
			'U_ACTION'				=> $this->u_action,
			'ACME_DEMO_GOODBYE'		=> $config['ck_sug_config1'],
		));
	}
}
