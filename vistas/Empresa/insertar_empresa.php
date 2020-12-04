<?php
include '../../conexion/conexion.php';

$Rut = $_POST['RUT_Empresa'];
$Nombre = $_POST['Nombre'];
$Cel = $_POST['Cel'];
$Telefono = $_POST['Telefono'];
$Correo = $_POST['Correo'];
$Id_Municipio = $_POST['Id_Municipio'];
$Direccion = $_POST['Direccion'];
$latitud = $_POST['latitud'];
$longitud = $_POST['longitud'];
$contrasena = $_POST['contrasena'];

$sql = $conn->query("INSERT INTO tblempresa (RUT_Empresa,Nombre,Cel,Telefono,Correo,Id_Municipio,Direccion,Latitud,Longitud,Id_Rol) VALUES ('$Rut', '$Nombre', '$Cel', '$Telefono', '$Correo', '$Id_Municipio' , '$Direccion', '$latitud', '$longitud', 3)");



if ($sql==TRUE){
    $sql2="INSERT INTO tbllogin (Usuario, Contraseña, Cod_Empresa) VALUES ('$Correo', '$contrasena', (select Cod_Empresa from tblempresa order by  Cod_Empresa DESC limit 1 ))";
        if ($conn->query($sql2)) {
            //echo "<script> location.href='../form_cliente.php'; </script>";
            echo "<script> alert('Correcto')</script>";
        }else{
            $sql3=$conn->query("DELETE FROM tblempresa WHERE Id_Cliente='$Rut'");
            echo "Error: " . $sql2 . "<br>". $conn->error;
        }
}else{
    echo "Error: No se pudo ingresar" . $sql . "<br>". $conn->error;
}
?>

