<?php
    require "../../conexion/conexion.php";

    if ($conn->connect_error) {
        die("Conección exitosa: " . $conn->connect_error);
    }

    $nombre=$_POST['nombre'];
    $peso=$_POST['peso'];
    $cantidad=$_POST['cantidad'];
    $valor=$_POST['valor'];
    $solicitud=$_POST['solicitud'];
    $empresa=$_POST['empresa'];
    $proveedor=$_POST['proveedor'];

    $sql="INSERT INTO tblproducto (Cod_Producto, Nom_Producto, Peso_Producto, Cantidad, Valor, Cod_Solicitud, Cod_Empresa, Cod_Prove) VALUES (NULL, '$nombre', '$peso', '$cantidad','$valor','$solicitud', '$empresa', '$proveedor')";

    if ($conn->query($sql)) {
        //echo "<script> location.href='../form_producto.php'; </script>";
        echo "<script> alert('Correcto')</script>";
    }else{
        echo "Error: " . $sql . "<br>". $conn->error;
    }

?>