<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
--> <?php
$servername = "localhost";
$username = "root";
$password = "";
$database="db_sports";
$db = mysqli_connect($servername, $username, $password, $database);
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}
?> <?php
session_start();
if($_SESSION['email']){
  
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Wizard Sports Academy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
    </script> <!-- Bootstrap Core CSS -->
    <link href="css2/bootstrap.min.css" rel='stylesheet' type='text/css' /> <!-- Custom CSS -->
    <link href="css2/style.css" rel='stylesheet' type='text/css' /> <!-- Graph CSS -->
    <link href="css2/lines.css" rel='stylesheet' type='text/css' />
    <link href="css2/font-awesome.css" rel="stylesheet"> <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!----webfonts--->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <!---//webfonts--->
    <!-- Nav CSS -->
    <link href="css2/custom.css" rel="stylesheet"> <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>
    <script src="js/custom.js"></script> <!-- Graph JavaScript -->
    <script src="js/d3.v3.js"></script>
    <script src="js/rickshaw.js"></script>
    <style>
        .left{
          margin-left : -25px;
        }

        .button-box {
            background-color: white;
            border: 1px solid black;
            display: inline-block;
            padding: 8px;
        }

        .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: #4CAF50; 
  color: white; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: white;
  color: black;
}


    </style>
</head>

<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header"> <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="index.php">Wizard</a> </div> <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"> <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="images2/1.png"><span class="badge"></span></a>
                    <ul class="dropdown-menu">
                      <li class="m_2"><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                        <li class="m_2"><a href="Password.php"><i class="fa fa-wrench"></i> Change Password</a></li>
                        <li class="m_2"><a href="logout.php"><i class="fa fa-lock"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li> <a href="index.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a> </li>
                        <li> <a href="approval.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Approval</a> </li>
                        <li> <a href="#"><i class="fa fa-indent nav_icon"></i>Teachers<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="teach_view.php">View Teacher</a> </li>
                                <li> <a href="addteacherdes.php">Add Teacher</a> </li>
                            </ul>
                        </li>
                        <li> <a href="#"><i class="fa fa-sitemap fa-fw nav_icon"></i>Students<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="stud_view.php">View Students</a> </li>
                                <li> <a href="addstudentsdes.php">Add Students</a> </li>
                            </ul>
                        </li>
                        <li> <a href="#"><i class="fa fa-check-square-o nav_icon"></i>Events<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="event_view.php">View Events</a> </li>
                                <li> <a href="addevents.html">Add events</a> </li>
                            </ul>
                        </li>
                        <li> <a href="view_complaints.php"><i class="fa fa-laptop nav_icon"></i>Complaints</a> </li>
                        <li> <a href="send_notification.php"><i class="fa fa-envelope nav_icon"></i>Mailbox</a> </li>
                        <li> <a href="users_contact.php"><i class="fa fa-sitemap fa-fw nav_icon"></i>Contact</a> </li>
                        <li> <a href="report.php"><i class="fa fa-check-square-o nav_icon"></i>Report</a> </li>
                        <li> <a href="leave_approve.php"><i class="fa fa-laptop nav_icon"></i>Leave Approval</a> </li>
                        <li> <a href="resource_request.php"><i class="fa fa-bell nav_icon"></i>Resource Request</a> </li>
                        <li> <a href="payment.php"><i class="fa fa-lock nav_icon"></i>Payment</a> </li>
                    </ul>
                </div> <!-- /.sidebar-collapse -->
            </div> <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
            <div class="graphs">
                <div class="col_3">
                    <div class="col-md-3 widget widget1">
                        <div class="r3_counter_box"> <i class="pull-left fa fa-thumbs-up icon-rounded"></i>
                            <div class="stats">
                                <h5><strong>15</strong></h5> <span>Coaches</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 widget widget1">
                        <div class="r3_counter_box"> <i class="pull-left fa fa-users user1 icon-rounded"></i>
                            <div class="stats">
                                <h5><strong>30000</strong></h5> <span>Salary per month</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 widget widget1">
                        <div class="r3_counter_box"> <i class="pull-left fa fa-comment user2 icon-rounded"></i>
                            <div class="stats">
                                <h5><strong>30-04-2023</strong></h5> <span>Last Payment</span>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-3 widget">
                        <div class="r3_counter_box"> <i class="pull-left fa fa-long-arrow-right dollar1 icon-rounded"></i>
                            <div class="stats">
                                <h5><strong>Payment History</strong></h5> 
                            </div>
                        </div>
                    </div> -->
                    <div class="clearfix"> </div>
                </div>
                <!-- <div id="page-wrapper" class="full"> -->
                <!-- <div id="page-wrapper"> -->
                    <div class="graphs">
	                    <div class="md">
                            <h3>Make Payment</h3>
                            <div class="button-box">
                                <button class="button button1" name="submit" id="submit" >Pay</button>
                            </div>
                        </div>	

                        <br>
                        <br>
                        <div class="md">
                        <!-- <h3>History</h3> -->
                        
	                    </div>
                        
                    </div>
                <!-- </div> -->
                        <div class="clearfix"> </div>
                        <div class="copy" style="margin-top:30%">
                            <p>Copyright &copy; 2022 Wizard Sports Academy. All Rights Reserved. </p>
                        </div>
              <!-- </div>  -->
            </div> <!-- /#page-wrapper -->
        <!-- </div> /#wrapper -->
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <script>
    var button = document.getElementById("submit");

    // Get the current date
    var currentDate = new Date();
    
    // Get the last day of the current month
    var lastDayOfMonth = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0).getDate();
    
    // Enable the button if it's the last day of the month
    if (currentDate.getDate() === lastDayOfMonth) {
        button.disabled = false;
        button.addEventListener("click", function() {
            window.location.href = 'payment_function.php';
        });
    } else {
        button.disabled = true;
    }
</script>
</body>

</html> <?php
}
else{
  header("location:/../logindes.php");
}
?>