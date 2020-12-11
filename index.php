<?php
    include "conexion/conexion.php";
    //include "vistas/includes/header_idx.php";
    //include "vistas/includes/header_admin.php";
    //include "vistas/includes/header_user.php";
    //include "vistas/includes/header_company.php";

    session_start();
        if(!isset($_SESSION['rol'])){
            include 'vistas/includes/header_idx.php';
        }else{
            if($_SESSION['rol'] ==2 ){
                include 'vistas/includes/header_user.php';
            }else{
                if ($_SESSION['rol']==1){
                    include 'vistas/includes/header_admin.php';
                }else{
                    include 'vistas/includes/header_company.php';
                }
            }

        }

?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio</title>

        <!--importacion boostrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,700;1,400&display=swap" rel="stylesheet">

        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/f599362e7b.js" crossorigin="anonymous"></script>

        <link rel="icon" type="image/png" href="img/icono-pag.png">

        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <section class="bg-index">
            <h1>Bienvenidos</h1>
        </section>

        <section>
            <?php
        $sel = $conn ->query("SELECT * FROM tblvideo where cod='1'");

        while ($row=$sel->fetch_array()) {
            echo('<div class="col-12 text-center"><iframe class="vista-video" width="560" height="315" src="'.$row[2].'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>');
        }
        ?>
                <div class="text-center">
                    <button type="button" class="btn btn-color" data-toggle="modal" data-target="#exampleModal">
            Cambiar Video
        </button>
                </div>
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
                                    <form action="video/video_idx/actu_video.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input class="form-control" type="text" name="nombre">
                                        </div>
                                        <fieldset>
                                            <legend>vídeo</legend>
                                            <small class="form-text text-muted">Si inserta el video con un URL no es necesario
                                        que seleccione un video desde su dispositivo y viceversa; Si rellena el campo
                                        URL y selecciona un archivo desde su dispositivo, se dará prioridad al URL que
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
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section>
        <a class="twitter-timeline" data-lang="es" data-width="650" data-height="525" href="https://twitter.com/AAbejorral?ref_src=twsrc%5Etfw">Tweets by AAbejorral</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </section>

        <section>
            <div class="container my-3">
                <div class="row iconos-index col-12">
                    <div class="col-12 col-md-3 text-center">
                        <a href="">
                            <img src="img/iconos-02.svg">
                            <h3>Eco Turismo</h3>
                        </a>
                    </div>

                    <div class="col-12 col-md-3 text-center">
                        <a href="">
                            <img src="img/iconos-03.svg">
                            <h3>Sitios para visitar</h3>
                        </a>
                    </div>

                    <div class="col-12 col-md-3 text-center">
                        <a href="">
                            <img src="img/iconos-01.svg">
                            <h3>Rutas históricas</h3>
                        </a>
                    </div>

                    <div class="col-12 col-md-3 text-center">
                        <a href="">
                            <img src="img/iconos-04.svg">
                            <h3>Preguntas frecuentes</h3>
                        </a>
                    </div>
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
                        <a class="redes btn btn-social mx-3" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="redes btn btn-social mx-3" href="#!"><i class="fab fa-facebook-f"></i></a>
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