<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	session_start();
	if (!isset($_SESSION['login_user'])) {
		header("location:login.php");
	}
?>

	<h3>Objeto devuelto</h3><br>
<a href="index.php">Volver a inicio</a>
</body>
</html>