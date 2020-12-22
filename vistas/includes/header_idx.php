<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-nav">
        <div class="col-sm-3 text-center">
            <a class="navbar-brand" href="<?php echo $URL ?>index.php">
                <img src="<?php echo $URL ?>img/logo-ver-ng.png" alt="">
            </a>
        </div>

        <button class="navbar-toggler col-sm-3 ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo $URL ?>index.php">Inicio<span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $URL ?>vistas/nuestro_municipio/nuestro_municipio.php">Nuestro Municipio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $URL ?>vistas/informate/informate.php">Informate</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $URL; ?>vistas/ecotour/ecotour.php">Eco Turismo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $URL; ?>vistas/Producto/vista_productos.php">Nuestros Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $URL ?>vistas/Contacto/contacto.php">Contacto</a>
                </li>
                <div class="btn-group">
                    <button type="button" class="btn btn-invi dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                    Ingresar
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                        <a href="<?php echo $URL ?>vistas/login/login.php"><button class="dropdown-item" type="button">Iniciar sesión</button></a>
                        <a href="<?php echo $URL ?>vistas/entrada_usuarios/entrada_tipousuario.php"><button class="dropdown-item" type="button">Registro</button></a>
                    </div>
                </div>
            </ul>
        </div>
    </nav>
</body>
</html>