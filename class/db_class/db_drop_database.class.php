<?php

/*
 * @class Db_drop_database
 * 
 * Classe responsável por apagar um banco de dados.
 */

class Db_drop_database{
	
	private $db_database_name;
	private $conn;
	
	function __construct($class){
		$this->conn = new Db_connection(HOST, USER, PASS);
		$this->db_database_name = get_class($class);
	}
	
	function db_delete_database(){
		$sql = "DROP DATABASE {$this->db_database_name}";
		if(mysql_query($sql)):
			echo "Banco de dados: {$this->db_database_name} deletada com sucesso";
		else:
			echo "Um erro ocorreu! Provavelmente a o banco de dados {$this->db_database_name} já foi deletada.";
		endif;
	}
}
?>