<!DOCTYPE html>
<html>
<head>
	<title>Objetos En Incidencia</title>
	<meta charset="utf-8">	
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<a href="index.php">Volver a inicio</a><br><br>
<?php
	session_start();
	$id=($_SESSION['id']);
	if (!isset($_SESSION['login_user'])) {
		header("location:login.php");
	}
	include "conexion.php";
	$consulta="Select nombre_Pedidos,fecha_inicio_Pedidos,hora_inicio_Pedidos,personal_Pedidos from pedidos";
	$var=mysqli_query($conn,$consulta);
	while ($array=mysqli_fetch_array($var)) {
		$objeto=$array[0];
		$fi=$array[1];
		$hi=$array[2];
		$user=$array[3];
		echo $objeto." se reservo el dia: ".$fi." a las ". $hi." por el usuario con id: ".$user;
		echo "<br>";
	}
?>

</body>
</html>