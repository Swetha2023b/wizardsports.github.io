<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="db_sports";
$db = mysqli_connect($servername, $username, $password, $database);
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}
			

$date = date("Y-m-d");
// $date = '2023-03-28';
$getdetails = "SELECT * FROM tbl_attendance WHERE date = '$date' ORDER BY date DESC, time_in DESC";
$result = mysqli_query($db, $getdetails);

			?>
      <html>
        <head>
        <style>
  table {
    text-align: center;
  }
  th, td {
    text-align: center;
  }
  .btn {
  border-radius: 5px;
  padding: 10px 20px;
  font-size: 16px;
  color: white;
  background-color: #4CAF50;
}

.btn:hover {
  background-color: #3e8e41;
}
</style>
        </head>
        <body>
        
        <div class="btn-group btn-group-toggle mb-5" data-toggle="buttons">
				  <button type="submit" class="btn btn-primary submit mt-2 read-more" name="submit" id="submit" ><a href="index.php" style="color: white;">Return</a></button>
				  
				  
				</div>
        <br><br><br>
				
			<div class="col-sm-6">
  <table class="table" style="border-collapse: collapse; width: 100%;">
    <thead style="background-color: #f2f2f2;">
      <tr>
        <th style="border: 1px solid #ddd; padding: 8px;">Date</th>
        <th style="border: 1px solid #ddd; padding: 8px;">Name</th>
        <th style="border: 1px solid #ddd; padding: 8px;">Time</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($row = mysqli_fetch_array($result)) {?>
      <tr>
        <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $row['date']; ?></td>
        <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $row['student_name']; ?></td>
        <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $row['time_in']; ?></td>
      </tr>
      <?php }?>
    </tbody>
  </table>
</div>
<!-- <a href="index.php" >Return</a> -->
      </body>
