<?php
include '../../conexion/conexion.php';
        

$Cod_Sitio=$_GET['Cod_Sitio'];

$imagen=$conn->query("SELECT tblsitio.img FROM tblsitio WHERE Cod_Sitio='$Cod_Sitio'");

$fila = $imagen -> fetch_assoc();
    $img=$fila['img'];


$del = $conn -> query("DELETE FROM tblsitio WHERE Cod_Sitio='$Cod_Sitio'");

if ($del==TRUE){
    unlink("../../images/$img");//acá le damos la direccion exacta del archivo
    echo "<script> alert('Eliminado Correctamente')</script>";
    echo "<script> location.href='../sitio.php'; </script>";

}else{
    echo "<script> 	location.href='../sitio.php'; </script>";
}


?>