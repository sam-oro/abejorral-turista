<?php
include '../../conexion/conexion.php';

$Rut = $_POST['RUT_Empresa'];
$Nombre = $_POST['Nombre'];
$Cel = $_POST['Cel'];
$Telefono = $_POST['Telefono'];
$Correo = $_POST['Correo'];
//$Id_Municipio = $_POST['Id_Municipio'];
$Direccion = $_POST['direccion'];
$latitud = $_POST['latitud'];
$longitud = $_POST['longitud'];
$contrasena = $_POST['contrasena'];

$sql=$conn->query("INSERT INTO tbllogin (Correo, Contraseña, Id_Rol) VALUES ('$Correo', '$contrasena', 3)");


if ($sql==TRUE){
    $sql2 = $conn->query("INSERT INTO tblempresa (RUT_Empresa,Nombre,Cel,Telefono,Correo,Id_Municipio,Direccion,Latitud,Longitud) VALUES ('$Rut', '$Nombre', '$Cel', '$Telefono', '$Correo', 1 , '$Direccion', '$latitud', '$longitud')");
        if ($sql2==TRUE) {
            //echo "<script> location.href='../form_cliente.php'; </script>";
            echo "<script> alert('Correcto')</script>";
            echo "<script> 	location.href='../login/login.php'; </script>";

        }else{
            $sql3=$conn->query("DELETE FROM tbllogin WHERE Correo='$Correo'");
            echo "Error: " . $sql2 . "<br>". $conn->error;
        }
}else{
    echo "Error: No se pudo ingresar" . $sql . "<br>". $conn->error;
}
?>

