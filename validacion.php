<?php
require_once("conexion.php");
require_once("funcionespro.php");

if(isset($_POST['email'])&& isset($_POST['pwd'])){
	$email=$_POST['email'];
	$pass=$_POST['pwd'];
	$listado = validaUsuario($email,$pass);
	
	if(is_array($listado)){
	//verificamos si hay resultados
	echo "Si hay resultados";
		header("Location: principal.php");
		session_start();
		$_SESSION['correo'] = $email;
		exit();
	}
	else{
		header("Location: loginapache.php?error=1");
		exit();
	}
}
else{
	echo "No se recibio nada";
	}
?>