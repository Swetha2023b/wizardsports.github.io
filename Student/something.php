<?php
session_start();
$db = mysqli_connect("localhost","root","","db_sports");
// include the PHP QR Code library
// require_once('phpqrcode/bindings/tcpdf/qrcode.php');
require_once('../phpqrcode/qrlib.php');
$name = $_SESSION['log_id'];
$mail = $_SESSION['email'];
$stuname = $_SESSION['username'];
// $name = "Swetha";
// $number = "12345";
$data = "Id:$name,Name:$stuname";
// echo"<script Type='text/javascript'>alert('swetha')</script>";
// QR code configuration
$size = 10; // size of the QR code
$margin = 2; // size of the margin
$level = 'M'; // error correction level

// generate QR code image
QRcode::png($data, false, $level, $size, $margin);

// output the image
header('Content-Type: image/png');
exit;

// $qr_code_path = "qr_codes/".$login_id.".png";
// $sched_query = "INSERT INTO students(name,qr_code_filename)VALUES('Swetha','login_id.png')";
// $schedqueryresult = mysqli_query($db,$sched_query);
?>