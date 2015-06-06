<?php
function __autoload($class_name){
	if(file_exists('class/db_base/'.$class_name.'.class.php')):
		require 'class/db_base/'.$class_name.'.class.php';
	
	elseif(file_exists('class/db_tables/'.$class_name.'.class.php')):
		require 'class/db_tables/'.$class_name.'.class.php';
	
	elseif(file_exists('class/db_class/'.$class_name.'.class.php')):
		require 'class/db_class/'.$class_name.'.class.php';
	endif;
}

require 'define.php';
?>