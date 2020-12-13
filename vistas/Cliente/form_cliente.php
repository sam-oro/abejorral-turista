<?php
    include "../../conexion/conexion.php";
?>
    <!DOCTYPE html>

    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Registro Cliente</title>

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
                    <form action="ingreso/ingresar_cliente.php" name="add_form" method="POST">

                        <div class="text-center">
                            <h1>Ingresar un nuevo cliente</h1>
                        </div>

                        <div>
                            <h3>Información del cliente:</h3>
                        </div>

                        <div class="form-group">
                            <label class="label-frm">Nombre:</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese su nombre">
                        </div>

                        <div class="form-group">
                            <label class="label-frm">Apellidos:</label>
                            <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Ingrese sus apellidos">
                        </div>

                        <div class="form-group">
                            <label class="label-frm">Identificación/NIT:</label>
                            <input type="text" name="id" id="id" class="form-control" placeholder="Ingrese el número de Identificación">
                        </div>

                        <div class="form-group">
                            <label class="label-frm">Fecha de nacimiento:</label>
                            <input type="date" name="fechanacimiento" id="fechanacimiento" class="form-control" placeholder="Ingrese su fecha de nacimiento">
                        </div>

                        <div class="form-group">
                            <label class="label-frm">Correo:</label>
                            <input type="email" name="correo" id="correo" class="form-control" placeholder="Ingrese su correo eléctronico">
                        </div>

                        <div class="form-group">
                            <label class="label-frm">Contraseña</label>
                            <input type="password" name="contrasena" id="contrasena" class="form-control" placeholder="Ingrese la Contraseña">
                        </div>

                        <div class="form-group">
                            <label class="label-frm">Confirmar Contraseña</label>
                            <input type="password" name="com-contrasena" id="com-contraseña" class="form-control" placeholder="Confirme la contraseña">
                        </div>

                        <div class="form-group">
                            <label class="label-frm">Celular:</label>
                            <input type="text" name="celular" id="celular" class="form-control" placeholder="Ingrese el número de celular">
                        </div>

                        <div class="form-group">
                            <label class="label-frm">Dirección:</label>
                            <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Ingrese su dirección de residencia">
                        </div>

                        <div>
                            <h2>Localización:</h2>
                        </div>

                        <div class="form-group">
                            <label class="label-frm" for="">Departamento:</label>
                            <select name="departamento" id="departamento" class="form-control">
                                <option value="0" selected="selected" disabled="disabled">-Seleccione el Departamento-</option>
                                <?php 
                                    $sel = $conn ->query("SELECT * FROM tbldepartamentos");
                                    while ($row=$sel->fetch_array()) {
                                ?>
                                <option value="<?php echo $row[0] ?>"><?php echo $row[1] ?></option>
                                <?php	
                                    }
                                ?>
                            </select>
                        </div>

                        <div id="mun"></div>

                        <div class="text-center">
                            <button class="btn btn-color" type="submit" value="enviar">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>

        <script type="text/javascript">
            function recargarLista(){
                $.ajax({
                    type: "POST",
                    url: "lista.php",
                    data: "departamento="+$('#departamento').val(),
                    success: function(r){
                        $('#mun').html(r);
                    }
                });
            }
        </script>
        <script type="text/javascript">
            $(document).ready(function(){
                recargarLista();

                $().change(function(){
                    recargarLista();
                });
            })
        </script>
    </body>

    </html>