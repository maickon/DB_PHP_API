<?php

class Db_make_table{

	private $db_table_name;
	private $conn;
	
	function __construct($class){
		$this->conn = new Db_connection(HOST, USER, PASS);
		$this->$db_table_name = get_class($class);
	}
	
	function db_create_data_base(){
		$sql = "CREATE TABLE {$this->db_table_name}";
		if(mysql_query($sql)):
			echo "Tabela {$this->db_table_name} criada com sucesso";
		else:
			echo "Um erro ocorreu! Provavelmente a tabela {$this->db_database_name} já foi criada.";
		endif;
	}
}

?>
