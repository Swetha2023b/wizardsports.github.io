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
      $stud_name = $_POST['stud_name'];
      $stud_dob = $_POST['stud_dob'];
      $stud_gender =  $_POST['stud_gender'];
      $email = $_POST['email'];
      $stud_password =  $_POST['stud_password'];
      $password = md5($stud_password);
      $stud_housenm = $_POST['stud_housenm'];
      $stud_area = $_POST['stud_area'];
      $stud_city = $_POST['stud_city'];
      $stud_district = $_POST['stud_district'];
      $stud_state = $_POST['stud_state'];
      $stud_pin = $_POST['stud_pin'];
      $stud_phone = $_POST['stud_phone'];
      $stud_bloodgrp = $_POST['stud_bloodgrp'];
      $stud_father = $_POST['stud_father'];
      $stud_mother = $_POST['stud_mother'];
      $stud_item_1 = $_POST['stud_item_1'];
      $stud_item_2 = $_POST['stud_item_2'];
      $stud_size = $_POST['stud_size'];
      $stud_image = $_FILES['stud_image'];

      // $stud_image = $_FILES['stud_image'];
      // $event_image  = $_FILES['event_image']; 
      $fileinfo = $_FILES['stud_image']['name'];
      $file_size = $_FILES['stud_image']['size'];

      // $_SESSION['email']=$app_stud_email;
      // $fileinfo = @getimagesize($_FILES["stud_image"]["tmp_name"]);
      // $width = $fileinfo[0];
      // $height = $fileinfo[1];
      
      $allowed_image_extension = array(
          "png",
          "jpg",
          "jpeg"
      );
      
      // Get image file extension
      // $file_extension = pathinfo($_FILES["stud_image"]["name"], PATHINFO_EXTENSION);
      $file_ext=strtolower(end(explode('.',$_FILES['stud_image']['name'])));
      
      // Validate file input to check if is not empty
      if (! file_exists($_FILES["stud_image"]["tmp_name"])) {
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
          $target = "../Upload/" . basename($_FILES["stud_image"]["name"]);
          if (move_uploaded_file($_FILES["stud_image"]["tmp_name"], $target)) {
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
  
  //Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $log_query = "INSERT INTO tbl_login(email,password,type,status)VALUES('$email','$password',2,1)";
  	$logqueryresult = mysqli_query($db,$log_query);
    if($logqueryresult) {
      $idselectionquery = "SELECT login_id FROM tbl_login WHERE email='$email'";
      $idselectionqueryresult = mysqli_query($db, $idselectionquery);
      $user = mysqli_fetch_assoc($idselectionqueryresult);
      $login_id = $user['login_id'];
      $reg_query = "INSERT INTO tbl_stud_register(stud_name,stud_dob,stud_phone,stud_bloodgrp,stud_father,stud_mother,stud_item_1,stud_item_2,stud_size,stud_gender,login_id,stud_image,status) VALUES('$stud_name','$stud_dob','$stud_phone','$stud_bloodgrp','$stud_father','$stud_mother','$stud_item_1','$stud_item_2','$stud_size','$stud_gender','$login_id','$fileinfo',1)";
      $reg_queryresult = mysqli_query($db,$reg_query);
      if($reg_queryresult){

        echo"<script Type='text/javascript'>alert('Registration Success')</script>";
        echo"<script>window.location.href='http://localhost/Admin/addstudentsdes.php';</script>";
      }
      else {
        echo"<script Type='text/javascript'>alert('Registration not Success')</script>";
      } 
    }
  }

  $add_query = "INSERT INTO tbl_stud_address(stud_housenm,stud_area,stud_city,stud_district,stud_pin,stud_state,status,login_id)VALUES('$stud_housenm','$stud_area','$stud_city','$stud_district','$stud_pin','$stud_state',1,'$login_id')";
  $addqueryresult = mysqli_query($db,$add_query);
  


?>

<?php  if (count($errors) > 0) : ?>
   <div class="error" style="color:red">
     <?php foreach ($errors as $error) : ?>
       <p><?php echo"<script Type='text/javascript'>alert('$error')</script>"; ?></p>
     <?php endforeach ?>
   </div>
 <?php  endif ?>