<!DOCTYPE html>
<html>
<head>
	<title>Incidencias</title>
	<meta charset="utf-8">	
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>

<h1>Incidencias</h1>
<form action="incidencias.proc.php" method="POST">
<select name="opcion">

<?php
include "conexion.php";

$z= "SELECT * FROM inventario WHERE estado_Inventario='1' OR estado_Inventario='2'";

$resultado =mysqli_query($conn, $z);

while ($value=mysqli_fetch_array($resultado)) {

echo "<option value='".$value['id_Inventario']."'>".$value['nombre_Inventario']."</option>";

}
?>
</select>
<br><br>
<textarea name="descripcion" rows="10" cols="30"></textarea>
<br>
<input type="submit" name="submit">

</form>
</body>
</html>