<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="db_sports";
$db = mysqli_connect($servername, $username, $password, $database);
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}
?>

<?php
session_start();
if(!isset($_SESSION['log_id'])){
    header("location: ../login.html");
}

$log_id = $_SESSION['log_id'];
$sql=mysqli_query($db,"SELECT * FROM `tbl_login` where login_id = '$log_id'");
$row=mysqli_fetch_array($sql);
$currentpwd = $row['password'];

if(isset($_POST['submit']))
{
	$oldpassword=$_POST['currentpass'];
    $enterpassword = md5($oldpassword);
	$password=$_POST['newpass'];
    $dbpassword=md5($password);
	$cpassword=$_POST['renewpass'];
    

	if($currentpwd==$enterpassword)
	{
		
		if($password==$cpassword)
	    {
			
			$sql=mysqli_query($db,"UPDATE tbl_login SET password='$dbpassword' WHERE login_id='$log_id'");
			if($sql)
			{
					echo "<script>alert('Password Updated Succesfully!!Please login again!!');window.location='../logindes.php'</script>";
			}
		}
		else{
			echo "<script>alert('Password does not match!!');</script>";
		}
	}
	else
		echo "<script>alert('Please enter current password correctly!!');window.location='users-profile.php'</script>";
}
?>