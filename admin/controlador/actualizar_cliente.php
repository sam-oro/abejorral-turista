<?php
include '../../conexion.php';


$Id_Cliente=$_GET['Id_Cliente'];

$nombres=$_POST[''];
$apellidos=$_POST[''];
$fecha_naci=$_POST[''];
$celular=$_POST[''];
$municipio=$_POST[''];
$departamento=$_POST[''];
$direccion=$_POST[''];
$correo=$_POST[''];



$up = $conn -> query("UPDATE tblvideo SET Nombre='$nombre', url='$varPHP' WHERE id='1'");

if ($up) {
    echo "<script> 	location.href='../../index.php'; </script>";
}
else{
	echo "<script> 	location.href='form_video.php';</script>";
}

?>