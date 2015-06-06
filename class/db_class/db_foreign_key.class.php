<?php
/**
 * @author Maickon Rangel
 *
 */
class db_foreign_key{
	
	private $FOREIGN_KEY;
	
	public function __construct($table, $id, $table_reference){
		$this->FOREIGN_KEY = "ALTER TABLE {$table} ADD ( FOREIGN KEY ( {$id} ) REFERENCES {$table_reference}  ON UPDATE CASCADE ON DELETE CASCADE ) ;";
		$this->db_execute_foreign_key($this->FOREIGN_KEY);
	}
	/**
	 * @return the $FOREIGN_KEY
	 */
	public function getFOREIGN_KEY() {
		return $this->FOREIGN_KEY;
	}

	/**
	 * @param string $FOREIGN_KEY
	 */
	public function setFOREIGN_KEY($FOREIGN_KEY) {
		$this->FOREIGN_KEY = $FOREIGN_KEY;
	}

	function db_execute_foreign_key($sql){
		if(mysql_query($sql)):
			echo '<div class="sucess">Chave estrangeira criada com sucesso.</div>';
		else:
			echo '<div class="error">Um erro ocorreu! Chave estrangeira não foi criada.</div>';
		endif;
	}
}

?>