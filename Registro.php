<?php
include "conexion.php";
global $conn;

$nombre = $_POST['nombre'];
$ap_paterno = $_POST['ap_paterno'];
$ap_materno = $_POST['ap_materno'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$telefono = $_POST['telefono'];


try{
    $sql = "INSERT INTO usuario (nombre, ap_paterno, ap_materno, correo, contrasena, telefono) 
    VALUES (?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$nombre, $ap_paterno, $ap_materno, $correo, $contrasena, $telefono]);
    header("Location: loginapache.php");
    exit();
} catch(PDOException $e){
    echo "Error: ".$e->getMessage();
}


$conn->close();
?>

