<?php
$db = mysqli_connect("localhost", "root", "", "db_sports");
?>

<?php
session_start();
if (!isset($_SESSION['log_id'])) {
    header("location: ../logindes.php");
}
$errors = array();
$log_id = $_SESSION['log_id'];

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "UPDATE tbl_leave SET status = 'Approved' WHERE leave_id = '$id'";
    $logqueryresult = mysqli_query($db, $query);
    if ($logqueryresult) {
        echo "<script type='text/javascript'>alert('Leave Approved')</script>";
        echo "<script>window.location.href='http://localhost/Admin/leave_approve.php';</script>";
    } else {
        echo "<script type='text/javascript'>alert('Could Not Approve')</script>";
        echo "<script>window.location.href='http://localhost/Admin/leave_approve.php';</script>";
    }
}
?>
