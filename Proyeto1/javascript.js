function login(){
	var user=document.getElementById("user").value;
	var pwd=document.getElementById("pwd").value;
	document.getElementById('user').style.border="1px solid grey";
	document.getElementById('pwd').style.border="1px solid grey";
	if (user =="" && pwd =="") {
		document.getElementById('user').style.border="1px solid red";
		document.getElementById('pwd').style.border="1px solid red";
		document.getElementById("mensaje").innerHTML="Los campos usuario y contraseña son obligatorios";
		document.getElementById('mensaje').style.display="block";
		return false;
	}else if (user =="") {
		document.getElementById('user').style.border="1px solid red";
		document.getElementById("mensaje").innerHTML="El campo usuario es obligatorio";
		document.getElementById('mensaje').style.display="block";
		return false;
	}else if (pwd=="") {
		document.getElementById('pwd').style.border="1px solid red";
		document.getElementById("mensaje").innerHTML="El campo contraseña es obligatorio";
		document.getElementById('mensaje').style.display="block";
		return false;
	}
	return true;

}

function incidencia(){
	var coment=document.getElementById("descripcion").value;
	document.getElementById('descripcion').style.border="1px solid grey";
	if (coment=="") {
		document.getElementById("mensaje2").innerHTML="Describa el problema del objeto o sala";
		document.getElementById('descripcion').style.border="1px solid red";
		return false;
	}
	return true;
}