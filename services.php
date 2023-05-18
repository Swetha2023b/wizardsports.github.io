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
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Wizard Sports Academy</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Yoga Lite Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700" rel="stylesheet">
    <!-- //Fonts -->
    <script type="text/javascript">
        (function(d, m){
            var kommunicateSettings = 
                {"appId":"1ee2761f32a07e1331804bd63be927de0","popupWidget":true,"automaticChatOpenOnNavigation":true};
            var s = document.createElement("script"); s.type = "text/javascript"; s.async = true;
            s.src = "https://widget.kommunicate.io/v2/kommunicate.app";
            var h = document.getElementsByTagName("head")[0]; h.appendChild(s);
            window.kommunicate = m; m._globals = kommunicateSettings;
        })(document, window.kommunicate || {});
    /* NOTE : Use web server to view HTML files as real-time update will not work if you directly open the HTML file in the browser. */
    </script>
        <style>
.center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
}
</style>
</head>

<body>
    <!-- //header -->
    <header class="py-sm-3 pt-3 pb-2" id="home">
        <div class="container">
            <!-- nav -->
            <div class="top d-md-flex">
                <div id="logo">
                     <h1> <a href="index.html"><!--<span class="fa fa-yoast"></span>--> <img src="images\wiz_logo.png" style="height:50px; width:50px;" alt="logo"> Wizard Sports Academy</a></h1>                                                             <!--  -->
                </div>
                <!-- <div class="search-form mx-md-auto">                                                                                                                                                                                                      
                    <div class="form-w3layouts-grid">
                        <form action="#" method="post" class="newsletter">
                            <input class="search" type="search" placeholder="Search..." required="">
                            <button class="form-control btn" value=""><span class="fa fa-search"></span></button>
                        </form>
                    </div>
                </div>-->                                                                                                                                                                                                                                      <!--  -->
                <div class="forms mt-md-0 mt-2">
                    <a href="logindes.php" class="btn"><span class="fa fa-user-circle-o"></span> Sign In</a>
                    <a href="registerdes.php" class="btn"><span class="fa fa-pencil-square-o"></span> Sign Up</a>
                </div>
            </div>
            <nav class="text-center">
                <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                <input type="checkbox" id="drop" />
                <ul class="menu">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li class="active">
                        <!-- First Tier Drop Down -->
                        <label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span>
                        </label>
                        <a href="services.html">Services <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                        <input type="checkbox" id="drop-2" />
                        <ul style="margin-left : -200px ;">
                            <li><a href="#section1" class="drop-text">Individual Events</a></li>
                            <li><a href="#section2" class="drop-text">Team Events</a></li>
                            <!-- <li><a href="#test" class="drop-text">Reviews</a></li>
                            <li><a href="single.html" class="drop-text">More Info</a></li> -->                                                                                                                                          <!--  -->

                        </ul>
                    </li>

                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
            <!-- //nav -->
        </div>
    </header>
    <!-- //header -->
    <div class="main-content inner">
        <div class="overlay inner">

        </div>
    </div>
    <!--// banner -->
    <!-- banner-bottom -->
    <section class="events py-5">
        <div class="container py-md-5">
            <h3 class="title-w3pvt text-center">Our Classes</h3>

            <div class="row ab-info second mt-lg-4 text-center">
                <div class="col-lg-4 ab-content">
                    <div class="ab-content-inner">
                        <div class="w3layouts-icon mx-auto">
                            <span class="fa fa-object-ungroup" aria-hidden="true"></span>
                        </div>
                        <div class="ab-info-con">
                            <h4>Individual Events</h4>
                            <p>Our Academy has currently 15 individual events. All the events are managed by well qualified instructors.</p>
                            <a href="#section1" class="read-more two btn m-0 px-3"><span class="fa fa-long-arrow-right"> </span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ab-content">
                    <div class="ab-content-inner">
                        <div class="w3layouts-icon mx-auto">
                            <span class="fa fa-xing" aria-hidden="true"></span>
                        </div>
                        <div class="ab-info-con">
                            <h4>Team Events</h4>
                            <p>Our Academy has currently 9 team events. We should have great unity to work as a team. Wizard assures you with that.</p>
                            <a href="#section2" class="read-more two btn m-0 px-3"><span class="fa fa-long-arrow-right"> </span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ab-content">
                    <div class="ab-content-inner">
                        <div class="w3layouts-icon mx-auto">
                            <span class="fa fa-handshake-o" aria-hidden="true"></span>
                        </div>
                        <div class="ab-info-con">
                            <h4>Yoga</h4>
                            <p>Giving its spiritual and stress-free benefits in the life of an individual, yoga is now becoming an inevitable factor today.</p>
                            <a href="" class="read-more two btn m-0 px-3"><span class="fa fa-long-arrow-right"> </span></a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    
    <section class="services py-5" id="section1">
    <div class="center">
    <div class="col-lg-6 ab-content text-left pr-lg-5">
    
  <h5><b>Registration Guidelines</b></h5>
  <p><strong class="text-capitalize"> </strong>
  1. Each individual is allowed to register according to the following criteria:
  <br>
  + At most one group item
  <br>
  + Two single items
  <br>
  + One group item and one single item
  <br>
  Please note that individuals cannot register for more than one group item or more than two single items, as this limit is designed to ensure that students can participate in activities without compromising their physical fitness. Any attempt to register for more than the allowed number of items may not be approved in order to prioritize the health and well-being of students.<br><br>
  2. At the time of registration individuals need to pay a sum of Rs.500 which is refundable only if he/she is not allowed to join the academy even after the registration process is completed.</div>
