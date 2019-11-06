<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		include "conexion.php";
			session_start();
	if (!isset($_SESSION['login_user'])) {
		header("location:login.php");
	}
		$id=($_SESSION['id']);
		$objeto=($_GET['inventario']);
		echo $objeto;
		$consulta="update inventario SET reservado_Inventario='2' where nombre_Inventario='$objeto'";
		$exe=mysqli_query($conn,$consulta);
		$today = date("Y-m-d");
		$hora = date("H:i");
		$consultita="update pedidos SET fecha_final_Pedidos='$today',hora_final_Pedidos='$hora' where nombre_Pedidos='$objeto'";
		$update=mysqli_query($conn,$consultita);
		header("location:liberacionhecha.php");
	 ?>
</body>
</html>