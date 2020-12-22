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

        <section class="bg-index">
            <h1>Productos</h1>
        </section>


        <section>
            <div class="row contenedor d-md-flex m-4 cards-info">
                <?php $sel=$conn->query("SELECT * FROM tblproducto"); 
                $cont=0;
                while($fila=$sel->fetch_assoc()){
                    $cont++;
                    ?>
                        <div class="card m-2 col-12 col-md-3">
                            <img src="<?php echo $urlimagen.$fila['img1']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="text-center">
                                    <h3 style="text-transform:uppercase;"><?php echo $fila['Nom_Producto'] ?></h3>
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
                                <h3 class="modal-title" style="text-transform:uppercase;"><?php echo $fila['Nom_Producto'] ?></h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                                <div class="modal-body">

                                <div class="col mt-3 card">
                                    <img src="<?php echo $urlimagen.$fila['img1']; ?>" class="card-img-top" alt="...">
                                </div>
                                <div class="col mt-3 card">
                                    <img src="<?php echo $urlimagen.$fila['img2']; ?>" class="card-img-top" alt="...">
                                </div>
                                <div class="col mt-3 card">
                                    <img src="<?php echo $urlimagen.$fila['img3']; ?>" class="card-img-top" alt="...">
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
        </section>


        <footer class="footer mt-4 ">
            <div class="container ">
                <div class="row align-items-center ">
                    <div class="col-lg-3 text-lg-center text-center contac ">
                        <a href="# "></a>
                        <h3 class="contach ">Contáctenos</h3>
                        </a>
                    </div>
                    <div class="col-lg-6 my-3 my-lg-0 text-lg-center text-center ">
                        <a class="redes btn btn-social mx-3 " href="#! "><i class="fab fa-twitter "></i></a>
                        <a class="redes btn btn-social mx-3 " href="#! "><i class="fab fa-facebook-f "></i></a>
                        <a class="redes btn btn-social mx-3 " href="#! "><i class="fab fa-instagram "></i></a>
                    </div>
                    <div class="col-lg-3 text-lg-left text-center copy ">©Abejorral2020</div>
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