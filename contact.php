<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="db_sports";
$db = mysqli_connect($servername, $username, $password, $database);
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}

//initializing variables
$errors = array(); 
// REGISTER USER
if (isset($_POST['submit'])) {

    //   // receive all input values from the form
      $name = $_POST['name'];
      $email = $_POST['email'];
      $number = $_POST['number'];
      $message =  $_POST['message'];
      $date = date("Y-m-d");
}
      
  if (count($errors) == 0) {
    $reg_query = "INSERT INTO tbl_contact(contactee_name,contactee_mail,contactee_number,contactee_message,date) VALUES('$name','$email','$number','$message','$date')";
    $reg_queryresult = mysqli_query($db,$reg_query);
    if($reg_queryresult){
      echo"<script Type='text/javascript'>alert('Successfully Given')</script>";
      echo"<script>window.location.href='http://localhost/contact.html';</script>";
    }
    else {
      echo"<script Type='text/javascript'>alert('Unsuccessful')</script>";
      echo"<script>window.location.href='http://localhost/contact.html';</script>";
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

 