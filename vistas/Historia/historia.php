<?php
    include "../../conexion/conexion.php";
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
    <title>Historia de Abejorral</title>

    <!--importacion boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,700;1,400&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/f599362e7b.js" crossorigin="anonymous"></script>

    <link rel="icon" type="image/png" href="img/icono-pag.png">

    <link rel="stylesheet" href="../../css/style.css">

    <!-- js para el librito de historia -->
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; CHARSET=UTF-8">

    <script type="text/javascript" src="../js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="../js/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="../js/three.min.js"></script>
    <script type="text/javascript" src="../js/jquery.onebook3d-2.33.js?2"></script>
    <script type="text/javascript" src="../js/libro.js"></script>




</head>

<body>
    <section class="bg-historia">
        <h1>Nuestra Historia</h1>
    </section>



    <section class="container">
        <div class="row col-12 my-5">
            <div class="col-12">
                <h2 class="text-center">Historia de Abejorral</h2>

                <p>
                    Por ser cuna de muchos personajes ilustres de la historia de Colombia, Abejorral se conoce como “La
                    Tierra de los Cien Señores”. y “Ciudad Astillero”.<br><br>

                    La región que hoy ocupa este distrito estuvo habitada por etnias aborígenes del grupo Armas cuando
                    llegaron los conquistadores españoles. El territorio estaba en la ruta del Mariscal Jorge Robledo
                    cuando expedicionó por el río Cauca hacia el norte de Antioquia partiendo del poblado de Arma y por
                    las fechas de 1561. Por eso se considera que fue Robledo el primer español que pisó este
                    suelo.<br><br>

                    Se considera a 1805 como el año de su fundación, aunque otros estudiosos opinan que es 1811. En 1812
                    comenzó a funcionar la parroquia oficial en el lugar. 1814 es el año de su erección en municipio con
                    el nombre de Mesenia, y poco después adquiriría su nombre actual, Abejorral. La comunidad ha sido
                    cuna de personajes muy ilustres en las ciencias, las leyes y las artes.<br><br>

                    Abejorral recibió este nombre pues sus pobladores iniciales encontraron abejorros abundantes en las
                    orillas de la circundante quebrada Las Yeguas. Durante algún tiempo también se llamó Sitio de
                    Nuestra Señora del Carmen y Santa Catalina de Abejorral.<br><br>

                    Es considerado uno de los municipios más lindos de Antioquia, pues se encuentra muy bien conservado,
                    con aquella arquitectura de principios de 1800, tanto así que el Ministerio de Cultura declaró 23 de
                    sus manzanas bien Arquitectónico.

                </p>
            </div>
        </div>
    </section>

    <section class="">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 sli-img" src="../../img/slider-04.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 sli-img" src="../../img/slider-05.jpg">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </section>

    <section>

        <div class="section red">
            <div style="padding:30px;">
                <div id="photobook" style="height:100px;"></div>
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
                    <a class="redes btn btn-social mx-3" target="_blank"
                        href="https://twitter.com/AAbejorral?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i
                            class="fab fa-twitter"></i></a>
                    <a class="redes btn btn-social mx-3" target="_blank"
                        href="https://www.facebook.com/alcaldia.abejorral/"><i class="fab fa-facebook-f"></i></a>
                    <a class="redes btn btn-social mx-3" href="#!"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="col-lg-3 text-lg-left text-center copy">
                    <div class="copy__img">
                        <img src="../../img/logo-tecno.png" alt="">
                    </div>
                    <div class="copy__texto">
                        ©Abejorral
                        <?php echo date('Y'); ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!-- <script src="vistas/js/paginacion.js"></script> -->
</body>

</html>