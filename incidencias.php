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
	?>
	<div class="general">
	 	<div id="menu">
	 		 <a class="active" href="index.php">Informacion Inventario</a>
	 		 <a href="reservas.php">Reservar</a>
	 		 <a href="liberarecursos.php">Liberar Recursos</a>
	 		 <a href="objetosenincidencia.php">Objetos en Incidencia</a>
	 		 <a href="hreservas.php">Historial de Reservas</a>
	 		 <a href="incidencias.php">Incidencias</a>
		</div>

		<div class="derecha">
		  	<?php
			include "conexion.php";
			$nombre=$_SESSION['login_user'];
			$consulta="select nombre_Personal FROM personal where usuario_Personal = '".$nombre."'";
			$exe=mysqli_query($conn,$consulta);
			while ($casos=mysqli_fetch_array($exe)) {
		    echo "<a class='sesion' href=''>Bienvenido $casos[0]</a>";
			}	
		    ?>
		</div>
	</div>
	<br>

	<div id="main" >
		
		<div><a href="">Incidencias</a></div>
	</div>

		<div id="recursos" >
		 
		<form action="incidencias.proc.php" method="POST">

			<a>Selecciona el recurso</a><br>
				<select name="opcion">
					<?php
					include "conexion.php";
					$z= "SELECT * FROM inventario WHERE estado_Inventario='1' OR estado_Inventario='2'";
					$resultado =mysqli_query($conn, $z);
					while ($value=mysqli_fetch_array($resultado)) {
					echo "<option value='".$value['id_Inventario']."'>".$value['nombre_Inventario']."</option>";
					}
					$_SESSION['opcion']=$value['id_Inventario'];

					?>
				</select>
				<br><br>
					<a>Escribe una breve descripción</a><br><br>
			<textarea name="descripcion" rows="10" cols="40"></textarea>
			<br><br>
			<input  class="btninci" type="submit" name="registro" default="" value="Enviar">
			</form> 


			</form>
			<br><br>
			<a>Incidencias activas:</a>
			<div id="recursos">

				<?php 
				$nombre=$_SESSION['login_user'];
				if ($nombre='superusuario') {
						include "incidencias_super.php";	
				}
		
				?>


			
			</div>
		</div>
	



</body>
</html>

