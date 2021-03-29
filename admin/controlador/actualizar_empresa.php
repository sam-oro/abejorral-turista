<?php
    include '../../conexion/conexion.php';

    session_start();
    if (!isset($_SESSION['rol'])){
        echo "<script> location.href='../index.php'; </script>";
    }else{
        if($_SESSION['rol']!=1){
            echo "<script> location.href='../index.php'; </script>";
        }
    }

    $cod_empresa=$_POST['cod_empresa'];

    //para obtener el correo a cambiar y ponerlo en el where del update

    $sql= $conn->query("SELECT `tblempresa`.`Correo`
    FROM `tblempresa` WHERE Cod_Empresa=$cod_empresa");

while ($fila = $sql -> fetch_assoc()) {
        $correoviejo=$fila['Correo'];
};

    //echo $correoviejo;

    $rut=$_POST['rut'];    
    $nombre=$_POST['nombre'];
    $celular=$_POST['celular'];
    $telefono=$_POST['telefono'];
    $correo=$_POST['correo'];
    ///$municipio=$_POST['municipio'];
    ///$departamento=$_POST['departamento'];
    $direccion=$_POST['direccion'];
    $latitud=$_POST['latitud'];
    $longitud=$_POST['longitud'];

    $update1 = $conn->query("UPDATE tbllogin SET Correo='$correo', WHERE Correo='$correoviejo'");

    //echo $correo;

    if ($update1){
        $update2 = $conn->query("UPDATE tblempresa SET RUT_Empresa='$rut', Nombre='$nombre', Cel='$celular', Telefono='$telefono', Direccion='$direccion', Latitud='$latitud', Longitud='$longitud'  WHERE Cod_Empresa=$cod_empresa");
        echo "<script> 	alert('Se Actualizo Correctamente') </script>";
        echo "<script> 	location.href='../empresas.php';</script>";
    }else{

        echo "<script> 	location.href='../empresas.php';</script>";

    }

    $conn->close();
    



?>