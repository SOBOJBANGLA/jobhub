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
		<?php
		require_once "includes/top_menu.php";


		?>
		<!-- Navbar Area End -->

		<!-- Page Title Start -->
		<section class="page-title title-bg23">
			<div class="d-table">
				<div class="d-table-cell">
					<h2>Contact Us</h2>
					<ul>
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>Contact Us</li>
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

		<!-- Contact Section Start -->
		<div class="contact-card-section ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<div class="row">
							<div class="col-md-4 col-sm-6">
								<div class="contact-card">
									<i class='bx bx-phone-call'></i>
									<ul>
										<li>
											<a href="tel:+145664474574">
												+1-456-644-7457
											</a>
										</li>
										<li>
											<a href="tel:17459674567">
												+1-745-967-4567
											</a>
										</li>
									</ul>
								</div>
							</div>

							<div class="col-md-4 col-sm-6">
								<div class="contact-card">
									<i class='bx bx-mail-send'></i>
									<ul>
										<li>
											<a href="mailto:info@jovie.com">
												info@jobhub.com
											</a>
										</li>
										<li>
											<a href="mailto:hello@jovie.com">
												hello@jobhub.com
											</a>
										</li>
									</ul>
								</div>
							</div>

							<div class="col-md-4 col-sm-6 offset-sm-3 offset-md-0">
								<div class="contact-card">
									<i class='bx bx-location-plus'></i>
									<ul>
										<li>
											123, Denver, USA
										</li>
										<li>
											Street view 3/B, USA
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Contact Section End -->

		<!-- Contact Form Start -->
		<section class="contact-form-section pb-100">
			<div class="container">
				<div class="contact-area">
					<h3>Lets' Talk With Us</h3>
					<?php
					require_once 'connect.php';

					if (isset($_POST['submit'])) {
						$name = $_POST['name'];
						$email = $_POST['email'];

						$phone = $_POST['number'];
						$sub = $_POST['subject'];
						$msz = $_POST['message'];

						$sql = "INSERT INTO contact(name,email,number,subject,massage)VALUES('$name','$email','$phone','$sub','$msz') ";
						$insert = mysqli_query($conn, $sql);

						if ($insert) {
							//echo "Data inserted";
							echo "<h3 style='color:red'>Thank you for contact us.</h3>";
						} else {
							echo "<h3 style='color:red'>Data not inserted</h3>";
						}
					}



					?>




					<form method="post">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">

									<input type="text" name="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
									<div class="help-block with-errors"></div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<input type="email" name="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
									<div class="help-block with-errors"></div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<input type="number" name="number" class="form-control" required data-error="Please enter your number" placeholder="Phone Number">
									<div class="help-block with-errors"></div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">
									<div class="help-block with-errors"></div>
								</div>
							</div>

							<div class="col-lg-12 col-md-12">
								<div class="form-group">
									<textarea name="message" class="form-control message-field" cols="30" rows="7" required data-error="Please type your message" placeholder="Write Message"></textarea>
									<div class="help-block with-errors"></div>
								</div>
							</div>

							<div class="col-lg-12 col-md-12 text-center">
								<button type="submit" name="submit" class="default-btn contact-btn">
									Send Message
								</button>
								<div id="msgSubmit" class="h3 alert-text text-center hidden"></div>
								<div class="clearfix"></div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
		<!-- Contact Form End -->

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

<?php
}else{
    header('location:sign_in.php');
}

?>