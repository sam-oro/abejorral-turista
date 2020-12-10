<?php
    require "../../../conexion/conexion.php";

    if ($conn->connect_error) {
        die("Conección exitosa: " . $conn->connect_error);
    }

    $nombre=$_POST['nombre'];
    $apellidos=$_POST['apellido'];
    $id=$_POST['id'];
    $fechanaci=$_POST['fechanacimiento'];
    $correo=$_POST['correo'];
    $cel=$_POST['celular'];
    $direccion=$_POST['direccion'];
    //$municipio=$_POST['Id_Municipio'];
    $contrasena=$_POST['contrasena'];
    //$Contraseña=hash("sha256", $Contraseña); QUITAR EL COMENTARIO CUANDO EL LOGIN ESTÉ LISTO

    $sql="INSERT INTO tblcliente (Id_Cliente, Nombre, Apellidos, Fecha_Nacimiento, Cel, id_Municipio, Direccion, Correo, Id_Rol) VALUES ('$id', '$nombre', '$apellidos', '$fechanaci','$cel', 1 , '$direccion', '$correo', 2 )";

    if ($sql==true) {
        $sql2=$conn->query("INSERT INTO tbllogin (Usuario, Contraseña, Id_Cliente) VALUES ('$correo', '$contrasena', '$id')");
        if ($sql2==true) {
            //echo "<script> location.href='../form_cliente.php'; </script>";
            echo "<script> alert('Correcto')</script>";
        }else{
            $sql3=$conn->query("DELETE FROM tblcliente WHERE Id_Cliente='$id'");
            echo "Error1: " . $sql2 . "<br>". $conn->error;
        }
    }else{
        echo "Error: " . $sql . "<br>". $conn->error;
    }
?>