<!DOCTYPE html>
<html>
<head>
	<title></title>
		<meta charset="utf-8">	
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>


<?php

include "conexion.php";

$consulta="select descripcion_Inventario,estado_inventario,reservado_Inventario from inventario where tipo_inventario='Movil'";

$exe=mysqli_query($conn,$consulta);

while ($casos=mysqli_fetch_array($exe)) {

	if ($casos[2]=="1") {
		$reserva="En uso";
		$color2="red";
	}else if ($casos[2]=="2") {
		$reserva="Disponible";
		$color2="green";
	}
	if ($casos[1]=="1") {
		$estado="Buen Estado";
		$color1="green";
	}else if ($casos[1]=="2") {
		$estado="Gastado";
		$color1="yellow";
	}else if ($casos[1]=="3") {
		$estado="En reparacion";
		$reserva="No disponible";
		$color1="red";
		$color2="red";
		
	}

	echo $casos[0]." | Estado: <span class='".$color1."''>".$estado."</span> | Disponibilidad: <span class='".$color2."'>".$reserva."</span>";

	echo "<br>";

}

?>

</body>
</html>