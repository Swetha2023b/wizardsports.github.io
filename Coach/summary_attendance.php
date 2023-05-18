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
    
}
?>