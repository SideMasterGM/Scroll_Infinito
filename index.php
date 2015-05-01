<?php
  #Author: Side Master
  #Link: https://www.youtube.com/user/sidemastersupremo/
  
	include ("php/connect/connect_server.php");

	$page = (int) (!isset($_GET['p'])) ? 1 : $_GET['p'];
	$sql = "SELECT * FROM scroll ORDER BY id DESC";
	$start = ($page * $limit) - $limit;

	$result = $conexion->query($sql);

	if(@$result->num_rows > ($page * $limit) ){
		$next = ++$page;
	}

	$query = $conexion->query($sql." LIMIT ".$start.", ".$limit.";");
	if (@$query->num_rows < 1) {
		header('HTTP/1.0 404 Not Found');
		echo 'Sitio no encontrado!';
		exit();
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Scroll Infinito</title>
		<link rel="stylesheet" href="css/main.css">
		<script type="text/javascript" src="js/lib/Jquery.js"></script>
		<script type="text/javascript" src="js/lib/jquery-ias.min.js"></script>
		<script type="text/javascript" src="js/functions.js"></script>
	</head>
	<body>
		<div class="wrap">
			<h1 class="alert-message">
				Scroll Infinito Con JQuery y PHP / Side Master
				<a href="php/write_post.php">Crear Post</a>
			</h1>
			<hr/>
			<div class="container">
				<?php
					while ($row = $query->fetch_array(MYSQLI_ASSOC)){
						?>
							<div class="post" id="<?php echo $row['id']; ?>">
								<div class="id">
									<p>#<?php echo $row['id']; ?></p>
								</div>
								<div class="title">
									<p><h3><?php echo $row['title']; ?></h3></p>
								</div><hr/>
								<div class="content">
									<p><?php echo $row['content']; ?></p>
								</div>
							</div>
						<?php
					}
				?>
			</div>
			<?php if (isset($next)): ?>
				<div class="nav">
					<a href='index.php?p=<?php echo $next?>'>Next</a>
				</div>
			<?php endif?>
		</div>
	</body>
</html>
