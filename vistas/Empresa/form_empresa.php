<?php
    require_once "../../conexion/conexion.php";
?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Empresa</title>

        <!--importacion boostrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,700;1,400&display=swap" rel="stylesheet">

        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/f599362e7b.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" type="text/css" href="../../css/style.css">
        <link rel="icon" type="image/png" href="img/icono-pag.png">
    </head>

    <body>

        <section class="bg-forms p-md-5 p-0">
            <div class="container">
                <div class="col-12 p-4" style="background-color: #fff;">
                    <form action="insertar_empresa.php" method="POST">

                        <div class="text-center">
                            <h1>Ingresar una nueva empresa</h1>
                        </div>

                        <div>
                            <h3>Datos:</h3>
                        </div>

                        <div class="form-group">
                            <label class="label-frm" for="nombre">Nombre de la empresa: </label>
                            <input class="form-control" type="text" name="Nombre" id="nombre" placeholder="Ingrese el nombre de la empresa" required>
                        </div>

                        <div class="form-group">
                            <label class="label-frm" for="rut">RUT: </label>
                            <input class="form-control" type="text" name="RUT_Empresa" id="rut" placeholder="Ingrese el RUT" required>
                        </div>

                        <div class="form-group">
                            <label class="label-frm" for="cel">Celular: </label>
                            <input class="form-control" type="text" name="Cel" id="cel" placeholder="Ingrese el celular de la empresa">
                        </div>

                        <div class="form-group">
                            <label class="label-frm" for="tel">Teléfono: </label>
                            <input class="form-control" type="text" name="Telefono" id="tel" placeholder="Ingrese el teléfono de la empresa">
                        </div>

                        <div class="form-group">
                            <label class="label-frm" for="correo">Correo: </label>
                            <input class="form-control" class="form-control" type="email" name="Correo" id="correo" placeholder=" Ingrese el correo de la empresa">
                        </div>

                        <div class="form-group">
                            <label class="label-frm" for="tel">Contraseña: </label>
                            <input class="form-control" type="password" name="contrasena" id="contrasena">
                        </div>

                        <div>
                            <h2>Ubicación de la empresa:</h2>
                        </div>

                        <div class="form-group">
                            <label class="label-frm" for="departamento">Departamento: </label>
                            <select class="form-control" name="departamento" id="departamento">
                                <option value="0" disabled selected>-Seleccione el Departamento-</option>
                                <?php 
                                $sel = $conn->query("SELECT * FROM tbldepartamentos");
                                while ($row=$sel->fetch_array()) {
                                ?>  
                                    <option value="<?php echo $row[0] ?>"><?php echo $row[1] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>

                        <h2>falta municipio</h2>

                        <div class="form-group">
                            <label class="label-frm" for="latitud">Latitud: </label>
                            <input class="form-control" type="text" name="latitud" id="latitud" placeholder="Latitud de la Empresa">
                        </div>

                        <div class="form-group">
                            <label class="label-frm" for="longitud">Longitud: </label>
                            <input class="form-control" type="text" name="longitud" id="longitud" placeholder="Longitud de la Empresa">
                        </div>

                        <div class="text-center">
                            <button class="btn btn-color" type="submit" value="enviar">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <script type="text/javascript">
            $(document).ready(function() {
                recargarLista();

                $('#departamento').change(function() {
                    recargarLista();
                });
            })
        </script>
        <script type="text/javascript">
            function recargarLista() {
                $.ajax({
                    type: "POST",
                    url: "slc_municipio.php",
                    data: "departamento=" + $('#departamento').val(),
                    success: function(r) {
                        $('#municipio').html(r);
                    }
                });
            }
        </script>

        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
    </body>

    </html>