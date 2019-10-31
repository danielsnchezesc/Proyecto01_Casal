<?php
//Insertar los datos del pedido
$sql = "INSERT INTO pedidos (nombre_Pedidos, fecha_inicio_Pedidos, hora_inicio_Pedidos, inventario_Pedidos, personal_Pedidos) VALUES 
('$nombre', '$fecha', '$hora', '$inventario', '$usuario')";
mysqli_query($conexion, $sql);

//Marca un producto como reservado
$x = "UPDATE inventario SET reservado_Inventario='1' WHERE nombre_Inventario='$inventario'";
?>