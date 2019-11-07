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
	$id=($_SESSION['id']);
	if (!isset($_SESSION['login_user'])) {
		header("location:login.php");
	}
$id=($_SESSION['id']);
include "liberar_salas.php";
echo "<br>";
include "liberar_moviles.php";
echo "<br>";
include "liberar_portatil.php";
echo "<br>";
include "liberar_proyetor.php";
?>
</body>
</html>
