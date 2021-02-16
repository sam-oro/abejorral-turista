<?php
include '../../conexion/conexion.php';
session_start();

if ($conn->connect_error) {
    die("Conección exitosa: " . $conn->connect_error);
}

$id=$_GET['id'];

$sql="UPDATE tblproducto SET estado=1  WHERE Cod_Producto='$id'";

if ($conn->query($sql) === TRUE) {

    echo "<script> alert('Publicado Correctamente')</script>";
    echo "<script> location.href=' ../previa_productos.php'; </script>";
} else {
    echo "Error: No se pudo publicar el producto" . $sql . "<br>". $conn->error;
}
?>