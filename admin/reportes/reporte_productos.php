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
    $this->Cell(160,10,'Reporte de productos',0,0,'C');
    // Salto de línea
    $this->Ln(20);


    $this->Cell(45,10, utf8_decode('Codigo Producto'), 1, 0, 'C', 0);
    $this->Cell(50,10, 'Nombre Producto', 1, 0, 'C', 0);
    $this->Cell(50,10, 'Peso Por Unidad', 1, 0, 'C', 0);
    $this->Cell(55,10, 'Cantidad Disponible', 1, 0, 'C', 0);
    $this->Cell(45,10, 'Valor/Unidad', 1, 0, 'C', 0);
    $this->Cell(40,10, utf8_decode('Empresa'), 1, 1, 'C', 0);
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


$sel = $conn ->query("SELECT `tblproducto`.`Cod_Producto`, `tblproducto`.`Nom_Producto`, `tblproducto`.`Peso_Producto`, `tblproducto`.`Cantidad`, `tblproducto`.`Valor`, `tblempresa`.`Nombre`
FROM `tblproducto` 
    LEFT JOIN `tblempresa` ON `tblproducto`.`Cod_Empresa` = `tblempresa`.`Cod_Empresa`;");

$pdf = new PDF('L','mm','A4',); //aqui se pone horizontal la hoja
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);


while($row = $sel->fetch_assoc()){
    $pdf->Cell(45,10, $row['Cod_Producto'], 1, 0, 'C', 0);
    $pdf->Cell(50,10, utf8_decode($row['Nom_Producto']), 1, 0, 'C', 0);
    $pdf->Cell(50,10, utf8_decode($row['Peso_Producto']), 1, 0, 'C', 0);
    $pdf->Cell(55,10, $row['Cantidad'], 1, 0, 'C', 0);
    $pdf->Cell(45,10, $row['Valor'], 1, 0, 'C', 0);
    $pdf->Cell(40,10, utf8_decode($row['Nombre']), 1, 1, 'C', 0);
}


$pdf->Output();



?>