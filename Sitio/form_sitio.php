<?php
    require_once "../conexion/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <h1>Agregar Sitio</h1>
    <form action="insertar_sitio.php" method="post">
        <fieldset>
            <label for="nombre">Nombre del Sitio: </label><br>
            <input type="text" name="Nombre" id="nombre" placeholder="Nombre del Sitio" required><br><br>
            <label for="ubicacion">Ubicacion(Coordenadas): </label><br>
            <input type="text" name="Ubicacion" id="ubicacion" placeholder="Ubicacion del Sitio"><br><br>
            <label for="detalle">Detalles del Sitio: </label><br>
            <textarea name="Detalle" id="detalle" cols="30" rows="10" placeholder="Detalles del Sitio"></textarea><br><br>
            <label for="servicios">Servicios del Sitio: </label><br>
            <textarea name="Servicios" id="servicios" cols="30" rows="10" placeholder="Servicios del Sitio"></textarea><br><br>
            <label for="horario">Horario del Sitio: </label><br>
            <input type="time" name="Horario" id="horario" placeholder="Horario del Sitio"><br><br>
        </fieldset>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>