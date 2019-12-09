<?php
require('fpdf17/fpdf.php');
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'t_table');


class PDF extends FPDF {
	function Header(){
		$this->SetFont('Arial','B',15);
		
		//dummy cell to put logo
		//$this->Cell(12,0,'',0,0);
		//is equivalent to:
		$this->Cell(12);
		
		//put logo
		$this->Image('logo-small.png',10,10,10);
		
		$this->Cell(100,10,'Master Timetable - School Of Biological & Physical Sciences',0,1);
		
		//dummy cell to give line spacing
		//$this->Cell(0,5,'',0,1);
		//is equivalent to:
		$this->Ln(5);
		
		$this->SetFont('Arial','B',11);
		
		$this->SetFillColor(180,180,255);
		$this->SetDrawColor(180,180,255);
		$this->Cell(40,5,'Venue',1,0,'',true);
		$this->Cell(25,5,'Day',1,0,'',true);
		$this->Cell(65,5,'Class',1,0,'',true);
		$this->Cell(60,5,'Time',1,1,'',true);
		
	}
	function Footer(){
		//add table's bottom line
		$this->Cell(190,0,'','T',1,'',true);
		
		//Go to 1.5 cm from bottom
		$this->SetY(-15);
				
		$this->SetFont('Arial','',8);
		
		//width = 0 means the cell is extended up to the right margin
		$this->Cell(0,10,'Page '.$this->PageNo()." / {pages}",0,0,'C');
	}
}


//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new PDF('P','mm','A4'); //use new class

//define new alias for total page numbers
$pdf->AliasNbPages('{pages}');

$pdf->SetAutoPageBreak(true,15);
$pdf->AddPage();

$pdf->SetFont('Arial','',9);
$pdf->SetDrawColor(180,180,255);

$query=mysqli_query($con,"SELECT tt_id, tt. class_id, tt. venue_id, tt. day_id, tt. status, time_slots. slot_id, time_slots .description description1, class .description, day .name name1, venue .name FROM tt  INNER JOIN time_slots ON time_slots .slot_id = tt .slot_id INNER JOIN class  ON class .class_id = tt .class_id INNER JOIN day  ON day .day_id = tt .day_id INNER JOIN venue  ON venue .venue_id = tt .venue_id");

while($data=mysqli_fetch_array($query)){
	$pdf->Cell(40,5,$data['name'],'LR',0);
	$pdf->Cell(25,5,$data['name1'],'LR',0);
	
	if($pdf->GetStringWidth($data['description']) > 65){
		$pdf->SetFont('Arial','',7);
		$pdf->Cell(65,5,$data['description'],'LR',0);
		$pdf->SetFont('Arial','',9);
	}else{
		$pdf->Cell(65,5,$data['description'],'LR',0);
	}
	$pdf->Cell(60,5,$data['description1'],'',1);
}














$pdf->Output();
?>
