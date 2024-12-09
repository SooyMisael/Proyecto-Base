<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width">
    <link rel="stylesheet" href="login_more.css" />
    <title>Pet Finder - Registro</title>
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="logo for animal rescue project.png" alt="Logo del proyecto">
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="#">Extravios</a></li>
                <li><a href="reportes.html">Reporte</a></li>
                <li><a href="index.html">Sobre Nosotros</a></li>
            </ul>
        </nav>
        <div class="user">
            <img src="usuarios.png" alt="Usuario">
            <span id="user-name"></span>
        </div>
    </header>
    <div class="cont_prin">
        <div class="cont_secun">
            <img src="imgs/img1.jpeg" alt="">
            <img src="imgs/img2.jpg" alt="">
            <img src="imgs/img3.jpg" alt="">
        </div>
        <div class="logo">
            <img src="imgs/petfinder.png" id="subimagen" class="subimagen">
            <div class="subtitle">
                <p>Busca o reporta mascotas perdidas.</p>
            </div>
        </div>
        <div class="formulario">
            <h1 style="font-family: helvetica;">Registro de usuarios</h1>
            <form action="Registro.php" method="POST">
                <div class="inputslog">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required><br>
                    <label for="ap_paterno">Apellido Paterno:</label>
                    <input type="text" id="ap_paterno" name="ap_paterno" required><br>
                    <label for="ap_materno">Apellido Materno:</label>
                    <input type="text" id="ap_materno" name="ap_materno" required><br>
                    <label for="correo">Correo:</label>
                    <input type="email" id="correo" name="correo" required><br>
                    <label for="contrasena">Contraseña:</label>
                    <input type="password" id="contrasena" name="contrasena" required><br>
                    <label for="telefono">Teléfono:</label>
                    <input type="tel" id="telefono" name="telefono" required><br>
                </div>
                <div class="botoneslog">
                    <input type="submit" value="Registro"><br>
                    <input type="reset" value="Limpiar"><br>
                </div>
                <div class="tosign">
                    <p>¿Ya tiene cuenta? Inicie sesión <a href="login.html">aquí</a>.</p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>