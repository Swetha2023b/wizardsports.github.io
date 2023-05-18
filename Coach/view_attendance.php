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
    $month = $_POST['month'];
    $year = $_POST['year'];
    
    if($year=="All" && $month=="All"){
    $log_id = $_SESSION['log_id'];
    $till = date('d-m-y');
    $start_date = date_create('2023-03-28');
    $end_date = date_create('now');
    $interval = new DateInterval('P1D'); // 1 day interval
    $dates = new DatePeriod($start_date, $interval, $end_date);
    $attendance_count = array();
    $weekdays_to_omit = array(0);


    $pdf = new FPDF();
    $pdf->AddPage();

   
    // Set the font and text color for the heading
$pdf->SetFont('Arial','B',24);
$pdf->SetTextColor(44,62,80); // Dark blue

// Add a background color to the heading
$pdf->SetFillColor(236, 240, 241); // Light gray
$pdf->Rect(0, 10, $pdf->GetPageWidth(), 30, 'F');

// Add the heading text
$pdf->Cell(0, 30, 'Attendance Report', 0, 1, 'C', false);
// Add some space below the heading
$pdf->Ln(10);

// Set the font and text color for the attendance details
$pdf->SetFont('Arial','B',14);
$pdf->SetTextColor(52, 73, 94); // Dark blue

// Display the attended days on the left side
$pdf->Cell(0, 10, 'Date From : ' . '28-03-23', 0, 0, 'L');

// Display the total days on the right side
$pdf->Cell(0, 10, 'Date Till : ' . $till, 0, 1, 'R');

// Add some space below the attendance details
$pdf->Ln(10);


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
        $day_of_week = date('w', strtotime($date_str));
        if (in_array($day_of_week, $weekdays_to_omit)) { // If the day of the week is in the weekdays to omit array
            continue; // Skip the loop iteration and go to the next date
        } else {
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
    }
    $pdf->Output();
    }

    else if($year!="All" && $month!="All"){
            
            $log_id = $_SESSION['log_id'];
            $till = date('d-m-y');
            $weekdays_to_omit = array(0);
            $start_date = date_create($year.'-'.$month.'-01');
            $end_date = date_create($year.'-'.$month.'-'.cal_days_in_month(CAL_GREGORIAN, $month, $year))->modify('+1 day');
            $interval = new DateInterval('P1D'); // 1 day interval
            $dates = new DatePeriod($start_date, $interval, $end_date);
            
            $month_name = date('F', mktime(0, 0, 0, $month, 1));
            $count_query = "SELECT COUNT(*) AS count FROM tbl_attendance WHERE login_id='$log_id' AND MONTH(date) = $month AND YEAR(date) = $year;";
            $count_result = mysqli_query($conn, $count_query);
            $count_data = mysqli_fetch_assoc($count_result);
            $attendance_count = $count_data['count'];
            $weekdays_to_omit = array(0);
            $total_days = '26';
        
            $pdf = new FPDF();
            $pdf->AddPage();
        
            // Set the font and text color for the heading
$pdf->SetFont('Arial','B',24);
$pdf->SetTextColor(44,62,80); // Dark blue

// Add a background color to the heading
$pdf->SetFillColor(236, 240, 241); // Light gray
$pdf->Rect(0, 10, $pdf->GetPageWidth(), 30, 'F');

// Add the heading text
$pdf->Cell(0, 30, 'Attendance Report', 0, 1, 'C', false);

// Add some space below the heading
$pdf->Ln(10);

// Set the font and text color for the attendance details
$pdf->SetFont('Arial','B',14);
$pdf->SetTextColor(52, 73, 94); // Dark blue

// Display the attended days on the left side
$pdf->Cell(0, 10, 'No of days attended: '.$attendance_count.' Days', 0, 0, 'L');

// Display the total days on the right side
$pdf->Cell(0, 10, 'Total no. of days: '.$total_days.' Days', 0, 1, 'R');

// Add some space below the attendance details
$pdf->Ln(10);

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
                $day_of_week = date('w', strtotime($date_str));
                if ($day_of_week == 0) { // If the day of the week is Sunday
                    continue; // Skip the loop iteration and go to the next date
                } else {
                    $sql_stud = "SELECT * FROM tbl_attendance WHERE login_id='$log_id' AND date='$date_str'";
                    $result_stud = mysqli_query($conn, $sql_stud);
                    if (mysqli_num_rows($result_stud) > 0) {
                        $attendance_count++; // Increment attendance count
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
            }
            $pdf->Output();     
    }
}
else {
    echo '<script> alert ("Attendance cannot be generated");</script>';
    echo '<script>window.location.href="attendance.php";</script>';
}
?>
