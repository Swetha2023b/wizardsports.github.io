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

if (isset($_POST['submit'])) {
    $category = $_POST['category'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    


    if($category=="Students" && $month!="All"){
    // Define query to fetch data from database
    $month_name = date('F', mktime(0, 0, 0, $month, 1));
    $sql_stud = "SELECT * FROM tbl_stud_register WHERE MONTH(date) = '$month' AND YEAR(date) = '$year'";

    // Execute the query
    $result_stud = mysqli_query($conn, $sql_stud);

    // Create a new PDF document
    $pdf = new FPDF();
    $pdf->AddPage();

    // Set the font and text color
    $pdf->SetFont('Arial','B',16);
    $pdf->SetTextColor(0,0,255);

    // Write the title of the report
    $pdf->Cell(0,10,'Sports Academy Players Report',0,1,'C');
    $pdf->SetTextColor(255, 0, 0); // red
    $pdf->SetFont('times', 'B', 12);
    $pdf->Cell(0,10,'Month : ' . $month_name,0,1,'C');
    $pdf->Cell(0,10,'Year : ' . $year,0,1,'C');

    // Add a line break
    $pdf->Ln();
    $pdf->SetTextColor(0, 0, 0); // black
    $pdf->SetFont('times', '', 12);

    // Create a table header
    $cell_width = 210 / 11; 
    $pdf->SetFont('Arial','B',8);
    $pdf->SetFillColor(220,220,220);
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
    while ($row_stud = mysqli_fetch_assoc($result_stud)) {
        $pdf->Cell($cell_width,10,$row_stud['stud_name'],1,0,'L');
        $pdf->Cell($cell_width,10,$row_stud['stud_dob'],1,0,'C');
        $pdf->Cell($cell_width,10,$row_stud['stud_gender'],1,0,'C');
        $pdf->Cell($cell_width,10,$row_stud['stud_phone'],1,0,'L');
        $pdf->Cell($cell_width,10,$row_stud['stud_bloodgrp'],1,0,'C');
        $pdf->Cell($cell_width,10,$row_stud['stud_father'],1,0,'L');
        $pdf->Cell($cell_width,10,$row_stud['stud_mother'],1,0,'C');
        $pdf->Cell($cell_width,10,$row_stud['stud_item_1'],1,0,'C');
        $pdf->Cell($cell_width,10,$row_stud['stud_item_2'],1,0,'L');
        $pdf->Cell($cell_width,10,$row_stud['stud_size'],1,1,'C');
    }

    // Output the PDF document
    $pdf->Output();
    }

    elseif($category=="Coaches" && $month!="All"){
        $month_name = date('F', mktime(0, 0, 0, $month, 1));
        $sql_teach = "SELECT * FROM tbl_coach_register WHERE MONTH(date) = '$month' AND YEAR(date) = '$year'";

        // Execute the query
        $result_teach = mysqli_query($conn, $sql_teach);
    
        // Create a new PDF document
        $pdf = new FPDF();
        $pdf->AddPage();
    
        // Set the font and text color
        $pdf->SetFont('Arial','B',16);
        $pdf->SetTextColor(0,0,255);
    
        // Write the title of the report
        $pdf->Cell(0,10,'Sports Academy Coaches Report',0,1,'C');
        $pdf->SetTextColor(255, 0, 0); // red
        $pdf->SetFont('times', 'B', 12);
        $pdf->Cell(0,10,'Month : ' . $month_name,0,1,'C');
        $pdf->Cell(0,10,'Year : ' . $year,0,1,'C');

        // Add a line break
        $pdf->Ln();
        $pdf->SetTextColor(0, 0, 0); // black
        $pdf->SetFont('times', '', 12);
    
        // Create a table header
        $cell_width = 210 / 8; 
        $pdf->SetFont('Arial','B',8);
        $pdf->SetFillColor(220,220,220);
        $pdf->Cell($cell_width,10,'Name',1,0,'C',true);
        $pdf->Cell($cell_width,10,'DOB',1,0,'C',true);
        $pdf->Cell($cell_width,10,'Gender',1,0,'C',true);
        $pdf->Cell($cell_width,10,'Phone',1,0,'C',true);
        $pdf->Cell($cell_width,10,'Blood Group',1,0,'C',true);
        $pdf->Cell($cell_width,10,'Marital',1,0,'C',true);
        $pdf->Cell($cell_width,10,'Sports Item',1,1,'C',true);
    
        // Set the font and text color for the table content
        $pdf->SetFont('Arial','',8);
        $pdf->SetTextColor(0,0,0);
    
        // Loop through the query result and add the data to the table
        while ($row_teach = mysqli_fetch_assoc($result_teach)) {
            $pdf->Cell($cell_width,10,$row_teach['teach_name'],1,0,'L');
            $pdf->Cell($cell_width,10,$row_teach['teach_dob'],1,0,'C');
            $pdf->Cell($cell_width,10,$row_teach['teach_gender'],1,0,'C');
            $pdf->Cell($cell_width,10,$row_teach['teach_phone'],1,0,'L');
            $pdf->Cell($cell_width,10,$row_teach['teach_bloodgrp'],1,0,'C');
            $pdf->Cell($cell_width,10,$row_teach['teach_marital'],1,0,'C');
            $pdf->Cell($cell_width,10,$row_teach['teach_item'],1,1,'C');
        }
    
        // Output the PDF document
        $pdf->Output();
    }

    elseif($category=="Events" && $month!="All"){
        $month_name = date('F', mktime(0, 0, 0, $month, 1));
        $sql_event = "SELECT * FROM tbl_event WHERE MONTH(date) = '$month' AND YEAR(date) = '$year'";

        // Execute the query
        $result_event = mysqli_query($conn, $sql_event);
    
        // Create a new PDF document
        $pdf = new FPDF();
        $pdf->AddPage();
    
        // Set the font and text color
        $pdf->SetFont('Arial','B',16);
        $pdf->SetTextColor(0,0,255);
    
        // Write the title of the report
        $pdf->Cell(0,10,'Sports Academy Sports Items Report',0,1,'C');
        $pdf->SetTextColor(255, 0, 0); // red
        $pdf->SetFont('times', 'B', 12);
        $pdf->Cell(0,10,'Month : ' . $month_name,0,1,'C');
        $pdf->Cell(0,10,'Year : ' . $year,0,1,'C');

        // Add a line break
        $pdf->Ln();
        $pdf->SetTextColor(0, 0, 0); // black
        $pdf->SetFont('times', '', 12);
    
        // Create a table header
        $cell_width = 210 / 3.5; 
        $pdf->SetFont('Arial','B',8);
        $pdf->SetFillColor(220,220,220);
        $pdf->Cell($cell_width,10,'Name',1,0,'C',true);
        $pdf->Cell($cell_width,10,'Coach',1,0,'C',true);
        $pdf->Cell($cell_width,10,'Type',1,1,'C',true);
    
        // Set the font and text color for the table content
        $pdf->SetFont('Arial','',8);
        $pdf->SetTextColor(0,0,0);
    
        // Loop through the query result and add the data to the table
        while ($row_event = mysqli_fetch_assoc($result_event)) {
            $pdf->Cell($cell_width,10,$row_event['event_name'],1,0,'L');
            $pdf->Cell($cell_width,10,$row_event['event_coach'],1,0,'C');
            $pdf->Cell($cell_width,10,$row_event['event_type'],1,1,'C');
        }
    
        // Output the PDF document
        $pdf->Output();
    }

    elseif($month=="All" && $category=="Students"){
        $sql_stud = "SELECT * FROM tbl_stud_register WHERE YEAR(date) = '$year'";

        // Execute the query
        $result_stud = mysqli_query($conn, $sql_stud);

        // Create a new PDF document
        $pdf = new FPDF();
        $pdf->AddPage();

        // Set the font and text color
        $pdf->SetFont('Arial','B',16);
        $pdf->SetTextColor(0,0,255);

        // Write the title of the report
        $pdf->Cell(0,10,'Sports Academy Players Report',0,1,'C');
        $pdf->SetTextColor(255, 0, 0); // red
        $pdf->SetFont('times', 'B', 12);
        $pdf->Cell(0,10,'Year : ' . $year,0,1,'C');

        // Add a line break
        $pdf->Ln();
        $pdf->SetTextColor(0, 0, 0); // black
        $pdf->SetFont('times', '', 12);

        // Create a table header
        $cell_width = 210 / 11; 
        $pdf->SetFont('Arial','B',8);
        $pdf->SetFillColor(220,220,220);
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
        while ($row_stud = mysqli_fetch_assoc($result_stud)) {
            $pdf->Cell($cell_width,10,$row_stud['stud_name'],1,0,'L');
            $pdf->Cell($cell_width,10,$row_stud['stud_dob'],1,0,'C');
            $pdf->Cell($cell_width,10,$row_stud['stud_gender'],1,0,'C');
            $pdf->Cell($cell_width,10,$row_stud['stud_phone'],1,0,'L');
            $pdf->Cell($cell_width,10,$row_stud['stud_bloodgrp'],1,0,'C');
            $pdf->Cell($cell_width,10,$row_stud['stud_father'],1,0,'L');
            $pdf->Cell($cell_width,10,$row_stud['stud_mother'],1,0,'C');
            $pdf->Cell($cell_width,10,$row_stud['stud_item_1'],1,0,'C');
            $pdf->Cell($cell_width,10,$row_stud['stud_item_2'],1,0,'L');
            $pdf->Cell($cell_width,10,$row_stud['stud_size'],1,1,'C');
        }

        // Output the PDF document
        $pdf->Output();
    }

    elseif($month=="All" && $category=="Coaches"){
        $sql_teach = "SELECT * FROM tbl_coach_register WHERE YEAR(date) = '$year'";

        // Execute the query
        $result_teach = mysqli_query($conn, $sql_teach);
    
        // Create a new PDF document
        $pdf = new FPDF();
        $pdf->AddPage();
    
        // Set the font and text color
        $pdf->SetFont('Arial','B',16);
        $pdf->SetTextColor(0,0,255);
    
        // Write the title of the report
        $pdf->Cell(0,10,'Sports Academy Coaches Report',0,1,'C');
        $pdf->SetTextColor(255, 0, 0); // red
        $pdf->SetFont('times', 'B', 12);
        $pdf->Cell(0,10,'Year : ' . $year,0,1,'C');

        // Add a line break
        $pdf->Ln();
        $pdf->SetTextColor(0, 0, 0); // black
        $pdf->SetFont('times', '', 12);
    
        // Create a table header
        $cell_width = 210 / 8; 
        $pdf->SetFont('Arial','B',8);
        $pdf->SetFillColor(220,220,220);
        $pdf->Cell($cell_width,10,'Name',1,0,'C',true);
        $pdf->Cell($cell_width,10,'DOB',1,0,'C',true);
        $pdf->Cell($cell_width,10,'Gender',1,0,'C',true);
        $pdf->Cell($cell_width,10,'Phone',1,0,'C',true);
        $pdf->Cell($cell_width,10,'Blood Group',1,0,'C',true);
        $pdf->Cell($cell_width,10,'Marital',1,0,'C',true);
        $pdf->Cell($cell_width,10,'Sports Item',1,1,'C',true);
    
        // Set the font and text color for the table content
        $pdf->SetFont('Arial','',8);
        $pdf->SetTextColor(0,0,0);
    
        // Loop through the query result and add the data to the table
        while ($row_teach = mysqli_fetch_assoc($result_teach)) {
            $pdf->Cell($cell_width,10,$row_teach['teach_name'],1,0,'L');
            $pdf->Cell($cell_width,10,$row_teach['teach_dob'],1,0,'C');
            $pdf->Cell($cell_width,10,$row_teach['teach_gender'],1,0,'C');
            $pdf->Cell($cell_width,10,$row_teach['teach_phone'],1,0,'L');
            $pdf->Cell($cell_width,10,$row_teach['teach_bloodgrp'],1,0,'C');
            $pdf->Cell($cell_width,10,$row_teach['teach_marital'],1,0,'C');
            $pdf->Cell($cell_width,10,$row_teach['teach_item'],1,1,'C');
        }
    
        // Output the PDF document
        $pdf->Output();
    }

    elseif($month=="All" && $category=="Events"){
        $sql_event = "SELECT * FROM tbl_event WHERE YEAR(date) = '$year'";

        // Execute the query
        $result_event = mysqli_query($conn, $sql_event);
    
        // Create a new PDF document
        $pdf = new FPDF();
        $pdf->AddPage();
    
        // Set the font and text color
        $pdf->SetFont('Arial','B',16);
        $pdf->SetTextColor(0,0,255);
    
        // Write the title of the report
        // Write the title of the report
        $pdf->Cell(0,10,'Sports Academy Sports Items Report',0,1,'C');
        $pdf->SetTextColor(255, 0, 0); // red
        $pdf->SetFont('times', 'B', 12);
        $pdf->Cell(0,10,'Year : ' . $year,0,1,'C');

        // Add a line break
        $pdf->Ln();
        $pdf->SetTextColor(0, 0, 0); // black
        $pdf->SetFont('times', '', 12);
    
        // Create a table header
        $cell_width = 210 / 3.5; 
        $pdf->SetFont('Arial','B',8);
        $pdf->SetFillColor(220,220,220);
        $pdf->Cell($cell_width,10,'Name',1,0,'C',true);
        $pdf->Cell($cell_width,10,'Coach',1,0,'C',true);
        $pdf->Cell($cell_width,10,'Type',1,1,'C',true);
    
        // Set the font and text color for the table content
        $pdf->SetFont('Arial','',8);
        $pdf->SetTextColor(0,0,0);
    
        // Loop through the query result and add the data to the table
        while ($row_event = mysqli_fetch_assoc($result_event)) {
            $pdf->Cell($cell_width,10,$row_event['event_name'],1,0,'L');
            $pdf->Cell($cell_width,10,$row_event['event_coach'],1,0,'C');
            $pdf->Cell($cell_width,10,$row_event['event_type'],1,1,'C');
        }
    
        // Output the PDF document
        $pdf->Output();
    }

    // elseif($month=="All" && $year=="All" && $category=="Students"){
    //     $sql_event = "SELECT * FROM tbl_stud_register" ;

    //     // Execute the query
    //     $result_stud = mysqli_query($conn, $sql_event);
    
    //     // Create a new PDF document
    //     $pdf = new FPDF();
    // $pdf->AddPage();

    // // Set the font and text color
    // $pdf->SetFont('Arial','B',16);
    // $pdf->SetTextColor(0,0,255);

    // // Write the title of the report
    // $pdf->Cell(0,10,'Sports Academy Players Report',0,1,'C');
    // $pdf->SetTextColor(255, 0, 0); // red
    // $pdf->SetFont('times', 'B', 12);
    // // $pdf->Cell(0,10,'Month : ' . $month_name,0,1,'C');
    // $pdf->Cell(0,10,'Year : ' . $year,0,1,'C');

    // // Add a line break
    // $pdf->Ln();
    // $pdf->SetTextColor(0, 0, 0); // black
    // $pdf->SetFont('times', '', 12);

    // // Create a table header
    // $cell_width = 210 / 11; 
    // $pdf->SetFont('Arial','B',8);
    // $pdf->SetFillColor(220,220,220);
    // $pdf->Cell($cell_width,10,'Name',1,0,'C',true);
    // $pdf->Cell($cell_width,10,'DOB',1,0,'C',true);
    // $pdf->Cell($cell_width,10,'Gender',1,0,'C',true);
    // $pdf->Cell($cell_width,10,'Phone',1,0,'C',true);
    // $pdf->Cell($cell_width,10,'Blood Group',1,0,'C',true);
    // $pdf->Cell($cell_width,10,'Father',1,0,'C',true);
    // $pdf->Cell($cell_width,10,'Mother',1,0,'C',true);
    // $pdf->Cell($cell_width,10,'Category 1',1,0,'C',true);
    // $pdf->Cell($cell_width,10,'Category 2',1,0,'C',true);
    // $pdf->Cell($cell_width,10,'Size',1,1,'C',true);

    // // Set the font and text color for the table content
    // $pdf->SetFont('Arial','',8);
    // $pdf->SetTextColor(0,0,0);

    // // Loop through the query result and add the data to the table
    // while ($row_stud = mysqli_fetch_assoc($result_stud)) {
    //     $pdf->Cell($cell_width,10,$row_stud['stud_name'],1,0,'L');
    //     $pdf->Cell($cell_width,10,$row_stud['stud_dob'],1,0,'C');
    //     $pdf->Cell($cell_width,10,$row_stud['stud_gender'],1,0,'C');
    //     $pdf->Cell($cell_width,10,$row_stud['stud_phone'],1,0,'L');
    //     $pdf->Cell($cell_width,10,$row_stud['stud_bloodgrp'],1,0,'C');
    //     $pdf->Cell($cell_width,10,$row_stud['stud_father'],1,0,'L');
    //     $pdf->Cell($cell_width,10,$row_stud['stud_mother'],1,0,'C');
    //     $pdf->Cell($cell_width,10,$row_stud['stud_item_1'],1,0,'C');
    //     $pdf->Cell($cell_width,10,$row_stud['stud_item_2'],1,0,'L');
    //     $pdf->Cell($cell_width,10,$row_stud['stud_size'],1,1,'C');
    // }

    // // Output the PDF document
    // $pdf->Output();
    // }

    // elseif($month=="All" && $year=="All" && $category=="Coaches"){
    //     $sql_event = "SELECT * FROM tbl_coach_register";

    //     // Execute the query
    //     $result_teach = mysqli_query($conn, $sql_event);
    
    //     // Create a new PDF document
    //     $pdf = new FPDF();
    //     $pdf->AddPage();
    
    //     // Set the font and text color
    //     $pdf->SetFont('Arial','B',16);
    //     $pdf->SetTextColor(0,0,255);
    
    //     // Write the title of the report
    //     $pdf->Cell(0,10,'Sports Academy Coaches Report',0,1,'C');
    //     $pdf->SetTextColor(255, 0, 0); // red
    //     $pdf->SetFont('times', 'B', 12);
    //     // $pdf->Cell(0,10,'Month : ' . $month_name,0,1,'C');
    //     $pdf->Cell(0,10,'Year : ' . $year,0,1,'C');

    //     // Add a line break
    //     $pdf->Ln();
    //     $pdf->SetTextColor(0, 0, 0); // black
    //     $pdf->SetFont('times', '', 12);
    
    //     // Create a table header
    //     $cell_width = 210 / 8; 
    //     $pdf->SetFont('Arial','B',8);
    //     $pdf->SetFillColor(220,220,220);
    //     $pdf->Cell($cell_width,10,'Name',1,0,'C',true);
    //     $pdf->Cell($cell_width,10,'DOB',1,0,'C',true);
    //     $pdf->Cell($cell_width,10,'Gender',1,0,'C',true);
    //     $pdf->Cell($cell_width,10,'Phone',1,0,'C',true);
    //     $pdf->Cell($cell_width,10,'Blood Group',1,0,'C',true);
    //     $pdf->Cell($cell_width,10,'Marital',1,0,'C',true);
    //     $pdf->Cell($cell_width,10,'Sports Item',1,1,'C',true);
    
    //     // Set the font and text color for the table content
    //     $pdf->SetFont('Arial','',8);
    //     $pdf->SetTextColor(0,0,0);
    
    //     // Loop through the query result and add the data to the table
    //     while ($row_teach = mysqli_fetch_assoc($result_teach)) {
    //         $pdf->Cell($cell_width,10,$row_teach['teach_name'],1,0,'L');
    //         $pdf->Cell($cell_width,10,$row_teach['teach_dob'],1,0,'C');
    //         $pdf->Cell($cell_width,10,$row_teach['teach_gender'],1,0,'C');
    //         $pdf->Cell($cell_width,10,$row_teach['teach_phone'],1,0,'L');
    //         $pdf->Cell($cell_width,10,$row_teach['teach_bloodgrp'],1,0,'C');
    //         $pdf->Cell($cell_width,10,$row_teach['teach_marital'],1,0,'C');
    //         $pdf->Cell($cell_width,10,$row_teach['teach_item'],1,1,'C');
    //     }
    
    //     // Output the PDF document
    //     $pdf->Output();
    // }

    // elseif($month=="All" && $year=="All" && $category=="Events"){
    //     $sql_event = "SELECT * FROM tbl_event";

    //     // Execute the query
    //     $result_event = mysqli_query($conn, $sql_event);
    
    //     // Create a new PDF document
    //     $pdf = new FPDF();
    //     $pdf->AddPage();
    
    //     // Set the font and text color
    //     $pdf->SetFont('Arial','B',16);
    //     $pdf->SetTextColor(0,0,255);
    
    //     // Write the title of the report
    //     // Write the title of the report
    //     $pdf->Cell(0,10,'Sports Academy Sports Items Report',0,1,'C');
    //     $pdf->SetTextColor(255, 0, 0); // red
    //     $pdf->SetFont('times', 'B', 12);
    //     $pdf->Cell(0,10,'Year : ' . $year,0,1,'C');

    //     // Add a line break
    //     $pdf->Ln();
    //     $pdf->SetTextColor(0, 0, 0); // black
    //     $pdf->SetFont('times', '', 12);
    
    //     // Create a table header
    //     $cell_width = 210 / 3.5; 
    //     $pdf->SetFont('Arial','B',8);
    //     $pdf->SetFillColor(220,220,220);
    //     $pdf->Cell($cell_width,10,'Name',1,0,'C',true);
    //     $pdf->Cell($cell_width,10,'Coach',1,0,'C',true);
    //     $pdf->Cell($cell_width,10,'Type',1,1,'C',true);
    
    //     // Set the font and text color for the table content
    //     $pdf->SetFont('Arial','',8);
    //     $pdf->SetTextColor(0,0,0);
    
    //     // Loop through the query result and add the data to the table
    //     while ($row_event = mysqli_fetch_assoc($result_event)) {
    //         $pdf->Cell($cell_width,10,$row_event['event_name'],1,0,'L');
    //         $pdf->Cell($cell_width,10,$row_event['event_coach'],1,0,'C');
    //         $pdf->Cell($cell_width,10,$row_event['event_type'],1,1,'C');
    //     }
    
    //     // Output the PDF document
    //     $pdf->Output();
    // }

    else {
        echo '<script> alert ("Report cannot be generated");</script>';
        echo '<script>window.location.href="report.php";</script>';
    }
}

// Close the database connection
mysqli_close($conn);

?>
