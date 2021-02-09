<?php

namespace Propel\Runtime\Connection;

class ExistingPdoConnection extends PdoConnection
{
	public function __construct($connection)
	{
		$this->pdo = $connection;
	}
}