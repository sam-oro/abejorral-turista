<?php
include '../../conexion/conexion.php';


$nombre=$_POST['nombre'];
$latitud=$_POST['latitud'];
$longitud=$_POST['longitud'];
$descripcion=$_POST['descripcion'];
$servicios=$_POST['servicios'];
$horario=$_POST['horario'];


$sql="INSERT INTO tblsitio (Nombre, Latitud, Longitud, Detalle, Servicios, Horario, Calificacion, Experiencia ) Values ('$nombre', '$latitud', '$longitud', '$descripcion', '$servicios', '$horario', null, null)";

if ($conn->query($sql) === FALSE) {
    echo "<script> alert('no se puedo registrar')</script>";
    echo "<script> 	location.href='../sitio.php'; </script>";
} else {
    echo "<script> alert('Registrado con exito')</script>";
    echo "<script> 	location.href='../sitio.php'; </script>";
}


?>