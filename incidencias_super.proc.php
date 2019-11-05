<?php
include "conexion.php";
$id=$_REQUEST['opcion'];
//Marcar un producto como estropeado
$y = "UPDATE inventario SET estado_Inventario='1' WHERE id_inventario='$id'";
mysqli_query($conn, $y);

//header("Location: incidencias.php");
?>

<p>Se ha vuelto a poner como disponible.</p>

<a href="incidencias_super.php">Volver</a>