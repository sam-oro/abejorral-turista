<?php
    require_once "../../conexion/conexion.php";

    $Usuario = $_POST['Usuario'];
    $Contraseña = $_POST['Contraseña'];
    //$Contraseña=hash("sha256", $Contraseña); QUITAR EL COMENTARIO CUANDO EL LOGIN ESTÉ LISTO

    $sel = $conn->query("SELECT * FROM tbllogin WHERE Correo='$Usuario' AND Contraseña='$Contraseña'");

    $row = mysqli_fetch_array($sel);

    if ($row==TRUE) {
        if($row[2]==1){
            $_SESSION['Correo']=$row[0];
            $_SESSION['rol']=$row[2];
            echo "<script> location.href='../../admin/informes.php'; </script>";
        }else{
            $_SESSION['Correo']=$row[0];
            $_SESSION['rol']=$row[2];
            echo "<script> location.href='../../index.php'; </script>";
        }
    }else{
        echo "<script> location.href='login.php?msg=2'; </script>";
    }
?>