<?php
class transaction{
	
	private $db_table_name;
	private $db_table_object;
	
	function __construct($class){
		$this->db_table_name = get_class($class);
		$this->db_table_object = $class;
	}
	
	function insert(){
		$sql = "INSERT INTO {$this->db_table_name} ( ";
	
		foreach($this->db_table_object->attr as $key => $value):
			//verifica se a chave do final do array e igual a chave do loop corrente
			if(end(array_keys($this->db_table_object->attr)) == $key):
				$sql .= $key.' '.$value. ' ) ';
			else:
				$sql .= $key.' '.$value. ' , ';
			endif;
		endforeach;
	}
	
	function update(){
		
	}
	
	function delete(){
		
	}
}

?>