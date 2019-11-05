<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<meta charset="utf-8">	
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>

<?php 
	session_start();
	if (!isset($_SESSION['login_user'])) {
		header("location:login.php");
	}

include "conexion.php";
?>
<div class="general">

		<div class="derecha">
<?php
			$nombre=$_SESSION['login_user'];
			$consulta="select nombre_Personal FROM personal where usuario_Personal = '".$nombre."'";
			$exe=mysqli_query($conn,$consulta);
			while ($casos=mysqli_fetch_array($exe)) {
		    echo "<a class='sesion' href=''>Bienvenido $casos[0]</a>";
		    echo "<a class='sesion' href='logout.proc.php'>Cerrar sesión</a>";
			}	
include('incidencias_super.php')
?>

</body>
</html>