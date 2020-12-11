<?php 
include '../../conexion/conexion.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!--importacion boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/f599362e7b.js" crossorigin="anonymous"></script>
    <!-- Sweet alerts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <link rel="icon" type="image/png" href="img/icono-pag.png">

    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>

    <section class="bg-login">

        <div class="login col-12">

            <form action="validar_login.php" method="post">

                <div class="text-center">
                <a href="<?php echo $URL ?>index.php"><img src="../../img/logo-color.png"></a>
                </div>

                <div class="form-group mt-4">
                    <label for="">Correo</label>
                    <input type="text" class="form-control" name="Usuario" placeholder="Ingresa tu correo">
                </div>

                <div class="form-group">
                    <label for="">Contraseña</label>
                    <input type="password" class="form-control" name="Contraseña" placeholder="Ingresa tu contraseña">
                </div>


                <div class="text-center">
                    <h3 class="recu-contr"><a href="#">¿Olvidaste tu contraseña?</a></h3>
                    <button type="submit" class="btn btn-color mt-3">Ingresar</button>
                    <button type="button" class="btn btn-color mt-3">Registrarse</button>
                </div>
            </form>

        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

<?php
    if(isset($_GET['msg'])){
        if($_GET['msg']==1){
    ?>

    <script>
        Swal.fire('Sesión cerrada correctamente')
    </script>

    <?php
        }else{
            if($_GET['msg']==2){
    ?>

    <script>
        Swal.fire('Datos incorrectos')
    </script>
    
    <?php
        }else{
            if($_GET['msg']==3){
    ?>

    <script>
        Swal.fire('Registro existoso')
    </script>

    <?php
            }
            }
        }
    }
    ?>

</body>

</html>