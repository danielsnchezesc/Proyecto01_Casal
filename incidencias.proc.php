<?php
include "conexion.php";
$id=$_REQUEST['opcion'];
$descripcion=$_REQUEST['descripcion'];

//Marcar un producto como estropeado
$y = "UPDATE inventario SET estado_Inventario='3' WHERE id_inventario='$id'";
mysqli_query($conn, $y);

$y = "UPDATE inventario SET descripcion_estado_Inventario='$descripcion' WHERE id_inventario='$id'";
mysqli_query($conn, $y);

header("Location: incidencias.php");
?>