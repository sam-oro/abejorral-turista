<?php
include '../conexion/conexion.php';
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

        <title>Administracion Abejorral</title>

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
                    <a href="informes.php" class="list-group-item list-group-item-action bg-light">Informes</a>
                    <a href="clientes.php" class="list-group-item list-group-item-action bg-light">Clientes</a>
                    <a href="Empresas.php" class="list-group-item list-group-item-action bg-light">Empresas</a>
                    <a href="Productos.php" class="list-group-item list-group-item-action bg-light">Productos</a>
                    <a href="Preguntas.php" class="list-group-item list-group-item-action bg-light">Preguntas</a>
                    <a href="sitio.php" class="list-group-item list-group-item-action bg-light">Sitio Turistico</a>
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
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Inicio
                                    <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">inicio2</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="#"
                                    id="navbarDropdown"
                                    role="button"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                    Dropdown
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="../index.php">inicio</a>
                                    <a class="dropdown-item" href="#">otra direccion</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">otra direccion</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>

                <div class="container-fluid">
                    <h1 class="mt-4">Sitio turístico</h1>
                        <form action="controlador/insertar_sitio.php" method="POST" name="add_form">
                            <div class="form-group">
                                <label> Nombre del sitio turístico </label>
                                <input type="text" id="nombre" name="nombre" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Latitud</label>
                                <input type="text" id="latitud" name="latitud" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Longitud</label>
                                <input type="text" id="longitud" name="longitud" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label> Descripción del sitio </label>
                                <textarea class="form-control rounded-0" id="descripcion" name="descripcion" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label> Servicios</label>
                                <input type="text" id="servicios" name="servicios" class="form-control" requiered>
                            </div>
                            <div class="form-group">
                                <label> Horario disponible </label>
                                <input type="time" id="horario" name="horario" class="form-control" requiered>
                            </div>
                            <div class="form-group text-center mb-5">
                                <button type="submit" class="btn btn-admin">Registrar</button>
                            </div>
                        </form>

                        <div class="mt-4">
                            <table class="table table-hover">
                                <thead class="thead">
                                    <th>Código</th>
                                    <th>Nombre</th>
                                    <th>Latitud</th>
                                    <th>Longitud</th>
                                    <th>Descripción</th>
                                    <th>Servicios</th>
                                    <th>Horario</th>
                                    <th>Calificación</th>
                                    <th>Experiencia</th>
                                    <th></th>
                                    <th></th>
                                </thead>
                                <?php 
                                $sel = $conn ->query("SELECT * FROM tblsitio ");
                                while ($fila = $sel -> fetch_assoc()) {
                                ?>
                                <tr>
                                    <td><?php echo $fila['Cod_Sitio'] ?></td>
                                    <td><?php echo $fila['Nombre'] ?></td>
                                    <td><?php echo $fila['Latitud'] ?></td>
                                    <td><?php echo $fila['Longitud'] ?></td>
                                    <td><?php echo $fila['Detalle'] ?></td>
                                    <td><?php echo $fila['Servicios'] ?></td>
                                    <td><?php echo $fila['Horario'] ?></td>
                                    <td><?php echo $fila['Calificacion'] ?></td>
                                    <td><?php echo $fila['Experiencia'] ?></td>    
                                    <td><button type="button" class="btn btn-admin" data-toggle="modal" data-target="#modal<?php echo $cont; ?>" id="ingresar">Actualizar</button></td>
                                    <td><a href="#" onclick="preguntar(<?php echo $fila['Cod_Sitio']?>)"><button class="btn btn-admin">Eliminar</button></a></td>
                            </tr>
                            <?php } ?>
                        </table>
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
                    title: "¿Eliminar el sitio turistico?",
                    text: "¿Estas seguro de eliminar el sitio?",
                    icon: 'error',            
                    showCancelButton: true,
                    confirmButtonText: "Sí, eliminar",
                    cancelButtonText: "Cancelar",
                })
                .then(resultado => {
                    if (resultado.value) {
                        // Hicieron click en "Sí"
                        //console.log("*se elimina la venta*");
                        window.location.href="controlador/eliminar_sitio.php?Cod_Sitio="+id
                    } else {
                        // Dijeron que no
                        console.log("*NO se elimina*");
                    }
                });

            }
        </script>

    </body>

</html>