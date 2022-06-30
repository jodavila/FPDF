<?php 

	require('fpdf/fpdf.php');
	$pdf = new FPDF('P','mm','A4');
	$pdf->AddPage();
	$pdf->SetFont('Times','BI',72);
	$pdf->Cell(20,10,'Oi =3=');
	$pdf->Output();

echo"criou";
?>