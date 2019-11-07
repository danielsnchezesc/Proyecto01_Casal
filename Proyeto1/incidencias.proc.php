<?php
include "conexion.php";
$id=$_REQUEST['opcion'];


//Marcar un producto como estropeado
$y = "UPDATE inventario SET estado_Inventario='3' WHERE id_inventario='$id'";
mysqli_query($conn, $y);
$descripcion=$_REQUEST['descripcion'];
$today = date("Y-m-d");
$hora = date("H:i");
$consulta3="insert into incidencias (fecha_inicio_Incidencia,hora_inicio_Incidencia,descripcion_Incidencia,objeto_Incidencia,estado) values ('$today','$hora','$descripcion','$id','1')";
mysqli_query($conn, $consulta3);
?>
<p>Se ha marcado como estropeado</p>
<a href="incidencias.php">Volver</a>