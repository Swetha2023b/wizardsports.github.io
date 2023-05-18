<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="db_sports";
$db = mysqli_connect($servername, $username, $password, $database);
// session_start();
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}

$query_fetch = "SELECT * from tbl_login WHERE status=1 ";
$result_fetch = mysqli_query($db,$query_fetch);
$rsltCheck1 = mysqli_fetch_array($result_fetch);
$log_id = $rsltCheck1['login_id'];
    

// $log_id = $_SESSION['log_id'];
// $email = $_SESSION['email'];
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Wizard Sports Academy</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css2/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css2/style.css" rel='stylesheet' type='text/css' />
<link href="css2/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts---> 
<!-- <style>

</style> -->
</head> 
<body>
<div id="wrapper">
     <!-- Navigation -->
     <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Wizard</a>
		</div>
		<!-- /.navbar-header -->
		<ul class="nav navbar-nav navbar-right">
	<!-- <li class="dropdown">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-comments-o"></i><span class="badge">4</span></a>
		  <ul class="dropdown-menu">
		<li class="dropdown-menu-header">
		  <strong>Messages</strong>
		  <div class="progress thin">
			<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
			  <span class="sr-only">40% Complete (success)</span>
			</div>
		  </div>
		</li>
		<li class="avatar">
		  <a href="#">
			<img src="images/1.png" alt=""/>
			<div>New message</div>
			<small>1 minute ago</small>
			<span class="label label-info">NEW</span>
		  </a>
		</li>
		<li class="avatar">
		  <a href="#">
			<img src="images/2.png" alt=""/>
			<div>New message</div>
			<small>1 minute ago</small>
			<span class="label label-info">NEW</span>
		  </a>
		</li>
		<li class="avatar">
		  <a href="#">
			<img src="images/3.png" alt=""/>
			<div>New message</div>
			<small>1 minute ago</small>
		  </a>
		</li>
		<li class="avatar">
		  <a href="#">
			<img src="images/4.png" alt=""/>
			<div>New message</div>
			<small>1 minute ago</small>
		  </a>
		</li>
		<li class="avatar">
		  <a href="#">
			<img src="images/5.png" alt=""/>
			<div>New message</div>
			<small>1 minute ago</small>
		  </a>
		</li>
		<li class="avatar">
		  <a href="#">
			<img src="images/pic1.png" alt=""/>
			<div>New message</div>
			<small>1 minute ago</small>
		  </a>
		</li>
		<li class="dropdown-menu-footer text-center">
		  <a href="#">View all messages</a>
		</li>	
		  </ul>
		</li> -->
	  <li class="dropdown">
		  <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="images2/1.png"><span class="badge"></span></a>
		  <ul class="dropdown-menu">
		<!-- <li class="dropdown-menu-header text-center">
		  <strong>Account</strong>
		</li>
		<li class="m_2"><a href="#"><i class="fa fa-bell-o"></i> Updates <span class="label label-info">42</span></a></li>
		<li class="m_2"><a href="#"><i class="fa fa-envelope-o"></i> Messages <span class="label label-success">42</span></a></li>
		<li class="m_2"><a href="#"><i class="fa fa-tasks"></i> Tasks <span class="label label-danger">42</span></a></li>
		<li><a href="#"><i class="fa fa-comments"></i> Comments <span class="label label-warning">42</span></a></li>
		<li class="dropdown-menu-header text-center">
		  <strong>Settings</strong>
		</li> -->
		<li class="m_2"><a href="#"><i class="fa fa-user"></i> Profile</a></li>
		<li class="m_2"><a href="#"><i class="fa fa-wrench"></i> Change Password</a></li>
		<!-- <li class="m_2"><a href="#"><i class="fa fa-usd"></i> Payments <span class="label label-default">42</span></a></li>
		<li class="m_2"><a href="#"><i class="fa fa-file"></i> Projects <span class="label label-primary">42</span></a></li>
		<li class="divider"></li>
		<li class="m_2"><a href="#"><i class="fa fa-shield"></i> Lock Profile</a></li> -->
		<li class="m_2"><a href="#"><i class="fa fa-lock"></i> Logout</a></li>	
		  </ul>
		</li>
  </ul>
  <!-- <form class="navbar-form navbar-right">
		  <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
		</form> -->
		<div class="navbar-default sidebar" role="navigation">
			<div class="sidebar-nav navbar-collapse">
				<ul class="nav" id="side-menu">
					<li>
						<a href="index.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
					</li>
					<li>
						<a href="approval.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Approval</a>
					</li>
  
					<!-- <li>
						<a href="#"><i class="fa fa-laptop nav_icon"></i>Layouts<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li>
								<a href="grids.html">Grid System</a>
							</li>
						</ul>
					</li> -->
  
					<li>
						<a href="#"><i class="fa fa-indent nav_icon"></i>Teachers<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li>
								<a href="teach_view.php">View Teacher</a>
							</li>
							<li>
								<a href="addteacher.html">Add Teacher</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-sitemap fa-fw nav_icon"></i>Students<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li>
								<a href="stud_view.php">View Students</a>
							</li>
							<li>
								<a href="addstudents.html">Add Students</a>
							</li>
						</ul>
					</li>
					
					<li>
						<a href="#"><i class="fa fa-check-square-o nav_icon"></i>Events<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li>
								<a href="event_view.php">View Events</a>
							</li>
							<li>
								<a href="addevents.html">Add events</a>
							</li>
						</ul>
					</li>
  
		
					<li>
						<a href="view_complaints.php"><i class="fa fa-laptop nav_icon"></i>Complaints</a>
					</li>
  
					<li>
						<a href="send_notification.php"><i class="fa fa-envelope nav_icon"></i>Mailbox</a>
					</li>

					<li>
                      <a href="users_contact.php"><i class="fa fa-sitemap fa-fw nav_icon"></i>Contact</a>
                  </li>

				  <li>
                      <a href="report.php"><i class="fa fa-check-square-o nav_icon"></i>Report</a>
                  </li>
				  <li>
                      <a href="leave_approve.php"><i class="fa fa-laptop nav_icon"></i>Leave Approval</a>
                  </li>

                  <li>
                      <a href="resource_request.php"><i class="fa fa-bell nav_icon"></i>Resource Request</a>
                  </li>

                  <li>
                      <a href="payment.php"><i class="fa fa-lock nav_icon"></i>Payment</a>
                  </li>
					 <!-- <li>
						<a href="#"><i class="fa fa-table nav_icon"></i>Tables<span class="fa arrow"></span></a> (fa fa-dashboard fa-fw nav_icon)
						<ul class="nav nav-second-level">
							<li>
								<a href="basic_tables.html">Basic Tables</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-sitemap fa-fw nav_icon"></i>Css<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li>
								<a href="media.html">Media</a>
							</li>
							<li>
								<a href="login.html">Login</a>
							</li>
						</ul>
					</li> -->
				</ul>
				  </div>
				  <!-- /.sidebar-collapse -->
			  </div>
			  <!-- /.navbar-static-side -->
		  </nav>
		  <?php
    $query = "SELECT * from tbl_complaints ORDER BY date DESC";
    $result = mysqli_query($db,$query);
	 
	// $row = mysqli_fetch_array($result);

	// $message = $row['stud_complaint'];
	// if (strlen($message) > 15) {
	// 	$truncated_message = substr($message, 0, 20) . '...';
	//   } else {
	// 	$truncated_message = $message;
	//   }
    ?>
        <div id="page-wrapper">
        <div class="graphs">
	   <div class="md">
	   <table class="table">
     <thead>
        <tr>
          <th>Email</th>
          <th>Name</th>
          <th>Complaint</th>
		  <th>Time</th>
		  <th>Action</th>
          
        </tr>
      </thead>

    
      <tbody>
      <?php  while ($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?php echo $row['stud_email']; ?></td>
                        <td><?php echo $row['stud_name']; ?></td>
                        <td><?php if (strlen($row['stud_complaint']) > 15) {
							$truncated_message = substr($row['stud_complaint'], 0, 15) . '...';
							} else {
								$truncated_message = $row['stud_complaint'];
							}
							$truncated_message; 
							echo $truncated_message;?></td>
						<td><?php echo $row['date']; ?></td>
						<td><button class="btn btn-primary btn-lg"  id="<?php echo $row['complaint_id'] ?>" >View</a></button> </td>
                        </tr>   
        <?php } ?>
                  
      </tbody>
    </table>
		
		   	
        </div>	
		<!-- Modal -->
<div class = "modal fade" id = "myModal" tabindex = "-1" role = "dialog" 
   aria-labelledby = "myModalLabel" aria-hidden = "true">
   
   <div class = "modal-dialog">
      <div class = "modal-content">
         
         <div class = "modal-header">
            <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
                  &times;
            </button>
            
            <h4 class = "modal-title" id = "myModalLabel">
               Viewing Complaint
            </h4>
         </div>
		 
		
         <div class = "modal-body">
			<!-- <p>Complaint : </p> -->
			
         </div>
         
         <div class = "modal-footer">
            <button type = "button" class = "btn btn-default" data-dismiss = "modal">
               Close
            </button>  
         </div>
         
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
  
</div><!-- /.modal -->

        <div class="copy_layout">
			<p>Copyright &copy; 2022 Wizard Sports Academy. All Rights Reserved. </p>
        </div>					
       </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Nav CSS -->
<link href="css2/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $('button').click(function(){
  id_emp = $(this).attr('id')
        $.ajax({url: "comp_view.php",
        method:'post',
        data:{emp_id:id_emp},
         success: function(result){
    $(".modal-body").html(result);
  }});


        $('#myModal').modal("show");
    })
})

  </script>
</body>
</html>