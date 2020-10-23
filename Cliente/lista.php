<?php
    require "../conexion/conexion.php";
    $dep=$_POST['departamento'];

    $sql="SELECT id_Municipio, nombre FROM tblmunicipios WHERE Id_departamento='$dep'";

    $result=mysqli_query($conn,$sql);

    $cadena="<label> Municipio </label>
             <select id='municipio' name='municipio'>";

    while ($row=mysqli_fetch_row($result)){
        $cadena=$cadena.'<option value='.$row[0].'>'.utf8_encode($row[1]).'</option>';
    }

    echo $cadena."</select>";
?>