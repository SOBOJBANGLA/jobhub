<?php

session_start();



/*if(!isset($_SESSION['email'])){
header("Location: sign_in.php");
//header("Location: index.php");
}*/

$user_first_name = $_SESSION['name'];
if(!empty($user_first_name)){

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
			<?php  require_once "includes/top_menu.php" ?>
        <!-- Navbar Area End -->

        <!-- Page Title Start -->
        <section class="page-title title-bg1">
            <div class="title-bg1"></div>
           
            <div class="d-table">
               
                
                <div class="d-table-cell">
                    
                    <h2>About Us</h2>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>About Us</li>
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

        <!-- About Section Start -->
        <section class="about-section ptb-100">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-text">
                            <div class="section-title">
                                <h2>How We Started</h2>
                            </div>

                            <p>Right after its launching, the site has been able to attract the Internet users in the country. The site regularly updates Job Information (on average more than 4500 valid job news are placed at any point of time at the site), provides facility to the job seekers for posting resume and online application. The site has also been able to get good response from a large number of organizations in the country who use online job advertisement facility, online CV bank access and online application receiving and processing facility of www.jobhub.com. Till now, more than 45,000 employers in the country have recruited more than 1 million professionals at different levels for their organizations through Jobshub.com service.</p>

                            <p>Follow your favorite international organizations. Learn about them. Join their mission and make a difference. Share your reviews to help others</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="assets/img/profile.png" alt="about image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section End -->

		<!-- Way To Use Section Start -->
		<section class="use-section pt-100 pb-70">
			<div class="container">
				<div class="section-title text-center">
					<h2>Easiest Way To Use</h2>
				</div>

				<div class="row">
					<div class="col-lg-4 col-sm-6">
						<div class="use-text">
							<span>1</span>
							<i class='flaticon-website'></i>
							<h3>Browse Job</h3>
							<p>Jobs Hub is currently a Largest job site in World, here you will find jobs according to your skills.</p>
						</div>
					</div>

					<div class="col-lg-4 col-sm-6">
						<div class="use-text">
							<span>2</span>
							<i class='flaticon-recruitment'></i>
							<h3>Find Your Vaccancy</h3>
							<p>Jobs Hub is currently a Largest job site in World, here you will find jobs according to your skills.</p>
						</div>
					</div>

					<div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
						<div class="use-text">
							<span>3</span>
							<i class='flaticon-login'></i>
							<h3>Submit Resume</h3>
							<p>Jobs Hub is currently a Largest job site in World, here you will find jobs according to your skills.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
        <!-- Way To Use Section End -->
        
        <!-- Why Choose Section Start -->
        <section class="why-choose-two pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Why You Choose Us Among Other Job Site?</h2>
                    <p>Jobs Hub is currently a Largest job site in World, here you will find jobs according to your skills.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="choose-card">
                            <i class="flaticon-resume"></i>
                            <h3>Advertise Job</h3>
                            <p>Jobs Hub is currently a Largest job site in World, here you will find jobs according to your skills.  </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="choose-card">
                            <i class="flaticon-recruitment"></i>
                            <h3>Recruiter Profiles</h3>
                            <p>Jobs Hub is currently a Largest job site in World, here you will find jobs according to your skills. </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                        <div class="choose-card">
                            <i class="flaticon-employee"></i>
                            <h3>Find Your Dream Job</h3>
                            <p>Jobs Hub is currently a Largest job site in World, here you will find jobs according to your skills.  </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why Choose Section End -->

        <!-- Grow Business Section Start -->
        <div class="grow-business pb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="grow-text">
                            <div class="section-title">
                                <h2>Grow Your Business Faster With Premium Advertising</h2>
                            </div>

                            <p> Our web-site aims to explore maximum benefits of the Internet. We believe our service will help the job seekers manage their career more efficiently.
                            </p>

                            <p> Follow your favorite international organizations. Learn about them. Join their mission and make a difference. Share your reviews to help others
                                
                            </p>

                            <div class="theme-btn">
                                <a href="#" class="default-btn">Checkout More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="grow-img">
                            <img src="assets/img/banner/bg7 (1).jpg" alt="grow image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Grow Business Section End -->

        <!-- Counter Section Start -->
        <div class="counter-section pt-100 pb-70">
            <div class="container">
                <div class="row counter-area">
                    <div class="col-lg-3 col-6">
                        <div class="counter-text">
                            <i class="flaticon-resume"></i>
                            <h2><span>1225</span></h2>
                            <p>Job Posted</p>
                        </div>
                    </div>
        
                    <div class="col-lg-3 col-6">
                        <div class="counter-text">
                            <i class="flaticon-recruitment"></i>
                            <h2><span>145</span></h2>
                            <p>Job Filed</p>
                        </div>
                    </div>
        
                    <div class="col-lg-3 col-6">
                        <div class="counter-text">
                            <i class="flaticon-portfolio"></i>
                            <h2><span>170</span></h2>
                            <p>Company</p>
                        </div>
                    </div>
        
                    <div class="col-lg-3 col-6">
                        <div class="counter-text">
                            <i class="flaticon-employee"></i>
                            <h2><span>125</span></h2>
                            <p>Members</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Section End --> 

        <!-- Testimonial Section Start -->
        <div class="testimonial-style-two ptb-100">
            <div class="container">
                <div class="section-title text-center">
                    <h2>What Client’s Say About Us</h2>
                    <p>Jobs Hub features overseas jobs and international employment opportunities for professionals, expatriates and adventure seekers.</p>
                </div>

                <div class="row">
                    <div class="testimonial-slider-two owl-carousel owl-theme">
                        <div class="testimonial-items">
                            <div class="testimonial-text">
                                <i class='flaticon-left-quotes-sign'></i>
                                <p>This is a public site with free access and Jobshub assumes no liability for the quality and genuineness of responses. Jobshub.Com Limited is not liable for any information provided by any individual. The individual/company would have to conduct its own background checks on the bonafide nature of all responses.</p>
                            </div>

                            <div class="testimonial-info-text">
                                <h3>Alisa Meair</h3>
                                <p>CEO of  Company</p>
                            </div>
                        </div>

                        <div class="testimonial-items">
                            <div class="testimonial-text">
                                <i class='flaticon-left-quotes-sign'></i>
                                <p>This is a public site with free access and Jobshub assumes no liability for the quality and genuineness of responses. Jobshub.Com Limited is not liable for any information provided by any individual. The individual/company would have to conduct its own background checks on the bonafide nature of all responses.</p>
                            </div>

                            <div class="testimonial-info-text">
                                <h3>Adam Smith</h3>
                                <p>Web Developer</p>
                            </div>
                        </div>

                        <div class="testimonial-items">
                            <div class="testimonial-text">
                                <i class='flaticon-left-quotes-sign'></i>
                                <p>This is a public site with free access and Jobshub assumes no liability for the quality and genuineness of responses. Jobshub.Com Limited is not liable for any information provided by any individual. The individual/company would have to conduct its own background checks on the bonafide nature of all responses.</p>
                            </div>

                            <div class="testimonial-info-text">
                                <h3>John Doe</h3>
                                <p>Graphics Designer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial Section End --> 
    
        <!-- Blog Section Start -->
       
        <!-- Blog Section End -->

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
<?php
}else{
    header('location:sign_in.php');
}

?>