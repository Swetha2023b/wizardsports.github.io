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



<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
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
      <li class="m_2"><a href="Password.php"><i class="fa fa-wrench"></i> Change Password</a></li>
      <!-- <li class="m_2"><a href="#"><i class="fa fa-usd"></i> Payments <span class="label label-default">42</span></a></li>
      <li class="m_2"><a href="#"><i class="fa fa-file"></i> Projects <span class="label label-primary">42</span></a></li>
      <li class="divider"></li>
      <li class="m_2"><a href="#"><i class="fa fa-shield"></i> Lock Profile</a></li> -->
      <li class="m_2"><a href="logout.php"><i class="fa fa-lock"></i> Logout</a></li>	
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
                              <a href="addteacherdes.php">Add Teacher</a>
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
                              <a href="addstudentsdes.php">Add Students</a>
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
        <div id="page-wrapper">
        <div class="col-md-12 graphs">
	   <div class="xs">

     <?php
    $query = "SELECT * from tbl_event WHERE status=1";
    $result = mysqli_query($db,$query);
    ?>

  	 <h3>Sports Categories List</h3>
     <form>
    <label for="search-input">Search Name:</label>
    <input type="text" id="search-input">
    <button type="button" id="search-button">Search</button>
  </form>
  	
   <div class="panel-body1" style="overflow-x: scroll";>
   <table class="table">
     <thead>
        <tr>
          <th>Name</th>
          <th>Coach</th>
          <th>Number of students</th>
          <th>Type</th>
          <!-- <th>Edit</th> -->
          <th>Delete</th>
        </tr>
      </thead>

    
      <tbody>
      <?php  while ($row = mysqli_fetch_array($result)) {?>
                    <tr>
                        <td><?php echo $row['event_name']; ?></td>
                        <td><?php echo $row['event_coach']; ?></td>
                        <td><?php echo $row['event_students']; ?></td>
                        <td><?php echo $row['event_type']; ?></td>
                        <!-- <td><button class="btn btn-warning"><a href="event_update.php?id=<?php echo $row['event_id'];?>"style="color:white;">Edit</a></button> </td> -->
						            <td><button class="btn btn-danger"><a href="event_delete.php?id=<?php echo $row['event_id'];?>"style="color:white;">Delete</a></button> </td>
                   </tr>  
                  <?php } ?>
      </tbody>
    </table>
    </div>
  </div>
  </div>
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
<?php

if(isset($_POST['edit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dateofbirth = $_POST['dateofbirth'];
    $homename = $_POST['homename'];
    $area = $_POST['area'];
    $city= $_POST['city'];
    $district = $_POST['district'];
    $pin= $_POST['pin'];
    $mobile = $_POST['mobile'];
    $fathersname= $_POST['fathersname'];
    $mothername= $_POST['mothername'];
    $sportsname= $_POST['sportsname'];
    $size= $_POST['size'];
    
    $sql = "UPDATE student SET `name` = '$name', 'email' = '$email', 'password'='$password','dateofbirth'='$dateofbirth','homename'='$homename','area'='$area','city'='$city','district'='$dirstict','pin'='$pin','mobile'='$mobile','fathername'='$fathername','mothername'='$mothername','sportsname'='$sportsname','size'='$size' WHERE id = '$id'";
    $result = mysqli_query($con,$sql);
    if($result){
      echo "Item updated successfully";
    }
    else{
      echo mysqli_error($con);
    }
  }
?>


</body>
</html>
