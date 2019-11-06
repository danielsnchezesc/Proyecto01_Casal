<?php
	session_start();
	if (!isset($_SESSION['login_user'])) {
		header("location:login.php");
	}
include "conexion.php";
$id=$_REQUEST['opcion'];
$descripcion=$_REQUEST['descripcion'];

//Marcar un producto como estropeado
$y = "UPDATE inventario SET estado_Inventario='3' WHERE id_inventario='$id'";
mysqli_query($conn, $y);

$y = "UPDATE inventario SET descripcion_estado_Inventario='$descripcion' WHERE id_inventario='$id'";
mysqli_query($conn, $y);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<meta charset="utf-8">	
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>



		<div class="contenedor">
		<div class="is">
	<h3>Se ha marcado como estropeado</h3><br>
		</div><br>
		<p style="margin-left: 35%;" class="mensaje" id="mensaje"></p>
		<div class="form">
		<a class="btnenviar" href="incidencias.php"> Volver</a>
		</div>
	</div>

</body>
</html>