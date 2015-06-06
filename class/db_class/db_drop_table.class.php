<?php

class Db_drop_table{

	private $db_table_name;
	private $conn;
	
	function __construct($class){
		$this->conn = new Db_connection(HOST, USER, PASS);
		$this->$db_table_name = get_class($class);
	}
	
	function db_delete_data_base(){
		$sql = "DROP TABLE {$this->db_table_name}";
		if(mysql_query($sql)):
			echo "Tabela {$this->db_table_name} deletada com sucesso";
		else:
			echo "Um erro ocorreu! Provavelmente a tabela {$this->db_database_name} já foi deletada.";
		endif;
	}
}

?>
