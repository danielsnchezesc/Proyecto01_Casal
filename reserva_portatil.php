<?php
include "conexion.php";
$consulta="select nombre_Inventario from inventario where reservado_Inventario='2' and tipo_Inventario='Portatil'";
$exe=mysqli_query($conn,$consulta);
while ($casos=mysqli_fetch_array($exe)) {
	echo $casos[0];
	$sala=$casos[0];
	echo "<a href=''>Reservar</a><br>";	
}
?>