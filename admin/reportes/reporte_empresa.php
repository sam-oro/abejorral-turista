<?php

include '../../conexion/conexion.php';
require('../fpdf/fpdf.php');



class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../../img/logo-ng.png',20,5,25);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(50);
    // Título
    $this->Cell(160,10,'Reporte de empresas registrados',0,0,'C');
    // Salto de línea
    $this->Ln(20);


    $this->Cell(30,10, utf8_decode('RUT'), 1, 0, 'C', 0);
    $this->Cell(30,10, 'Nombre', 1, 0, 'C', 0);
    $this->Cell(40,10, 'Telefono', 1, 0, 'C', 0);
    $this->Cell(40,10, 'Municipio', 1, 0, 'C', 0);
    $this->Cell(40,10, 'Departamento', 1, 0, 'C', 0);
    $this->Cell(40,10, utf8_decode('Dirección'), 1, 0, 'C', 0);
    $this->Cell(40,10, utf8_decode('Correo'), 1, 1, 'C', 0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}


$sel = $conn ->query("SELECT `tblempresa`.`Cod_Empresa`, `tblempresa`.`RUT_Empresa`, `tblempresa`.`Nombre`, `tblempresa`.`Cel`, `tblempresa`.`Telefono`, `tblempresa`.`Correo`, `tblmunicipios`.`nombre` as 'municipio', `tbldepartamentos`.`nombre` as 'departamento', `tblempresa`.`Direccion`, `tblempresa`.`Latitud`, `tblempresa`.`Longitud`
FROM `tblempresa` 
    LEFT JOIN `tblmunicipios` ON `tblempresa`.`Id_Municipio` = `tblmunicipios`.`id_Municipio` 
    LEFT JOIN `tbldepartamentos` ON `tblmunicipios`.`Id_Departamento` = `tbldepartamentos`.`Id_Departamento`;");

$pdf = new PDF('L','mm','A4',); //aqui se pone horizontal la hoja
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);


while($row = $sel->fetch_assoc()){
    $pdf->Cell(30,10, utf8_decode($row['RUT_Empresa']), 1, 0, 'C', 0);
    $pdf->Cell(30,10, utf8_decode($row['Nombre']), 1, 0, 'C', 0);
    $pdf->Cell(40,10, $row['Telefono'], 1, 0, 'C', 0);
    $pdf->Cell(40,10, utf8_decode($row['municipio']), 1, 0, 'C', 0);
    $pdf->Cell(40,10, utf8_decode($row['departamento']), 1, 0, 'C', 0);
    $pdf->Cell(40,10, utf8_decode($row['Direccion']), 1, 0, 'C', 0);
    $pdf->Cell(40,10, utf8_decode($row['Correo']), 1, 1, 'C', 0);
    
}


$pdf->Output();



?>