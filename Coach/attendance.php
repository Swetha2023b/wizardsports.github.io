<?php
   $db = mysqli_connect("localhost","root","","db_sports");
   session_start();
   if(!isset($_SESSION['log_id'])){
       header("location: ../login.html");
   }
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
         
      </aside>

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
  

                    

<br><br>
  <form method="post" action="view_attendance.php" onsubmit="return validateForm() && validateForm1()" name="myForm">
		<h2>View Attendance</h2>
    <label>From Date : <?php echo '2023-03-28' ?></label><br>
		<label>Till Date : <?php echo date('Y-m-d') ?></label><br><br>
    <table class="table">
                        <tbody>
                        <tr>
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
                            <option value="All">All</option>
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
		
        <!-- <input type="submit" value="View Attendance" name="submit" id="submit"><br><br> -->
        <!-- <button class="btn btn-primary" name="submit" id="submit" onclick="window.location.href='view_attendance.php'">View Attendance</button> -->
	</form>
    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer" style="margin-top:20%">
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
const targetLat = 8.5241391;
const targetLng = 76.9366376;
// const targetLat = 9.5260093;
// const targetLng = 76.8144186;
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
  <script>
function validateForm() {
  // Get the selected month and year from the form
  var selected_month = document.getElementsByName("month")[0].value;
  var selected_year = document.getElementsByName("year")[0].value;

  // Get the current date
  var current_date = new Date();

  // Create a new Date object for the selected month and year
  var selected_date = new Date(selected_year, selected_month - 1, 1);

  // Check if the selected date is in the future
  if (selected_date > current_date) {
    // Display an error message
    alert("Error: Please select a date in the past.");
    // Prevent the form from submitting
    return false;
  }

  // If the selected date is valid, allow the form to submit
  return true;
}
</script>
<script>
function validateForm1() {
  var month = document.forms["myForm"]["month"].value;
  var year = document.forms["myForm"]["year"].value;
  
  if (month == "All" && year != "All") {
    alert("Please select a month");
    return false;
  }
  
  if (month != "All" && year == "All") {
    alert("Please select a year");
    return false;
  }
  
  return true;
}
</script>


</body>

</html>
