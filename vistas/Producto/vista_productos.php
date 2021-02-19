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
        <title>Productos</title>

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

    <body class="color-index">
        <section class="bg-productos">
            <h1>Productos</h1>
        </section>

        <section class="container">
            <div class="row col-12 my-5">
                <div class="col-12">

                    <p>
                        Abejorral es un municipio con una población de 6.765 habitantes en la zona urbana y 12.331 en la zona rural, lo que lo convierte en un territorio en su mayor parte campesino. El sábado es el día de mercado, los campesinos sacan los productos cultivados en sus fincas para la comercialización local y regional.
                        <br><br>
                        La diversidad de climas que tiene el municipio, permiten que la oferta en alimentos sea amplia. Maíz, frijol, plátano, cacao, tomate, frutales como mango, mandarina, guanábana, granadilla, entre otros, aquí se cultivan y muchos de estos son tipo exportación.
                        <br><br>
                        En el primer reglón de la economía abejorraleña se ubica el café. Abejorral es el principal productor en el oriente Antioqueño con 3.556 hectáreas en producción.
                        <br>
                        La ganadería de leche produce alrededor de 60.000 litros por día, cuenta con 36.000 hectáreas en pastos y se ubica en el segundo renglón de la economía local.
                        <br>
                        Abejorral es el cuarto municipio en Antioquia con mayor cantidad d predios certificados en buenas prácticas agrícolas en aguacate tipo exportación, siendo este el tercer renglón de la economía.
                        <br>
                        La floricultura, aunque en menor parte, también hace parte de la economía de Abejorral, generando mejores condiciones de vida a la población.

                    </p>
                </div>
            </div>
        </section>

        <section class="mt-5">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 sli-img" src="../../img/slider-06.jpg">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 sli-img" src="../../img/slider-07.jpg">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 sli-img" src="../../img/slider-08.jpg">
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

        <div class="cont">
            <div class="productos">
                <div class="producto">
                    <div class="col-12 titulo-cafe">
                        <h1>CAFÉ</h1>
                    </div>
                    <div class="row contenedor d-md-flex m-4 cards-info">
                        <?php $sel=$conn->query("SELECT `tblproducto`.`Nom_Producto`, `tblproducto`.`img1`, `tblproducto`.`img2`, `tblproducto`.`img3`, `tblproducto`.`Valor`, `tblproducto`.`descripcion`,  `tblempresa`.`Nombre`, `tblempresa`.`Cel`, `tblempresa`.`Correo`, `tblempresa`.`Direccion`
                        FROM `tblproducto` 
	                    LEFT JOIN `tblempresa` ON `tblproducto`.`Cod_Empresa` = `tblempresa`.`Cod_Empresa` WHERE `tblproducto`.`cafe`=1 AND `tblproducto`.`estado`=1"); 
                        $cont=0;
                        while($fila=$sel->fetch_assoc()){
                            $cont++;
                            ?>
                        <div class="card m-2 col-12 col-md-3">
                            <img src="<?php echo $urlimagen.$fila['img1']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="text-center">
                                    <h3 style="text-transform:capitalize;">
                                        <?php echo $fila['Nom_Producto'] ?>
                                    </h3>
                                    <i class="fas fa-shopping-basket"> Precio: <?php echo $fila['Valor'] ?> </i>
                                </div>
                                <div class="text-center">
                                    <button type="button" class="btn btn-admin mt-3" data-toggle="modal" data-target="#modal1<?php echo $cont; ?>">Ver producto</button>
                                </div>
                            </div>
                        </div>

                        <div class="modal" tabindex="-1" role="dialog" id="modal1<?php echo $cont; ?>">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title" style="text-transform:capitalize;">
                                            <?php echo $fila['Nom_Producto'] ?>
                                        </h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="col mt-3 card">
                                            <img src="<?php echo $urlimagen.$fila['img1']; ?>" class="card-img-top" alt="...">
                                        </div>
                                        <div class="col mt-3">
                                            <label><?php echo $fila['descripcion']; ?></label>
                                        </div>

                                        <div class="col mt-3">
                                            <label><i class="fas fa-user mr-2"></i><?php echo $fila['Nombre']; ?></label>
                                        </div>

                                        <div class="col mt-3">
                                            <label><i class="fas fa-phone-alt mr-2"></i><?php echo $fila['Cel']; ?></label>
                                        </div>

                                        <div class="col mt-3">
                                            <label><i class="fas fa-envelope mr-2"></i><?php echo $fila['Correo']; ?></label>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>

                            <!-- <div class="card m-2 col-12 col-md-3">
                            <img src="../../img/slider-02.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="text-center">
                                    <h3 style="text-transform:uppercase;">Nom producto</h3>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <i class="fas fa-shopping-basket"> Precio </i>
                                </div>
                                <div class="text-center">
                                    <a href="#"><button class="btn btn-admin mt-3">Ver producto</button></a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <section class="mt-5">
            <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel1">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 sli-img" src="../../img/slider-09.jpg">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 sli-img" src="../../img/slider-10.jpg">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 sli-img" src="../../img/slider-11.jpg">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>

        <div class="cont">
            <div class="productos">
                <div class="producto">
                    <div class="col-12 titulo-otros">
                        <h1>OTROS PRODUCTOS</h1>
                    </div>
                    <div class="row contenedor d-md-flex m-4 cards-info">
                        <?php $sel=$conn->query("SELECT `tblproducto`.`Nom_Producto`, `tblproducto`.`img1`, `tblproducto`.`img2`, `tblproducto`.`img3`, `tblproducto`.`Valor`, `tblproducto`.`descripcion`,  `tblempresa`.`Nombre`, `tblempresa`.`Cel`, `tblempresa`.`Correo`, `tblempresa`.`Direccion`
                        FROM `tblproducto` 
	                    LEFT JOIN `tblempresa` ON `tblproducto`.`Cod_Empresa` = `tblempresa`.`Cod_Empresa` WHERE `tblproducto`.`cafe`=0 AND `tblproducto`.`estado`=1"); 
                        $cont=0;
                        while($fila=$sel->fetch_assoc()){
                            $cont++;
                            ?>
                        <div class="card m-2 col-12 col-md-3">
                            <img src="<?php echo $urlimagen.$fila['img1']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="text-center">
                                    <h3 style="text-transform:capitalize;">
                                        <?php echo $fila['Nom_Producto'] ?>
                                    </h3>
                                    <i class="fas fa-shopping-basket"> Precio: <?php echo $fila['Valor'] ?> </i>
                                </div>
                                <div class="text-center">
                                    <button type="button" class="btn btn-admin mt-3" data-toggle="modal" data-target="#modal<?php echo $cont; ?>">Ver producto</button>
                                </div>
                            </div>
                        </div>

                        <div class="modal" tabindex="-1" role="dialog" id="modal<?php echo $cont; ?>">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title" style="text-transform:capitalize;">
                                            <?php echo $fila['Nom_Producto'] ?>
                                        </h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="col mt-3 card">
                                            <img src="<?php echo $urlimagen.$fila['img1']; ?>" class="card-img-top" alt="...">
                                        </div>
                                        <div class="col mt-3">
                                            <label><?php echo $fila['descripcion']; ?></label>
                                        </div>

                                        <div class="col mt-3">
                                            <label><i class="fas fa-user mr-2"></i><?php echo $fila['Nombre']; ?></label>
                                        </div>

                                        <div class="col mt-3">
                                            <label><i class="fas fa-phone-alt mr-2"></i><?php echo $fila['Cel']; ?></label>
                                        </div>

                                        <div class="col mt-3">
                                            <label><i class="fas fa-envelope mr-2"></i><?php echo $fila['Correo']; ?></label>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
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
                    <div class="col-lg-3 text-lg-left text-center copy">©Tecnoparque-Abejorral
                        <?php echo date('Y'); ?>
                    </div>
                </div>
            </div>
        </footer>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous ">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous ">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous ">
        </script>
    </body>

    </html>