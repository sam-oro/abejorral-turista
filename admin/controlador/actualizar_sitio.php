<?php
include '../../conexion/conexion.php';


$Cod_Sitio=$_GET['Cod_Sitio'];

$nombre=$_POST['nombre'];
$latitud=$_POST['latitud'];
$longitud=$_POST['longitud'];
$descripcion=$_POST['descripcion'];
$servicios=$_POST['servicios'];
$horario=$_POST['horario'];

$up = $conn -> query("UPDATE tblsitio SET Nombre='$nombre', Latitud='$latitud', Longitud='$longitud', Detalle='$descripcion', Servicios='$servicios', Horario='$horario', WHERE Cod_Sitio='$Cod_Sitio'");

if ($up) {
    echo "<script> 	alert('Se Actualizo Correctamente') </script>";
    echo "<script> 	location.href='../sitio.php'; </script>";
}
else{
	echo "<script> 	location.href='../sitio.php';</script>";
}

?>