<?php

include '../conexion/conexion.php';

     session_start();
     if (!isset($_SESSION['rol'])){
         echo "<script> location.href='../index.php'; </script>";

     }else{
         if($_SESSION['rol']!=1){
             echo "<script> location.href='../index.php'; </script>";
         }
     }

?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Administrador Abejorral</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        

        <!-- Custom styles for this template -->
        <link href="simple-sidebar.css" rel="stylesheet">
        
        <link href="../css/style.css" rel="stylesheet">

        <!-- Sweet alerts -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <script src="https://kit.fontawesome.com/f599362e7b.js" crossorigin="anonymous"></script>


    </head>

    <body>

        <div class="d-flex" id="wrapper">

            <!-- Sidebar -->
            <div class="bg-light border-right" id="sidebar-wrapper">
                <div class="sidebar-heading">Abejorral
                </div>
                <div class="list-group list-group-flush">
                    <a href="Informes.php" class="list-group-item list-group-item-action bg-light">Informes</a>
                    <a href="clientes.php" class="list-group-item list-group-item-action bg-light">Clientes</a>
                    <a href="empresas.php" class="list-group-item list-group-item-action bg-light">Empresas</a>
                    <a href="productos.php" class="list-group-item list-group-item-action bg-light">Productos</a>
                    <a href="preguntas.php" class="list-group-item list-group-item-action bg-light">Preguntas</a>
                    <a href="sitio.php" class="list-group-item list-group-item-action bg-light">Sitio turistico</a>
                    <a href="previa_productos.php" class="list-group-item list-group-item-action bg-light">Previa de Productos</a>
                </div>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">

                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <button class="btn btn-admin toggled" id="menu-toggle"><i class="fas fa-bars"></i></button>

                    <button
                        class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item dropdown">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="#"
                                    id="navbarDropdown"
                                    role="button"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                    Administrador
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="../index.php">inicio</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?php echo $URL ?>vistas/login/cerrar_sesion.php">Cerrar Sesion</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>


                <div class="producto">
                    <div class="row contenedor d-md-flex m-4 cards-info">
                        <?php 
                            $sel=$conn->query("SELECT * FROM tblproducto WHERE estado=0"); 
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
                                            <!-- <button type="button" class="btn btn-admin mt-3" data-toggle="modal" data-target="#modal<?php echo $cont; ?>">Ver producto</button> -->
                                            <button type="button" class="btn btn-admin mt-3" href="#" onclick="preguntar(<?php echo $fila['Cod_Producto']?>)">Publicar</button>
                                            <button type="button" class="btn btn-admin mt-3" href="#" onclick="preguntar1(<?php echo $fila['Cod_Producto']?>)">Eliminar</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="modal" tabindex="-1" role="dialog" id="modal<?php echo $cont; ?>">
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
                                </div> -->
                        <?php
                            }
                        ?>
                    </div>
                </div>





            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- Bootstrap core JavaScript -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
    });
    </script>


    <!-- pregunta antes de eliminar sweat alert -->
    <script type="text/javascript">
        function preguntar(id){
           Swal
            .fire({
                title: "¿Publicar?",
                text: "¿Estas seguro de publicar el producto?",
                icon: 'success',            
                showCancelButton: true,
                confirmButtonText: "Sí, publicar",
                cancelButtonText: "Cancelar",
            })
            .then(resultado => {
                if (resultado.value) {
                    // Hicieron click en "Sí"
                    //console.log("*se elimina la venta*");
                    window.location.href="controlador/publicar_producto.php?id="+id
                } else {
                    // Dijeron que no
                    console.log("*NO se elimina *");
                }
            });

        }

        function preguntar1(id){
            Swal
                .fire({
                    title: "¿Eliminar Producto?",
                    text: "¿Estas seguro de eliminar el producto?",
                    icon: 'error',            
                    showCancelButton: true,
                    confirmButtonText: "Sí, eliminar",
                    cancelButtonText: "Cancelar",
                })
                .then(resultado => {
                    if (resultado.value) {
                        // Hicieron click en "Sí"
                        //console.log("*se elimina la venta*");
                        window.location.href="controlador/eliminar_producto.php?Cod_Producto="+id
                    } else {
                        // Dijeron que no
                        console.log("*NO se elimina*");
                    }
                });

        }
    </script>


    </body>

</html>