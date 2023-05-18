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

$log_id = $_SESSION['log_id'];
$getdetails = "SELECT * FROM tbl_stud_register WHERE login_id = $log_id";
$result = mysqli_query($db, $getdetails);
$row = mysqli_fetch_assoc($result);
$item1 = $row['stud_item_1'];
$item2 = $row['stud_item_2'];


// $log_id = $_SESSION['log_id'];
if (isset($_POST['submit'])) {
    $_SESSION['batchA'] = $_POST['stud_batchA'];
    $_SESSION['batchB'] = $_POST['stud_batchB'];
    $_SESSION['time1'] = $_POST['time1'];
    $_SESSION['time2'] =  $_POST['time2'];
    $batchA = $_POST['stud_batchA'];
    $batchB = $_POST['stud_batchB'];
    $time1 = $_POST['time1'];
    $time2 =  $_POST['time2'];
    $xyz = implode(",",$time1);
    $abc = implode(",",$time2);
    
    $sql = "SELECT * FROM tbl_stud_schedule WHERE FIND_IN_SET($log_id, login_id)";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) > 0) {
      if($batchA=='MWF' && $batchB=='MWF' || $batchA=='TTS' && $batchB=='TTS'){
        echo"<script Type='text/javascript'>alert('Please choose different days')</script>";
        echo"<script>window.location.href='http://localhost/Student/components-list-group.php';</script>";
      }
      else{
      $search_value1 = mysqli_real_escape_string($db, $item1);
      $sql1 = "UPDATE tbl_stud_schedule SET time='$xyz', days='$batchA' WHERE login_id=$log_id AND sports_items = '$search_value1'";
      $result1 = mysqli_query($db, $sql1);
      $search_value2 = mysqli_real_escape_string($db, $item2);
      $sql2 = "UPDATE tbl_stud_schedule SET time='$abc', days='$batchB' WHERE login_id=$log_id AND sports_items = '$search_value2'";
      $result2 = mysqli_query($db, $sql2);
      if($result2){
        echo"<script Type='text/javascript'>alert('Successfully Scheduled')</script>";
        echo"<script>window.location.href='http://localhost/Student/components-list-group.php';</script>";
      }else {
        echo "Error updating checkbox data: " . mysqli_error($conn);
      }
    }
    }
    
  }else{
    $_SESSION['batchC'] = $_POST['stud_batchC'];
    $_SESSION['time5'] = $_POST['stud_time5'];
    $batchC = $_POST['stud_batchC'];
    $time5 = $_POST['stud_time5'];
    if (mysqli_num_rows($result) > 0) {
      $search_value3 = mysqli_real_escape_string($db, $item1);
      $sql3 = "UPDATE tbl_stud_schedule SET time='$time5', days='$batchC' WHERE login_id=$log_id AND sports_items = '$search_value3'";
      $result3 = mysqli_query($db, $sql3);
      if($result3){
      echo"<script Type='text/javascript'>alert('Successfully Scheduled')</script>";
      echo"<script>window.location.href='http://localhost/Student/components-list-group.php';</script>";
    }else {
      echo "Error updating checkbox data: " . mysqli_error($conn);
    }
  }
}


