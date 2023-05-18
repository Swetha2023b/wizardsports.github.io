<?php
$db = mysqli_connect("localhost","root","","db_sports");
?>
<?php
session_start();
if(!isset($_SESSION['log_id'])){
    header("location: ../logindes.php");
}
$errors = array();
$log_id = $_SESSION['log_id'];

if (isset($_POST['submit'])) {
    $date = $_POST['date'];
    $reason = $_POST['reason'];
    $time = $_POST['time'];
    $applied_on = date('Y-m-d');

    if (count($errors) == 0) {
            $log_query = "INSERT INTO tbl_leave(login_id,date,reason,time,applied_on,status)VALUES('$log_id','$date','$reason','$time','$applied_on','Not Approved')";
            $logqueryresult = mysqli_query($db,$log_query);
        if($logqueryresult){
          echo"<script Type='text/javascript'>alert('Applied Successfully')</script>";
          echo"<script>window.location.href='http://localhost/Coach/apply_leave.php';</script>";
        }
        else {
          echo"<script Type='text/javascript'>alert('Could not apply')</script>";
          echo "<script>window.location.href='http://localhost/Coach/apply_leave.php';</script>";        } 
    
      }
}

?>