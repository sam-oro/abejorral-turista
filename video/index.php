<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>videos</title>
</head>
<body>

<?php
require ("../conexion/conexion.php");
$conexion=mysqli_connect($servidor, $usuario, $contrasena);
if (mysqli_connect_errno()){
    echo "Fallo al conectar con la base de datos";
    exit();
}

$sel = $conn ->query("SELECT * FROM tblvideo where cod='1'");

while ($row=$sel->fetch_array()) {

    echo "Titulo: ".$row[1]."<br>";
    echo "Ruta: ".$row[2]."<br>";

    echo('<iframe width="560" height="315" src="'.$row[2].'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');	
}
?>
</body>
</html>
