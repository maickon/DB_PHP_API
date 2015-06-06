<?php

/*
 * @class Db_crate_database
 * 
 * Classe responsável por criar um banco de dados.
 */

class Db_create_database{
	
	private $db_database_name;
	private $conn;
	
	function __construct($class){
		$this->conn = new Db_connection(HOST, USER, PASS);
		$this->db_database_name = get_class($class);
	}
	
	function db_create_database(){
		$sql = "CREATE DATABASE {$this->db_database_name}";
		if(mysql_query($sql)):
			mysql_select_db($this->db_database_name) or die(mysql_error());
			echo '<div class="sucess">Banco de dados: '.$this->db_database_name.' criada com sucesso</div>';
		else:
			echo '<div class="error">Um erro ocorreu! [Tabela:'.$this->db_database_name.'] '.mysql_error().'</div>';
		endif;
	}
}
?>