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
?>
<?php 
$sel = $conn ->query("SELECT * FROM tblvideo where cod='1'");

while ($row=$sel->fetch_array()) {
?>
<?php echo $row[1] ?>  <?php echo $row[2] ?>
<?php

echo('<iframe width="560" height="315" src="'.$row[2].'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>');	
}
?>

    
</body>
</html>



    
