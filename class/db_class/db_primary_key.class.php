<?php
/**
 * @author Maickon Rangel
 *
 */
class Db_primary_key{
	
	private $PRIMARY_KEY;
	
	public function __construct($id){
		$this->PRIMARY_KEY = "PRIMARY KEY ({$id})";
	}
	/**
	 * @return the $PRIMARY_KEY
	 */
	public function getPRIMARY_KEY() {
		return $this->PRIMARY_KEY;
	}

	/**
	 * @param string $PRIMARY_KEY
	 */
	public function setPRIMARY_KEY($PRIMARY_KEY) {
		$this->PRIMARY_KEY = $PRIMARY_KEY;
	}

	
	
}
?>