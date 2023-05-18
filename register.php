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

//initializing variables
$errors = array(); 
// REGISTER USER
if (isset($_POST['submit'])) {

    //   // receive all input values from the form
      $app_stud_name = $_POST['app_stud_name'];
      $app_stud_dob = $_POST['app_stud_dob'];
      $app_stud_gender =  $_POST['app_stud_gender'];
      $app_stud_email = $_POST['app_stud_email'];
      // $stud_password =  $_POST['stud_password'];
      // $password = md5($stud_password);
      $app_stud_housenm = $_POST['app_stud_housenm'];
      $app_stud_area = $_POST['app_stud_area'];
      $app_stud_city = $_POST['app_stud_city'];
      $app_stud_district = $_POST['app_stud_district'];
      $app_stud_state = $_POST['app_stud_state'];
      $app_stud_pin = $_POST['app_stud_pin'];
      $app_stud_phone = $_POST['app_stud_phone'];
      $app_stud_bloodgrp = $_POST['app_stud_bloodgrp'];
      $app_stud_father = $_POST['app_stud_father'];
      $app_stud_mother = $_POST['app_stud_mother'];
      $app_stud_item1 = $_POST['app_stud_item1'];
      $app_stud_item2 = $_POST['app_stud_item2'];
      $app_stud_size = $_POST['app_stud_size'];
      $app_stud_image = $_FILES['app_stud_image'];
      // $event_image  = $_FILES['event_image']; 
      $fileinfo = $_FILES['app_stud_image']['name'];
      $file_size = $_FILES['app_stud_image']['size'];

      // $_SESSION['email']=$app_stud_email;
      // $fileinfo = @getimagesize($_FILES["app_stud_image"]["tmp_name"]);
      // $width = $fileinfo[0];
      // $height = $fileinfo[1];
      
      $allowed_image_extension = array(
          "png",
          "jpg",
          "jpeg"
      );
      
      // Get image file extension
      // $file_extension = pathinfo($_FILES["app_stud_image"]["name"], PATHINFO_EXTENSION);
      $file_ext=strtolower(end(explode('.',$_FILES['app_stud_image']['name'])));
      
      // Validate file input to check if is not empty
      if (! file_exists($_FILES["app_stud_image"]["tmp_name"])) {
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
          $target = "Upload/" . basename($_FILES["app_stud_image"]["name"]);
          if (move_uploaded_file($_FILES["app_stud_image"]["tmp_name"], $target)) {
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
  // echo"<script Type='text/javascript'>alert('$file_extension')</script>";
  if (count($errors) == 0) {
    $reg_query = "INSERT INTO tbl_stud_approval(app_stud_name,app_stud_email,app_stud_dob,app_stud_phone,app_stud_bloodgrp,app_stud_father,app_stud_mother,app_stud_item1,app_stud_item2,app_stud_size,app_stud_gender,app_stud_housenm,app_stud_area,app_stud_city,app_stud_district,app_stud_pin,app_stud_state,app_stud_image,app_stud_status) VALUES('$app_stud_name','$app_stud_email','$app_stud_dob','$app_stud_phone','$app_stud_bloodgrp','$app_stud_father','$app_stud_mother','$app_stud_item1','$app_stud_item2','$app_stud_size','$app_stud_gender','$app_stud_housenm','$app_stud_area','$app_stud_city','$app_stud_district','$app_stud_pin','$app_stud_state','$fileinfo',1)";
    $reg_queryresult = mysqli_query($db,$reg_query);
    if($reg_queryresult){
      // echo"<script Type='text/javascript'>alert('Registration Success')</script>";
      echo"<script>window.location.href='http://localhost/payment/paymentdes.php';</script>";
    }
    else {
      echo"<script Type='text/javascript'>alert('Registration not Success')</script>";
    } 
  }

  
// $add_query = "INSERT INTO tbl_stud_address(stud_housenm,stud_area,stud_city,stud_district,stud_pin,stud_state,login_id,status)VALUES('$stud_housenm','$stud_area','$stud_city','$stud_district','$stud_pin','$stud_state',$login_id,1)";
// $addqueryresult = mysqli_query($db,$add_query);

// }

?>

<?php  if (count($errors) > 0) : ?>
   <div class="error" style="color:red">
     <?php foreach ($errors as $error) : ?>
       <p><?php echo"<script Type='text/javascript'>alert('$error')</script>"; ?></p>
     <?php endforeach ?>
   </div>
 <?php  endif ?>

 