<!DOCTYPE html>
<html>
<head>
	<title>Objetos En Incidencia</title>
	<meta charset="utf-8">	
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<?php
	include "conexion.php";
	session_start();
	$id=($_SESSION['id']);
	if (!isset($_SESSION['login_user'])) {
		header("location:login.php");
	}
	$consulta="SELECT inventario.nombre_Inventario,incidencias.descripcion_Incidencia,incidencias.fecha_inicio_Incidencia,incidencias.fecha_fin_Incidencia,incidencias.hora_inicio_Incidencia,incidencias.hora_fin_Incidencia FROM incidencias inner join inventario on inventario.id_Inventario=incidencias.objeto_Incidencia";
	$var=mysqli_query($conn,$consulta);
	while ($array=mysqli_fetch_array($var)) {
		$nombre=$array[0];
		$descripcion=$array[1];
		$horaini=$array[4];
		$horafin=$array[5];
		$fechaini=$array[2];
		$fechafin=$array[3];
		echo "Nombre del objeto: ".$nombre."<br>Descripcion: ".$descripcion."<br>Fecha y hora de inicio: ".$fechaini." a las ".$horaini;
		if (is_null($horafin)) {
			echo"<br>Incidencia activa<br><br>";
		}else{
			echo "<br>Fecha y hora finales: ".$fechafin." a las ".$horafin."<br><br>";
		}
	}
?>
</body>
</html>