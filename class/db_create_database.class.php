<?php

/*
 * @class Db_crate_database
 * 
 * Classe responsável por criar um banco de dados.
 */

class Db_crate_database{
	
	private $db_database_name;
	private $conn;
	
	function __construct($class){
		$this->conn = new Db_connection(HOST, USER, PASS);
		$this->db_database_name = get_class($class);
	}
	
	function db_create_database(){
		$sql = "CREATE DATABASE {$this->db_database_name}";
		if(mysql_query($sql)):
			echo "Banco de dados: {$this->db_database_name} criada com sucesso";
		else:
			echo "Um erro ocorreu! Provavelmente o banco de dados {$this->db_database_name} já foi criado.";
		endif;
	}
}
?>