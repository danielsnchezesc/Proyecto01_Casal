<?php
include "conexion.php";
$user=($_SESSION['login_user']);
$id=($_SESSION['id']);
$consulta="SELECT inventario.nombre_Inventario from inventario INNER JOIN pedidos on inventario.id_Inventario=pedidos.inventario_Pedidos WHERE pedidos.personal_Pedidos='$id' AND inventario.reservado_Inventario='1' AND inventario.tipo_Inventario='sala'";
$exe=mysqli_query($conn,$consulta);
while ($casos=mysqli_fetch_array($exe)) {
	echo $casos[0];
	$inventario=$casos[0];
	echo "<a href='liberar.php?inventario=$inventario'>Devolver</a><br>";	
}
?>