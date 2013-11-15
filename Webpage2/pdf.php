<?php 
include_once('pdf/fpdf.php');

// get info
// bar
$bar = $_GET['bar'];
$bAmount = $_GET['bAmount'];
$barPrice = 200.00;
// drink
$drink = $_GET['drink'];
$dAmount =  $_GET['dAmount'];
$drinkPrice = 500.00;
// address
$name =  $_GET['Name'];
$address = $_GET['address'];
$City = $_GET['City'];
$date = date("Y-m-d");

// udregn
$amount = $dAmount * $drinkPrice + $bAmount * $barPrice;
$moms = $amount / 100 * 25;
$total = $amount + $moms;

// lav pdf
$pdf = new FPDF();
$pdf->AddPage();

// overskrift
$pdf->SetMargins(40,5,40);
$pdf->SetFont('Times','B',15);
$pdf->Cell(55);
$pdf->Cell(30,10,'BUY STUFF.COM',0,0, 'c');
$pdf->Ln(30);
$pdf->Cell(20,5,"$name",0,0,'l');
$pdf->Cell(105);
$pdf->Cell(15,5,'DATE:',0,0,'l');
$pdf->Cell(20,5,"$date",0,1,'l');
$pdf->Cell(15,5,"$address",0,0,'r');
$pdf->Cell(110);
$pdf->Cell(20,5,"  ",0,1,'l');
$pdf->Cell(15,5,"$City",0,0,'r');
$pdf->Ln(30);
$pdf->Cell(20,5,'INVOICE',0,1,'l');
$pdf->Line(30, 87, 210-70, 87);
$pdf->Ln(5);
$pdf->Cell(20,5,"$drink",0,0,'l');
$pdf->Cell(75);
$pdf->Cell(20,5,"$dAmount x $drinkPrice",0,1,'l');
$pdf->Cell(20,5,"$bar",0,0,'l');
$pdf->Cell(75);
$pdf->Cell(20,5,"$bAmount x $barPrice",0,1,'l');
$pdf->Line(30, 120, 210-70, 120);
$pdf->Ln(21);
$pdf->Cell(60);
$pdf->Cell(30,5,'AMOUNT',0,0,'l');
$pdf->Cell(20,5,"$amount",0,1,'R');
$pdf->Cell(60);
$pdf->Cell(30,5,'MOMS 25%',0,0,'l');
$pdf->Cell(20,5,"$moms",0,1,'R');
$pdf->Cell(60);
$pdf->SetFont('Times','B',11);
$pdf->Cell(30,5,'TOTAL DKK',0,0,'l');
$pdf->Cell(20,5,"$total",0,1,'R');
$pdf->Line(86, 136, 210-70, 136);
$pdf->Ln(50);
$pdf->SetFont('Times','',8);
$pdf->SetTextColor(100);
$pdf->Cell(10,5,'BANK: ',0,0,'l');
$pdf->SetTextColor(0);
$pdf->Cell(10,5,'LORTE BANK ',0,1,'l');
$pdf->SetTextColor(100);
$pdf->Cell(15,5,'ACCOUNT: ',0,0,'l');
$pdf->SetTextColor(0);
$pdf->Cell(10,5,'1234 80773',0,1,'l');
$pdf->SetTextColor(100);
$pdf->Cell(15,5,'PAYMENT: ',0,0,'l');
$pdf->SetTextColor(0);
$pdf->Cell(10,5,'inden 8 dage, ellers ryger fingrene ',0,1,'l');
$pdf->Output();
?>
