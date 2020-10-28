<?php
require_once "../conexion/conexion.php";
$select = "<label for='municipio'>Municipio: </label><br><select class='form-control' name='Id_Municipio' id='municipio'>";
if ($_POST['departamento'] != 0) {
    $dep = $_POST['departamento'];

    $sel = $conn->query("SELECT * FROM tblmunicipios WHERE Id_Departamento='$dep'");
    while ($row=$sel->fetch_array()) {
        $select = $select.'<option value="'.$row[0].'">'.$row[3].'</option>';
    }
}else{
    $select = $select.'<option value="ninguno" disabled selected>-Seleccione un Municipio-</option>';          
}
echo $select.'</select><br><br>';
?>