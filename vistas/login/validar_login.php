<?php
    require_once "../../conexion/conexion.php";

    $Usuario = $_POST['Usuario'];
    $Contraseña = $_POST['Contraseña'];
    //$Contraseña=hash("sha256", $Contraseña); QUITAR EL COMENTARIO CUANDO EL LOGIN ESTÉ LISTO

    $sel = $conn->query("SELECT * FROM tbllogin WHERE Usuario='$Usuario' AND Contraseña='$Contraseña'");

    $row = mysqli_fetch_array($sel);

    if ($row==TRUE) {
        echo "Sesion Iniciada, Bienvenido";
        ///////// FALTA VALIDAR DATOS PARA LA SESION /////////
    }else{
        echo "<script> alert('Datos Incorrectos') </script>";
        echo "<script> location.href='login.php'; </script>";
    }
?>