<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="db_sports";
$db = mysqli_connect($servername, $username, $password, $database);
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}
// date_default_timezone_set('Asia/Kolkata');
// $time = date('h:i A');
// echo"<script Type='text/javascript'>alert('$time')</script>";
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
<!-- <link href="multiselect.css" rel="stylesheet"> -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<style>
  .full{
    width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
  }

  body {
  margin: 0;
  padding: 0;
}

/* Google Fonts - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');


/* .container{
    position: relative;
    max-width: 320px;
    width: 100%;
    margin: 80px auto 30px;
} */
.select-btn{
    display: flex;
    height: 50px;
    align-items: center;
    justify-content: space-between;
    padding: 0 16px;
    border-radius: 8px;
    cursor: pointer;
    background-color: #fff;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}
.select-btn .btn-text{
    font-size: 17px;
    font-weight: 400;
    color: #333;
}
.select-btn .arrow-dwn{
    display: flex;
    height: 21px;
    width: 21px;
    color: #fff;
    font-size: 14px;
    border-radius: 50%;
    background: #6e93f7;
    align-items: center;
    justify-content: center;
    transition: 0.3s;
}
.select-btn.open .arrow-dwn{
    transform: rotate(-180deg);
}
.list-items{
    position: relative;
    margin-top: 5px;
    border-radius: 8px;
    padding: 6px;
    background-color: #fff;
    box-shadow: 0 2px 0px rgba(0, 0, 0, 0.1);
    display: none;
}
.select-btn.open ~ .list-items{
    display: block;
}
.list-items .item{
    display: flex;
    align-items: center;
    list-style: none;
    height: 30px;
    cursor: pointer;
    transition: 0.3s;
    padding: 0 15px;
    border-radius: 8px;
}
.list-items .item:hover{
    background-color: #e7edfe;
}
.item .item-text{
    font-size: 16px;
    font-weight: 400;
    color: #333;
}
.item .checkbox1{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 16px;
    width: 16px;
    border-radius: 4px;
    margin-right: 12px;
    border: 1.5px solid #c0c0c0;
    transition: all 0.3s ease-in-out;
}
.item.checked .checkbox1{
    background-color: #4070f4;
    border-color: #4070f4;
}
.checkbox1 .check-icon{
    color: #fff;
    font-size: 11px;
    transform: scale(0);
    transition: all 0.2s ease-in-out;
}
.item.checked .check-icon{
    transform: scale(1);
}

/* .fromleft{
  position: absolute;
  left: 40%;
  
} */
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
        <div id="page-wrapper" class="full">
        <div class="graphs">
	     <div class="xs">
  	       <h3>Compose</h3>
             
        <div class="col-md-8 inbox_right" >
        	<div class="Compose-Message" >               
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Compose New Message 
                    </div>

                    

                    <div class="panel-body">
                        <div class="alert alert-info">
                            Please fill details to send a new message
                        </div>
                        <hr>
                        <form action="notif.php" method="POST">

                        <label>Enter Recipient Name : </label>
                        <!-- <input type="text" > -->
                        <!-- <div class="container"> -->
            <div class="select-btn" >
                <span class="btn-text">Select Recipients</span>
                <span class="arrow-dwn">
                    <i class="fa-solid fa-chevron-down"></i>
                </span>
            </div>
           
                <!-- <div class="selectall" id="myDropdown"> -->
            <ul class="list-items">
                <li class="item">
                    <span class="checkbox1">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text" value="all">Select All</span>
                </li>
                <?php
                    $select_query="select * from tbl_coach_register WHERE status = 1";
                    $result=mysqli_query($db,$select_query);
                    while($row1=mysqli_fetch_assoc($result)){
                    ?>
                <li class="item">
                    <span class="checkbox1">
                    <input type="checkbox" value="<?php echo $row1['login_id'];?>" name="recipient[]" >
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text" ><?php echo $row1['teach_name'];?></span>
                </li>
                <!-- where to put name and id in the following code snippet so that i can retrieve values using post function
                <li class="item">
                    <span class="checkbox1">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Anuradha</span>
                </li>
                <li class="item">
                    <span class="checkbox1">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Jayakumar</span>
                </li>
                <li class="item">
                    <span class="checkbox1">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Manu</span>
                </li>
                <li class="item">
                    <span class="checkbox1">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Priya</span>
                </li>
                <li class="item">
                    <span class="checkbox1">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">John</span>
                </li>
                <li class="item">
                    <span class="checkbox1">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Sindhu</span>
                </li>
                <li class="item">
                    <span class="checkbox1">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Renjith</span>
                </li>
                <li class="item">
                    <span class="checkbox1">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Remya</span>
                </li>
                <li class="item">
                    <span class="checkbox1">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Arjun</span>
                </li>
                <li class="item">
                    <span class="checkbox1">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Aswani</span>
                </li>
                <li class="item">
                    <span class="checkbox1">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Fazil</span>
                </li>
                <li class="item">
                    <span class="checkbox1">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Piyush</span>
                </li>
                <li class="item">
                    <span class="checkbox1">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Madhavan</span>
                </li>
                <li class="item">
                    <span class="checkbox1">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Sasikala</span>
                </li> -->
                <?php
                        
                    }
                ?>
            </ul>
                <!-- </div> -->
            
                          <br>
                        <label>Enter Subject :  </label>
                        <input type="text" class="form-control1 control3" name="notif_subject" id="notif_subject">
                        <label>Enter Message : </label>
                        <textarea rows="6" class="form-control1 control2" name="notif_message" id="notif_message"></textarea>
                        <hr>
                        <input class="btn btn-warning btn-warng1" type="submit" value="Send" name="submit" id="submit">
                        <!-- <a href="#" ><span class="glyphicon glyphicon-envelope tag_02"></span> Send Message </a>&nbsp; -->
                </form>
                    </div>
                    </div>
                 </div>
              </div>
         </div>
        
         <div class="clearfix"> </div>
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
<!-- <script src="multiselect.min.js"></script> -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<script>
const selectBtn = document.querySelector(".select-btn"),
      items = document.querySelectorAll(".item");

selectBtn.addEventListener("click", () => {
    selectBtn.classList.toggle("open");
});

items.forEach(item => {
    item.addEventListener("click", () => {
        item.classList.toggle("checked");

        let checked = document.querySelectorAll(".checked"),
            btnText = document.querySelector(".btn-text");

            if(checked && checked.length > 0){
                btnText.innerText = `${checked.length} Selected`;
            }else{
                btnText.innerText = "Select Recipients";
            }
    });
})

// document.getElementById("myDropdown").addEventListener("change", function() {
//   var dropdown = this;
//   if (dropdown.value == "all") {
//     var options = dropdown.item;
//     for (var i = 0; i < options.length; i++) {
//       options[i].selected = true;
//     }
//   }
// });
</script>
</body>
</html>
