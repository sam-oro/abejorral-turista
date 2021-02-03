<?php
    include('../../conexion/conexion.php');

    session_start();
        if(!isset($_SESSION['rol'])){
            include '../includes/header_idx.php';
        }else{
            if($_SESSION['rol'] ==2 ){
                include '../includes/header_user.php';
            }else{
                if ($_SESSION['rol']==1){
                    include '../includes/header_admin.php';
                }else{
                    include '../includes/header_company.php';
                }
            }

        }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestro Municipio</title>

    <!--importacion boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/f599362e7b.js" crossorigin="anonymous"></script>

    <link rel="icon" type="image/png" href="img/icono-pag.png">

    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>

    <!-- git -->

    <section class="sesiones" style="background-image: url(../../img/sec-01.jpg);">
        <div class="container my-5">
            <div class="col-12 text-center">
                <h2>Hola mundo</h2>
            </div>

            <div class="col-12 mt-3">
                <p style="color: #fff;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit neque, autem, cupiditate officia labore dolorum numquam obcaecati quae possimus corrupti aliquam odit ipsum suscipit voluptatibus. Nemo eveniet magni porro nesciunt cum exercitationem
                    id possimus facere ducimus vero! Aliquam maxime sit aliquid rem quas ratione, vitae deleniti assumenda. Ipsum, magnam dignissimos.</p>
            </div>
        </div>
    </section>

    <section class="sesiones">
        <div class="container my-5">
            <div class="col-12 text-center">
                <h2>Hola mundo</h2>
            </div>

            <div class="col-12 mt-3">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit neque, autem, cupiditate officia labore dolorum numquam obcaecati quae possimus corrupti aliquam odit ipsum suscipit voluptatibus. Nemo eveniet magni porro nesciunt cum exercitationem
                    id possimus facere ducimus vero! Aliquam maxime sit aliquid rem quas ratione, vitae deleniti assumenda. Ipsum, magnam dignissimos.</p>
            </div>
        </div>
    </section>

    <section class="sesiones" style="background-image: url(../../img/sec-01.jpg);">
        <div class="container my-5">
            <div class="col-12 text-center">
                <h2>Hola mundo</h2>
            </div>

            <div class="col-12 mt-3">
                <p style="color: #fff;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit neque, autem, cupiditate officia labore dolorum numquam obcaecati quae possimus corrupti aliquam odit ipsum suscipit voluptatibus. Nemo eveniet magni porro nesciunt cum exercitationem
                    id possimus facere ducimus vero! Aliquam maxime sit aliquid rem quas ratione, vitae deleniti assumenda. Ipsum, magnam dignissimos.</p>
            </div>
        </div>
    </section>

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


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>