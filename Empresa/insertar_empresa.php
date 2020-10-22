<?php
require_once "../conexion/conexion.php";

$Nit = $_POST['NIT_Empresa'];
$Rut = $_POST['RUT_Empresa'];
$Nombre = $_POST['Nombre'];
$Cel = $_POST['Cel'];
$Telefono = $_POST['Telefono'];
$Correo = $_POST['Correo'];
$Id_Municipio = $_POST['Id_Municipio'];
$Direccion = $_POST['Direccion'];
$Ubicacion = $_POST['Ubicacion'];

$ins = $conn->query("INSERT INTO tblempresa (Cod_Empresa, RUT_Empresa,Nombre,Cel,Telefono,Correo,Id_Municipio,Direccion,Ubicacion) VALUES ('$Nit','$Rut', '$Nombre', '$Cel', '$Telefono', '$Correo', '$Id_Municipio', '$Direccion', '$Ubicacion')");

if ($ins) {
    echo "Registro insertado correctamente";
}else{
    echo "Error: No se pudo ingresar" . $ins . "<br>". $conn->error;
}
?>

