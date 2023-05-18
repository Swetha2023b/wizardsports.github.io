<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_sports";
$db = mysqli_connect($servername, $username, $password, $database);
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}

session_start(); // Start the PHP session

unset($_SESSION['email']); // Unset specific session variable
session_destroy(); // Destroy the session

// Set headers to disable caching
// header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
// header("Pragma: no-cache");
// header("Expires: Thu, 01 Jan 1970 00:00:00 GMT");

echo "<script>window.location.href='http://localhost/logindes.php';</script>"; // Redirect to logindes.php page
exit(); // Exit the script

?>

