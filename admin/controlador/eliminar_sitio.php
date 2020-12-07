<?php
include '../../conexion/conexion.php';
        

$Cod_Sitio=$_GET['Cod_Sitio'];


$del = $conn -> query("DELETE FROM tblsitio WHERE Cod_Sitio='$Cod_Sitio'");

if ($del==TRUE){
    echo "<script> alert('Eliminado Correctamente')</script>";
    echo "<script> location.href='../sitio.php'; </script>";

}else{
    echo "<script> 	location.href='../sitio.php'; </script>";
}


?>