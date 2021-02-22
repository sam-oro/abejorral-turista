<?php
include '../../conexion/conexion.php';


$nombre=$_POST['nombre'];
$latitud=$_POST['latitud'];
$longitud=$_POST['longitud'];
$descripcion=$_POST['descripcion'];
$servicios=$_POST['servicios'];
$horario=$_POST['horario'];
$tipo_sitio=$_POST['tipo_sitio'];

//datos para la imagen
$hoy = date("YmdHis");

$type=$_FILES['img1']['type'];
$tmp_name = $_FILES['img1']["tmp_name"];
$name =$_FILES['img1']["name"];
$name=$hoy.$name;
$img1="../../images/".$name;

$sql=$conn->query("INSERT INTO tblsitio (Nombre, Latitud, Longitud, Detalle, Servicios, Horario, Calificacion, Experiencia, img, tipo_sitio ) Values ('$nombre', '$latitud', '$longitud', '$descripcion', '$servicios', '$horario', null, null, '$name', '$tipo_sitio')");

if (!$sql) {
    echo "<script> alert('no se puedo registrar')</script>";
    echo "<script> 	location.href='../sitio.php'; </script>";
} else {
    //cuando se cumpla la consulta me mueve la magen al directorio
    move_uploaded_file($tmp_name,$img1);
    echo "<script> alert('Registrado con exito')</script>";
    echo "<script> 	location.href='../sitio.php'; </script>";
}


?>