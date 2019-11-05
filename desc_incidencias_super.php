<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$id=$_REQUEST['opcion'];

session_start();
$_SESSION['incidencia']=$id;

include "conexion.php";

$z= "SELECT * FROM inventario WHERE id_inventario='$id'";

$resultado =mysqli_query($conn, $z);

while ($value=mysqli_fetch_array($resultado)) {

echo "<h2>".$value['nombre_Inventario']."</h2>";
echo "<p>".$value['descripcion_estado_inventario']."</p>";

}
?>
<form action="incidencias_super.proc.php" method="POST">
<input type="submit" value="Resolver Incidencia">
</form>
</body>
</html>