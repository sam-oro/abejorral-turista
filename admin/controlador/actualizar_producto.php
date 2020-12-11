<?php
include '../../conexion/conexion.php';


$Cod_Producto=$_GET['Cod_Producto'];

$nombre=$_POST['nombre'];
$peso=['peso'];
$cantidad=['cantidad'];
$valor=['valor'];

$up = $conn->query("UPDATE tblproducto SET Nom_Producto='$nombre', Peso_Producto='$peso', Cantidad=$cantidad, Valor=$valor,  WHERE Cod_Producto=$Cod_Producto");


if ($up) {
    //echo "<script> 	alert('Se Actualizo Correctamente') </script>";
    //echo "<script> 	location.href='../productos.php'; </script>";
}
else{
	//echo "<script> 	location.href='../productos.php';</script>";
}

?>