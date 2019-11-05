<!DOCTYPE html>
<html>
<head>
	<title>Incidencias</title>
	<meta charset="utf-8">	
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>

<h1>Incidencias</h1>
<h3>estropeado</h3>
<form action="incidencias_super.proc.php" method="POST">
<select name="opcion">


<?php
include "conexion.php";

$z= "SELECT * FROM inventario WHERE estado_Inventario='3'";

$resultado =mysqli_query($conn, $z);

while ($value=mysqli_fetch_array($resultado)) {

echo "<option value='".$value['id_Inventario']."'>".$value['nombre_Inventario']."</option>";

}

?>

</select>

<input type="submit" name="submit">
</form>
</body>
</html>