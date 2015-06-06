<?php

class Db_database{
	private $tables;
	
	function db_add_table($table_class){
		$this->tables[] = $table_class;
	}
}
?>