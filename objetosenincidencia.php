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
	include "conexion.php";
	$consulta="Select nombre_Inventario from inventario where estado_Inventario='3'";
	$var=mysqli_query($conn,$consulta);
	while ($array=mysqli_fetch_array($var)) {
		$mostrar=$array[0];
		echo $mostrar;
	}
?>
</body>
</html>