<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="db_sports";
$db = mysqli_connect($servername, $username, $password, $database);
session_start();
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}
$log_id = $_SESSION['log_id'];
if (isset($_POST['submit'])) {
  $date = date("Y-m-d");
  $time = date('h:i A');
  // Check if attendance is already marked for the same date
  $check_attend = "SELECT * FROM tbl_stud_attendance WHERE login_id = $log_id AND stud_attend_date = '$date'";
  $result = mysqli_query($db, $check_attend);
  if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Attendance is already marked for today')</script>";
    echo"<script>window.location.href='http://localhost/Student/attendance.php';</script>";
  } else {
    $insert_attend = "INSERT INTO tbl_stud_attendance (login_id, stud_attend_status,stud_attend_date,stud_attend_time) VALUES ($log_id, 'present', '$date', '$time')";
    $reg_queryresult = mysqli_query($db, $insert_attend);
    if($reg_queryresult){
      echo"<script Type='text/javascript'>alert('Attendance Successfully Marked')</script>";
      echo"<script>window.location.href='http://localhost/Student/attendance.php';</script>";
    }
    else {
      echo"<script Type='text/javascript'>alert('Attendance Could not be Marked')</script>";
      echo"<script>window.location.href='http://localhost/Student/attendance.php';</script>";
    }
  }
}
?>
