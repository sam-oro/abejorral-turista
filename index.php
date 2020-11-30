<?php
require ("conexion/conexion.php");
$conexion=mysqli_connect($servidor, $usuario, $contrasena);
if (mysqli_connect_errno()){
    echo "Fallo al conectar con la base de datos";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/f599362e7b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header class="navheader">
        <div class="container col-md-12 col-sm-6 bg-header">
            <div class="row">
                <div class="col-md-3 col-sm-0 log-home">
                    <a href="#"> <img src="img/logotipo.png" alt=""> </a>
                </div>
                <div class="col-md-9 col-sm-3 mr-0 p-0 navbar-dark">
                    <nav class="nav-prin navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
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
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Perfil</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Contacto</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <section class="bg-img">
        <div class="tex-inic">
            <h1 class="">Abejorral Turistico</h1>
        </div>
    </section>

    <section>
        <?php
        $sel = $conn ->query("SELECT * FROM tblvideo where cod='1'");

        while ($row=$sel->fetch_array()) {
            echo('<iframe width="560" height="315" src="'.$row[2].'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');	
        }
        ?>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Cambiar Video
        </button>
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
                                <small class="form-text text-muted">Si inserta el video con un URL no es necesario que seleccione un video desde su dispositivo y viceversa; Si rellena el campo URL y selecciona un archivo desde su dispositivo, se dará prioridad al URL que ingreso primero</small>
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
    </div>
    </section>


    <footer class="footer bg-dark text-white py-4">
        <div class="container">
            <nav class="row col-12 justify-content-center">
                <ul class="col-sm-12 col-md-4 col-lg-4 list-unstyled">
                    <li class="d-flex align-items-center justify-content-center mb-3 mb-md-0">
                        <img src="img/logo-bl.png" alt="">
                    </li>
                </ul>
                
                <ul class="col-sm-12 col-md-4 col-lg-4 list-unstyled">
                    <li class="font-weigth-bold text-uppercase">Resourse</li>
                    <li class="d-flex align-items-center justify-content-between">
                        <p class="ppp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, odit voluptatibus mollitia sapiente in incidunt quam, ratione ipsam repellendus ducimus voluptate facere est. Neque iste quos quis vel perspiciatis eos.</p>
                    </li>
                </ul>

                <ul class="col-sm-12 col-md-4 col-lg-4 list-unstyled">
                    <li class="font-weigth-bold text-uppercase">Redes Sociales</li>
                    <li class="red-soci d-flex justify-content-center">
                    <a href="" class="text-reset"><i class="fab fa-twitter-square"></i></a>
                    <a href="" class="text-reset"><i class="fab fa-facebook-square"></i></a>
                    <a href="" class="text-reset"><i class="fab fa-instagram-square"></i></a>
                    </li>
                </ul>
            </nav>
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