<?php
/**
 *
 * Simple user gallery. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, canonknipser, http://canonknipser.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace canonknipser\sug\migrations;

class install_user_schema extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return $this->db_tools->sql_column_exists($this->table_prefix . 'forums', 'ck_sg_show');
	}

	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v31x\v314');
	}

	public function update_schema()
	{
		return array(
			'add_tables'		=> array(
				$this->table_prefix . 'ck_sg_attach'	=> array(
					'COLUMNS'		=> array(
						'ck_sg_attach_id'			=> array('UINT', null, 'auto_increment'),
						'ck_sg_attach_name'			=> array('VCHAR:255', ''),
					),
					'PRIMARY_KEY'	=> 'ck_sg_attach_id',
				),
			),
			'add_columns'	=> array(
				$this->table_prefix . 'forums'			=> array(
					'ck_sg_show'				=> array('UINT', 0),
				),
				$this->table_prefix . 'users'			=> array(
					'ck_sg_show'				=> array('UINT', 0),
				),
			),
		);
	}

	public function revert_schema()
	{
		return array(
			'drop_columns'	=> array(
				$this->table_prefix . 'forums'			=> array(
					'ck_sg_show',
				),
				$this->table_prefix . 'users'			=> array(
					'ck_sg_show',
				),
			),
			'drop_tables'		=> array(
				$this->table_prefix . 'ck_sg_attach',
			),
		);
	}
}
