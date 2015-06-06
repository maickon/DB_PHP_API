<?php
class Table_turmas{
	public $PK;
	public $FK;
	public $attr;

	function __set($attr, $value){
		$this->attr[$attr] = $value;
	}

	function __get($attr){
		return $this->attr[$attr];
	}
}

class Factory_turmas{
	
	static function __construct(){
		$turma = new Table_turmas();
		$turma->id_turma = " INT NOT NULL AUTO_INCREMENT ";
		$turma->nome = " VARCHAR ( 255 ) ";
		$turma->PK = new Db_primary_key("id_turma");
		
		$db_table = new Db_create_table($turma);
		$db_table->db_create_table();
	}
}


?>