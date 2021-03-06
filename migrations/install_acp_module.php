<?php
/**
 *
 * Simple User Gallery. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, canonknipser, http://canonknipser.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace canonknipser\sug\migrations;

class install_acp_module extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['ck_sug_config1']);
	}

	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v31x\v314');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('ck_sug_config1', 0)),

			array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_SUG_TITLE'
			)),
			array('module.add', array(
				'acp',
				'ACP_SUG_TITLE',
				array(
					'module_basename'	=> '\canonknipser\sug\acp\main_module',
					'modes'				=> array('settings'),
				),
			)),
		);
	}
}
