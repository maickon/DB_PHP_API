<?php
class Db_table_add_column{
	
	private $db_table_name;
	private $db_table_object;
	
	function __construct($class){
		$this->db_table_name = get_class($class);
		$this->db_table_object = $class;
	}
}
?>