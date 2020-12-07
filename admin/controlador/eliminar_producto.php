<?php
include '../../conexion/conexion.php';
        

$Cod_Producto=$_GET['Cod_Producto'];


$del = $conn -> query("DELETE FROM tblproducto WHERE Cod_Producto='$Cod_Producto'");

if ($del==TRUE){
    echo "<script> alert('Eliminado Correctamente')</script>";
    echo "<script> location.href='../productos.php'; </script>";

}else{
    echo "<script> 	location.href='../productos.php'; </script>";
}


?>