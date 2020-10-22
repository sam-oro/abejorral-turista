<?php
    require_once "../conexion/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <h1>Agregar Empresa</h1>
    <form action="insertar_empresa.php" method="post">
        <fieldset>
            <legend>Datos de la Empresa</legend>
            <label for="nit">NIT de la Empresa: </label><br>
            <input type="text" name="NIT_Empresa" id="nit" placeholder="Nit de la Empresa" required><br><br>
            <label for="rut">RUT de la Empresa: </label><br>
            <input type="text" name="RUT_Empresa" id="rut" placeholder="Rut de la Empresa" required><br><br>
            <label for="nombre">Nombre de la Empresa: </label><br>
            <input type="text" name="Nombre" id="nombre" placeholder="Nombre de la Empresa" required><br><br>
            <label for="cel">Celular de la Empresa: </label><br>
            <input type="text" name="Cel" id="cel" placeholder="Celular de la Empresa"><br><br>
            <label for="tel">Telefono de la Empresa: </label><br>
            <input type="text" name="Telefono" id="tel" placeholder="Telefono de la Empresa"><br><br>
            <label for="correo">Correo de la Empresa: </label><br>
            <input type="email" name="Correo" id="correo" placeholder="Correo de la Empresa"><br><br>
            <fieldset>
                <legend>Ubicacion de la Empresa:</legend>
                <label for="departamento">Departamento: </label><br>
                <select name="departamento" id="departamento">
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
                <input type="text" name="Direccion" id="direccion" placeholder="Direccion de la Empresa"><br><br>
                <label for="ubicacion">Ubicacion(Coordenadas): </label><br>
                <input type="text" name="Ubicacion" id="ubicacion" placeholder="Ubicacion de la Empresa"><br><br>
            </fieldset>
        </fieldset>
        <input type="submit" value="Enviar">
    </form>
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