<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="db_sports";
$db = mysqli_connect($servername, $username, $password, $database);
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}

//if(isset($_GET['deleteid']))
//{
    $login_id=$_GET['id'];
    $sql="UPDATE tbl_stud_approval SET app_stud_status = 0 WHERE approval_id=$login_id";
    $result=mysqli_query($db,$sql);
    if($result){
        echo"<script Type='text/javascript'>alert('Delete Success')</script>";
        echo"<script>window.location.href='http://localhost/Admin/approval.php';</script>";
    }
//}
?>
