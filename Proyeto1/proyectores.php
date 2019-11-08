<!DOCTYPE html>
<html>
<head>
	<title></title>
		<meta charset="utf-8">	
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>

<table class="ancho">
<?php

include "conexion.php";

$consulta="select descripcion_Inventario,estado_inventario,reservado_Inventario from inventario where tipo_inventario='Proyector'";

$exe=mysqli_query($conn,$consulta);

while ($casos=mysqli_fetch_array($exe)) {
		echo "<tr>";

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

	echo "<td class='centrartabla'>".$casos[0]."</td> <td class='centrartabla'> Estado: <span class='".$color1."''>".$estado."</span> </td> <td class='centrartabla'> Disponibilidad: <span class='".$color2."'>".$reserva."</span></td><br>";


}
  echo "<tr>";

?>
</table>

</body>
</html>