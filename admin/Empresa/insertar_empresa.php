<?php
include '../../conexion/conexion.php';

$Rut = $_POST['RUT_Empresa'];
$Nombre = $_POST['Nombre'];
$Cel = $_POST['Cel'];
$Telefono = $_POST['Telefono'];
$Correo = $_POST['Correo'];
$Id_Municipio = $_POST['Id_Municipio'];
$Direccion = $_POST['Direccion'];
$Ubicacion = $_POST['Ubicacion'];

$sql = $conn->query("INSERT INTO tblempresa (RUT_Empresa,Nombre,Cel,Telefono,Correo,Id_Municipio,Direccion,Ubicacion) VALUES ('$Rut', '$Nombre', '$Cel', '$Telefono', '$Correo', '$Id_Municipio' , '$Direccion', '$Ubicacion')");


if ($sql) {
    echo "Registro insertado correctamente";
}else{
    echo "Error: No se pudo ingresar" . $sql . "<br>". $conn->error;
}
?>

