<?php

include '../../conexion/conexion.php';

    session_start();
    if (!isset($_SESSION['rol'])){
        echo "<script> location.href='../index.php'; </script>";

    }else{
        if($_SESSION['rol']!=3){
            echo "<script> location.href='../index.php'; </script>";
        }
    }
    include "../includes/header_company.php";

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
        
        <link href="../../css/style.css" rel="stylesheet">

        <!-- Sweet alerts -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <script src="https://kit.fontawesome.com/f599362e7b.js" crossorigin="anonymous"></script>


    </head>

    <body>

                <div class="container-fluid">
                    <h1 class="mt-4">Productos</h1>
                    <div class="mt-4" style="height: 60vh; overflow: scroll;">
                        <table class="table table-hover">
                            <thead class="thead">
                                <th>Codigo</th>
                                <th>Producto</th>
                                <th>peso</th>
                                <th>cantidad</th>
                                <th>valor</th>
                                <th></th>
                                <th></th>
                            </thead>
                            <?php 
                            $empresa = $_SESSION['cod_empr'];
                            $sel = $conn ->query("SELECT `tblproducto`.`Cod_Producto`, `tblproducto`.`Nom_Producto`, `tblproducto`.`Peso_Producto`, `tblproducto`.`Cantidad`, `tblproducto`.`Valor` FROM `tblproducto` WHERE Cod_Empresa='$empresa'");
                                $cont=0;
                            while ($fila = $sel -> fetch_assoc()) {
                                $cont++;
                            ?>
                            <tr>
                                <td><?php echo $fila['Cod_Producto'] ?></td>
                                <td><?php echo $fila['Nom_Producto'] ?></td>
                                <td><?php echo $fila['Peso_Producto'] ?></td>
                                <td><?php echo $fila['Cantidad'] ?></td>
                                <td><?php echo $fila['Valor'] ?></td>
                                <td>
                                <td><button type="button" class="btn btn-admin" data-toggle="modal" data-target="#modal<?php echo $cont; ?>" id="ingresar">Actualizar</button></td>
                                <td><a href="#" onclick="preguntar(<?php echo $fila['Cod_Producto']?>)"><button class="btn btn-admin">Eliminar</button></a></td>
                            </tr>

                            <!-- /Modal actualizar Producto -->

                            <div class="modal" tabindex="-1" role="dialog" id="modal<?php echo $cont; ?>">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Editar Producto</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="actualizar_producto.php?Cod_Producto=<?php echo $fila['Cod_Producto']?>" method="post">
                                            <div class="form-group">
                                                <label> Nombre del Producto </label>
                                                <input type="text" id="nombre" name="nombre" class="form-control" value="<?php echo $fila['Nom_Producto'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Peso Producto</label>
                                                <input type="text" id="peso" name="peso" class="form-control" value="<?php echo $fila['Peso_Producto'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Cantidad</label>
                                                <input type="number" id="cantidad" name="cantidad" class="form-control" value="<?php echo $fila['Cantidad'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label> Valor </label>
                                                <input type="number" id="valor" name="valor" class="form-control" value="<?php echo $fila['Valor'] ?>" required>
                                            </div>
                                                
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-admin">Guardar</button>
                                                    <button type="button" class="btn btn-admin" data-dismiss="modal">Cancelar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </table>
                    </div>
                    <div class="text-center">
                        <a href="../Producto/form_producto.php" class="btn btn-color">Ingresar Producto</a>
                    </div>
                </div>
        <!-- Bootstrap core JavaScript -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


    <!-- pregunta antes de eliminar sweat alert -->
        <script type="text/javascript">
            function preguntar(id){
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