<?php
include 'config.php'; 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

date_default_timezone_set('Asia/Kolkata');
if (isset($_GET['Email'])) {
    $Email= $_GET['Email'];
    // echo $Email;
    // require(ph);
    $checkMail = "SELECT * FROM tbl_stud_approval WHERE app_stud_email='$Email'";
    $result = mysqli_query($db, $checkMail);
    $rsltCheck = mysqli_fetch_array($result);
    $rsltCheck1 = mysqli_num_rows($result);
    $app_stud_name = $rsltCheck['app_stud_name'];
      $app_stud_dob = $rsltCheck['app_stud_dob'];
      $app_stud_gender =  $rsltCheck['app_stud_gender'];
      $app_stud_email = $rsltCheck['app_stud_email'];
      $app_stud_housenm = $rsltCheck['app_stud_housenm'];
      $app_stud_area = $rsltCheck['app_stud_area'];
      $app_stud_city = $rsltCheck['app_stud_city'];
      $app_stud_district = $rsltCheck['app_stud_district'];
      $app_stud_state = $rsltCheck['app_stud_state'];
      $app_stud_pin = $rsltCheck['app_stud_pin'];
      $app_stud_phone = $rsltCheck['app_stud_phone'];
      $app_stud_bloodgrp = $rsltCheck['app_stud_bloodgrp'];
      $app_stud_father = $rsltCheck['app_stud_father'];
      $app_stud_mother = $rsltCheck['app_stud_mother'];
      $app_stud_item1 = $rsltCheck['app_stud_item1'];
      $app_stud_item2 = $rsltCheck['app_stud_item2'];
      $app_stud_size = $rsltCheck['app_stud_size'];
      $app_stud_image = $rsltCheck['app_stud_image'];
      $date = date("Y-m-d");
      $log_query = "INSERT INTO tbl_login(email,type,status)VALUES('$Email',2,1)";
  	  $logqueryresult = mysqli_query($db,$log_query);
      $loginid=mysqli_insert_id($db);
    if ($logqueryresult) {
        $reg_query = "INSERT INTO tbl_stud_register(stud_name,stud_dob,stud_phone,stud_bloodgrp,stud_father,stud_mother,stud_item_1,stud_item_2,stud_size,stud_gender,login_id,stud_image,date,status) VALUES('$app_stud_name','$app_stud_dob','$app_stud_phone','$app_stud_bloodgrp','$app_stud_father','$app_stud_mother','$app_stud_item1','$app_stud_item2','$app_stud_size','$app_stud_gender','$loginid','$app_stud_image','$date',1)";
        $reg_queryresult = mysqli_query($db,$reg_query);
        if ($reg_queryresult) {
            $add_query = "INSERT INTO tbl_stud_address(stud_housenm,stud_area,stud_city,stud_district,stud_pin,stud_state,login_id,status)VALUES('$app_stud_housenm','$app_stud_area','$app_stud_city','$app_stud_district','$app_stud_pin','$app_stud_state','$loginid',1)";
            $addqueryresult = mysqli_query($db,$add_query);
            if($app_stud_item2 != 'Nil'){
            $sched_query = "INSERT INTO tbl_stud_schedule(login_id,sports_items,days,time)VALUES('$loginid','$app_stud_item1',0,0), ('$loginid','$app_stud_item2',0,0)";
            $schedqueryresult = mysqli_query($db,$sched_query);
            }
            else{
                $sched_query1 = "INSERT INTO tbl_stud_schedule(login_id,sports_items,days,time)VALUES('$loginid','$app_stud_item1',0,0)";
                $schedqueryresult1 = mysqli_query($db,$sched_query1);
            }
        }
    }
    // $fetch = mysqli_fetch_array($result);
    if ($rsltCheck1 > 0) {
        $_SESSION['Email'] = $Email;
        // $Email = $_SESSION['Email'];
        $passwd = bin2hex(openssl_random_pseudo_bytes(4));
        $passwde = md5($passwd);
        echo $insert_pwd = "UPDATE `tbl_login` SET `password`='$passwde' WHERE `email`='$Email'";
        $data_check = mysqli_query($db, $insert_pwd);
        if ($data_check) {
           
            // }
            echo $Email;
            $mail = new PHPMailer(true);
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'swethaprakash2023b@mca.ajce.in';                     //SMTP username
            $mail->Password   = 'astrophysics';                               //SMTP password
            $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to conect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('swethaprakash2023b@mca.ajce.in', 'WIZARD SPORTS ACADEMY');
            $mail->addAddress($Email);     //Add a recipient
            //Content
            $mail->isHTML(true);                                  //Set Email format to HTML
            $mail->Subject = 'Registration Successful';
            $mail->Body = "You can now login to your account using the given password <br><br> Password : <br><br> <strong>$passwd</strong>";
            //$mail->AltBody = strip_tags($body);
            $mail->send();

            //$mail->send();
            if ($mail->send()) {
                echo '<script> alert ("Email sent successfully");</script>';
                echo '<script>window.location.href="Admin/approval.php";</script>';
            } else {
                exit;
                echo '<script> alert ("Email sent failed");</script>';
                echo '<script>window.location.href="approval.php";</script>';
            }
        }
    } else {
        exit;
        echo '<script> alert ("The user doesnot exist!");</script>';
        echo '<script>window.location.href="approval.php";</script>';
    }
    $delquery = "DELETE FROM tbl_stud_approval WHERE `app_stud_email`='$Email'";
    $del_check = mysqli_query($db, $delquery);
}
?>
