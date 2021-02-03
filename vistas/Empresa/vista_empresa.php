<?php
        include('../../conexion/conexion.php');
        session_start();
        $id=$_GET['Cod_Empresa'];
        
        $sel = $conn ->query("SELECT em.RUT_Empresa as 'RUT', em.Nombre as 'Nombre', em.Cel as 'Celular', em.Telefono as 'Telefono', em.Correo as 'Correo', mun.nombre as 'Municipio', em.Direccion as 'Dirección', em.Latitud, em.Longitud, dep.nombre as 'Departamento' FROM tblempresa as em INNER JOIN tblmunicipios as mun ON em.Id_Municipio=mun.Id_Municipio INNER JOIN tbldepartamentos as dep ON mun.Id_Departamento=dep.Id_Departamento WHERE Cod_Empresa='$id'");

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


    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="stylesheet" type="text/css" href="../../css/style2.css">


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <title></title>
</head>

<body >
    <section>
        <div class="contenedor col-12"> 
            <div class="row bg col-12 text-center">
            <div id="map"></div>
                <h1 class="title"><?php echo $row[1] ?></h1>
            </div>
        </div>
    </section>
        <div class="contenedor">
            <div class="row bg">
                <div class="card">
                    <i class="fas fa-address-card"></i>
                    <h2 class="titulo">RUT</h2>
                    <p><?php echo $row[0] ?></p>
                </div>
                <div class="card">
                    <i class="fas fa-mobile-alt"></i>
                    <h2 class="titulo">Celular</h2>
                    <p><?php echo $row[2] ?></p>
                </div>
                <div class="card">
                    <i class="fas fa-phone-alt"></i>
                    <h2 class="titulo">Teléfono</h2>
                    <p><?php echo $row[3] ?></p>
                </div>
                <div class="card">
                    <i class="fas fa-envelope"></i>
                    <h2 class="titulo">Correo</h2>
                    <p><?php echo $row[4] ?></p>
                </div>
                <div class="card">
                    <i class="fas fa-globe-americas"></i>
                    <h2 class="titulo">Departamento</h2>
                    <p><?php echo $row[9] ?></p>
                </div>
                <div class="card">
                    <i class="fas fa-map-marked-alt"></i>
                    <h2 class="titulo">Ciudad</h2>
                    <p><?php echo $row[5] ?></p>
                </div>
                <div class="card">
                    <i class="fas fa-map-marker-alt"></i>
                    <h2 class="titulo">Dirección</h2>
                    <p><?php echo $row[6] ?></p>
                </div>
                
            </div>
        </div>

        <footer class="footer mt-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 text-lg-center text-center contac">
                        <a href="<?php echo $URL ?>vistas/Contacto/contacto.php">
                        <h3 class="contach">Contáctenos</h3>
                        </a>
                    </div>
                    <div class="col-lg-6 my-3 my-lg-0 text-lg-center text-center">
                        <a class="redes btn btn-social mx-3" target="_blank" href="https://twitter.com/AAbejorral?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fab fa-twitter"></i></a>
                        <a class="redes btn btn-social mx-3" target="_blank" href="https://www.facebook.com/alcaldia.abejorral/"><i class="fab fa-facebook-f"></i></a>
                        <a class="redes btn btn-social mx-3" href="#!"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="col-lg-3 text-lg-left text-center copy">©Abejorral2020</div>
                </div>
            </div>
        </footer>
        

    <script>
        function iniciarMap(){
            var coord = {lat:<?php echo $row[7] ?> ,lng: <?php echo $row[8] ?>};
            var map = new google.maps.Map(document.getElementById('map'),{
            zoom: 12,
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