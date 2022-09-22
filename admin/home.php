<!DOCTYPE html>
<?php 
	require 'validator.php';
	require_once 'conn.php'
?>
<html lang = "en">
	<head>
		<title>Emi</title>
		<meta charset = "utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />

	</head>
<body>
		<div class="container-fluid">
		<?php include 'head.php'?>
			<?php 
				$query = mysqli_query($conn, "SELECT * FROM `user` WHERE `user_id` = '$_SESSION[user]'") or die(mysqli_error());
				$fetch = mysqli_fetch_array($query);
			?>
			<ul class = "nav navbar-right">	
				<li class = "dropdown">
					<a class = "user dropdown-toggle" data-toggle = "dropdown" href = "#">
						<?php 
							echo $fetch['firstname']." ".$fetch['lastname'];
						?>
						<b class = "caret"></b>
					</a>
				<ul class = "dropdown-menu">
					<li>
						<a href = "logout.php">Salir</a>
					</li>
				</ul>
				</li>
			</ul>
		</div>
	</nav>
	<?php include 'sidebar.php'?>
	<div id = "content">
		<br /><br />
		<div class="alert alert-info"><h3>Mision de la carrera</h3>
		<h4>Formar y especializar profesionales de excelencia, con principios, valores ético - morales y cívicos, caracterizados por su responsabilidad social, espíritu emprendedor, liderazgo y disciplina; promoviendo la internacionalización, Interacción Social y desarrollo de la Ciencia, Tecnología e Innovación, para contribuir al desarrollo del Estado.
			stemas</h4></div> 
		<div class="alert alert-info"><h3>Vision de la carrera</h3>
	<h4>
	Ser la Universidad líder en la formación de profesionales en Ingeniería y de especialización, caracterizada por el estudio, aplicación e innovación tecnológica, con responsabilidad social y reconocida a nivel nacional e internacional.
	</h4></div> 
	</div>
	</div>
	<div id = "footer">
		<!-- <label class = "footer-title"> </label> -->
	</div>
<?php include 'script.php'?>	
</body>
</html>