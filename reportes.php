<?php 
require_once("menu.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1, width=device-width">
  <link rel="stylesheet" href="tabreportes.css" />
  <title>Reportar mi Mascota</title>
  <style>
    .formulario {
      margin: 20px auto;
      width: 80%;
      max-width: 500px;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 8px;
      background-color: #f9f9f9;
    }

    .formulario input,
    .formulario textarea,
    .formulario button {
      width: 100%;
      margin: 10px 0;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .formulario button {
      background-color: #04AA6D;
      color: white;
      cursor: pointer;
    }

    .formulario button:hover {
      background-color: #026a45;
    }
  </style>
</head>

<body>
  <div class="grid-container">
    <div class="item4">
      <h2>Formulario para Reportar una Mascota Extraviada</h2>
      <form class="formulario" action="reporte_avistamiento.php" method="POST" enctype="multipart/form-data">
        <label for="nombre-mascota">Nombre de la mascota:</label>
        <input type="text" id="nombre-mascota" name="nombre_mascota" placeholder="Nombre de la mascota" required>

        <label for="edad-mascota">Edad de la mascota:</label>
        <input type="number" id="edad-mascota" name="edad_mascota" placeholder="Edad de la mascota" required>

        <label for="imgmascota">Foto:</label>
        <input type="file" id="imgmascota" name="imgmascota" accept="image/*" required>

        <label for="especie-mascota">Especie de la mascota:</label>
        <input type="text" id="especie-mascota" name="especie_mascota" placeholder="Especie de la mascota" required>

        <label for="raza-mascota">Raza de la mascota:</label>
        <input type="text" id="raza-mascota" name="raza_mascota" placeholder="Raza de la mascota" required>

        <label for="fecha-extravio">Fecha de extravío:</label>
        <input type="date" id="fecha-extravio" name="fecha_extravio" required>

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" placeholder="Describe a la mascota (color, señas particulares, etc.)" rows="4" required></textarea>

        <label for="calle">Calle:</label>
        <input type="text" id="calle" name="calle" placeholder="Calle" required>

        <label for="colonia">Colonia:</label>
        <input type="text" id="colonia" name="colonia" placeholder="Colonia" required>

        <label for="cpostal">Código Postal:</label>
        <input type="text" id="cpostal" name="cpostal" placeholder="Código Postal" required>

        <label for="ciudad">Ciudad:</label>
        <input type="text" id="ciudad" name="ciudad" placeholder="Ciudad" required>

        <button type="submit">Enviar Reporte</button>
      </form>
    </div>
  </div>

</body>

</html>
