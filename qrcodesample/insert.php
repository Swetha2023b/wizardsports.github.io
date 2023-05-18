<?php
// Replace with your database credentials
$host = 'localhost';
$dbname = 'db_sports';
$username = 'root';
$password = '';

// Connect to the database
try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
  die("Failed to connect to the database: " . $e->getMessage());
}

// Get the content from the POST request
date_default_timezone_set('Asia/Kolkata');
$content = $_POST['content'];
$date = date("Y-m-d");
$time_in = date('h:i A');

// Insert the data into the database
// $stmt = $pdo->prepare("INSERT INTO qr_codes (content) VALUES (:content)");
// $stmt->bindParam(':content', $content);
list($name, $email) = explode(",", $content);
list($name_label, $name_value) = explode(":", $name);
list($email_label, $email_value) = explode(":", $email);

$stmt = $pdo->prepare("INSERT INTO tbl_attendance (login_id, student_name, date, time_in) VALUES (:name_value, :email_value, :date, :time_in)");

$stmt->bindParam(':name_value', $name_value);
$stmt->bindParam(':email_value', $email_value);
$stmt->bindParam(':date', $date);
$stmt->bindParam(':time_in', $time_in);

// $stmt->execute();
if ($stmt->execute()) {
  echo "Data inserted successfully";
} else {
  echo "Failed to insert data";
}
?>