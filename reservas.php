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
include "reserva_salas.php";
echo "<br>";
include "reserva_moviles.php";
echo "<br>";
include "reserva_portatil.php";
echo "<br>";
include "reserva_proyector.php";
?>
</body>
</html>
