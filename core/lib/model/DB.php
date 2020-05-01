<?php

namespace core\lib\model;
use core\lib\conf;
class DB extends \medoo
{
	public function __construct()
	{
		$option = conf::all('database');
		try {
			parent::__construct($option);
		} catch (\PDOException $e) {
			p($e->getMessage());
		}
	}
}
?>