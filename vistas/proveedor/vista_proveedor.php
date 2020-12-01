<?php
        include('../../conexion/conexion.php');
        session_start();
        $id=$_GET['Cod_Empresa'];
        
        $sel = $conn ->query("SELECT em.RUT_Empresa as 'RUT', em.Nombre as 'Nombre', em.Cel as 'Celular', em.Telefono as 'Telefono', em.Correo as 'Correo', mun.nombre as 'Municipio', em.Direccion as 'Dirección', em.Ubicacion as 'Ubicación', dep.nombre as 'Departamento' FROM tblempresa as em INNER JOIN tblmunicipios as mun ON em.Id_Municipio=mun.Id_Municipio INNER JOIN tbldepartamentos as dep ON mun.Id_Departamento=dep.Id_Departamento WHERE Cod_Empresa='$id'");

        $row=$sel->fetch_array();
?>
<!DOCTYPE html>
<html lang="es">

<head class="contenido">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
    
    <!--importacion boostrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/f599362e7b.js" crossorigin="anonymous"></script>
    <!--Importacion css bootstrap-->
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <title></title>
</head>

<body >
    <main>
        <div class="contenedor">
            <div class="col-lg-12 col-md-12 col-sm-6 ">
                <h1> <?php echo $row[1] ?>  </h1>                
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                <img class="" src="">
                </div>

                <div class="col-lg-4 col-md-6 col-sm-2 iconos">
                    <ul>
                        <li><img class="icon" src="" alt=""><?php echo $row[0] ?> </li>
                        <li><img class="icon" src="" alt=""><?php echo $row[2] ?></li>
                        <li><img class="icon" src="" alt=""><?php echo $row[3] ?></li>
                        <li><img class="icon" src="" alt=""><?php echo $row[4] ?></li>
                        <li><img class="icon" src="" alt=""><?php echo $row[5] ?></li>
                        <li><img class="icon" src="" alt=""><?php echo $row[6] ?></li>
                        <li><img class="icon" src="" alt=""><?php echo $row[7] ?></li>
                        <li><img class="icon" src="" alt=""><?php echo $row[8] ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="map" ></div>

    </main>

    <script>
        function iniciarMap(){
            var coord = {lat:5.7912889 ,lng: -75.4267816};
            var map = new google.maps.Map(document.getElementById('map'),{
            zoom: 10,
            center: coord
            });
            var marker = new google.maps.Marker({
            position: coord,
            map: map
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBICNPekXKgpgOgnzsKnyQdrYhj51YG0q0&callback=iniciarMap"></script>

    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>
</html>