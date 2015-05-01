<?php

	if (isset($_POST['send'])){
		include ("connect/connect_server.php");

		$title = $_POST['title'];
		$content = $_POST['content'];

		$insert = "INSERT INTO scroll (id, title, content) VALUES ('','".$title."','".$content."');";

		if ($conexion->query($insert)){
			?>
				<script type="text/javascript">
					alert("Agregado con exito!.");
					window.location.href="../index.php";
				</script>
			<?php
		} else {
			?>
				<script type="text/javascript">
					alert("Ha ocurrido un error!. ");
					window.location.href="../index.php";
				</script>
			<?php
		}
	}


?>