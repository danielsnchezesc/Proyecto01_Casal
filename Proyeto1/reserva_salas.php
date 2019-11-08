<!DOCTYPE html>
<html>
<head>
	<title>Reservar inventario</title>
	<meta charset="utf-8">	
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<table class="ancho">
<?php
include "conexion.php";
$consulta="select nombre_Inventario from inventario where reservado_Inventario='2' and tipo_Inventario='Sala' and estado_Inventario!='3'";
$exe=mysqli_query($conn,$consulta);
while ($casos=mysqli_fetch_array($exe)) {
		echo "<tr>";

	echo "<td class='centrartabla'>".$casos[0];"</td>";
	$inventario=$casos[0];
	echo "<a href='hacereserva.php?inventario=$inventario'>Reservar</a><br>";	
}
 echo "<tr>";
?>
</table>


</body>
</html>