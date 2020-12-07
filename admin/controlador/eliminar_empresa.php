<?php
include '../../conexion/conexion.php';
        

$Cod_Empresa=$_GET['Cod_Empresa'];


$del = $conn -> query("DELETE FROM tbllogin WHERE Cod_Empresa='$Cod_Empresa'");

if ($del==TRUE){
    $del2= $conn -> query("DELETE FROM tblproducto WHERE Cod_Empresa='$Cod_Empresa'");
    if($del2==TRUE){
        $del3= $conn -> query("DELETE FROM tblempresa WHERE Cod_Empresa='$Cod_Empresa'");
        echo "<script> alert('Eliminado Correctamente') </script>";
        echo "<script> 	location.href='../empresas.php'; </script>";
    }
}else{
    echo "<script> 	location.href='../empresas.php'; </script>";
}


?>