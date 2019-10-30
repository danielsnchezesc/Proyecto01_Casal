<?php
$sql = "INSERT INTO pedidos (nombre_Pedidos, fecha_inicio_Pedidos, hora_inicio_Pedidos, inventario_Pedidos, personal_Pedidos) VALUES 
('$nombre', '$fecha', '$hora', '$inventario', '$usuario')";
mysqli_query($conexion, $sql);
?>