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
	$id=($_SESSION['id']);
	if (!isset($_SESSION['login_user'])) {
		header("location:login.php");
	}
	?> 
	<div class="general"> 
	 	<div id="menu">
	 		 <a class="active" href="index.php">Informacion Inventario</a>
	 		 <a href="reservas.php">Reservar</a>
	 		 <a href="liberarecursos.php">Liberar Recursos</a>
	 		 <a href="objetosenincidencia.php">Objetos en Incidencia</a>
	 		 <a href="hreservas.php">Historial de Reservas</a>
	 		 <a href="incidencias.php">Incidencias</a>
	 		 <a href="logout.proc.php">Cerrar sesion</a>
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
		<div>Seleccionar Recursos</div>
	</div>
	<div id="recursos"><br> 

		<div class="titulo">
			<div class="subtitulos"><a href="#salas">Salas</a></div>
			<div class="subtitulos"><a href="#moviles">Moviles</a></div>
			<div class="subtitulos"><a href="#portatiles">Portatiles</a></div>
			<div class="subtitulos"><a href="#proyectores">Proyectores</a></div>
		</div>
		<br>
			<a name='salas' id='salas'></a>
			<div class="salas">
			<?php 

			echo "<br>";
			include "salas.php";
			echo "<br>";
			?>
		</div>
		<br><br>
		<a name='moviles' id='moviles'></a>
		<div class="moviles">
			<?php 
			echo "<br>";
			include "moviles.php";
			echo "<br>";
			?>
		</div>
		<br><br>
		<a name='portatiles' id='portatiles'></a>
		<div class="portatiles">
			<?php 
			echo "<br>";
			include "portatiles.php";
			echo "<br>";
			?>
		</div>
		<br><br>
		<a name='proyectores' id='proyectores'></a>
		<div class="proyectores">
			<?php 
			echo "<br>";
			include "proyectores.php";
			echo "<br>";
			?>
		</div>
	</div><br>

	<footer class="footer">
		<div class=""><a href="https://danielsnchezesc.github.io/Proyecto01_Casal/
">Página de Presentación</a></div>
	</footer>	
</body>
</html>

