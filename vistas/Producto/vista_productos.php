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
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus molestias, atque error rem laborum obcaecati, pariatur et magni omnis dolores harum. Perferendis sed cum, tempora doloremque in vel aut error repellendus. Fuga, labore aperiam dicta
                        dolor esse exercitationem, molestiae deleniti assumenda ab rerum eius debitis eligendi nostrum delectus similique voluptates consequuntur aliquam ex? Distinctio sapiente quod ut laboriosam reiciendis soluta voluptates, praesentium
                        doloribus itaque dolorum nemo quidem illum in at obcaecati illo ex unde vitae quis facilis, iusto libero quaerat ullam aperiam! Quod consequatur magni eius deserunt tempore cupiditate beatae, sint maiores quibusdam, nam dignissimos
                        velit veniam voluptatibus omnis exercitationem vel voluptas placeat eos nisi neque ab. Laudantium magnam qui possimus at eos fugiat quasi rerum, voluptas nihil architecto dolores laborum quia repudiandae? Natus quam voluptatibus
                        obcaecati doloribus maxime explicabo quidem blanditiis fugit ea suscipit architecto vel animi eveniet nesciunt, corrupti placeat corporis eum iusto dignissimos inventore. Corporis, vitae dolor doloremque nesciunt maxime eaque laborum
                        minus illum mollitia id fugiat iste quis vel quam recusandae saepe perspiciatis dolorem consectetur at ducimus accusantium dignissimos adipisci animi quibusdam. Qui fugit dolores, id officia nihil quis quam. Ducimus id ab nostrum
                        vitae deserunt iste! Quis fugiat officia quidem numquam nemo quam reiciendis quae, quas non maxime nam accusamus voluptates ducimus aperiam inventore fuga rem officiis sunt quaerat dolor vero illum esse asperiores impedit! Voluptas
                        animi nulla iusto et distinctio ea odio magni amet natus, cupiditate laborum tempore ab, nobis fugiat sequi veniam eius! Laborum non blanditiis sunt iure saepe eligendi asperiores, officia voluptas!
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