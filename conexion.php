<?php 
	
	$host = 'us-cdbr-east-06.cleardb.net';
	$user = 'b02172e8b3d69e';
	$password = '4745d2d4';
	$db = 'heroku_9329caada8b3cb8';

	$conection = @mysqli_connect($host,$user,$password,$db);
	if(!$conection){
		echo "Error en la conexión";
	}
	mysqli_set_charset($conection,"utf8mb4");

?>