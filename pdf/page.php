<?php
require('fpdf17/fpdf.php');

//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

//dummy data
//data with medium text's length
$data1=array(
	array(
		"1",
		"Foo, overflowed text length"
	),
	array(
		"1",
		"Bar, normal text length"
	),
	array(
		"1",
		"Baz, overflowed text length"
	)
);

//data which possibly contains long text
$data2=array(
	array(
		"1",
		"Foo, overflowed text length"
	),
	array(
		"1",
		"Bar, normal length"
	),
	array(
		"1",
		"Baz, overflowed text length"
	),
);

$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();

$pdf->SetFont('Arial','',12);
$pdf->SetDrawColor(180,180,255);
//define standard font size
$fontSize=12;

//shrinking method
$pdf->Cell(150,5,"Font size shrinking method",0,1);
//define a temporary font size
$tempFontSize=$fontSize;
//loop the data
foreach($data1 as $item){
	$pdf->Cell(10,5,$item[0],1,0);
	$pdf->Cell(60,5,$item[1],1,0);
	
	//shrink font size until it fits the cell width
	$cellWidth=80;
	while($pdf->GetStringWidth($item[0]) > $cellWidth){ //loop until the string width is smaller than cell width
		$pdf->SetFontSize($tempFontSize -= 0.1);
	}
	$pdf->Cell($cellWidth,5,$item[0],1,1);
	//reset font size to standard
	$tempFontSize=$fontSize;
	$pdf->SetFontSize($fontSize);
	

}

$pdf->Ln(10);

//multicell method
$pdf->Cell(150,5,"MultiCell method",0,1);

	
	
	
	
	
	
	
	
	
	
	
	
	







































$pdf->Output();
?>
