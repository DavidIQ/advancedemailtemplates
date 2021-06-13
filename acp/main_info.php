<?php
/**
 *
 * Advanced E-Mail Templates. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2021, David Colón, https://www.davidiq.com/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace davidiq\advancedemailtemplates\acp;

/**
 * Advanced E-Mail Templates ACP module info.
 */
class main_info
{
	public function module()
	{
		return [
			'filename'	=> '\davidiq\advancedemailtemplates\acp\main_module',
			'title'		=> 'ACP_ADVANCEDEMAILTEMPLATES_TITLE',
			'modes'		=> [
				'settings'	=> [
					'title'	=> 'ACP_ADVANCEDEMAILTEMPLATES',
					'auth'	=> 'ext_davidiq/advancedemailtemplates && acl_a_board',
					'cat'	=> ['ACP_ADVANCEDEMAILTEMPLATES_TITLE'],
				],
			],
		];
	}
}
