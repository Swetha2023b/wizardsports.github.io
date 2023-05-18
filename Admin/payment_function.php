<?php
session_start();
// require('../Admin/fpdf/fpdf.php'); 
require_once __DIR__ . '/../vendor/autoload.php'; // include Twilio PHP library

use Twilio\Rest\Client;

$host = "localhost";
$user = "root";
$password = "";
$database = "db_sports";
$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve attendance data for the current month
$current_month = date('m');
$attendance_query = "SELECT login_id, COUNT(*) AS attended_days FROM tbl_attendance WHERE MONTH(date) = $current_month GROUP BY login_id";
$attendance_result = mysqli_query($conn, $attendance_query);

// Process payment for each coach and send SMS
while ($row = mysqli_fetch_assoc($attendance_result)) {
    $coach_name = $row['login_id'];
    $attended_days = $row['attended_days'];
    // $payment_amount = $attended_days * 1000;
    
    $base_payment = 4000; // Default payment amount
    $daily_payment = 1000; // Payment amount per attended day

    // Calculate the payment amount
    $payment_amount = $base_payment + ($attended_days * $daily_payment);

    // Check if payment has already been made on the same day
    $payment_date = date('Y-m-d');
    $payment_check_query = "SELECT * FROM tbl_payment WHERE login_id = '$coach_name' AND DATE(payment_date) = '$payment_date'";
    $payment_check_result = mysqli_query($conn, $payment_check_query);

    if (mysqli_num_rows($payment_check_result) > 0) {
        echo '<script>alert("Payment has already been made today");</script>';
        echo "<script>window.location.href='http://localhost/Admin/payment.php';</script>";
    } else {
        // Insert payment information into the database
        $payment_query = "INSERT INTO tbl_payment (login_id, payment_amount, payment_date) VALUES ('$coach_name', $payment_amount, NOW())";
        mysqli_query($conn, $payment_query);

        // Send SMS to coach
        $phone_query = "SELECT teach_phone, teach_name FROM tbl_coach_register WHERE login_id = '$coach_name'";
        $phone_result = mysqli_query($conn, $phone_query);
        $phone_row = mysqli_fetch_assoc($phone_result);
        $phone_number = $phone_row['teach_phone'];
        $name = $phone_row['teach_name'];
        
        // Twilio account credentials
        $account_sid = 'AC31d4bf365f9c922f0dcb88bbfaa75a64';
        $auth_token = '47b6270b79feb583f9d16e88969e2ea1';
        $twilio_number = '+16086315455';

        // create Twilio client object
        $client = new Client($account_sid, $auth_token);

        // Send SMS
        $message = 'Hello '.$name.', your salary of Rs.'.$payment_amount.' has been credited to your account. -Wizard Sports Academy';
        $client->messages->create(
            $phone_number,
            array(
                'from' => $twilio_number,
                'body' => $message
            )
        );
        if($message){
            echo '<script>alert("Message sent successfully");</script>';
            echo "<script>window.location.href='http://localhost/Admin/payment.php';</script>";
        }
    }
}

// Display success message to admin

?>
