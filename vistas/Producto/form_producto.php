<?php
    include "../../conexion/conexion.php";
?>
    <!DOCTYPE html>

    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Registro Producto</title>

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
                            <h1>Ingresar una nuevo producto</h1>
                        </div>

                        <div>
                            <h3>Datos del producto:</h3>
                        </div>

                        <div class="form-group">
                            <labe>Nombre del Producto</labe>
                            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese el nombre del producto">
                        </div>

                        <h3>peso?</h3>

                        <div class="form-group">
                            <labe>Peso:</labe>
                            <input type="text" name="peso" id="peso" class="form-control" placeholder="Ingrese el peso">
                        </div>

                        <div class="form-group">
                            <label>Cantidad:</label>
                            <input type="text" name="cantidad" id="cantidad" class="form-control" placeholder="Ingrese la cantidad del producto">
                        </div>

                        <div class="form-group">
                            <label>Valor/Precio:</label>
                            <input type="text" name="valor" id="valor" class="form-control" placeholder="Ingrese el valor del producto">
                        </div>

                        <div class="form-group">
                            <label>Solicitud</label>
                            <select name="solicitud" id="solicitud" class="form-control">
                                <option value="0" selected disabled>-Seleccione la Solicitud-</option>
                                <?php 
                                    $sel = $conn ->query("SELECT * FROM tblsolicitud");
                    
                                    while ($row=$sel->fetch_array()) {
                                ?>
                                    <option value="<?php echo $row[0] ?>"> <?php echo $row[1] ?></option>
                                <?php	
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Empresa</label>
                            <select name="empresa" id="empresa" class="form-control">
                                <option value="0" selected disabled>-Seleccione la Empresa-</option>
                                <?php 
                                    $sel = $conn ->query("SELECT * FROM tblempresa");
                    
                                    while ($row=$sel->fetch_array()) {
                                ?>
                                    <option value="<?php echo $row[0] ?>"> <?php echo $row[2] ?></option>
                                <?php	
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Proveedor</label>
                            <select name="proveedor" id="proveedor" class="form-control">
                                <option value="0" selected disabled>-Seleccione el Proveedor-</option>
                                <?php 
                                    $sel = $conn ->query("SELECT * FROM tblproveedor_natural");
                    
                                    while ($row=$sel->fetch_array()) {
                                ?>
                                    <option value="<?php echo $row[0] ?>"> <?php echo $row[2] ?></option>
                                <?php	
                                }
                                ?>
                            </select>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-color" type="submit" value="enviar">Enviar</button>
                        </div>
                    </form>
                </div>
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