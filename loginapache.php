<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="initial-scale=1, width=device-width">
  	<link rel="stylesheet"  href="login_more.css" />

	<title>PetFinder - login</title>
</head>
<body>
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
	<?php
	if(isset($_GET['error'])){
			$error = $_GET['error'];
			if($error == 1)
				echo "<b>USUARIO O CONTRASEÑA NO VALIDOS</b><br>";
			elseif($error == 2)
				echo "<b>DEBES INICIAR SESIÓN</b><br>";
			elseif($error == 3)
				echo "<b>HAZ CERRADO SESIÓN</b><br>";
		}

	?>
	<div class="formulario">
	<h1 style="font-family: helvetica;">Inicio de sesión</h1>
<form action="validacion.php" method="POST">
	<div class="inputslog">
	<label for= "email">Correo: </label>
	<input type="email" id="email" name="email"><br>
	<lable for="pwd">Contraseña: </lable>
	<input type="password" id="pwd" name="pwd"><br>
	</div>
	<div class="botoneslog">
	<input type="submit" value="Iniciar sesión"><br>
	<input type="reset" value="Limpiar"><br>
	</div>
	<div class="tosign">
	<p>¿Aún no tiene cuenta? Regístrese <a href="registrousuario.php">aquí</a>.</p>
	</div>
</form>
</div>
</div>
</body>

</html>