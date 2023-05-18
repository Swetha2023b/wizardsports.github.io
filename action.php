<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="db_sports";
$db = mysqli_connect($servername, $username, $password, $database);
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}
echo"<script Type='text/javascript'>alert('Registration Success')</script>";

$errors = array(); 
if(isset($_POST['submit'])){
	$email = $_POST['checkbox_1'];
}
if (count($errors) == 0) {
	$reg_query = "INSERT INTO tbl_stud_schedule(stud_time_morn) VALUES('$email')";
    $reg_queryresult = mysqli_query($db,$reg_query);
    if($reg_queryresult){
      echo"<script Type='text/javascript'>alert('Registration Success')</script>";
	}
}
?>