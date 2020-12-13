<?php
    require_once "../../conexion/conexion.php";

    session_start();

    $Usuario = $_POST['Usuario'];
    $Contraseña = $_POST['Contraseña'];
    //$Contraseña=hash("sha256", $Contraseña); QUITAR EL COMENTARIO CUANDO EL LOGIN ESTÉ LISTO

    $sel = $conn->query("SELECT * FROM tbllogin WHERE Correo='$Usuario' AND Contraseña='$Contraseña'");

    $row = mysqli_fetch_array($sel);

    $empr = $conn->query("SELECT Cod_Empresa FROM tblempresa WHERE Correo='$Usuario'");

    $fila = mysqli_fetch_assoc($empr);

    if ($row==TRUE) {
        if($row[2]==1){
            $_SESSION['Correo']=$row[0];
            $_SESSION['rol']=$row[2];
            echo "<script> location.href='../../admin/informes.php'; </script>";
        }elseif($row[2]==3){
            $_SESSION['Correo']=$row[0];
            $_SESSION['rol']=$row[2];
            $_SESSION['cod_empr']=$fila['Cod_Empresa'];
            echo "<script> location.href='../../index.php'; </script>";
        }else{
            $_SESSION['Correo']=$row[0];
            $_SESSION['rol']=$row[2];
            echo "<script> location.href='../../index.php'; </script>";
        }
    }else{
        echo "<script> location.href='login.php?msg=2'; </script>";
    }
?>