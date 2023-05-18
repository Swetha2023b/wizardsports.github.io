
<?php
//database connectivity
session_start();
$db = mysqli_connect("localhost","root","","db_sports");

//connecting html form and php
if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$pwd = $_POST['password'];
	$pwden = md5($pwd);//encyrpting password

//fetching data from database
$query = "select * from tbl_login where email = '$email'"; 
$result = mysqli_query($db,$query);
$row = mysqli_fetch_assoc($result);
$login_id = $row['login_id'];

//checking password in database
if($row['type']==1){
	if($row['password']==$pwd){
		unset($_SESSION['username']);
		$_SESSION['username']="Admin";
		$_SESSION['log_id']=$login_id;
		$_SESSION['email']=$email;
		echo"<script>window.location.href='http://localhost/Admin/index.php'</script>";
	}
	else{
		 echo"<script Type='text/javascript'>alert('Oops!...Login Failed')</script>";
		 echo"<script>window.location.href='http://localhost/logindes.php'</script>";
	}
}
else if($row['type']==2){
	//Add when Manager scenario added into project
	if($row['password']==$pwden){
			unset($_SESSION['username']);
			$query2 = "select * from tbl_stud_register where login_id = '$login_id'";
			$result2 = mysqli_query($db,$query2);
			$row2 = mysqli_fetch_assoc($result2);
			$_SESSION['username']=$row2['stud_name'];
			$_SESSION['log_id']=$login_id;
			$_SESSION['email']=$email;
			 echo"<script>window.location.href='http://localhost/Student/users-profile.php'</script>"; 
		}
		else{
			 echo"<script Type='text/javascript'>alert('Oops!...Login Failed')</script>";
			 echo"<script>window.location.href='http://localhost/logindes.php'</script>";
		}
} 
else{
	if($row['type']==3){
		if($row['password']==$pwden){
			$query1 = "select * from tbl_coach_register where login_id = '$login_id'";
			$result1 = mysqli_query($db,$query1);
			$row1 = mysqli_fetch_assoc($result1);
			$_SESSION['username']=$row1['teach_name']; 
			$_SESSION['log_id']=$login_id;
			$_SESSION['email']=$email;
			 echo"<script>window.location.href='http://localhost/Coach/users-profile.php'</script>";
		}
		else{
			 echo"<script Type='text/javascript'>alert('Oops!...Login Failed')</script>";
			 echo"<script>window.location.href='http://localhost/logindes.php'</script>";
		}
	}
}

}

?>