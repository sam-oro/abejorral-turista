<?php
    include "../conexion/conexion.php";
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="">
        <title>Registro Cliente</title>
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
                        <h1>Registrar Cliente</h1>
                    </div>
                    <div>
                        <form action="ingreso/ingresar_cliente.php" name="add_form" method="post">
                            <div class="card-body">
                                <fieldset class="fieldset">
                                <legend>Información del cliente</legend>
                                    <div class="row">
                                        <div class="col">
                                            <labe>Nombre</labe>
                                            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese el nombre">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col">
                                            <labe>Apellidos</labe>
                                            <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Ingrese el apellido">
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <div class="col">
                                            <label>Identificación/NIT</label>
                                            <input type="text" name="id" id="id" class="form-control" placeholder="Ingrese el número de Identificación">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">
                                                <label>Fecha de Nacimiento</label>
                                                <input type="date" name="fechanacimiento" id="fechanacimiento" class="form-control" placeholder="Ingrese Fecha de Nacimiento" >
                                            </div>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <div class="col">
                                            <label>Correo</label>
                                            <input type="email" name="correo" id="correo" class="form-control"  placeholder="Ingrese el Correo">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col">
                                            <label>Celular</label>
                                            <input type="text" name="celular" id="celular" class="form-control" placeholder="Ingrese el número de Celular">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col">
                                            <label>Dirección</label>
                                            <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Ingrese la Dirección">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col" id="dep">
                                            <label for="">Departamento</label>
                                            <select name="departamento" id="departamento" class="form-control">
                                                <option value="0" selected disabled>-Seleccione el Departamento-</option>
                                                <?php 
                                                    $sel = $conn ->query("SELECT * FROM tbldepartamentos");
                                    
                                                    while ($row=$sel->fetch_array()) {
                                                ?>
                                                    <option value="<?php echo $row[0] ?>"> <?php echo $row[1] ?></option>
                                                <?php	
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <br>
                                        <div class="col" id="mun">
                                            
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

        <script type="text/javascript">
        $(document).ready(function(){

            recargarLista();
            
            $('#departamento').change(function(){
                recargarLista();
            });
        })
    </script>

    <script type="text/javascript">
        function recargarLista(){
            $.ajax({
                type:"POST",
                url:"lista.php",
                data:"departamento=" + $('#departamento').val(),
                success:function(r){
                    $('#mun').html(r);
                }
            });
        }
    </script>
    </body>

</html>