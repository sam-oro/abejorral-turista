<?php
    require_once "../../conexion/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!--importacion boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <main class="col-12">
        <div class="container text-center mt-4">
            <div>
                <h1>Agregar Sitio</h1>
            </div>
            <div>
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
                    <input type="submit" class="boton" value="Enviar">
                </form>
            </div>

        </div>

    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>
</html>