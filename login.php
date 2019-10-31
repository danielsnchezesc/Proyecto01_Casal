<!DOCTYPE html>
<html>
<head>
	<title>Inventario casal</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<meta charset="UTF-8">
	<script type="text/javascript" src="javascript.js"></script>
</head>
<body>
	<h2>Insertar usuarios</h2>
	<p class="mensaje" id="mensaje"></p>
	<form action="comprobarusuarios.php" method="POST" name="formulario1" enctype="multipart/form-data" onsubmit="return login()">
		<label for="user" class="boton">Usuario:</label>
		<input type="string" name="user" id="user" default=""><br><br>
		<label for="pwd" class="boton">Contraseña:</label>
		<input type="password" name="pwd" id="pwd">
		<input type="submit" name="registro" default="" class="boton">
	</form>
</div>
</body>
</html>