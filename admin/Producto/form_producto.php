<?php
    include "../../conexion/conexion.php";
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../css/style.css">
        <title>Registro Producto</title>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <!--importacion boostrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <header class="navbar navbar-expand-md navbar-dark" id="nav">
            <a href="#">INICIO</a>
        </header>
        <div class="row">
        
            <main class="col-12">
                <div class="container text-center mt-4">
                    <div>
                        <h1>Producto</h1>
                    </div>
                    <div>
                        <form action="ingreso/ingresar_producto.php" name="add_form" method="post">
                            <div class="card-body">
                                <fieldset class="fieldset">
                                <legend class="legend">Información del Producto</legend>
                                    <div class="row">
                                        <div class="col">
                                            <labe>Nombre del Producto</labe>
                                            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese el nombre del Producto">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col">
                                            <labe>Peso</labe>
                                            <input type="text" name="peso" id="peso" class="form-control" placeholder="Ingrese el peso">
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <div class="col">
                                            <label>Cantidad</label>
                                            <input type="text" name="cantidad" id="cantidad" class="form-control" placeholder="Ingrese la Cantidad">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">
                                                <label>Valor</label>
                                                <input type="text" name="valor" id="valor" class="form-control" placeholder="Ingrese el Valor del Producto">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col">
                                            <label>Solicitud</label>
                                            <select name="solicitud" id="solicitud" class="form-control">
                                                <option value="0" selected disabled>-Seleccione la Solicitud-</option>
                                                <?php 
                                                    $sel = $conn ->query("SELECT * FROM tblsolicitud");
                                    
                                                    while ($row=$sel->fetch_array()) {
                                                ?>
                                                    <option value="<?php echo $row[0] ?>"> <?php echo $row[0] ?></option>
                                                <?php	
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col">
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
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col" id="dep">
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
                                        <br>
                                    
                                    
                                    </div>
                                </fieldset>

                                <input type="submit" value="Enviar" class="boton">

                            </div>
                        
                        </form>
                    </div>
                


                </div>

            </main>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    </body>

</html>