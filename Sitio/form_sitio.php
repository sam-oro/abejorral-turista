<?php
    require_once "../conexion/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!--inportacion boostrap-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container form-group">
    <h1>Agregar Sitio</h1>
    <form action="insertar_sitio.php" method="post">
        <fieldset>
            <label for="nombre">Nombre del Sitio: </label><br>
            <input type="text" name="Nombre" id="nombre" class="form-control" placeholder="Nombre del Sitio" required><br><br>
            <label for="ubicacion">Ubicacion(Coordenadas): </label><br>
            <input type="text" name="Ubicacion" id="ubicacion" class="form-control" placeholder="Ubicacion del Sitio"><br><br>
            <label for="detalle">Detalles del Sitio: </label><br>
            <textarea name="Detalle" id="detalle" cols="30" rows="10" class="form-control" placeholder="Detalles del Sitio"></textarea><br><br>
            <label for="servicios">Servicios del Sitio: </label><br>
            <textarea name="Servicios" id="servicios" cols="30" rows="10" class="form-control" placeholder="Servicios del Sitio"></textarea><br><br>
            <label for="horario">Horario del Sitio: </label><br>
            <input type="time" name="Horario" id="horario"  class="form-control" placeholder="Horario del Sitio"><br><br>
        </fieldset>
        <input type="submit" value="Enviar" class="btn btn-primary">
    </form>
</div>
</body>
</html>