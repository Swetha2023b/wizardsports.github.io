<?php
session_start();
$log_id=$_SESSION['log_id'];
$servername = "localhost";
$username = "root";
$password = "";
$database="db_sports";
$db = mysqli_connect($servername, $username, $password, $database);
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}
$errors = array();


if (isset($_POST['submit'])) {
  $_SESSION['batch'] = $_POST['batch'];
  $_SESSION['time'] = $_POST['time'];
  $batch =  $_POST['batch'];
  $time =  $_POST['time'];
    
  // echo"<script Type='text/javascript'>alert('$current_date')</script>";
 
  $stud = "SELECT login_id from tbl_stud_schedule WHERE time = '$time'";
  $result = mysqli_query($db,$stud);
  while($row = mysqli_fetch_array($result)){
    $stud_id = $row['login_id'];
    $selectstud=mysqli_query($db, "SELECT * FROM tbl_stud_register WHERE login_id='$stud_id'");
    while($row1 = mysqli_fetch_array($selectstud)){
      echo $row1['stud_name'];
      echo '<br>';
    }
  } 
}
?>

