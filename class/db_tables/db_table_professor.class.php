<?php
class Table_professor{
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

class Factory_professor{

	static function __construct(){
		$professor = new Table_professor();
		$professor->id_matricula = " INT NOT NULL AUTO_INCREMENT ";
		$professor->nome = " VARCHAR ( 255 ) ";
		$professor->data_entrada = " DATETIME";
		$professor->disciplina_leciona = "VARCHAR ( 255 )";
		$professor->id_turma = 'INT NOT NULL';
		$professor->PK = new Db_primary_key("id_matricula");
		
		$db_table = new Db_create_table($professor);
		$db_table->db_create_table();
		new Db_foreign_key(get_class($professor), 'id_turma', 'Table_turmas', 'id_turma');
	}
}

?>