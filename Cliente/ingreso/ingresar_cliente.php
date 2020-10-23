<?php
    require "../../conexion/conexion.php";

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
    $municipio=$_POST['municipio'];

    $sql="INSERT INTO tblCliente (Id_Cliente, Nombre, Apellidos, Fecha_Nacimiento, Cel, id_Municipio, Diireccion, Correo, Id_Rol) VALUES ('$id', '$nombre', '$apellidos', '$fechanaci','$cel','$municipio', '$direccion', '$correo', 2)";

    if ($conn->query($sql)) {
        //echo "<script> location.href='../form_cliente.php'; </script>";
        echo "<script> alert('Correcto')</script>";
    }else{
        echo "Error: " . $sql . "<br>". $conn->error;
    }

?>