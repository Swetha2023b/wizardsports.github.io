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
#suggestions {
  position: absolute;
  background-color: white;
  border: 1px solid #ADD8E6;
  border-radius: 10px;
  z-index: 1;
  max-height: 200px;
  overflow-y: auto;
  width: 77.9%;
  margin-left : 0.2%;
}

#suggestions p {
  padding: 5px;
  margin: 0;
  border-bottom: 1px solid transparent;
  cursor: pointer;
}

#suggestions p:last-child {
  margin-bottom: 0;
}

#suggestions p:hover {
  background-color: #f2f2f2;
}

#suggestions_br {
  position: absolute;
  background-color: white;
  border: 1px solid #ADD8E6;
  border-radius: 10px;
  z-index: 1;
  max-height: 200px;
  overflow-y: auto;
  width: 77.9%;
  margin-left : 0.2%;
}

#suggestions_br p {
  padding: 5px;
  margin: 0;
  border-bottom: 1px solid transparent;
  cursor: pointer;
}

#suggestions_br p:last-child {
  margin-bottom: 0;
}

#suggestions_br p:hover {
  background-color: #f2f2f2;
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
         
      </aside>
      <!-- End Sidebar-->
      <main id="main" class="main">
         <div class="pagetitle">
          <div  class="full">
            <h1>Request Resources</h1>
            <nav>
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="users-profile.php">Home</a></li>
                  <li class="breadcrumb-item active">Request Resources</li>
               </ol>
            </nav>
         </div>
         <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card" style="width: 130%;">
            <div class="card-body" ><br><br>

              <!-- Horizontal Form -->
              <form action="request_res_fun.php" method="POST">
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Resource</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="resource" name="resource">
                    <div id="suggestions"></div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Brand</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="brand" name="brand">
                    <div id="suggestions_br"></div>
                  </div>
                </div>
                <div class="row mb-3" >
                  <label class="col-sm-2 col-form-label">Number</label>
                  <div class="col-sm-10" style="width: 30%;">
                  <input type="number" class="form-control" value="1" min="0" max="10" step="1" id="number" name="number">
                  </div>
                </div>
                <div class="row mb-3" >
                  <label class="col-sm-2 col-form-label">Comments</label>
                  <div class="col-sm-10">
                  <textarea class="form-control" id="comments" name="comments" placeholder="Optional..."></textarea>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form><!-- End Horizontal Form -->
</div>
            </div>
            </div>
          </div>
         </section>
      </main>
      <!-- End #main -->
      <!-- ======= Footer ======= -->
      <footer id="footer" class="footer" >
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
<script>
const searchBox = document.getElementById("resource");
const suggestions = document.getElementById("suggestions");

searchBox.addEventListener("input", function() {
  // Clear previous suggestions
  suggestions.innerHTML = "";

  // Get search term
  const searchTerm = this.value.trim().toLowerCase();

  // Generate suggestions
  if (searchTerm.length > 0) {
    const filteredSuggestions = getSuggestions(searchTerm);
    filteredSuggestions.forEach(function(suggestion) {
      const suggestionElement = document.createElement("p");
      suggestionElement.innerText = suggestion;
      suggestionElement.addEventListener("click", function() {
        searchBox.value = suggestion;
        suggestions.innerHTML = "";
      });
      suggestions.appendChild(suggestionElement);
    });
  }
});

function getSuggestions(searchTerm) {
  const suggestions = [
    "Cricket Ball",
    "Cricket Bat",
    "Cricket Stump",
    "Abdomen Guard",
    "Leg Pads",
    "Cricket Helmet",
    "Cricket Gloves",
    "Cricket Arm Guards",
    "Wicket Keeper Gloves",
    "Cricket Bails",
    "Cricket Nets",
    "Basketball",
    "Ball Pump",
    "Hockey Bat"
  ];

  const filteredSuggestions = suggestions.filter(function(suggestion) {
    return suggestion.toLowerCase().includes(searchTerm);
  });

  return filteredSuggestions;
}
</script>

<script>
const searchBoxs = document.getElementById("brand");
const suggestionss = document.getElementById("suggestions_br");

searchBoxs.addEventListener("input", function() {
  // Clear previous suggestions
  suggestionss.innerHTML = "";

  // Get search term
  const searchTerms = this.value.trim().toLowerCase();

  // Generate suggestions
  if (searchTerms.length > 0) {
    const filteredSuggestionss = getSuggestionss(searchTerms);
    filteredSuggestionss.forEach(function(suggestion) {
      const suggestionElements = document.createElement("p");
      suggestionElements.innerText = suggestion;
      suggestionElements.addEventListener("click", function() {
        searchBoxs.value = suggestion;
        suggestionss.innerHTML = "";
      });
      suggestionss.appendChild(suggestionElements);
    });
  }
});

function getSuggestionss(searchTerms) {
  const suggestionss = [
    "New Balance",
    "Spartan",
    "MRF",
    "SG",
    "AS",
    "Clearance",
    "Great Value",
    "Bat Care",
    "Gray-Nicolls",
    "Adidas",
    "Hunts County",
    "TON",
    "PR",
    "MB Malik",
    "Twenty20"
  ];

  const filteredSuggestionss = suggestionss.filter(function(suggestion) {
    return suggestion.toLowerCase().includes(searchTerms);
  });

  return filteredSuggestionss;
}
</script>
   </body>
</html>