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
    $contraseña=$_POST['contraseña'];
    //$Contraseña=hash("sha256", $Contraseña); QUITAR EL COMENTARIO CUANDO EL LOGIN ESTÉ LISTO

    $sql="INSERT INTO tblcliente (Id_Cliente, Nombre, Apellidos, Fecha_Nacimiento, Cel, id_Municipio, Direccion, Correo, Id_Rol) VALUES ('$id', '$nombre', '$apellidos', '$fechanaci','$cel', 22 , '$direccion', '$correo', 2)";

    if ($conn->query($sql)) {
        $sql2="INSERT INTO tbllogin (Usuario, Contraseña, Id_Cliente) VALUES ('$correo', '$contraseña', '$id')";
        if ($conn->query($sql2)) {
            //echo "<script> location.href='../form_cliente.php'; </script>";
            echo "<script> alert('Correcto')</script>";
        }else{
            $sql3=$conn->query("DELETE FROM tblcliente WHERE Id_Cliente='$id'");
            echo "Error: " . $sql2 . "<br>". $conn->error;
        }
    }else{
        echo "Error: " . $sql . "<br>". $conn->error;
    }
?>