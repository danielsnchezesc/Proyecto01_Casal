<!DOCTYPE html>
<html>
<head>
	<title>Objetos En Incidencia</title>
	<meta charset="utf-8">	
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>

<?php
session_start();
	if (!isset($_SESSION['login_user'])) {
		header("location:login.php");
	}
	// include "conexion.php";
?>

	<div class="general">
	 	<div id="menu">
	 		 <a href="index.php">Informacion Inventario</a>
	 		 <a href="reservas.php">Reservar</a>
	 		 <a href="liberarecursos.php">Liberar Recursos</a>
	 		 <a class="active" href="objetosenincidencia.php">Objetos en Incidencia</a>
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
		<div><a href="">Incidencias de Recursos</a></div>
	</div>
	<div id="recursos">

			<?php
				$consulta="Select nombre_Inventario from inventario where estado_Inventario='3'";
				$var=mysqli_query($conn,$consulta);
				while ($array=mysqli_fetch_array($var)) {
				$mostrar=$array[0];
				echo "<br>";
				echo $mostrar;
				}
			?>
	</div>

</body>
</html>