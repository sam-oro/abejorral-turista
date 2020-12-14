<?php

include '../../conexion/conexion.php';
require('../fpdf/fpdf.php');



class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(50);
    // Título
    $this->Cell(160,10,'Reporte De Clientes Registrados',0,0,'C');
    // Salto de línea
    $this->Ln(20);


    $this->Cell(30,10, utf8_decode('Cédula'), 1, 0, 'C', 0);
    $this->Cell(30,10, 'Nombres', 1, 0, 'C', 0);
    $this->Cell(40,10, 'Apellidos', 1, 0, 'C', 0);
    $this->Cell(40,10, 'Nacimiento', 1, 0, 'C', 0);
    $this->Cell(40,10, 'Celular', 1, 0, 'C', 0);
    $this->Cell(40,10, utf8_decode('Dirección'), 1, 0, 'C', 0);
    $this->Cell(60,10, 'Correo', 1, 1, 'C', 0);
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


$sel = $conn ->query("SELECT `tblcliente`.`Id_Cliente`, `tblcliente`.`Nombre`, `tblcliente`.`Apellidos`, `tblcliente`.`Fecha_Nacimiento`, `tblcliente`.`Cel`, `tblmunicipios`.`nombre` AS `Municipio`, `tbldepartamentos`.`nombre` AS `Departamento`, `tblcliente`.`Direccion`, `tblcliente`.`Correo` FROM `tblcliente` LEFT JOIN `tblmunicipios` ON `tblcliente`.`id_Municipio` = `tblmunicipios`.`id_Municipio` LEFT JOIN `tbldepartamentos` ON `tblmunicipios`.`Id_Departamento` = `tbldepartamentos`.`Id_Departamento`;");

$pdf = new PDF('L','mm','A4',); //aqui se pone horizontal la hoja
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);


while($row = $sel->fetch_assoc()){
    $pdf->Cell(30,10, $row['Id_Cliente'], 1, 0, 'C', 0);
    $pdf->Cell(30,10, utf8_decode($row['Nombre']), 1, 0, 'C', 0);
    $pdf->Cell(40,10, utf8_decode($row['Apellidos']), 1, 0, 'C', 0);
    $pdf->Cell(40,10, $row['Fecha_Nacimiento'], 1, 0, 'C', 0);
    $pdf->Cell(40,10, $row['Cel'], 1, 0, 'C', 0);
    $pdf->Cell(40,10, utf8_decode($row['Direccion']), 1, 0, 'C', 0);
    $pdf->Cell(60,10, utf8_decode($row['Correo']), 1, 1, 'C', 0);
}


$pdf->Output();



?>