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
	?>

	
	<div class="general">
 		<div id="menu">
	 		 <a href="index.php">Informacion Inventario</a>
	 		 <a href="reservas.php">Reservar</a>
	 		 <a href="liberarecursos.php">Liberar Recursos</a>
	 		 <a href="objetosenincidencia.php">Objetos en Incidencia</a>
	 		 <a class="active"  href="hreservas.php">Historial de Reservas</a>
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
			<div><a href="">Historial de Reserva</a></div>
		</div>

		<div id="recursos4">
		<div>
			<?php
				include "conexion.php";
				$consulta="SELECT pedidos.nombre_Pedidos,pedidos.fecha_inicio_Pedidos,pedidos.hora_inicio_Pedidos,pedidos.personal_Pedidos, personal.nombre_Personal from pedidos INNER JOIN personal ON personal.id_personal=pedidos.personal_Pedidos";
					$var=mysqli_query($conn,$consulta);
					while ($array=mysqli_fetch_array($var)) {
					$objeto=$array[0];
					$fi=$array[1];
					$hi=$array[2];
					$user=$array[4];
					echo $objeto." se reservo el dia: ".$fi." a las ". $hi." por ".$user;
					echo "<br>";
					}
				?>
		</div>


	

</body>
</html>