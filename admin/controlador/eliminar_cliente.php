<?php
include '../../conexion/conexion.php';
        

$Id_Cliente=$_GET['Id_Cliente'];


$del = $conn -> query(" DELETE FROM tbllogin WHERE Id_Cliente='$Id_Cliente'");

if ($del==true){
    $del2=$conn -> query("DELETE FROM tblcliente WHERE Id_Cliente ='$Id_Cliente'");
    if($del2==true){
        echo "<script> alert ('Eliminado correctamente') </script>";
        echo "<script> 	location.href='../clientes.php'; </script>";
    }
}else{
    echo "<script> 	location.href='../clientes.php'; </script>";
}


?>