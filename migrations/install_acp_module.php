<?php
/**
 *
 * Advanced E-Mail Templates. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2021, David Colón, https://www.davidiq.com/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace davidiq\advancedemailtemplates\migrations;

class install_acp_module extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return true;
	}

	public static function depends_on()
	{
		return ['\phpbb\db\migration\data\v320\v320'];
	}

	public function update_data()
	{
		return [
			['module.add', [
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_ADVANCEDEMAILTEMPLATES_TITLE'
			]],
			['module.add', [
				'acp',
				'ACP_ADVANCEDEMAILTEMPLATES_TITLE',
				[
					'module_basename'	=> '\davidiq\advancedemailtemplates\acp\main_module',
					'modes'				=> ['settings'],
				],
			]],
		];
	}
}
