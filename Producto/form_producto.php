<?php
    include "../conexion/conexion.php";
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="">
        <title>Registro Producto</title>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
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
                                <legend>Información del Producto</legend>
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

                                <input type="submit" value="Enviar" class="boton ">

                            </div>
                        
                        </form>
                    </div>
                


                </div>

            </main>
        </div>
    </body>

</html>