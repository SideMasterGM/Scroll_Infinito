<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Escribir POST</title>
		<link rel="stylesheet" href="../css/style_write_post.css">
	</head>
	<body>
		<form action="insert_post.php" method="post">
			<input type="text" name="title" placeholder="Titulo" required/><br/>
			<textarea name="content" placeholder="Contenido" required></textarea><br/>
			<input type="submit" name="send" value="Guardar" />
		</form>
	</body>
</html>