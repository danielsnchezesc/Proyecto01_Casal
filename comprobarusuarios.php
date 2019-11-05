<?php
//Esto evitara que entremos como hackers
include "conexion.php";
if (!$_POST["user"] && !$_POST["pwd"]) {
	header("location:login.php");
}else{
//Nos coge las variables y luego nos mira si el usuario con esa contraseña existe
$name=$_POST["user"];
$pwd=$_POST["pwd"];
$encript=md5($pwd);
$consulta="SELECT * FROM personal WHERE contrasena_personal='$encript' AND usuario_personal='$name'";
$consulta=mysqli_query($conn,$consulta);
if(mysqli_num_rows($consulta) && !empty($consulta)){
	echo "El usuario es correcto";
	$row=mysqli_fetch_array($consulta);
	session_start();
	$_SESSION['id']=$row['id_personal'];
	$_SESSION['login_user']=$name;
	echo "$name";

	if ($row['id_Personal']==1) {
	header("location:index_superusuario.php");
	}else{
	header("location:index.php");
}
}else{
	echo "El usuario es incorrecto";
	echo "<a href='login.php'>Volver a inicio</a>";
}
}
?>