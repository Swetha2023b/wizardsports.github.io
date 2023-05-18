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
      <style>
        select {
  width: 80%;
  padding: 8px 32px 8px 16px;
  border-radius: 4px;
  border: 1px solid #ccc;
  font-size: 16px;
  background-color: #fff;
  box-shadow: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3E%3Cpath fill='%23000' d='M4 5.5L1.5 3h5L4 5.5z'/%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: right 12px center;
  cursor: pointer;
}

select:hover {
  border-color: #999;
}

select:focus {
  border-color: #333;
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

th {
  background-color: #f2f2f2;
}

tbody tr:nth-child(even) {
  background-color: #f2f2f2;
}

.fetch-data-btn {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 4px;
}


      </style>
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
         <div id="page-wrapper">
            <div class="graphs">
               <div class="md">
                  <form method="post" action="view_report.php">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Category</th>
                            <th>Month</th>
                            <th>Year</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                            <select name="category">
                                <option value="Students">Students</option>
                                <option value="Coaches">Coaches</option>
                                <option value="Events">Events</option>
                            </select>
                            </td>
                            <td>
                            <select name="month">
                                <option value="All">All</option>
                                <option value="01">January</option>
                                <option value="02">February</option>
                                <option value="03">March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                            </td>
                            <td>
                            <select name="year">
                            <!-- <option value="All">All</option> -->
                                <?php
                                $current_year = date('Y');
                                for ($i = $current_year - 2; $i <= $current_year; $i++) {
                                    echo "<option value=\"$i\">$i</option>";
                                }
                                ?>
                            </select>
                            </td>
                            <td><button type="submit" name="submit" class="fetch-data-btn">View Report</button></td>
                        </tr>
                        </tbody>
                    </table>
                </form>
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
      <!-- Bootstrap Core JavaScript -->
      <script src="js/bootstrap.min.js"></script>
   </body>
</html>