<?php
include "conexion.php";
$id=$_REQUEST['opcion'];
//Marcar un producto como estropeado
$y = "UPDATE inventario SET estado_Inventario='3' WHERE id_inventario='$id'";
mysqli_query($conn, $y);

//header("Location: incidencias.php");
?>

<p>Se ha marcado como estropeado</p>

<a href="incidencias.php">Volver</a>