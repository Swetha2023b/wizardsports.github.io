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
      </style>
      <!-- =======================================================
         * Template Name: NiceAdmin - v2.4.1
         * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
         * Author: BootstrapMade.com
         * License: https://bootstrapmade.com/license/
         ======================================================== -->
   </head>
   <body>
      <!-- ======= Header ======= -->
      <header id="header" class="header fixed-top d-flex align-items-center">
         <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
            <img src="assets/img/logo.png" alt="">
            <span class="d-none d-lg-block">Wizard</span>
            </a>
            <!-- <i class="bi bi-list toggle-sidebar-btn"></i> -->
         </div>
         <!-- End Logo -->
         <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
               <li class="nav-item dropdown pe-3">
                  <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                  <img src="../Admin/Uploads/Coaches/<?php echo $row['teach_image']; ?>" alt="Profile" class="rounded-circle">
                  <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['username'] ?></span>
                  </a><!-- End Profile Iamge Icon -->
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
                  <!-- End Profile Dropdown Items -->
               </li>
               <!-- End Profile Nav -->
            </ul>
         </nav>
         <!-- End Icons Navigation -->
      </header>
      <!-- End Header -->
      <!-- ======= Sidebar ======= -->
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
         <!-- End Dashboard Nav -->
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
         <!-- <li class="nav-item">
            <a class="nav-link " data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
              <li>
                <a href="components-list-group.html" class="active">
                  <i class="bi bi-circle"></i><span>List group</span>
                </a>
              </li>
              <li>
                <a href="components-modal.html">
                  <i class="bi bi-circle"></i><span>Modal</span>
                </a>
              </li> 
              
            </ul>
            </li> End Components Nav -->
         <!-- <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
              <li>
                <a href="forms-elements.html">
                  <i class="bi bi-circle"></i><span>Form Elements</span>
                </a>
              </li>
              <li>
                <a href="forms-layouts.html">
                  <i class="bi bi-circle"></i><span>Form Layouts</span>
                </a>
              </li>
              <li>
                <a href="forms-editors.html">
                  <i class="bi bi-circle"></i><span>Form Editors</span>
                </a>
              </li>
              <li>
                <a href="forms-validation.html">
                  <i class="bi bi-circle"></i><span>Form Validation</span>
                </a>
              </li>
            </ul>
            </li>-->    <!--End Forms Nav -->
         <!-- <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
              <li>
                <a href="tables-general.html">
                  <i class="bi bi-circle"></i><span>General Tables</span>
                </a>
              </li>
              <li>
                <a href="tables-data.html">
                  <i class="bi bi-circle"></i><span>Data Tables</span>
                </a>
              </li>
            </ul>
            </li>-->   <!--End Tables Nav -->
         <!-- <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
              <li>
                <a href="charts-chartjs.html">
                  <i class="bi bi-circle"></i><span>Chart.js</span>
                </a>
              </li>
              <li>
                <a href="charts-apexcharts.html">
                  <i class="bi bi-circle"></i><span>ApexCharts</span>
                </a>
              </li>
              <li>
                <a href="charts-echarts.html">
                  <i class="bi bi-circle"></i><span>ECharts</span>
                </a>
              </li>
            </ul>
            </li>-->      <!--End Charts Nav -->
         <!-- <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
              <li>
                <a href="icons-bootstrap.html">
                  <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
                </a>
              </li>
              <li>
                <a href="icons-remix.html">
                  <i class="bi bi-circle"></i><span>Remix Icons</span>
                </a>
              </li>
              <li>
                <a href="icons-boxicons.html">
                  <i class="bi bi-circle"></i><span>Boxicons</span>
                </a>
              </li>
            </ul>
            </li> -->
         <!-- End Icons Nav -->
         <!-- <li class="nav-heading">Pages</li>
            <li class="nav-item">
              <a class="nav-link collapsed" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>Profile</span>
              </a>
            </li>End Profile Page Nav
            </ul>-->
      </aside>
      <!-- End Sidebar-->
      <main id="main" class="main">
      <div class="pagetitle">
          <h1>View Notifications</h1>
          <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="users-profile.php">Home</a></li>
                <li class="breadcrumb-item active">Notifications</li>
            </ol>
          </nav>
      </div>
      <section class="section">
          <div class="row">
            <div class="col-lg-6">
                <div class="card" style="width: 170%;">
                  <div class="card-body">
                      <br>
                      <?php
                        $query_noti = "SELECT * from tbl_notification WHERE notif_recipients = $log_id ORDER BY notif_date DESC";
                        $result_noti = mysqli_query($db,$query_noti);
                        
                        // $row = mysqli_fetch_array($result);
                        
                        // $message = $row['stud_complaint'];
                        // if (strlen($message) > 15) {
                        // 	$truncated_message = substr($message, 0, 20) . '...';
                        //   } else {
                        // 	$truncated_message = $message;
                        //   }
                        ?>
                      <!-- <div id="page-wrapper">
                        <div class="graphs">
                            <div class="md"> -->
                      <table class="table">
                        <thead>
                            <tr>
                              <!-- <th>Status</th> -->
                              <th>Time</th>
                              <th>Subject</th>
                              <th>Date</th>
                              <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  while ($row_noti = mysqli_fetch_array($result_noti)) { ?>
                            <tr>
                              <!-- <td><?php echo $row_noti['notif_time']; ?></td> -->
                              <td><?php echo $row_noti['notif_time']; ?></td>
                              <td><?php if (strlen($row_noti['notif_subject']) > 20) {
                                  $truncated_message = substr($row_noti['notif_subject'], 0, 20) . '...';
                                  } else {
                                    $truncated_message = $row_noti['notif_subject'];
                                  }
                                  $truncated_message; 
                                  echo $truncated_message;?></td>
                              <td><?php echo $row_noti['notif_date']; ?></td>
                              <td><button class="btn btn-primary btn-lg"  id="<?php echo $row_noti['notif_id'] ?>" >View</a></button> </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                      </table>
                      <!-- </div> -->
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
                                    Viewing Notification
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
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                  </div>
                </div>
            </div>
          </div>
      </section>
    </main>
      <!-- End #main -->
      <!-- ======= Footer ======= -->
      <footer id="footer" class="footer">
         <div class="copyright">
            &copy; Copyright <strong><span>Wizard Sports Academy</span></strong>. All Rights Reserved
         </div>
         <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
         </div>
      </footer>
      <!-- End Footer -->
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
      <!-- Vendor JS Files -->
      <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/vendor/chart.js/chart.min.js"></script>
      <script src="assets/vendor/echarts/echarts.min.js"></script>
      <script src="assets/vendor/quill/quill.min.js"></script>
      <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
      <script src="assets/vendor/tinymce/tinymce.min.js"></script>
      <script src="assets/vendor/php-email-form/validate.js"></script>
      <!-- Template Main JS File -->
      <script src="assets/js/main.js"></script>
      <script
         src="https://code.jquery.com/jquery-3.6.0.min.js"
         integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
         crossorigin="anonymous"
         ></script>
      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
      <script>
$(document).ready(function(){
    $('button').click(function(){
  id_emp = $(this).attr('id')
        $.ajax({url: "notification_view.php",
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