<?php
    require_once "../../conexion/conexion.php";
?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Sitio</title>

        <!--importacion boostrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,700;1,400&display=swap" rel="stylesheet">

        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/f599362e7b.js" crossorigin="anonymous"></script>

        <link rel="icon" type="image/png" href="img/icono-pag.png">

        <link rel="stylesheet" href="../../css/style.css">
    </head>

    <body>

        <section class="bg-forms p-md-5 p-0">
            <div class="container">
                <div class="col-12 p-4" style="background-color: #fff;">
                    <form action="insertar_sitio.php" method="POST">

                        <div class="text-center my-3">
                            <h2>Formulario de sitio</h2>
                        </div>

                        <div class="form-group">
                            <label for="nombre">Nombre del sitio: </label>
                            <input class="form-control" type="text" name="Nombre" id="nombre" placeholder="Escriba aquí el nombre del sitio" required>
                        </div>

                        <div class="form-group">
                            <label for="ubicacion">Ubicación/Coordenadas: </label>
                            <input class="form-control" type="text" name="Ubicacion" id="ubicacion" placeholder="Ubicacion del sitio">
                        </div>

                        <div class="form-group">
                            <label for="detalle">Detalles del sitio: </label>
                            <textarea class="form-control" name="Detalle" id="detalle" placeholder="Describa los detalles del sitio" maxlength="400" style="height: 15vh;"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="servicios">Servicios del sitio: </label>
                            <textarea class="form-control" name="Servicios" id="servicios" placeholder="Servicios del Sitio" maxlength="400" style="height: 15vh;"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="horario">Horario del sitio: </label>
                            <input class="form-control" type="time" name="Horario" id="horario" placeholder="Horario de atención">
                        </div>

                        <div class="text-center col-12">
                            <button type="submit" class="btn btn-color mt-3">Enviar</button>
                        </div>

                    </form>
                </div>

        </section>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
    </body>

    </html>