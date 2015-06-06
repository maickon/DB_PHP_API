<?php
class Db_connection{
	private $db_host;
	private $db_user;
	private $db_pass;
	private $db_name;
	
	function __construct($db_host = HOST, $db_user = USER , $db_pass = PASS){
		$this->db_host = $db_host;
		$this->db_user = $db_user;
		$this->db_pass = $db_pass;
		$this->db_connect();	
	}
	
	function db_connect(){
		return mysql_connect($this->db_host, $this->db_user, $this->db_pass) or die('Conexão não estabelecida!'); 
	}
}
?>