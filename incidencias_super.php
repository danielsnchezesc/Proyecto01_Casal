<?php
include "conexion.php";
$z= "SELECT * FROM inventario WHERE estado_Inventario='3'";
$resultado =mysqli_query($conn, $z);
while ($value=mysqli_fetch_array($resultado)) {
?>
<form action="incidencias_super.proc.php" method="POST">
<?php
echo "<h2>".$value['nombre_Inventario']."</h2>";
echo "<p>".$value['descripcion_estado_inventario']."</p>";
echo "<input type='hidden' name='opcion' value='".$value['id_Inventario']."'>";
echo "<input type='submit' value='Resolver Incidencia'>";
?>
</form>
<?php
}
?>