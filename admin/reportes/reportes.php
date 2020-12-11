<?php

include '../../conexion/conexion.php';
require('../fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,utf8_decode('probando esta cosa del pdf'));
$pdf->Output();



?>