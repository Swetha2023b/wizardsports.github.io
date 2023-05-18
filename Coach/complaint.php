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
$email = $_SESSION['email'];
$name = $_SESSION['username'];
//initializing variables
$errors = array(); 
// REGISTER USER
if (isset($_POST['submit'])) {

    //   // receive all input values from the form
      // $stud_name = $_POST['stud_name'];
      // $stud_email = $_POST['stud_email'];
      
      $stud_complaint =  $_POST['stud_complaint'];
      $date = date("Y-m-d");
}
      
  if (count($errors) == 0) {
    $reg_query = "INSERT INTO tbl_complaints(login_id,stud_name,stud_email,stud_complaint,date) VALUES('$log_id','$name','$email','$stud_complaint','$date')";
    $reg_queryresult = mysqli_query($db,$reg_query);
    if($reg_queryresult){
      echo"<script Type='text/javascript'>alert('Successfully Given')</script>";
      echo"<script>window.location.href='http://localhost/Student/complaintdes.php';</script>";
    }
    else {
      echo"<script Type='text/javascript'>alert('Unsuccessful')</script>";
      echo"<script>window.location.href='http://localhost/Student/complaintdes.php';</script>";
    } 
  }

?>

<?php  if (count($errors) > 0) : ?>
   <div class="error" style="color:red">
     <?php foreach ($errors as $error) : ?>
       <p><?php echo"<script Type='text/javascript'>alert('$error')</script>"; ?></p>
     <?php endforeach ?>
   </div>
 <?php  endif ?>

 