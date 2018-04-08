<?php 

spl_autoload_register(function($nameClass){

	$filename = "class".DIRECTORY_SEPARATOR.$nameClass . ".php";

	if (file_exists($filename)==true){

		require_once($filename);
	}
});




 ?>