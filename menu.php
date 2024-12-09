<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width">
    <link rel="stylesheet" href="login_more.css" />
</head>
<body>
<header class="header">
    <div class="logo">
        <img src="logo for animal rescue project.png" alt="Logo del proyecto">
    </div>
    <nav>
        <ul class="nav-links">
            <li><a href="tabreportes.php">Extravios</a></li>
            <li><a href="reporte.php">Reporte</a></li>
            <li><a href="principal.php">Sobre Nosotros</a></li>
        </ul>
    </nav>
    <div class="user">
        <img src="usuarios.png" alt="Usuario">
        <?php if (isset($_SESSION['correo'])): ?>
            <span id="user-name"><?php echo $_SESSION['correo']; ?></span>
            <div class="logout">
                <a href="logout.php">Cerrar sesión</a>
            </div>
        <?php else: ?>
            <span id="user-name"></span>
            <div class="login">
                <a href="loginapache.php">Iniciar sesión</a>
            </div>
        <?php endif; ?>
    </div>
</header>
