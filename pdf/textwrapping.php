<?php
require('fpdf17/fpdf.php');
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'test');

//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

//dummy data
//data with medium text's length
$data1=array(
	array(
		"FULL NAMES",
		"NZOMO VINCENT MWINZILA"
	),
	array(
		"EXAM CATEGORY",
		"TARGETER SERIES EXAMINATIONS"
	),
	array(
		"CATEGORY DATES",
		"00-00-0000 TO 00-00-0000"
	)

);

$data2=array(
	array(
		"ENGLISH",
		"60%"
	),
	array(
		"KISWAHILI",
		"60%"
	),
	array(
		"MATHS",
		"60%"
	),
	array(
		"GHCRE",
		"60%"
	),
	array(
		"SCIENCE",
		"60%"
	),
	array(
		"TOTAL MARKS",
		"300"
	)

);
class PDF extends FPDF {
	function Header(){
		$this->SetFont('Arial','B',15);
		
		//dummy cell to put logo
		//$this->Cell(12,0,'',0,0);
		//is equivalent to:
		$this->Cell(12);
		
		//put logo
		$this->Image('logo-small.png',10,10,10);
		
		$this->Cell(100,10,'Exams ',0,1);
		
		//dummy cell to give line spacing
		//$this->Cell(0,5,'',0,1);
		//is equivalent to:
		$this->Ln(5);
		
		$this->SetFont('Arial','B',10);
		
		$this->SetFillColor(20, 188, 15);
		$this->SetDrawColor(216, 110, 10);
		$this->Cell(60,5,'EXAMINATIONS',1,0,'',true);
		
	}
}

//data which possibly contains long text


$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();

$pdf->SetFont('Courier','',8);
$pdf->SetDrawColor(0,100,0);
$user_id = ($_GET['user_id']);
$query=mysqli_query($con,"SELECT exams. exam_name, performance. score, performance. user_id, people. first_name, people. other_names, category. category_name, subjects. subject_name FROM performance INNER JOIN exams ON exams. exam_id = performance. exam_id INNER JOIN people ON performance. user_id = people. user_id INNER JOIN category ON category. category_id = exams. category_id INNER JOIN subjects ON exams. subject_id = subjects. subject_id WHERE performance. user_id = '$user_id'");
$query2 =mysqli_query($con,"SELECT people. identification, people. first_name, people. other_names, category. category_name FROM performance INNER JOIN exams ON exams. exam_id = performance. exam_id INNER JOIN people ON performance. user_id = people. user_id INNER JOIN category ON category. category_id = exams. category_id INNER JOIN subjects ON exams. subject_id = subjects. subject_id WHERE performance. user_id = '$user_id' LIMIT 1");


//define standard font size
$fontSize=8;
$row=mysqli_fetch_array($query2);


//shrinking method
$pdf->SetFont('Times','BU');
$pdf->SetFillColor(20, 188, 15);
$pdf->Cell(150,10,"EDUSIM SCHOOL",0,1,'C');
$pdf->Cell(150,10,"EXAMS SCORE SHEET",0,1,'C');
$pdf->SetFont('Times','');

//define a temporary font size
$tempFontSize=$fontSize;
//loop the data
$full_names_text ='FIRST NAME'; 
$pdf->Cell(40,5,$full_names_text,1,0);
$pdf->Cell(130,5,$row['first_name'],1,1);
$other_text ='OTHER NAMES'; 
$pdf->Cell(40,5,$other_text,1,0);
$pdf->Cell(130,5,$row['other_names'],1,1);
$category_text ='EXAM CATEGORY NAME'; 
$pdf->Cell(40,5,$category_text,1,0);
$pdf->Cell(130,5,$row['category_name'],1,1);
$position_text ='OVERALL POSITION';
$position_text1 ='1 of 2';  
$pdf->Cell(40,5,$position_text,1,0);
$pdf->Cell(130,5,$position_text1,1,1);

foreach($data1 as $item)
{
	
	
	
	//shrink font size until it fits the cell width
	/*$cellWidth=80;
	while
	($pdf->GetStringWidth($item[2]) > $cellWidth)
	{ //loop until the string width is smaller than cell width
		$pdf->SetFontSize($tempFontSize -= 0.1);
	}
	$pdf->Cell($cellWidth,5,$item[2],1,0);
	//reset font size to standard
	$tempFontSize=$fontSize;
	$pdf->SetFontSize($fontSize);
	
	$pdf->Cell(40,5,$item[3],1,1);*/
}
$pdf->Cell(150,10,"SUBJECT RESULTS",0,1);
$final_score = 0;

while($data=mysqli_fetch_array($query))
{
	$pdf->Cell(60,5,$data['subject_name'],'LR',0);
	$pdf->Cell(25,5,$data['score'],'LR',1);

	$final_score += $data['score'];
}   
    $textfile = 'TOTAL';
    $pdf->Cell(60,5,$textfile,'LR',0);
	$pdf->Cell(25,5,$final_score,'LR',1);

$pdf->Cell(150,50,"OFFICIAL SIGNATURE AND STAMP",0,1);

$pdf->Cell(150,50,"____________________________",0,1);
$pdf->Ln(10);



	

	
	
	
	
	
	
	
	
	
	
	
	
	







































$pdf->Output();
?>
