<?php
class Table_aluno{
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

class Factory_aluno{
	
	static function __construct(){
		$aluno = new Table_aluno();
		$aluno->id_matricula = " INT NOT NULL AUTO_INCREMENT ";
		$aluno->nome = " VARCHAR ( 255 ) ";
		$aluno->idade = " INT NOT NULL ";
		$aluno->id_turma = 'INT NOT NULL';
		$aluno->PK = new Db_primary_key("id_matricula");
		
		$db_table = new Db_create_table($aluno);
		$db_table->db_create_table();
		new Db_foreign_key(get_class($aluno), 'id_turma', 'Table_turmas', 'id_turma');
	}
}



?>