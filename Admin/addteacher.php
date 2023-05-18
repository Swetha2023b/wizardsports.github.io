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
date_default_timezone_set('Asia/Kolkata');
if (isset($_POST['submit'])) {

    //   // receive all input values from the form
      $teach_name = $_POST['teach_name'];
      $teach_dob = $_POST['teach_dob'];
      $teach_gender =  $_POST['teach_gender'];
      $email = $_POST['email'];
      $password =  $_POST['teach_password'];
      $teach_password = md5($password);
      $teach_housenm = $_POST['teach_housenm'];
      $teach_area = $_POST['teach_area'];
      $teach_city = $_POST['teach_city'];
      $teach_district = $_POST['teach_district'];
      $teach_state = $_POST['teach_state'];
      $teach_pin = $_POST['teach_pin'];
      $teach_phone = $_POST['teach_phone'];
      $teach_bloodgrp = $_POST['teach_bloodgrp'];
      $teach_qualification = $_POST['teach_qualification'];
      $teach_marital = $_POST['teach_marital'];
      $teach_item = $_POST['teach_item'];
      $date = date("Y-m-d");
      $teach_image  = $_FILES['teach_image']; 
      $fileinfo = $_FILES['teach_image']['name'];
      $file_size = $_FILES['teach_image']['size'];

      // $_SESSION['email']=$app_stud_email;
      // $fileinfo = @getimagesize($_FILES["teach_image"]["tmp_name"]);
      // $width = $fileinfo[0];
      // $height = $fileinfo[1];
      
      $allowed_image_extension = array(
          "png",
          "jpg",
          "jpeg"
      );
      
      // Get image file extension
      // $file_extension = pathinfo($_FILES["teach_image"]["name"], PATHINFO_EXTENSION);
      $file_ext=strtolower(end(explode('.',$_FILES['teach_image']['name'])));
      
      // Validate file input to check if is not empty
      if (! file_exists($_FILES["teach_image"]["tmp_name"])) {
          $response = array(
              "type" => "error",
              "message" => "Choose image file to upload."
          );
      }   
       // Validate file input to check if is with valid extension
      else if(in_array($file_ext,$allowed_image_extension)=== false){
        $errors[]="Extension not allowed, please choose a JPEG or PNG file.";
     }  
      // Validate image file size
      else if($file_size > 2000000) {
        $errors[]='File size must be excately 2 MB';
     }
         // Validate image file dimension
      // else if ($width > "300" || $height > "200") {
      //     $response = array(
      //         "type" => "error",
      //         "message" => "Image dimension should be within 300X200"
      //     );
      // } 
      else {
          $target = "../Upload/" . basename($_FILES["teach_image"]["name"]);
          if (move_uploaded_file($_FILES["teach_image"]["tmp_name"], $target)) {
              $response = array(
                  "type" => "success",
                  "message" => "Image uploaded successfully."
              );
          } else {
              $response = array(
                  "type" => "error",
                  "message" => "Problem in uploading image files."
              );
          }
      }
  }

    
   if (count($errors) == 0) {
    $log_query = "INSERT INTO tbl_login(email,password,type,status)VALUES('$email','$teach_password',3,1)";
  	$logqueryresult = mysqli_query($db,$log_query);
    if($logqueryresult) {
      $idselectionquery = "SELECT login_id FROM tbl_login WHERE email='$email'";
      $idselectionqueryresult = mysqli_query($db, $idselectionquery);
      $user = mysqli_fetch_assoc($idselectionqueryresult);
      $login_id = $user['login_id'];
      $reg_query = "INSERT INTO tbl_coach_register(teach_name,teach_dob,teach_phone,teach_bloodgrp,teach_qualification,teach_marital,teach_item,teach_gender,teach_image,login_id,date,status) VALUES('$teach_name','$teach_dob','$teach_phone','$teach_bloodgrp','$teach_qualification','$teach_marital','$teach_item','$teach_gender','$fileinfo','$login_id','$date',1)";
      $reg_queryresult = mysqli_query($db,$reg_query);
      if($reg_queryresult){
        echo"<script Type='text/javascript'>alert('Registration Success')</script>";
        echo"<script>window.location.href='http://localhost/Admin/addteacherdes.php';</script>";
      }
      else {
        echo"<script Type='text/javascript'>alert('Registration not Success')</script>";
      } 
    }
  }

  $add_query = "INSERT INTO tbl_coach_address(teach_housenm,teach_area,teach_city,teach_district,teach_pin,teach_state,status,login_id)VALUES('$teach_housenm','$teach_area','$teach_city','$teach_district','$teach_pin','$teach_state',1,'$login_id')";
  $addqueryresult = mysqli_query($db,$add_query);
  


?>

<?php  if (count($errors) > 0) : ?>
   <div class="error" style="color:red">
     <?php foreach ($errors as $error) : ?>
       <p><?php echo"<script Type='text/javascript'>alert('$error')</script>"; ?></p>
     <?php endforeach ?>
   </div>
 <?php  endif ?>

 
