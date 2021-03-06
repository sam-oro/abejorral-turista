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

        <title>Administracion Abejorral</title>

        <!-- Bootstrap core CSS -->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
            crossorigin="anonymous">

        <!-- estilos menu lateral admin -->
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
                    <a href="sitio.php" class="list-group-item list-group-item-action bg-light">Sitio Turistico</a>
                    <a href="previa_productos.php" class="list-group-item list-group-item-action bg-light">Previa de Productos</a>
                </div>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">

                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <button class="btn btn-admin toggled" id="menu-toggle">
                        <i class="fas fa-bars"></i>
                    </button>

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

                <div class="container-fluid">
                    <h1 class="mt-4">Empresas Registradas</h1>
                    <div class="mt-4">
                        <table class="table table-hover">
                            <thead class="thead">
                                <th>Código empresa</th>
                                <th>Rut</th>
                                <th>Nombre</th>
                                <th>Celular</th>
                                <th>Teléfono</th>
                                <th>Córreo</th>
                                <th>Municipio</th>
                                <th>Departamento</th>
                                <th>Dirección</th>
                                <th>Latitud</th>
                                <th>Longitud</th>
                                <th></th>
                                <th></th>
                            </thead>
                            <?php 
                $sel = $conn ->query("SELECT `tblempresa`.`Cod_Empresa`, `tblempresa`.`RUT_Empresa`, `tblempresa`.`Nombre`, `tblempresa`.`Cel`, `tblempresa`.`Telefono`, `tblempresa`.`Correo`, `tblmunicipios`.`nombre` as 'municipio', `tbldepartamentos`.`nombre` as 'departamento', `tblempresa`.`Direccion`, `tblempresa`.`Latitud`, `tblempresa`.`Longitud`
                FROM `tblempresa` 
                    LEFT JOIN `tblmunicipios` ON `tblempresa`.`Id_Municipio` = `tblmunicipios`.`id_Municipio` 
                    LEFT JOIN `tbldepartamentos` ON `tblmunicipios`.`Id_Departamento` = `tbldepartamentos`.`Id_Departamento`;");
                    $cont=0;
                while ($fila = $sel -> fetch_assoc()) {
                    $cont++;
                ?>
                            <tr>
                                <td><?php echo $fila['Cod_Empresa'] ?></td>
                                <td><?php echo $fila['RUT_Empresa'] ?></td>
                                <td><?php echo $fila['Nombre'] ?></td>
                                <td><?php echo $fila['Cel'] ?></td>
                                <td><?php echo $fila['Telefono'] ?></td>
                                <td><?php echo $fila['Correo'] ?></td>
                                <td><?php echo $fila['municipio'] ?></td>
                                <td><?php echo $fila['departamento'] ?></td>
                                <td><?php echo $fila['Direccion'] ?></td>
                                <td><?php echo $fila['Latitud'] ?></td>
                                <td><?php echo $fila['Longitud'] ?></td>

                                <td>
                                    <button
                                        type="button"
                                        class="btn btn-admin"
                                        data-toggle="modal"
                                        data-target="#modal<?php echo $cont; ?>"
                                        id="ingresar">Actualizar</button>
                                </td>
                                <td>
                                <td><a href="#" onclick="preguntar(<?php echo $fila['Cod_Empresa']?>)"><button class="btn btn-admin">Eliminar</button></a></td>
                                </td>
                            </tr>

                            <!-- modal actualizar empresa -->
                            <div class="modal" tabindex="-1" role="dialog" id="modal<?php echo $cont; ?>">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Actualizar Empresa<strong> <?php echo $fila['Nombre'] ?></strong></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <form action="controlador/actualizar_empresa.php" method="POST">

                                        <!-- <label>Codigo empresa:</label> -->
                                        <input type="text" class="form-control" name="cod_empresa" value="<?php echo $fila['Cod_Empresa'] ?>" hidden>

                                        <br>

                                        <label>RUT:</label>
                                        <input type="text" class="form-control" name="rut" value="<?php echo $fila['RUT_Empresa'] ?>" required>

                                        <br>

                                        <label>Nombre:</label>
                                        <input type="text" class="form-control" name="nombre" value="<?php echo $fila['Nombre'] ?>" required>

                                        <label>Celular:</label>
                                        <input type="text" class="form-control" name="celular" value="<?php echo $fila['Cel'] ?>" required>

                                        <br>

                                        <label>Telefono:</label>
                                        <input type="text" class="form-control" name="telefono" value="<?php echo $fila['Telefono'] ?>" required>

                                        <br>

                                        <label>Correo:</label>
                                        <input type="email
                                        " class="form-control" name="correo" value="<?php echo $fila['Correo'] ?>" required>

                                        <br>

                                        <label>Departamento:</label>
                                        <input type="text" class="form-control" name="dep" value="<?php echo $fila['departamento'] ?>" required disabled>
                                        
                                        <br>
                                        

                                        <label>Municipio:</label>
                                        <input type="text" class="form-control" name="mun" value="<?php echo $fila['municipio'] ?>" required disabled>

                                        <br>

                                        <label>Dirección:</label>
                                        <input type="text" class="form-control" name="direccion" value="<?php echo $fila['Direccion'] ?>" required>

                                        <br>

                                        <label>Latitud:</label>
                                        <input type="text" class="form-control" name="latitud" value="<?php echo $fila['Latitud'] ?>" required>

                                        <br>

                                        <label>Longitud:</label>
                                        <input type="text" class="form-control" name="longitud" value="<?php echo $fila['Longitud'] ?>" required>

                                    



                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-admin" type="submit">Actualizar</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                            <!-- fin del modal actualizar  -->
                            
                            <?php } ?>
                        </table>
                    </div>
                </div>

            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- Bootstrap core JavaScript -->
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>

        <!-- Menu Toggle Script -->
        <script>
            $("#menu-toggle").click(function (e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>

            <!-- script para recargar los municipios -->

            <!-- <script type="text/javascript">
            $(document).ready(function() {
                recargarLista();

                $('#departamento').change(function() {
                    recargarLista();
                });
            })
        </script>
        <script type="text/javascript">
            function recargarLista() {
                $.ajax({
                    type: "POST",
                    url: "../vistas/Empresa/slc_municipio.php",
                    data: "departamento=" + $('#departamento').val(),
                    success: function(r) {
                        $('#municipio').html(r);
                    }
                });
            }
        </script> -->
        


        <!-- pregunta antes de eliminar sweat alert -->
        <script type="text/javascript">
            function preguntar(id){
            Swal
                .fire({
                    title: "¿Eliminar Empresa?",
                    text: "¿Estas seguro de eliminar la empresa?",
                    icon: 'error',            
                    showCancelButton: true,
                    confirmButtonText: "Sí, eliminar",
                    cancelButtonText: "Cancelar",
                })
                .then(resultado => {
                    if (resultado.value) {
                        // Hicieron click en "Sí"
                        //console.log("*se elimina la venta*");
                        window.location.href="controlador/eliminar_empresa.php?Cod_Empresa="+id
                    } else {
                        // Dijeron que no
                        console.log("*NO se elimina*");
                    }
                });

            }
        </script>

    </body>

</html>