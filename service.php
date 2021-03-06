<?php
/**
 *
 * Advanced E-Mail Templates. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2021, David Colón, https://www.davidiq.com/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace davidiq\advancedemailtemplates;

/**
 * Advanced E-Mail Templates Service info.
 */
class service
{
	/** @var \phpbb\user */
	protected $user;

	/** @var string */
	protected $table_name;

	/**
	 * Constructor
	 *
	 * @param \phpbb\user $user       User object
	 * @param string      $table_name The name of a db table
	 */
	public function __construct(\phpbb\user $user, string $table_name)
	{
		$this->user = $user;
		$this->table_name = $table_name;
	}

	/**
	 * Get user object
	 *
	 * @return \phpbb\user $user User object
	 */
	public function get_user()
	{
		var_dump($this->table_name);
		return $this->user;
	}
}
