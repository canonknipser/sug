<?php
/**
 *
 * Simple user gallery. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, canonknipser, http://canonknipser.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace canonknipser\sug;

/**
 * Simple user gallery Extension base
 *
 * It is recommended to remove this file from
 * an extension if it is not going to be used.
 */
class ext extends \phpbb\extension\base
{
	public function is_enableable()
	{
		$return_value = true;
		// several tests, each test is only executed if the previous tests did not fail
		// first test: php exif library installed?
		if ($return_value)
		{
			$return_value = function_exists('exif_read_data');
		}
		// second test: phpBB version greater equal 3.1.6?
		if ($return_value)
		{
			$config =$this->container->get('config');
			$return_value = phpbb_version_compare($config['version'], '3.1.6', '>=');
		}

		return($return_value);
	}
}
