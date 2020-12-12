<?php
include '../../conexion/conexion.php';


$Id_Cliente=$_GET['Id_Cliente'];

$nombres=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$fecha_naci=$_POST['fecha_naci'];
$celular=$_POST['celular'];
$municipio=$_POST['municipio'];
$departamento=$_POST['departamento'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];



$up = $conn->query("UPDATE tblcliente SET Nombre='$nombres', Apellidos='$apellidos', Fecha_Nacimiento='$fecha_naci', Cel='$celular', Direccion='$direccion', Correo='$correo' WHERE Id_Cliente=$Id_Cliente");

if ($up) {
    echo "<script> 	location.href='../clientes.php'; </script>";
}
else{
	echo "<script> 	location.href='../clientes.php';</script>";
}

?>