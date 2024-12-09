<?php

function validaUsuario($correo, $pass){
	global $conn;

	$sql = "select nombre, ap_paterno from usuario where correo=? and contrasena=?";

	$stmt = $conn->prepare($sql);

	$stmt->execute([$correo,$pass]);

	if ($stmt->rowCount() > 0) {

	return $stmt->fetchAll(PDO::FETCH_ASSOC);

	} else {

	return false;

	}


}



?>