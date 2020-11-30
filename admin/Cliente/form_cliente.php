<?php
    include "../../conexion/conexion.php";
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">        
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <title>Registro Cliente</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!--importacion boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <main class="col-12">
        <div class="container text-center mt-4">
            <div>
            <h1>Registrar Cliente</h1>
            </div>
            <div>
            <form action="ingreso/ingresar_cliente.php" name="add_form" method="post">
                <fieldset class="fieldset">
                    <legend class="legend">Información del cliente</legend>
                    <labe>Nombre</labe><br>
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese el nombre">
                    <br><br>
                    <labe>Apellidos</labe><br>
                    <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Ingrese el apellido">
                    <br><br>
                    <label>Identificación/NIT</label><br>
                    <input type="text" name="id" id="id" class="form-control" placeholder="Ingrese el número de Identificación">
                    <br><br>
                    <label>Fecha de Nacimiento</label><br>
                    <input type="date" name="fechanacimiento" id="fechanacimiento" class="form-control" placeholder="Ingrese Fecha de Nacimiento">
                    <br><br>
                    <label>Celular</label><br>
                    <input type="text" name="celular" id="celular" class="form-control" placeholder="Ingrese el número de Celular">
                    <br><br>
                    <label>Dirección</label><br>
                    <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Ingrese la Dirección">
                    <br><br>
                    <label for="">Departamento</label><br>
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
                    <br><br>
                    <div class="col" id="mun"></div>
                    </fieldset>
                    <fieldset class="fieldset">
                        <legend class="legend1">Datos de Usuario</legend>
                        <label>Correo</label><br>
                        <input type="email" name="correo" id="correo" class="form-control" placeholder="Ingrese el Correo">
                        <br><br>
                        <label>Contraseña</label><br>
                        <input type="password" name="contraseña" id="contraseña" class="form-control" placeholder="Ingrese la Contraseña">
                        <br><br>
                        <label>Confirmar Contraseña</label><br>
                        <input type="password" name="com-contraseña" id="com-contraseña" class="form-control" placeholder="Confirme la contraseña">
                    </fieldset>
                
                <input type="submit" value="Enviar" class="boton">
            </form>
            </div>
        </div>

    </main>
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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>
</html>