</div>
    </section>
    <!-- //banner-bottom -->
    <!-- /services -->
    <section class="services py-5" id="section1">
        <div class="container py-md-5">
            <div class="row ab-info">
                <div class="col-lg-6 ab-content text-left pr-lg-5">
                    <h3 class="title-w3pvt">Our Services</h3>
                    <h5>Individual Events</h5>
                    <br>
                    <p><strong class="text-capitalize"> </strong>Each of the events is well trained and managed by certified professionals. In that way, students can thrive in their position and achieve great goals. </p>
                </div>
                
                <?php
                    $select_query="select * from tbl_event WHERE event_type = 'individual'";
                    $result=mysqli_query($db,$select_query);
                    while($row=mysqli_fetch_assoc($result)){
                        ?>


                <div class="col-lg-3 ab-content">
                    <div class="ab-content-inner">
                        <img src="Admin/Uploads/<?php echo $row['event_image']; ?>" alt="news image" class="img-fluid">
                        <div class="ab-info-con">
                            <h4><?php echo $row['event_name'];?></h4>
                            <!-- <img src='../Admin/photo/$Pimg' alt='' height='150' width='150'> <a href="single.html" class="read-more two btn m-0 px-3"><span class="fa fa-long-arrow-right"> </span></a> -->
                        </div>
                    </div>
                </div>
                <?php
                        
                    }
                ?>

            </div>
        </div>
    </section>

    <section class="services py-5" id="section2">
        <div class="container py-md-5">
            <div class="row ab-info">
            <div class="col-lg-6 ab-content text-left pr-lg-5">
                    <h3 class="title-w3pvt">Our Services</h3>
                    <h5>Team Events</h5>
                    <br>
                    <p><strong class="text-capitalize"> </strong>Likewise in individual events, team events is also controlled and coordinated by sports professionals. Students learn the value of unity from these events and help them to live a better life in the society.</p>
            </div>
                
                
        
            

                <?php
                    $select_query="select * from tbl_event WHERE event_type = 'team'";
                    $result=mysqli_query($db,$select_query);
                    while($row1=mysqli_fetch_assoc($result)){
                ?>

                <div class="col-lg-3 ab-content">
                    <div class="ab-content-inner">
                        <img src="Admin/Uploads/<?php echo $row1['event_image']; ?>" alt="news image" class="img-fluid">
                        <div class="ab-info-con">
                            <h4><?php echo $row1['event_name'];?></h4>
                            <!-- <img src='../Admin/photo/$Pimg' alt='' height='150' width='150'> <a href="single.html" class="read-more two btn m-0 px-3"><span class="fa fa-long-arrow-right"> </span></a> -->
                        </div>
                    </div>
                </div>
                <?php
                        
                    }
                ?>


                
            </div>
        </div>
    </section>
    <!-- /services -->
    <!--/help-line -->
    <section class="help-line-w3layouts py-5">
        <div class="container">
            <div class="row help-line-grid">
                <div class="col-sm-6">
                    <h3>Contact Us</h3>
                    <p>Call us, we are 24/7 Helpline</p>
                </div>
                <div class="col-sm-6 text-sm-right mt-sm-0 mt-3">
                    <h3><span class="fa fa-phone" aria-hidden="true"></span> +919898989898</h3>
                </div>
            </div>
        </div>
    </section>
    <!--//help-line -->
    <!-- footer -->
    <footer class="footer-content py-5">
        <div class="container-fluid py-lg-5 inner-sec-w3ls">
            <div class="row">
                <div class="col-lg-4 footer-top mt-md-0 mt-sm-5 pr-lg-5">
                    <h2>
                        <a class="navbar-brand" href="index.html">
                            <img src="images\wiz_logo.png" style="height:50px; width:50px;" alt="logo">Wizard Sports Academy</a>
                    </h2>
                    <p class="my-3">For any admission related queries, feel free to contact.</p>

                </div>
                <div class="col-lg-3 mt-md-0 mt-5">
                    <div class="footer-w3pvt">
                        <h3 class="mb-3 w3pvt_title">Navigation</h3>
                        <hr>
                        <div class="row">
                            <ul class="col-6 list-info-w3pvt links">

                                <li>
                                    <a href="events.html">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="about.html">
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="gallery.html">
                                        Gallery
                                    </a>
                                </li>
                                <li>
                                    <a href="services.html#section1">
                                        Individual Events
                                    </a>
                                </li>
                                <li>
                                    <a href="services.html#section2">
                                        Team Events
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html">
                                        Contact Us
                                    </a>
                                </li>

                            </ul>
                            <ul class="col-6 list-info-w3pvt links">
                                <li>
                                    <a href="about.html">
                                        Our Mission
                                    </a>
                                </li>
                                <!-- <li>
                                    <a href="events.html">
                                        Latest Posts
                                    </a>
                                </li> -->
                                <li>
                                    <a href="#">
                                        Explore
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html">
                                        Find us
                                    </a>
                                </li>
                                <li>
                                    <a href="Privacy_Policy.pdf" target="_blank">
                                        Privacy Policy
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="col-lg-2 mt-lg-0 mt-5">
                    <div class="footer-w3pvt">
                        <h3 class="mb-3 w3pvt_title">Contact Us</h3>
                        <hr>
                        <div class="last-w3layouts-contact">
                            <p>
                                <a href="mailto:example@email.com">info@wizardsports.org</a>
                            </p>
                        </div>
                        <div class="last-w3layouts-contact my-2">
                            <p>+919898989898</p>
                        </div>
                        <div class="last-w3layouts-contact">
                            <p>Marmala, Cheruthuruth PO, 
                                <br>Kottayam 686001, Kerala </p>
                        </div>
                    </div>
                </div>
                 <!-- <div class="col-lg-3 mt-lg-0 mt-5">
                    <div class="footer-w3pvt">
                        <h3 class="mb-3 w3pvt_title">Stay up to date</h3>
                        <hr>
                        <div class="footer-text">
                            <p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
                            <form action="#" method="post">
                                <input type="email" name="Email" placeholder="Enter your email..." required="">
                                <button class="btn1 btn"><span class="fa fa-paper-plane-o" aria-hidden="true"></span></button>
                            </form>
                        </div>
                    </div>

                </div> -->
            </div>

        </div>
    </footer>
    <!-- //footer -->
    <div class="copy-right py-2">
        <div class="container-fluid inner-sec-w3ls">
            <div class="row">
                <div class="col-lg-6 copy-w3pvt">
                    <p class="copy-right-grids text-li text-left my-sm-4 my-4">© 2022 Wizard Sports Academy. All Rights Reserved.
                    </p>
                </div>
                <div class="col-lg-5 w3layouts-footer text-right">
                    <ul class="social_section_1info">
                        <li class="mb-2 facebook"><a href="https://www.facebook.com/officialsportsacademy"><span class="fa fa-facebook"></span> facebook</a></li>
                        <li class="mb-2 twitter"><a href="https://l.facebook.com/l.php?u=http%3A%2F%2Ftwitter.com%2FSportsXAcademy&h=AT2Af3wBXKMYDe4Tw4Z6hZfjazKqnh2pTEX5eHKI0ktJkC40OL6e4x5nHGLOdxPRtymBA1VL-NNKJDI93X9L_TSDcCsxoQKntw_J0bGPYBuu94TaGiAWi4fUVXRbQSdSCiZtp5gY062oUrdA3gUkY_1jVcYodFxSIkfVNA"><span class="fa fa-twitter"></span> twitter</a></li>
                        <li class="google"><a href="index.html"><span class="fa fa-google-plus"></span> google</a></li>
                        <!-- <li class="linkedin"><a href=""><span class="fa fa-linkedin"></span> linkedin</a></li> -->
                    </ul>
                </div>
                <div class="move-top col-1"><a href="#home" class="move-top"> <span class="fa fa-angle-up" aria-hidden="true"></span></a></div>
            </div>
            <!-- //footer bottom -->
        </div>
    </div>

</body>

</html>
