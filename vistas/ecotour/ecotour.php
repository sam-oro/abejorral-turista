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
    <title>Turismo</title>

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
            <div class="col-12 col-md-6">
                <h2>Turismo</h2>

                <p>En los últimos años en nuestro municipio, propios y foráneos, se han interesado por transformar ideas
                    en realidades que finalmente terminan siendo sitios naturales de interés turístico para un sin
                    número de visitantes, algunos de estos
                    lugares ya muy conocidos por todos en general, como El Parador Los Chorritos, los saltos de los ríos
                    Aures y Buey, trapiches paneleros, rutas por caminos ancestrales donde algunas vez tuvieron su papel
                    protagónico las prácticas
                    de arriería; también en este proceso han aparecido otros lugares que para los abejorraleños hubiesen
                    sido en otro tiempo sitios un poco fantasiosos, como La Casa en el Aire, El Hostal La Peña, Los
                    Peñoles, Utopía Casa Hotel, La
                    Casa de RoRo, Los Saltos Ecoparque, cada uno de estos con prácticas en la altura como cable vuelo,
                    hamacas, péndulo, escalada en roca, vía ferrata, picnic aéreo, zona de Camping, senderismo, entre
                    otros; ya posicionados además
                    a nivel nacional e internacional y ni hablar del gran potencial en su fauna y flora, en sus
                    prácticas agrícolas, en sus paisajes de gran valor para todos los que admiramos estas montañas
                    llenas de tesoros, caminos de la colonización
                    y asentamientos indígenas, que finalmente se convierten en un gran libro de historias escrito por
                    nuestros abuelos.
                </p>
            </div>

            <div class="col-12 col-md-6">
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
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
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
                                    <form action="../../video/video_ecotour/actu_video.php" method="post"
                                        enctype="multipart/form-data">
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

    <section class="tarjetas-sitios">
        <?php
            $sel5 = $conn -> query("SELECT * FROM tblsitio WHERE tipo_sitio = 'Rutas Naturales'");
            ?>
        <div class="tipo-sitio">
            <div class="row">
                <h1>RUTAS NATURALES</h1>
            </div>
            <?php 
                    if (($sel5->num_rows)==0) {
                        echo "<h1>No hubo resultados en la busqueda</h1>";
                    }else{
                    ?>
            <div class="row" style="overflow: scroll; height: 72vh;">
                <?php
                        while ($fila5 = $sel5 -> fetch_assoc()) {
                    ?>
                <div class="tarjetas-sitios__contenedor">
                    <div class="tarjetas-sitios__img">
                        <img src="<?php echo $urlimagen.$fila5['img']?>" alt="">
                    </div>

                    <div class="tarjetas-sitios__info">
                        <h3 class="tarjetas-sitios__titulo">
                            <?php echo $fila5['Nombre']?>
                        </h3>

                        <p class="tarjetas-sitios__parrafo">
                            <?php echo $fila5['Detalle']?>
                        </p>

                        <div class="text-center">
                            <button class="btn btn-color"><i
                                    class="fab fa-whatsapp mr-2"></i><?php echo $fila5['Telefono']?></button>
                            <a href="<?php echo $fila5['Web']?>" target="_blank" class="btn btn-color">pagina Web</a>
                        </div>
                    </div>
                </div>
                <?php
                    }
                    ?>
            </div>
            <?php } ?>
        </div>

        <?php
            $sel4 = $conn -> query("SELECT * FROM tblsitio WHERE tipo_sitio = 'Rutas Hisoricas'");
            ?>
        <div class="tipo-sitio">
            <div class="row">
                <h1>RUTAS HISTORICAS</h1>
            </div>
            <?php 
                    if (($sel4->num_rows)==0) {
                        echo "<h1>No hubo resultados en la busqueda</h1>";
                    }else{
                    ?>
            <div class="row" style="overflow: scroll; height: 72vh;">
                <?php
                        while ($fila4 = $sel4 -> fetch_assoc()) {
                    ?>
                <div class="tarjetas-sitios__contenedor">
                    <div class="tarjetas-sitios__img">
                        <img src="<?php echo $urlimagen.$fila4['img']?>" alt="">
                    </div>

                    <div class="tarjetas-sitios__info">
                        <h3 class="tarjetas-sitios__titulo">
                            <?php echo $fila4['Nombre']?>
                        </h3>

                        <p class="tarjetas-sitios__parrafo">
                            <?php echo $fila4['Detalle']?>
                        </p>

                        <div class="text-center">
                            <button class="btn btn-color"><i
                                    class="fab fa-whatsapp mr-2"></i><?php echo $fila4['Telefono']?></button>
                            <a href="<?php echo $fila4['Web']?>" target="_blank" class="btn btn-color">pagina Web</a>
                        </div>
                    </div>
                </div>
                <?php
                    }
                    ?>
            </div>
            <?php } ?>
        </div>
        <?php
            $sel1 = $conn -> query("SELECT * FROM tblsitio WHERE tipo_sitio = 'Hospedaje' ORDER BY Cod_Sitio DESC");
            ?>
        <div class="tipo-sitio">
            <div class="row">
                <h1>HOSPEDAJES</h1>
            </div>
            <?php 
                    if (($sel1->num_rows)==0) {
                        echo "<h1>No hubo resultados en la busqueda</h1>";
                    }else{
                    ?>
            <div class="row" style="overflow: scroll; height: 72vh;">
                <?php
                        while ($fila1 = $sel1 -> fetch_assoc()) {
                    ?>
                <div class="tarjetas-sitios__contenedor">
                    <div class="tarjetas-sitios__img">
                        <img src="<?php echo $urlimagen.$fila1['img']?>" alt="">
                    </div>

                    <div class="tarjetas-sitios__info">
                        <h3 class="tarjetas-sitios__titulo">
                            <?php echo $fila1['Nombre']?>
                        </h3>

                        <p class="tarjetas-sitios__parrafo">
                            <?php echo $fila1['Detalle']?>
                        </p>

                        <div class="text-center">
                            <button class="btn btn-color"><i
                                    class="fab fa-whatsapp mr-2"></i><?php echo $fila1['Telefono']?></button>
                            <a href="<?php echo $fila1['Web']?>" target="_blank" class="btn btn-color">pagina Web</a>
                        </div>
                    </div>
                </div>
                <?php
                    }
                    ?>
            </div>
            <?php } ?>
        </div>

        <?php
            $sel2 = $conn -> query("SELECT * FROM tblsitio WHERE tipo_sitio = 'Restaurante' ORDER BY Cod_Sitio DESC");
            ?>
        <div class="tipo-sitio">
            <div class="row">
                <h1>RESTAURANTES</h1>
            </div>
            <?php 
                    if (($sel2->num_rows)==0) {
                        echo "<h1>No hubo resultados en la busqueda</h1>";
                    }else{
                    ?>
            <div class="row" style="overflow: scroll; height: 72vh;">
                <?php
                        while ($fila2 = $sel2 -> fetch_assoc()) {
                    ?>
                <div class="tarjetas-sitios__contenedor">
                    <div class="tarjetas-sitios__img">
                        <img src="<?php echo $urlimagen.$fila2['img']?>" alt="">
                    </div>

                    <div class="tarjetas-sitios__info">
                        <h3 class="tarjetas-sitios__titulo">
                            <?php echo $fila2['Nombre']?>
                        </h3>

                        <p class="tarjetas-sitios__parrafo">
                            <?php echo $fila2['Detalle']?>
                        </p>

                        <div class="text-center">
                            <button class="btn btn-color"><i
                                    class="fab fa-whatsapp mr-2"></i><?php echo $fila2['Telefono']?></button>
                            <a href="<?php echo $fila2['Web']?>" target="_blank" class="btn btn-color">pagina Web</a>
                        </div>
                    </div>
                </div>
                <?php
                    }
                    ?>
            </div>
            <?php } ?>
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
                        <h5>Apoyado por:</h5>
                        <img src="../../img/logo-tecno.png" alt="">
                    </div>
                    <div class="copy__texto">
                        ©Abejorral
                        <?php echo date('Y'); ?>
                    </div>
                </div>
            </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="vistas/js/paginacion.js"></script>
</body>

</html>