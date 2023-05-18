<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="db_sports";
$db = mysqli_connect($servername, $username, $password, $database);
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST["user_id"]))  
{
    $output = '';
    $query = "SELECT * FROM tbl_contact WHERE contact_id = '".$_POST["user_id"]."'";  
    $result = mysqli_query($db, $query);  


    $output .= '  
    <div class="table-responsive">  
         <table class="table table-bordered">';  
    while($row = mysqli_fetch_array($result))  
    {  
         $output .= '  
              <tr>  
                   <td><label>Complaint</label></td>  
                   <td>'.$row["contactee_message"].'</td>  
              </tr>    
              '; 
    }  
    $output .= "</table></div>";  
    echo $output;  








}
?>
