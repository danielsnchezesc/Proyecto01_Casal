<!DOCTYPE html>
<html>
<head>
	<title>Reservar inventario</title>
	<meta charset="utf-8">	
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<?php
session_start();
?>
<div class="general">
	 	<div id="menu">
	 		 <a href="index.php">Informacion Inventario</a>
	 		 <a class="active" href="reservas.php">Reservar</a>
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
		    echo "<a class='sesion' href=''>Bienvenido $casos[0]</a><br>";
			}	
		    ?>
		</div>
</div>
<br>
<?php
	$id=($_SESSION['id']);
	if (!isset($_SESSION['login_user'])) {
		header("location:login.php");
	}
?>
<div id="main">
	<div><a href="">Selecionar Reserva</a></div>
</div>
<div id="recursos">
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
	include "reserva_salas.php";
	echo "<br>";
	?>
	</div>
	<a name='moviles' id='moviles'></a>
	<div class="moviles">
		<?php
		include "reserva_moviles.php";
		echo "<br>";
		?>
	</div>
	<a name='portatiles' id='portatiles'></a>
	<div class="portatiles">
		<?php
		include "reserva_portatil.php";
		echo "<br>";
		?>
	</div>
	<a name='proyectores' id='proyectores'></a>
	<div class="proyectores">
	<?php
	include "reserva_proyector.php";
	echo "<br>";
	?>
	</div>
</div>
</body>
</html>
