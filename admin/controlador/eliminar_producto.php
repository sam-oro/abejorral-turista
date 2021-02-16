<?php
include '../../conexion/conexion.php';
        

$Cod_Producto=$_GET['Cod_Producto'];

$nom = $conn -> query("SELECT * FROM tblproducto WHERE Cod_Producto='$Cod_Producto'");

$fila=$nom->fetch_assoc();
    $img1=$fila['img1'];
    $img2=$fila['img2'];
    $img3=$fila['img3'];



$del = $conn -> query("DELETE FROM tblproducto WHERE Cod_Producto='$Cod_Producto'");

if ($del==TRUE){    
    unlink("../../images/$img1");
    unlink("../../images/$img2");
    unlink("../../images/$img3");
    echo "<script> alert('Eliminado Correctamente')</script>";
    echo "<script> location.href='../productos.php'; </script>";

}else{
    echo "<script> 	location.href='../productos.php'; </script>";
}


?>