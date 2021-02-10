    <?php
        require "../../conexion/conexion.php";
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

    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Registro Producto</title>

        <!--importacion boostrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,700;1,400&display=swap" rel="stylesheet">

        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/f599362e7b.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" type="text/css" href="../../css/style.css">
        <link rel="icon" type="image/png" href="img/icono-pag.png">

    </head>

    <body>
        <section class="bg-forms p-md-5 p-0">
            <div class="container">
                <div class="col-12 p-4" style="background-color: #fff;">
                    <form action="ingreso/ingresar_producto.php" method="POST" enctype="multipart/form-data">

                        <div class="text-center">
                            <h1>Ingresar una nuevo producto</h1>
                        </div>

                        <div>
                            <h3>Datos del producto:</h3>
                        </div>

                        <div class="form-group">
                            <label>Nombre del Producto</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese el nombre del producto" required>
                        </div>

                        <div class="form-group">
                            <label>¿Es un Café?</label><br>
                            <label class="switch">
                                <input type="checkbox" name="cafe">
                                <span class="slider round"></span>
                            </label>
                        </div>

                        <div class="form-group">
                            <label>Peso</label>
                            <input type="text" name="peso" id="peso" class="form-control" placeholder="Peso del producto" required>
                        </div>

                        <div class="form-group">
                            <label>Cantidad:</label>
                            <input type="text" name="cantidad" id="cantidad" class="form-control" placeholder="Cantidad del producto" required>
                        </div>

                        <div class="form-group">
                            <label>Valor/Precio:</label>
                            <input type="text" name="valor" id="valor" class="form-control" placeholder="Valor del producto" required>
                        </div>

                        <div class="form-group">
                            <label>Imgenes del producto</label><br>
                            <input type="file" name="img1" required><br><br>
                            <input type="file" name="img2" required><br><br>
                            <input type="file" name="img3" required><br><br>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-color" type="submit" value="enviar">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
    </body>

    </html>