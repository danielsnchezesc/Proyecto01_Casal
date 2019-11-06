<?php
	if (!isset($_SESSION['login_user'])) {
		header("location:login.php");
	}
include "conexion.php";
$consulta="select nombre_Inventario from inventario where reservado_Inventario='2' and tipo_Inventario='Movil' and estado_Inventario!='3'";
$exe=mysqli_query($conn,$consulta);
while ($casos=mysqli_fetch_array($exe)) {
	echo $casos[0];
	$inventario=$casos[0];
	echo "<a href='hacereserva.php?inventario=$inventario'>Reservar</a><br>";	
}
?>