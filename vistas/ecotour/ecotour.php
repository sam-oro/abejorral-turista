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
        <title>EcoTour</title>

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
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-nav">
            <div class="col-sm-3 text-center">
                <a class="navbar-brand" href="<?php echo $URL ?>index.php">
                    <img src="../../img/logo-ver-ng.png" alt="">
                </a>
            </div>

            <button class="navbar-toggler col-sm-3 ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nuestro Municipio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Informate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Eco Turismo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nuestros Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                    <div class="btn-group">
                        <button type="button" class="btn btn-invi dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                        Perfil
                    </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                            <a href="<?php echo $URL; ?>Cliente/mi_perfil/mi_perfil.php"><button class="dropdown-item"
                                type="button">Mi Perfil</button></a>
                            <a href="<?php echo $URL; ?>Cliente/mi_vehiculo/mi_vehiculo.php"><button class="dropdown-item"
                                type="button">Mi Vehículo</button></a>
                            <a href="<?php echo $URL; ?>/Cliente/reservas/reservas.php"><button class="dropdown-item"
                                type="button">Reservas</button></a>
                            <div class="dropdown-divider"></div>
                            <a href="<?php echo $URL; ?>/Cliente/login/cerrar_sesion.php"><button class="dropdown-item"
                                type="button">Cerrar Sesión</button></a>
                        </div>
                    </div>
                </ul>
            </div>
        </nav> -->

        <section class="">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 sli-img" src="../../img/slider-01.jpg">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 sli-img" src="../../img/slider-03.jpg">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 sli-img" src="../../img/slider-02.jpg">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>

        <section class="container">
            <div class="row col-12 mt-5">
                <div class="col-12 col-md-3">
                    <h2>Historia</h2>

                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure harum nesciunt veritatis optio voluptatibus. Fugit accusamus dolores tempore facilis saepe necessitatibus eius totam! Inventore ullam quisquam perspiciatis, aspernatur
                        perferendis maxime ratione cupiditate quos. Nihil repellat delectus, iure accusantium provident in!
                    </p>
                </div>

                <div class="col-12 col-md-9">
                    <?php
                $sel = $conn ->query("SELECT * FROM tblvideo where cod='2'");

                while ($row=$sel->fetch_array()) {
                    echo('<iframe class="col-12 vista-videoo" src="'.$row[2].'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');	
                }
                ?>
                    <?php
                    if(isset($_SESSION['rol'])){
                        if ($_SESSION['rol']==1){
                            ?>
                            <div class="col-12 text-center">
                                <button type="button" class="btn btn-color" data-toggle="modal" data-target="#exampleModal">
                                Cambiar Video
                                </button>
                            </div>
                            <?php
                        }
                    }
                    ?>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Cambiar Video</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">
                                            <form action="../../video/video_ecotour/actu_video.php" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label>Nombre</label>
                                                    <input class="form-control" type="text" name="nombre">
                                                </div>
                                                <fieldset>
                                                    <legend>vídeo</legend>
                                                    <small class="form-text text-muted">Si inserta el video con un URL no es
                                                necesario
                                                que seleccione un video desde su dispositivo y viceversa; Si rellena el
                                                campo
                                                URL y selecciona un archivo desde su dispositivo, se dará prioridad al
                                                URL que
                                                ingreso primero</small>
                                                    <div class="form-group">
                                                        <label>URL Vídeo</label>
                                                        <input class="form-control" type="text" name="url">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Seleccionar Vídeo</label>
                                                        <input class="form-control" type="file" name="video">
                                                    </div>
                                                </fieldset>
                                                <button type="submit" class="btn btn-color">Enviar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </section>

        <section class="sesiones mt-5" style="background-image: url(../../img/sec-01.jpg);">
            <a href="">
                <h2>Hola mundo</h2>
            </a>
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
        <script src="vistas/js/paginacion.js"></script>
    </body>

    </html>