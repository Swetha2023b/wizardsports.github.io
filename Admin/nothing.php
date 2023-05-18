<?php

require('fpdf/fpdf.php'); // Include FPDF library

// Define database connection variables
$host = "localhost";
$user = "root";
$password = "";
$database = "db_sports";

// Connect to the database
$conn = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Define query to fetch data from database
$sql = "SELECT * FROM tbl_stud_register";

// Execute the query
$result = mysqli_query($conn, $sql);

// Create a new PDF document
$pdf = new FPDF();
$pdf->AddPage();

// Set the font and text color
$pdf->SetFont('Arial','B',16);
$pdf->SetTextColor(0,0,255);

// Write the title of the report
$pdf->Cell(0,10,'Sports Academy Player Report',0,1,'C');

// Add a line break
$pdf->Ln();
$w = $pdf->GetPageWidth();

$shift_width = $w * 0.02;
$pdf->Cell($shift_width);

// Create a table header
$cell_width = 210 / 11; 
$pdf->SetFont('Arial','B',8);
$pdf->SetFillColor(220,220,220);
$pdf->Cell($shift_width);
$pdf->Cell($cell_width,10,'Name',1,0,'C',true);
$pdf->Cell($cell_width,10,'DOB',1,0,'C',true);
$pdf->Cell($cell_width,10,'Gender',1,0,'C',true);
$pdf->Cell($cell_width,10,'Phone',1,0,'C',true);
$pdf->Cell($cell_width,10,'Blood Group',1,0,'C',true);
$pdf->Cell($cell_width,10,'Father',1,0,'C',true);
$pdf->Cell($cell_width,10,'Mother',1,0,'C',true);
$pdf->Cell($cell_width,10,'Category 1',1,0,'C',true);
$pdf->Cell($cell_width,10,'Category 2',1,0,'C',true);
$pdf->Cell($cell_width,10,'Size',1,1,'C',true);

// Set the font and text color for the table content
$pdf->SetFont('Arial','',8);
$pdf->SetTextColor(0,0,0);

// Loop through the query result and add the data to the table
while ($row = mysqli_fetch_assoc($result)) {
    $pdf->Cell($shift_width);
    $pdf->Cell($cell_width,10,$row['stud_name'],1,0,'L');
    $pdf->Cell($cell_width,10,$row['stud_dob'],1,0,'C');
    $pdf->Cell($cell_width,10,$row['stud_gender'],1,0,'C');
    $pdf->Cell($cell_width,10,$row['stud_phone'],1,0,'L');
    $pdf->Cell($cell_width,10,$row['stud_bloodgrp'],1,0,'C');
	$pdf->Cell($cell_width,10,$row['stud_father'],1,0,'L');
    $pdf->Cell($cell_width,10,$row['stud_mother'],1,0,'C');
    $pdf->Cell($cell_width,10,$row['stud_item_1'],1,0,'C');
    $pdf->Cell($cell_width,10,$row['stud_item_2'],1,0,'L');
    $pdf->Cell($cell_width,10,$row['stud_size'],1,1,'C');
}

// Output the PDF document
$pdf->Output();

// Close the database connection
mysqli_close($conn);

?>
