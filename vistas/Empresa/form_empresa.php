<?php
    require_once "../../conexion/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <main class="col-12">
        <div class="container text-center mt-4">
            <div>
            <h1>Agregar Empresa</h1>
            </div>
            <div>
            <form action="insertar_empresa.php" method="POST">
                <fieldset>
                    <legend class="legend">Datos de la Empresa</legend>
                    <label class="label-frm" for="rut">RUT de la Empresa: </label><br>
                    <input class="form-control" type="text" name="RUT_Empresa" id="rut" placeholder="Rut de la Empresa" required><br><br>
                    <label class="label-frm" for="nombre">Nombre de la Empresa: </label><br>
                    <input class="form-control" type="text" name="Nombre" id="nombre" placeholder="Nombre de la Empresa" required><br><br>
                    <label class="label-frm" for="cel">Celular de la Empresa: </label><br>
                    <input class="form-control" type="text" name="Cel" id="cel" placeholder="Celular de la Empresa"><br><br>
                    <label class="label-frm" for="tel">Telefono de la Empresa: </label><br>
                    <input class="form-control" type="text" name="Telefono" id="tel" placeholder="Telefono de la Empresa"><br><br>
                    <label class="label-frm" for="correo">Correo de la Empresa: </label><br>
                    <input class="form-control"  class="form-control" type="email" name="Correo" id="correo" placeholder="Correo de la Empresa"><br><br>
                    <label class="label-frm" for="tel">Contraseña: </label><br>
                    <input class="form-control" type="password-" name="contrasena" id="contrasena"><br><br>
                    <fieldset>
                        <legend class="legend">Ubicacion de la Empresa:</legend>
                        <label class="label-frm" for="departamento">Departamento: </label><br>
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
                        </select><br><br>
                        <div id="municipio"></div>
                        <label class="label-frm" for="direccion">Direccion: </label><br>
                        <input class="form-control" type="text" name="Direccion" id="direccion" placeholder="Direccion de la Empresa"><br><br>
                        <label class="label-frm" for="ubicacion">Ubicacion(Coordenadas): </label><br>
                        <input class="form-control" type="text" name="Ubicacion" id="ubicacion" placeholder="Ubicacion de la Empresa"><br><br>
                    </fieldset>
                </fieldset>
                <input class="boton" type="submit" value="Enviar">
        </form>
            </div>
        </div>

    </main>
    
    <script type="text/javascript">
        $(document).ready(function(){
            recargarLista();

            $('#departamento').change(function() {
                recargarLista();
            });
        })
    </script>
    <script type="text/javascript">
        function recargarLista() {
            $.ajax({
                type:"POST",
                url:"slc_municipio.php",
                data:"departamento="+$('#departamento').val(),
                success:function(r){
                    $('#municipio').html(r);
                }
            });
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>
</html>