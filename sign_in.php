<?php
require_once 'connect.php';

session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];


    $md5 = md5($pass);


    $result = $conn->query("SELECT * FROM user1 WHERE email='$email' AND password='$md5'");
    $row = $result->fetch_assoc();

    if ($result->num_rows==0){
        $_SESSION['login_err']="Email or password may wrong.Please try again.";
        //header('location:index.php');
        
    } else {
        $_SESSION['email']=$email;
        $_SESSION['name']=$row['fname'];
        header('location:index.php');
    }
}


?>


<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- Owl Carousel Theme Default CSS -->
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- Box Icon CSS-->
    <link rel="stylesheet" href="assets/css/boxicon.min.css">
    <!-- Flaticon CSS-->
    <link rel="stylesheet" href="assets/fonts/flaticon/flaticon.css">
    <!-- Magnific CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Dark CSS -->
    <link rel="stylesheet" href="assets/css/dark.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Title CSS -->
    <title>Jobhub - Job Board & Portal HTML Template</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>

<body>

    <!-- Pre-loader Start -->
    <div class="loader-content">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="sk-circle">
                    <div class="sk-circle1 sk-child"></div>
                    <div class="sk-circle2 sk-child"></div>
                    <div class="sk-circle3 sk-child"></div>
                    <div class="sk-circle4 sk-child"></div>
                    <div class="sk-circle5 sk-child"></div>
                    <div class="sk-circle6 sk-child"></div>
                    <div class="sk-circle7 sk-child"></div>
                    <div class="sk-circle8 sk-child"></div>
                    <div class="sk-circle9 sk-child"></div>
                    <div class="sk-circle10 sk-child"></div>
                    <div class="sk-circle11 sk-child"></div>
                    <div class="sk-circle12 sk-child"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader End -->

    <!-- Navbar Area Start -->
    <div class="navbar-area">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
            <a href="index.php" class="logo">
                <img src="assets/img/cover-removebg-preview.png" alt="logo">
            </a>
        </div>

        <!-- Menu For Desktop Device -->
        <?php require_once "includes/top_menu1.php" ?>
        <!-- Navbar Area End -->

        <!-- Page Title Start -->
        <section class="page-title title-bg12">
            <div class="d-table">
                <div class="d-table-cell">
                    <h2>Sign In</h2>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Sign In</li>
                    </ul>
                </div>
            </div>
            <div class="lines">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </section>
        <!-- Page Title End -->

        <!-- Sign In Section Start -->
        <div class="signin-section ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-3">
                    <?php
          if(isset($_SESSION['login_err'])){
            echo '<div class="alert alert-danger">';
            echo $_SESSION['login_err'];
            echo "</div>";
          }

          //session_destroy();
          ?>


                        <form class="signin-form"  method="post">
                            <div class="form-group">
                                <label>Enter Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required>
                            </div>

                            <div class="form-group">
                                <label>Enter Password</label>
                                <input type="password" name="pass" class="form-control" placeholder="Enter Your Password" required>
                            </div>

                            <div class="signin-btn text-center">
                                <button type="submit" name="submit">Sign In</button>
                            </div>

                            <div class="other-signin text-center">
                                <span>Or sign in with</span>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class='bx bxl-google'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class='bx bxl-linkedin'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="create-btn text-center">
                                <p>Not have an account?
                                    <a href="sign_up.php">
                                        Create an account
                                        <i class='bx bx-chevrons-right bx-fade-right'></i>
                                    </a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In Section End -->

        <!-- Subscribe Section Start -->
        <section class="subscribe-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="section-title">
                            <h2>Get New Job Notifications</h2>
                            <p>Subscribe & get all related jobs notification</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <form class="newsletter-form" data-toggle="validator">
                            <input type="email" class="form-control" placeholder="Enter your email" name="EMAIL" required autocomplete="off">

                            <button class="default-btn sub-btn" type="submit">
                                Subscribe
                            </button>

                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Subscribe Section End -->

        <!-- Footer Section Start -->
        <?php require_once "assets/php/includes/bottom.php" ?>
        <!-- Footer Section End -->

        <!-- Back To Top Start -->
        <div class="top-btn">
            <i class='bx bx-chevrons-up bx-fade-up'></i>
        </div>
        <!-- Back To Top End -->

        <!-- jQuery first, then Bootstrap JS -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!-- Owl Carousel JS -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Nice Select JS -->
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <!-- Magnific Popup JS -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Subscriber Form JS -->
        <script src="assets/js/jquery.ajaxchimp.min.js"></script>
        <!-- Form Velidation JS -->
        <script src="assets/js/form-validator.min.js"></script>
        <!-- Contact Form -->
        <script src="assets/js/contact-form-script.js"></script>
        <!-- Meanmenu JS -->
        <script src="assets/js/meanmenu.js"></script>
        <!-- Custom JS -->
        <script src="assets/js/custom.js"></script>
</body>

</html>



