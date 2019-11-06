<!DOCTYPE html>
<html>
<head>
	<title>Reservar inventario</title>
	<meta charset="utf-8">	
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<?php
	

?>

<?php
session_start();
	if (!isset($_SESSION['login_user'])) {
		header("location:login.php");
	}
	?>

	
	<div class="general">
 		<div id="menu">
	 		 <a href="index.php">Informacion Inventario</a>
	 		 <a   href="reservas.php">Reservar</a>
	 		 <a class="active" href="liberarecursos.php">Liberar Recursos</a>
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
			<div><a href="">Selecionar Recursos a Liberar</a></div>
		</div>

		<div id="recursos">
		<a href="">Salas Disponibles</a><br><br>
	
		
			<?php
				$id=($_SESSION['id']);
				include "liberar_salas.php";
				echo "<br>";
				include "liberar_moviles.php";
				echo "<br>";
				include "liberar_portatil.php";
				echo "<br>";
				include "liberar_proyetor.php";
			?>

	</div>

</body>
</html>
