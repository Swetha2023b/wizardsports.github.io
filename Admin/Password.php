<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database="db_sports";
$db = mysqli_connect($servername, $username, $password, $database);
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}
?> 

<!DOCTYPE html>
<html lang="en">
  
<head>
    

    <title>Wizard Sports Academy</title>

    <style>
        body {
            background-color: teal;
        }

        .navbar {
            overflow: hidden;
            background-color: #333;
            position: absolute;
            width: 100%;
            left: 0px;
            top: 0px;
        }


        .navbar a {
            float: right;
            color: white;
            padding-top: 30px;
            margin-right: 50px;
            text-decoration: none;
            font-family: 'Itim';
        }

        .navbar a.left {
            float: left;
            padding: 0%;
            padding-left: 25px;
        }

        .navbar a:hover {
            color: rgb(185, 185, 185);
        }

        .ticket {
            position: absolute;
            width: 561px;
            height: 497px;
            left: 807px;
            top: 163px;
        }

        table {
            position: absolute;
            left: 550px;
            top: 200px;
        }

        table label {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 23px;
            line-height: 48px;
        }

        input:not([type=submit]) {
            box-sizing: border-box;
            background: #D9D9D9;
            border: 2px solid #757070;
            border-radius: 9px;
            padding: 10px;
            width: 300px;
            height: 45px;
        }

        input[type="submit"] {
            position: absolute;
            background: #1E1E1E;
            top: 120px;
            height: 40px;
            width: 90px;
            border-radius: 20px;
            color: white;
            border: none;
            font-family: 'Poppins';
            /* font-weight: bold; */

        }

        input[type="submit"]:hover {
            background-color: #000000;
            cursor: pointer;
        }

        ::placeholder {
            font-family: 'Poppins';
            padding-left: 8px;
            font-weight: 700;
        }
    </style>  
</head>
<body>
  
<form method="POST" name="password">
  
  <div>
    <center>
      <h2>Change Password</h2>
    </center>
    
    <div>
      <center>
    <table style="margin-top: 5%;">
      <tr>
        <div class="row">
        <div class="col-md-6">
          <td><label for="psw"><b>Current Password</b></label></td>
          
          <td><div class="password-container">
            <input style ="width: 500px;" type="password" placeholder="Enter Current Password" id="currPassword" name="currPassword" required>
         <i class="fa fa-eye" id="togglePasswordOld"></i>
       </div>
      </td>
        </div> 
      </tr>

      <tr>
        <div class="col-md-6">
           <td><label for="psw"><b>New Password</b></label></td>
           <td>
            <div class="password-container">
              <input style ="width: 500px;" type="password" placeholder="Enter New Password" id="newPassword" name="newPassword" required>
              <i class="fa fa-eye" id="togglePasswordNew"></i>
            </div>
          </td>
        </div>
      </tr>     
    </div>

    <tr>
      <td>
        <div class="col-md-6">
           <label for="psw"><b>Confirm Password</b></label>
           <label style="display: none;" name="cPassword" id="cPassword"></label>
           <td>
            <div class="password-container">
            <input style ="width: 500px;" type="password" placeholder="Confirm New Password" id="confPassword" name="confPassword" required>
            <i class="fa fa-eye" id="togglePasswordNewConfirm"></i>
          </div>
          </td>
        </div>
      </td>
    </tr>
    </table>
</center>
</div>

  <button type="submit" class="Submitbutton" value="changepwd" name="changepwd" style="margin-left: 50%; width: 15%; margin-top: 25%;";>Update</button>
  </div>

</form>
<p style="margin-top: 19%;"><center><a href="index.php">Go back to home page</a></center></p>
  </body>
</html>


<?php
	$sql=mysqli_query($db,"SELECT * FROM `tbl_login` where login_id='1'");
	$row=mysqli_fetch_array($sql);
	$currentpwd=$row["password"];

?>
<?php
if(isset($_POST["changepwd"]))
{
	$enterpassword=$_POST['currPassword'];
	$password=$_POST['newPassword'];
	$cpassword=$_POST['confPassword'];
	if($currentpwd==$enterpassword)
	{
		
		if($password==$cpassword)
	{
			
			$sql=mysqli_query($db,"UPDATE tbl_login SET password='$password' WHERE login_id='1'");
			if($sql)
			{
					echo "<script>alert('Password Updated Succesfully!!Please login again!!');window.location='../login.html'</script>";
			}
		}
		else{
			echo "<script>alert('Password is not match!!');window.location='Password.php'</script>";
		}
	}
	else
		echo "<script>alert('Please enter current password correctlty!!');window.location='Password.php'</script>";
}
?>