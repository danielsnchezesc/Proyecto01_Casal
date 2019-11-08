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
$user=($_SESSION['login_user']);
$id=($_SESSION['id']);
$consulta="select nombre_Inventario from inventario where reservado_Inventario='1' and estado_Inventario='1,2'AND tipo_Inventario='Proyector'";
$exe=mysqli_query($conn,$consulta);
while ($casos=mysqli_fetch_array($exe)) {
			echo "<tr>";

	echo "<td class='centrartabla'>".$casos[0];"<td>";
	$inventario=$casos[0];
	echo "<a href='liberar.php?inventario=$inventario'>Devolver</a><br>";	
}
 echo "<tr>";
?>
</table>


</body>
</html>