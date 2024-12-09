<?php
session_start();

if (!isset($_SESSION['correo'])) {
    header("Location: loginapache.php");
    exit();
} else {
    header("Location: reportes.php");
    exit();
}
?>
