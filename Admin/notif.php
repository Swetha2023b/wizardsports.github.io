<?php
$db = mysqli_connect("localhost","root","","db_sports");
?>
<?php
session_start();
if(!isset($_SESSION['log_id'])){
    header("location: ../logindes.php");
}
$errors = array();
date_default_timezone_set('Asia/Kolkata');
if (isset($_POST['submit'])) {
    $notif_subject = $_POST['notif_subject'];
    $notif_message = $_POST['notif_message'];
    $recipient = $_POST['recipient'];
    $xyz = implode(",",$recipient);
    $date = date("Y-m-d");
    $time = date('h:i A');
    $words_array = explode(",", $xyz);

    if (count($errors) == 0) {
        foreach ($words_array as $word) {
        $reg_query = $db->prepare("INSERT INTO tbl_notification(notif_message,notif_recipients,notif_subject,notif_date,notif_time) VALUES(?, ?, ?, ?, ?)");
        // $reg_queryresult = mysqli_query($db,$reg_query);
        $reg_query->bind_param("sssss", $notif_message, $word, $notif_subject, $date, $time);
        $reg_query->execute();
        if($reg_query){
          echo"<script Type='text/javascript'>alert('Sent Successfully')</script>";
          echo"<script>window.location.href='http://localhost/Admin/send_notification.php';</script>";
        }
        else {
          echo"<script Type='text/javascript'>alert('Couldnt send the message')</script>";
          echo"<script>window.location.href='http://localhost/Admin/send_notification.php';</script>";
        } 
    }
      }
}

?>