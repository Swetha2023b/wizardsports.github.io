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
$b = "SELECT * FROM tbl_stud_register WHERE login_id = $log_id";
$c = mysqli_query($db, $b);
$d = mysqli_fetch_assoc($c);
$item1 = $d['stud_item_1'];
$item2 = $d['stud_item_2'];

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

  <style>
	form {
		width: 50%;
		margin: 0 auto;
		padding: 20px;
		background-color: #f2f2f2;
		border-radius: 10px;
		box-shadow: 0px 0px 10px #aaa;
	}

	input[type="text"], textarea {
		width: 100%;
		padding: 10px;
		margin-bottom: 10px;
		border-radius: 5px;
		border: none;
		box-shadow: 0px 0px 5px #aaa;
	}

	input[type="submit"] {
		padding: 10px;
		background-color: #4CAF50;
		color: #fff;
		border: none;
		border-radius: 5px;
		cursor: pointer;
	}

	input[type="submit"]:hover {
		background-color: #3e8e41;
	}

  .dialog-container {
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: rgba(0, 0, 0, 0.5);
  z-index: 999;
}

.dialog {
  background-color: white;
  padding: 20px;
  border-radius: 10px;
  text-align: center;
}

.dialog label {
  font-size: 18px;
}

.dialog button {
  margin-top: 20px;
  padding: 10px 20px;
  font-size: 16px;
  border-radius: 5px;
  background-color: #007bff;
  color: white;
  border: none;
  cursor: pointer;
}

.dialog button:hover {
  background-color: #0069d9;
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
    </div><!-- End Logo -->

    

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
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
              <a class="dropdown-item d-flex align-items-center" href="../Admin/logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.php">
          <i class="bi bi-grid"></i>
          <span>Home</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="qr_page.php">
          <i class="bi bi-journal-text"></i>
          <span>QR Code</span>
        </a>
      </li> -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="attendance.php">
          <i class="bi bi-journal-text"></i>
          <span>Attendance</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="components-list-group.php">
          <i class="bi bi-menu-button-wide"></i>
          <span>Schedule</span>
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="stud_notification_des.php">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>Notifications</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="complaintdes.php">
          <i class="bi bi-circle"></i>
          <span>Complaints</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="http://127.0.0.1:5000">
          <i class="bi bi-bar-chart"></i>
          <span>Check Calorie</span>
        </a>
      </li>
    </ul>
  </aside><!-- End Sidebar-->

  <main id="main" class="main">
      <div class="pagetitle">
          <h1>Attendance</h1>
          <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="users-profile.php">Home</a></li>
                <li class="breadcrumb-item active">Attendance</li>
            </ol>
          </nav>
      </div>
  

      <form method="post" action="markattendance.php">
  <h2>Mark Attendance</h2>
  <?php $attend_row = mysqli_fetch_array($attend_res) ?>
  <label for="name">Name : <?php echo $_SESSION['username'] ?></label><br>
  <label for="complaint">Date : <?php echo date('Y-m-d') ?></label><br><br>
  <button class="btn btn-primary" id="myButton" name="submit">Mark Attendance</button>



</form>

<br><br>
  <form method="post" action="view_attendance.php">
		<h2>View Attendance</h2>
		<label>From Date : <?php echo 2023-04-01 ?></label><br>
		<label>Till Date : <?php echo date('Y-m-d') ?></label><br><br>
        <input type="submit" value="View Attendance" name="submit" id="submit"><br><br>
        <!-- <button class="btn btn-primary" name="submit" id="submit" onclick="window.location.href='view_attendance.php'">View Attendance</button> -->
	</form>
    

  </main><!-- End #main -->

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
  </footer><!-- End Footer -->

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
    // Target location (9.5260093,76.8144186) and radius (in meters)
// const targetLat = 8.5241391;
// const targetLng = 76.9366376;
const targetLat = 9.931233;
const targetLng = 76.267304;
const targetRadius = 1000; // 1 km

// Get the user's current location
navigator.geolocation.getCurrentPosition(position => {
  const userLat = position.coords.latitude;
  const userLng = position.coords.longitude;

  // Calculate the distance between the user's location and the target location
  const distance = getDistance(userLat, userLng, targetLat, targetLng);

  // Enable/disable the button based on the distance
  const button = document.getElementById("myButton");
  if (distance <= targetRadius) {
    button.disabled = false;
  } else {
    button.disabled = true;
  }
});

// Helper function to calculate the distance between two points on the Earth's surface
function getDistance(lat1, lng1, lat2, lng2) {
  const R = 6371e3; // Earth's radius (in meters)
  const φ1 = lat1 * Math.PI / 180;
  const φ2 = lat2 * Math.PI / 180;
  const Δφ = (lat2 - lat1) * Math.PI / 180;
  const Δλ = (lng2 - lng1) * Math.PI / 180;

  const a = Math.sin(Δφ/2) * Math.sin(Δφ/2) +
            Math.cos(φ1) * Math.cos(φ2) *
            Math.sin(Δλ/2) * Math.sin(Δλ/2);
  const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));

  const d = R * c;
  return d;
}

  </script>



</body>

</html>
