<?php
define('FPDF_FONTPATH', dirname(__FILE__).'/fonts');
use setasign\Fpdi\Fpdi;
use setasign\Fpdf\Fpdf;

// setup the autoload function
require_once('vendor/autoload.php');

// initiate FPDI
$pdf = new Fpdi();
// add a page
$pdf->AddPage();
// set the source file
$pdf->setSourceFile("template.pdf");
// import page 1
$tplId = $pdf->importPage(1);
// use the imported page and place it at point 10,10 with a width of 100 mm
$pdf->useTemplate($tplId, 0, 0, 210);

$pdf->SetTextColor(131,84,60); 
$pdf->AddFont('THSarabunNew','B','THSarabunNew_b.php');
$pdf->SetFont('THSarabunNew','B',16);


if (isset($_POST["booking-ref"])) {
    $pdf->SetXY(140, 38); 
    $pdf->Write(0, $_POST["booking-ref"]); 
}

if (isset($_POST["check-in"])) {
    $pdf->SetXY(115, 44.5); 
    $pdf->Write(0, $_POST["check-in"]); 
}

if (isset($_POST["check-out"])) {
    $pdf->SetXY(118, 51); 
    $pdf->Write(0, $_POST["check-out"]); 
}

if (isset($_POST["number-nights"])) {
    $pdf->SetXY(121, 57); 
    $pdf->Write(0, $_POST["number-nights"]); 
}

if (isset($_POST["number-rooms"])) {
    $pdf->SetXY(119, 63.5); 
    $pdf->Write(0, $_POST["number-rooms"]); 
}



$pdf->Output();  
?>