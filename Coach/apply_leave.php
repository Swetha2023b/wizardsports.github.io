<?php
   $db = mysqli_connect("localhost","root","","db_sports");
   ?>
<?php
   session_start();
   if(!isset($_SESSION['log_id'])){
       header("location: ../login.html");
   }
   ?>
<?php 
   $log_id = $_SESSION['log_id'];
   $email = $_SESSION['email'];
   $getdetails = "SELECT * FROM tbl_coach_register WHERE login_id = $log_id";
   $result = mysqli_query($db, $getdetails);
   $row = mysqli_fetch_assoc($result);
   $getdetails1 = "SELECT * FROM tbl_coach_address WHERE login_id = $log_id";
   $result1 = mysqli_query($db, $getdetails1);
   $row1 = mysqli_fetch_assoc($result1);
   $item1 = $row['teach_item'];
   $name = $row['teach_name'];
   $address1 = $row1['teach_housenm'];
   $address2 = $row1['teach_area'];
   $address3 = $row1['teach_city'];
   $phone = $row['teach_phone'];
   $state = $row1['teach_state'];
   $dob = $row['teach_dob'];
   $img = $row['teach_image'];

   $getdetails = "SELECT * FROM tbl_stud_schedule WHERE login_id = $log_id";
$result = mysqli_query($db, $getdetails);
$row = mysqli_fetch_assoc($result);
$attend = "SELECT * FROM tbl_attendance WHERE login_id = $log_id ORDER BY date desc";
$attend_res = mysqli_query($db, $attend);
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wizard Sports Academy</title>
      <meta content="" name="description">
      <meta content="" name="keywords">
      <!-- Favicons -->
      <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
      <link href="assets/img/favicon.png" rel="icon">
      <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
      <!-- Google Fonts -->
      <link href="https://fonts.gstatic.com" rel="preconnect">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      <!-- Vendor CSS Files -->
      <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
      <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
      <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
      <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
      <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
      <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
      <!-- Template Main CSS File -->
      <link href="assets/css/style.css" rel="stylesheet">
      <style type="text/css">
         td,th {
         padding: 0 15px;
         }

         #reason {
            height: 100px; /* or any other value you prefer */
        }

       
      </style>
      
   </head>
   <body>
      <header id="header" class="header fixed-top d-flex align-items-center">
         <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
            <img src="assets/img/logo.png" alt="">
            <span class="d-none d-lg-block">Wizard</span>
            </a>
            
         </div>
         <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
               <li class="nav-item dropdown pe-3">
                  <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                  <img src="../Admin/Uploads/Coaches/<?php echo $row['teach_image']; ?>" alt="Profile" class="rounded-circle">
                  <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['username'] ?></span>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                     <li class="dropdown-header">
                        <h6><?php echo $_SESSION['username'] ?></h6>
                     </li>
                     <li>
                        <hr class="dropdown-divider">
                     </li>
                     <li>
                        <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                        <i class="bi bi-person"></i>
                        <span>My Profile</span>
                        </a>
                     </li>
                     <li>
                        <hr class="dropdown-divider">
                     </li>
                     <li>
                        <a class="dropdown-item d-flex align-items-center" href="../Admin/logout.php">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Log Out</span>
                        </a>
                     </li>
                  </ul>
               </li>
            </ul>
         </nav>
      </header>
      <aside id="sidebar" class="sidebar">
         <ul class="sidebar-nav" id="sidebar-nav">
         <li class="nav-item">
            <a class="nav-link collapsed" href="users-profile.php">
            <i class="bi bi-grid"></i>
            <span>Home</span>
            </a>
         </li>
         <li class="nav-item">
        <a class="nav-link collapsed" href="stud_list.php">
          <i class="bi bi-square-fill"></i>
          <span>Students List</span>
        </a>
      </li>
         <li class="nav-item">
        <a class="nav-link collapsed" href="qr_page.php">
          <i class="bi bi-grid"></i>
          <span>QR Code</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="attendance.php">
          <i class="bi bi-journal-text"></i>
          <span>Attendance</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="apply_leave.php">
          <i class="bi bi-gem"></i>
          <span>Apply Leave</span>
        </a>
      </li>
         <li class="nav-item">
            <a class="nav-link collapsed" href="notifications.php">
            <i class="bi bi-menu-button-wide"></i>
            <span>Notifications</span>
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link collapsed" href="tournament.php">
            <i class="bi bi-circle"></i>
            <span>Tournament</span>
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link collapsed" href="request_resources.php">
            <i class="bi bi-square-fill"></i>
            <span>Request Resources</span>
            </a>
         </li>
      </aside>
      <main id="main" class="main">
      <div class="pagetitle">
          <h1>Apply Leave</h1>
          <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="users-profile.php">Home</a></li>
                <li class="breadcrumb-item active">Apply Leave</li>
            </ol>
          </nav>
      </div>
  
      <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card" style="width: 130%;">
            <div class="card-body" ><br><br>
  <form method="post" action="leave.php">
		<!-- <h2>Attendance</h2> -->
        <div class="row mb-3">
        <label for="Date" class="col-sm-2 col-form-label">Date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
        </div>
        <div class="row mb-3">
        <label for="reason" class="col-sm-2 col-form-label">Session</label>
            <div class="col-sm-10">
            <select class="form-control" name="time" id="time">
                            
                            <option value="FN">FN</option>
                            <option value="AN">AN</option>
                            <option value="Full">Full Day</option>
                        </select>
            </div>
        </div>
		<div class="row mb-3">
        <label for="reason" class="col-sm-2 col-form-label">Reason</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="reason" name="reason" required></textarea>
            </div>
        </div>

        <input type="submit" value="Apply" name="submit" id="submit" class="btn btn-primary" >
	</form>
    </div>
                  </div>
          </div>
         </section>


         <div class="pagetitle">
          <h1>Leave Status</h1>
          <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="users-profile.php">Home</a></li>
                <li class="breadcrumb-item active">Leave Status</li>
            </ol>
          </nav>
      </div>
      <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card" style="width: 130%;">
            <div class="card-body" ><br><br>
            <?php
                        $query_noti = "SELECT * from tbl_leave WHERE login_id=$log_id";
                        $result_noti = mysqli_query($db,$query_noti);
                        
                        ?>
                      <table class="table">
                        <thead>
                            <tr>
                              <th>Leave Date</th>
                              <th>Applied On</th>
                              <th>Session</th>
                              <th>Reason</th>
                              <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  while ($row_noti = mysqli_fetch_array($result_noti)) { ?>
                            <tr>
                              <td><?php echo $row_noti['date']; ?></td>
                              <td><?php echo $row_noti['applied_on']; ?></td>
                              <td><?php echo $row_noti['time']; ?></td>
                              <td><?php echo $row_noti['reason']; ?></td>
                              <!-- <td><?php echo $row_noti['status']; ?></td> -->
                              <td>
                              <?php if ($row_noti['status'] == 'Approved') { ?>
                                 <div style="background-color: green; color: white; padding: 5px; display: inline-block; border-radius: 5px;">Approved</div>
                              <?php } else { ?>
                                 <div style="background-color: red; color: white; padding: 5px; display: inline-block; border-radius: 5px;">Not Approved</div>
                              <?php } ?>
                              </td>
                              
                            </tr>
                            <?php } ?>
                        </tbody>
                      </table>
    </div>
                  </div>
          </div>
         </section>
  </main>
      <footer id="footer" class="footer">
         <div class="copyright">
            &copy; Copyright <strong><span>Wizard Sports Academy</span></strong>. All Rights Reserved
         </div>
         <div class="credits">
         </div>
      </footer>
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
      <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/vendor/chart.js/chart.min.js"></script>
      <script src="assets/vendor/echarts/echarts.min.js"></script>
      <script src="assets/vendor/quill/quill.min.js"></script>
      <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
      <script src="assets/vendor/tinymce/tinymce.min.js"></script>
      <script src="assets/vendor/php-email-form/validate.js"></script>
      <script src="assets/js/main.js"></script>
      <script
         src="https://code.jquery.com/jquery-3.6.0.min.js"
         integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
         crossorigin="anonymous"
         ></script>
      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

   </body>
</html>