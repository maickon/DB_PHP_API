<?php
class Db_entity{
	
	private $attr;
	
	function __set($attr, $value){
		$this->attr[$attr] = $value;
	}
	
	function __get($attr){
		return $this->attr[$attr];
	}
	
	
}
?>