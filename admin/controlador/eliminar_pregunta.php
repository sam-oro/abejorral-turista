<?php
include '../../conexion/conexion.php';
        

$cod_pregunta=$_GET['cod_pregunta'];


$del = $conn -> query("DELETE FROM tblpreguntas WHERE cod_pregunta='$cod_pregunta'");

if ($del==TRUE){
    echo "<script> alert('Eliminado Correctamente')</script>";
    echo "<script> location.href='../preguntas.php'; </script>";

}else{
    echo "<script> 	location.href='../preguntas.php'; </script>";
}


?>