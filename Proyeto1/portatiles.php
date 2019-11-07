<?php
include "conexion.php";
$consulta="select nombre_Inventario,estado_inventario,reservado_Inventario from inventario where tipo_inventario='Portatil'";
$exe=mysqli_query($conn,$consulta);
while ($casos=mysqli_fetch_array($exe)) {
if ($casos[2]=="1") {
		$reserva="En uso";
	}else if ($casos[2]=="2") {
		$reserva="Disponible";
	}
	if ($casos[1]=="1") {
		$estado="Buen Estado";
	}else if ($casos[1]=="2") {
		$estado="Gastado";
	}else if ($casos[1]=="3") {
		$estado="En reparacion";
		$reserva="No disponible";
	}
	echo "Portatil : ".$casos[0]." | Estado de la sala: ".$estado." | Disponibilidad: ".$reserva;

	echo "<br>";

}

?>