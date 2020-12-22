<?php
    require "../../../conexion/conexion.php";
    session_start();
    if (!isset($_SESSION['rol'])){
        echo "<script> location.href='../../index.php'; </script>";

    }else{
        if($_SESSION['rol']!=3){
            echo "<script> location.href='../../index.php'; </script>";
        }
    }
    if ($conn->connect_error) {
        die("Conección exitosa: " . $conn->connect_error);
    }
    $hoy = date("YmdHis");

    $nombre=$_POST['nombre'];
    $peso=$_POST['peso'];
    $cantidad=$_POST['cantidad'];
    $valor=$_POST['valor'];
    //$solicitud=$_POST['solicitud'];
    $empresa=$_SESSION['cod_empr'];
    //$proveedor=$_POST['proveedor'];

    //aqui se toman los nombres de las imagens a subir
    //imagen 1
    

    $type=$_FILES['img1']['type'];
    $tmp_name = $_FILES['img1']["tmp_name"];
    $name =$_FILES['img1']["name"];
    $name=$hoy.$name;
    $img1="../../../images/".$name;
    move_uploaded_file($tmp_name,$img1);
    

    //imagen  2
    $type2=$_FILES['img2']['type'];
    $tmp_name2 = $_FILES['img2']["tmp_name"];
    $name2 = $_FILES['img2']["name"];
    $name2=$hoy.$name2;
    $img2="../../../images/".$name2;
    move_uploaded_file($tmp_name2,$img2);

    //imagen  3
    $type3=$_FILES['img3']['type'];
    $tmp_name3 = $_FILES['img3']["tmp_name"];
    $name3 = $_FILES['img3']["name"];
    $name3=$hoy.$name3;
    
    $img3="../../../images/".$name3;;
    
    move_uploaded_file($tmp_name3,$img3);




    $sql="INSERT INTO tblproducto (Nom_Producto, Peso_Producto, Cantidad, Valor, img1, img2, img3, Cod_Empresa) VALUES ('$nombre', '$peso', '$cantidad','$valor', '$name', '$name2', '$name3', '$empresa')";

    if ($conn->query($sql)){
        echo "<script> alert('Correcto');</script>";
        echo "<script> location.href='../form_producto.php'; </script>";
    }else{
        echo "Error: " . $sql . "<br>". $conn->error;
    }




?>