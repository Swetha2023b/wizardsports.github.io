<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

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
    <script src='https://www.google.com/recaptcha/api.js'></script>
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
                    <li>
                        <!-- First Tier Drop Down -->
                        <label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span>
                        </label>
                        <a href="services.php">Services <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                        <input type="checkbox" id="drop-2" />
                        <ul style="margin-left : -200px ;">
                            <li><a href="services.php#section1" class="drop-text">Individual Events</a></li>
                            <li><a href="services.php#section2" class="drop-text">Team Events</a></li>
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
    <section class="contact-main py-5">
        <div class="container py-md-5">
            <h3 class="title-w3pvt text-center">Signin Now</h3>

            <div class="login px-sm-4 mx-auto mw-100 login-wrapper">
                <form class="login-wrapper w3pvt_mail_grid_right" action="login.php" method="POST" onsubmit="return submitUserForm();">
                    <div class="form-group">
                        <label class="mb-2">Email Address</label>
                        <input type="email" class="form-control" name="email" id="email1" aria-describedby="emailHelp" placeholder="" required="">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label class="mb-2">Password</label>
                        <input type="password" class="form-control" name="password" id="password1" placeholder="" required="">
                    </div>
                    <div class="g-recaptcha" data-sitekey="6LfT_7QkAAAAAKakUfzl5zZUxZCM58E-eqgt9vNc" data-callback="verifyCaptcha"></div>
                    <div id="g-recaptcha-error"></div>
                    <button name="submit" id="login1" class="btn btn-primary submit mt-2 read-more">Sign In</button>
                    <p class="text-center mt-4">
                        <a href="registerdes.php"> Don't have an Account?</a>
                    </p>
                    <p class="text-center mt-4"><a href="forgot.php"> Forgot Password</a></p>
                </form>
            </div>



        </div>
    </section>
    <!-- //banner-bottom -->
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
                                    <a href="services.php#section1">
                                        Individual Events
                                    </a>
                                </li>
                                <li>
                                    <a href="services.php#section2">
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
    <?php

if(isset($_POST['submit']))
{

function CheckCaptcha($userResponse) {
        $fields_string = '';
        $fields = array(
            'secret' => '6LfT_7QkAAAAADJwCzxOJS94EFjIajkru6WHUeXu',
            'response' => $userResponse
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $res = curl_exec($ch);
        curl_close($ch);

        return json_decode($res, true);
    }


    // Call the function CheckCaptcha
    $result = CheckCaptcha($_POST['g-recaptcha-response']);

    if ($result['success']) {
        //If the user has checked the Captcha box
        echo "Captcha verified Successfully";
	
    } else {
        // If the CAPTCHA box wasn't checked
       echo '<script>alert("Error Message");</script>';
    }
}
    ?>
<script>
var recaptcha_response = '';
function submitUserForm() {
    if(recaptcha_response.length == 0) {
        document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">This field is required.</span>';
        return false;
    }
    return true;
}
 
function verifyCaptcha(token) {
    recaptcha_response = token;
    document.getElementById('g-recaptcha-error').innerHTML = '';
}
</script>
<script type="text/javascript"> (function(d, src, c) { var t=d.scripts[d.scripts.length - 1],s=d.createElement('script');s.id='la_x2s6df8d';s.defer=true;s.src=src;s.onload=s.onreadystatechange=function(){var rs=this.readyState;if(rs&&(rs!='complete')&&(rs!='loaded')){return;}c(this);};t.parentElement.insertBefore(s,t.nextSibling);})(document, 'https://wizardsportsacademy.ladesk.com/scripts/track.js', function(e){ LiveAgent.createButton('pfpn6r9w', e); }); </script>
</html>
