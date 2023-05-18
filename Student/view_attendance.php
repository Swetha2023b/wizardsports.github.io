<?php
session_start();
require('../Admin/fpdf/fpdf.php'); 
$host = "localhost";
$user = "root";
$password = "";
$database = "db_sports";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $log_id = $_SESSION['log_id'];
    $start_date = date_create('2023-03-28');
    $end_date = date_create('now');
    $interval = new DateInterval('P1D'); // 1 day interval
    $dates = new DatePeriod($start_date, $interval, $end_date);

    $pdf = new FPDF();
    $pdf->AddPage();

    $pdf->SetFont('Arial','B',16);
    $pdf->SetTextColor(0,0,255);

    // $pdf->Cell(0,10,'Attendance Report',0,1,'C');
    // $pdf->SetTextColor(255, 0, 0); // red
    // $pdf->SetFont('times', 'B', 12);
    // $pdf->Cell(0,10,'Date Till : ' . $month_name,0,1,'C');

    $pdf->Ln();
    $pdf->SetTextColor(0, 0, 0); // black
    $pdf->SetFont('times', '', 12);

    $pdf->SetFont('Arial','B',8);
    $pdf->SetFillColor(220,220,220);
    $pdf->Cell(60,10,'Date',1,0,'C',true);
    $pdf->Cell(60,10,'Status',1,0,'C',true);
    $pdf->Cell(60,10,'Time',1,1,'C',true);

    $pdf->SetFont('Arial','',8);
    $pdf->SetTextColor(0,0,0);

    foreach ($dates as $date) {
        $date_str = $date->format('Y-m-d');
        $sql_stud = "SELECT * FROM tbl_attendance WHERE login_id='$log_id' AND date='$date_str'";
        $result_stud = mysqli_query($conn, $sql_stud);
        if (mysqli_num_rows($result_stud) > 0) {
            $row_stud = mysqli_fetch_assoc($result_stud);
            $pdf->Cell(60,10,$row_stud['date'],1,0,'L');
            $pdf->Cell(60,10,'X',1,0,'C');
            $pdf->Cell(60,10,$row_stud['time_in'],1,1,'C');
        } else {
            $pdf->Cell(60,10,$date_str,1,0,'L');
            $pdf->Cell(60,10,'Absent',1,0,'C');
            $pdf->Cell(60,10,'-',1,1,'C');
        }
    }
    $pdf->Output();
}
else {
    echo '<script> alert ("Attendance cannot be generated");</script>';
    echo '<script>window.location.href="attendance.php";</script>';
}
?>
