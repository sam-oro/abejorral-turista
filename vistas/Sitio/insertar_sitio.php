<?php
require_once "../../conexion/conexion.php";

$Nombre = $_POST['Nombre'];
$Ubicacion = $_POST['Ubicacion'];
$Detalle = $_POST['Detalle'];
$Servicios = $_POST['Servicios'];
$Horario = $_POST['Horario'];

$ins = $conn->query("INSERT INTO tblsitio (Nombre, Ubicacion, Detalle, Servicios, Horario,Calificacion, Experiencia) VALUES ('$Nombre','$Ubicacion', '$Detalle', '$Servicios', '$Horario', null, null)");

if ($ins) {
    echo "Registro insertado correctamente";
}else{
    echo "Error: No se pudo ingresar" . $ins . "<br>". $conn->error;
}
?>

