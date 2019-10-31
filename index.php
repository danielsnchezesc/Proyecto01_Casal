<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<meta charset="utf-8">	
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<?php 
	session_start();
	if (!isset($_SESSION['login_user'])) {
		header("location:login.php");
	}
	?>
	<div class="general">
	 	<div id="menu">
	 		 <a class="active" href="index.html">Reservar</a>
	 		 <a href="liberarrecursos.html">Liberar Recursos</a>
	 		 <a href="inforecursos.html">Información Recursos</a>
	 		 <a href="incidencias.html">Incidencias</a>
		</div>
		<div class="derecha">
			<?php
			include "conexion.php";
			$nombre=$_SESSION['login_user'];
			$consulta="select nombre_Personal FROM personal where usuario_Personal = '".$nombre."'";
			$exe=mysqli_query($conn,$consulta);
			while ($casos=mysqli_fetch_array($exe)) {
		    echo "<a class='sesion' href=''>Bienvenido $casos[0]</a>";
			}	
		    ?>
		</div>
	</div>
	<br>
	<div id="main">
		<div><a href="">Selecionar Recursos</a></div>
	</div>
	<div id="recursos">
		<a href="">Salas</a>
		<div>
			<?php 
			include "salas.php";
			?>
		</div>
		<a href="">Dispositivos</a>
			<?php
			include "moviles.php";
			include "portatiles.php";
			include "proyectores.php";
			?>
	</div>
</body>
</html>

