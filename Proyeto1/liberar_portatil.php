<?php
include "conexion.php";
$user=($_SESSION['login_user']);
$id=($_SESSION['id']);
$consulta="select descripcion_Inventario from inventario where reservado_Inventario='1' and estado_Inventario='1,2'AND tipo_Inventario='Portatil'";
$exe=mysqli_query($conn,$consulta);
while ($casos=mysqli_fetch_array($exe)) {
	echo $casos[0]." ";
	$inventario=$casos[0];
	echo "<a href='liberar.php?inventario=$inventario'>Devolver</a><br>";	
}
?>