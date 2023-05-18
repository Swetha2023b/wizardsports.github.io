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
          <div  class="full">
            <h1>Register Tournament</h1>
            <nav>
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="users-profile.php">Home</a></li>
                  <li class="breadcrumb-item active">Tournament</li>
               </ol>
            </nav>
         </div>
         <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card" style="width: 170%;">
            <div class="card-body" ><br><br>

              <!-- Horizontal Form -->
              <form action="tour_register.php" method="POST">
                <div class="row mb-3">
                  <label for="startDate" class="col-sm-2 col-form-label">Event Start Date</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="event_start" name="event_start">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="endDate" class="col-sm-2 col-form-label">Event End Date</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="event_end" name="event_end">
                  </div>
                </div>
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Sports Category</legend>
                  <div class="col-sm-10">
                    <!-- <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                      <label class="form-check-label" for="gridRadios1">
                        First radio
                      </label>
                    </div> -->
                    <div class="form-check disabled">
                      <input class="form-check-input" type="radio" name="category" id="category" value="<?php echo $row['teach_item']; ?>" checked>
                      <label class="form-check-label" for="sports_category">
                      <?php echo $row['teach_item']; ?>
                      </label>
                    </div>
                  </div>
                </fieldset>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Partcipants</label>
                  <div class="col-sm-10">
                <div class="select-btn" >
                <span class="btn-text">Select Participants</span>
                <span class="arrow-dwn">
                    <i class="fa-solid fa-chevron-down"></i>
                </span>
            </div>
           
                <!-- <div class="selectall" id="myDropdown"> -->
            <ul class="list-items">
                <!-- <li class="item">
                    <span class="checkbox1">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text" value="all">Select All</span>
                </li> -->
                <?php
                    $select_query="select * from tbl_stud_register WHERE stud_item_1='$item1' OR stud_item_2='$item1' ";
                    $result=mysqli_query($db,$select_query);
                    while($row1=mysqli_fetch_assoc($result)){
                    ?>
                <li class="item">
                    <span class="checkbox1">
                    <input type="checkbox" value="<?php echo $row1['login_id'];?>" name="participant[]" >
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text" ><?php echo $row1['stud_name'];?></span>
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
            </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Venue</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="event_college" name="event_college">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Place</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="event_place" name="event_place">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Instructions</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" id="event_inst" name="event_inst"></textarea>
                  </div>
                </div>
                <!-- <div class="row mb-3">
                  <div class="col-sm-10 offset-sm-2">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1">
                      <label class="form-check-label" for="gridCheck1">
                        Example checkbox
                      </label>
                    </div>
                  </div>
                </div> -->
                <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form><!-- End Horizontal Form -->

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
                btnText.innerText = "Select Participants";
            }
    });
})
</script>
   </body>
</html>