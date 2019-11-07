<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
include "conexion.php";
$user=($_SESSION['login_user']);
$id=($_SESSION['id']);
$consulta="select nombre_Inventario from inventario where reservado_Inventario='1' and estado_Inventario='1,2'AND tipo_Inventario='Movil'";
$exe=mysqli_query($conn,$consulta);
while ($casos=mysqli_fetch_array($exe)) {
	echo $casos[0]." ";
	$inventario=$casos[0];
	echo "<a href='liberar.php?inventario=$inventario'>Devolver</a><br>";	
}
?>
</body>
</html>
