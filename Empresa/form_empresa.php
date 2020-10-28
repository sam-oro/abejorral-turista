<?php
    require_once "../conexion/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!--inportacion boostrap-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container form-group">
    <h1>Agregar Empresa</h1>
    <form action="insertar_empresa.php" method="post">
        <fieldset class="fieldset">
            <legend>Datos de la Empresa</legend>
            <label for="rut">RUT de la Empresa: </label><br>
            <input type="text" name="RUT_Empresa" id="rut" class="form-control" placeholder="Rut de la Empresa" required><br><br>
            <label for="nombre">Nombre de la Empresa: </label><br>
            <input type="text" name="Nombre" id="nombre" class="form-control" placeholder="Nombre de la Empresa" required><br><br>
            <label for="cel">Celular de la Empresa: </label><br>
            <input type="text" name="Cel" id="cel" class="form-control" placeholder="Celular de la Empresa"><br><br>
            <label for="tel">Telefono de la Empresa: </label><br>
            <input type="text" name="Telefono" id="tel" class="form-control" placeholder="Telefono de la Empresa"><br><br>
            <label for="correo">Correo de la Empresa: </label><br>
            <input type="email" name="Correo" id="correo" class="form-control" placeholder="Correo de la Empresa"><br><br>
            <fieldset>
                <legend>Ubicacion de la Empresa:</legend>
                <label for="departamento">Departamento: </label><br>
                <select name="departamento" id="departamento" class="form-control">
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
                <label for="direccion">Direccion: </label><br>
                <input type="text" name="Direccion" id="direccion" class="form-control" placeholder="Direccion de la Empresa"><br><br>
                <label for="ubicacion">Ubicacion(Coordenadas): </label><br>
                <input type="text" name="Ubicacion" id="ubicacion" class="form-control" placeholder="Ubicacion de la Empresa"><br><br>
            </fieldset>
        </fieldset>
        <input type="submit" value="Enviar" class="btn btn-primary">
    </form>
</div>
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
</body>
</html>