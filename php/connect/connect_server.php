<?php
	
	$host = "127.0.0.1";
	$user = "SideMaster";
	$pass = "Programador";
	$db = "infinito";
	$limit = 10;

	$conexion = new mysqli($host, $user, $pass, $db);
	
	if ($conexion->connect_errno){
		echo "La base de datos no existe (".$conexion->connect_errno.")".$conexion->connect_error;
	}

	/*$conexion = mysql_connect($host, $user, $pass);
	if ($conexion){
		$select_db = mysql_select_db($db);
		if (!$select_db){
			mysql_query("CREATE DATABASE ".$db.";");
			$select_db = mysql_select_db($db);
			if ($select_db){
				$query = "
					CREATE TABLE scroll (
							id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
							title VARCHAR(100) NOT NULL,
							content VARCHAR(3000) NOT NULL
						);
				";
				mysql_query($query);
			}

			$title = "Este es el titulo para el siguiente post o articulo publicado";
			$content = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit voluptates vel exercitationem ea inventore ratione tempore esse animi repudiandae libero iusto asperiores doloremque, adipisci a sapiente, corrupti itaque qui deleniti.";

			for ($i=0; $i<60; $i++){
				mysql_query("INSERT INTO scroll (id, title, content) VALUES ('','".$title."','".$content."');");
			}

		}
	}*/
?>