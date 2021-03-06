<?php
/**
 * Fuel\Database is an easy flexible PHP 5.3+ Database Abstraction Layer
 *
 * @package    Fuel\Database
 * @version    1.0
 * @author     Frank de Jonge
 * @license    MIT License
 * @copyright  2011 - 2012 FuelPHP Development Team
 */

namespace Fuel\Database\Connection;

use Fuel\Database\Connection;

class Sqlite extends Connection
{
	protected $driver = 'sqlite';

	/**
	 * Set the connection charset
	 *
	 * @param   string  $charset  charset
	 * @return  $this
	 */
	public function setCharset($charset)
	{
		return $this;
	}
}