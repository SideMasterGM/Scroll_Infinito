<?php
	include ("connect_server.php");
	$query = "
		CREATE TABLE scroll (
				id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
				title VARCHAR(100) NOT NULL,
				content VARCHAR(3000) NOT NULL
			);
	";
	$conexion->query($query);

	$title = "Este es el titulo para el siguiente post o articulo publicado";
	$content = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit voluptates vel exercitationem ea inventore ratione tempore esse animi repudiandae libero iusto asperiores doloremque, adipisci a sapiente, corrupti itaque qui deleniti.";

	for ($i=0; $i<60; $i++){
		$conexion->query("INSERT INTO scroll (id, title, content) VALUES ('','".$title."','".$content."');");
	}
?>