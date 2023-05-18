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
      $resource = $_POST['resource'];
      $brand = $_POST['brand'];
      $number =  $_POST['number'];
      $comments =  $_POST['comments'];
      $date = date("Y-m-d");
      if ($_POST['comments'] == '') {
        $comments = "Nil";
    } else {
        $comments = $_POST['comments'];
    }
}
      
  if (count($errors) == 0) {
    $reg_query = "INSERT INTO tbl_requestres(login_id,coach_name,resource,brand,number,date,comments,status) VALUES('$log_id','$name','$resource','$brand','$number','$date','$comments','Not Approved')";
    $reg_queryresult = mysqli_query($db,$reg_query);
    if($reg_queryresult){
      echo"<script Type='text/javascript'>alert('Successfully Requested')</script>";
      echo"<script>window.location.href='http://localhost/Student/request_resources.php';</script>";
    }
    else {
      echo"<script Type='text/javascript'>alert('Unsuccessful')</script>";
      echo"<script>window.location.href='http://localhost/Student/request_resources.php';</script>";
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

 