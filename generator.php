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
$pdf->AddFont('Tahoma','B','tahomab.php');
$pdf->SetFont('Tahoma','B',12);


if (isset($_POST["booking-ref"])) {
    $pdf->SetXY(140, 38); 
    $pdf->Write(0, $_POST["booking-ref"]); 
}

if (isset($_POST["check-in"])) {
    $pdf->SetXY(115, 44.5); 
    $str = iconv('UTF-8', 'cp874', $_POST["check-in"]);
    $pdf->Write(0, $str); 
}

if (isset($_POST["check-out"])) {
    $pdf->SetXY(118, 51); 
    $str = iconv('UTF-8', 'cp874', $_POST["check-out"]);
    $pdf->Write(0, $str); 
}

if (isset($_POST["number-nights"])) {
    $pdf->SetXY(121, 57); 
    $str = iconv('UTF-8', 'cp874', $_POST["number-nights"]);
    $pdf->Write(0, $str); 
}

if (isset($_POST["number-rooms"])) {
    $pdf->SetXY(118, 63.5); 
    $str = iconv('UTF-8', 'cp874', $_POST["number-rooms"]);
    $pdf->Write(0, $str); 
}

if (isset($_POST["number-guests"])) {
    $pdf->SetXY(113, 70); 
    $str = iconv('UTF-8', 'cp874', $_POST["number-guests"]);
    $pdf->Write(0, $str); 
}

if (isset($_POST["additional-amount"])) {
    $pdf->SetXY(121, 76); 
    $str = iconv('UTF-8', 'cp874', $_POST["additional-amount"]);
    $pdf->Write(0, $str); 
}

if (isset($_POST["room-type"])) {
    $pdf->SetXY(123, 82.5); 
    $str = iconv('UTF-8', 'cp874', $_POST["room-type"]);
    $pdf->Write(0, $str); 
}

if (isset($_POST["promo-code"])) {
    $pdf->SetXY(129, 88.7); 
    $str = iconv('UTF-8', 'cp874', $_POST["promo-code"]);
    $pdf->Write(0, $str); 
}


if (isset($_POST["book-from"])) {
    $pdf->SetXY(110, 95); 
    $str = iconv('UTF-8', 'cp874', $_POST["book-from"]);
    $pdf->Write(0, $str); 
}

if (isset($_POST["amount-paid"])) {
    $pdf->SetXY(113, 126); 
    $str = iconv('UTF-8', 'cp874', $_POST["amount-paid"]);
    $pdf->Write(0, $str); 
}

if (isset($_POST["payment-status"])) {
    $pdf->SetXY(129, 132.3); 
    $str = iconv('UTF-8', 'cp874', $_POST["payment-status"]);
    $pdf->Write(0, $str); 
}

if (isset($_POST["payment-platform"])) {
    $pdf->SetXY(126, 139); 
    $str = iconv('UTF-8', 'cp874', $_POST["payment-platform"]);
    $pdf->Write(0, $str); 
}

if (isset($_POST["payment-date"])) {
    $pdf->SetXY(118, 145.7); 
    $str = iconv('UTF-8', 'cp874', $_POST["payment-date"]);
    $pdf->Write(0, $str); 
}

if (isset($_POST["check-in-out-time"])) {
    $pdf->SetXY(127, 152); 
    $str = iconv('UTF-8', 'cp874', $_POST["check-in-out-time"]);
    $pdf->Write(0, $str); 
}


$pdf->Output();  
?>