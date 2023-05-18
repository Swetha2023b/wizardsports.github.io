<?php
	include 'config.php';
	$state_id=$_POST["state_id"];
    echo "<script>alert($state_id)</script>";
	$result = mysqli_query($db,"SELECT * FROM tbl_district where sta_id=$state_id");
?>
<option value="">Select District</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
	<option value="<?php echo $row["dist_id"];?>"><?php echo $row["dist_name"];?></option>
<?php
}
?>