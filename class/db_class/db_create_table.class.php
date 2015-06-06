<?php

class Db_create_table{

	private $db_table_name;
	private $db_table_object;
	private $conn;
	
	function __construct($class){
		$this->conn = new Db_connection(HOST, USER, PASS);
		$this->db_table_name = get_class($class);
		$this->db_table_object = $class;
	}
	
	function getDb_table_object(){
		return $this->db_table_object;
	}
	
	function db_create_table(){
		$sql = "CREATE TABLE {$this->db_table_name} ( ";
	
		foreach($this->db_table_object->attr as $key => $value):
			//verifica se a chave do final do array e igual a chave do loop corrente
			if(end(array_keys($this->db_table_object->attr)) == $key):
				if(isset($this->db_table_object->PK)):
					$sql .= $key.' '.$value.' , '.$this->db_table_object->PK->getPRIMARY_KEY().' ) ';
				else:
					$sql .= $key.' '.$value. ' ) ';
				endif;
			else:
				$sql .= $key.' '.$value. ' , ';
			endif;
		endforeach;
		mysql_select_db($this->db_database_name);
		if(mysql_query(strip_tags($sql))):
			echo '<div class="sucess">Tabela '.$this->db_table_name.' criada com sucesso</div>';
		else:
			echo '<div class="error">Um erro ocorreu! [Tabela:'.$this->db_table_name.'] '.mysql_error().'</div>';
		endif;
		
	}
}

?>
