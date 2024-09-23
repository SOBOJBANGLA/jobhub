<?php
require_once 'connect.php';
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
			<?php require_once "includes/top_menu.php" ?>
        <!-- Navbar Area End -->

        <!-- Page Title Start -->
        <section class="page-title title-bg9">
            <div class="d-table">
                <div class="d-table-cell">
                    <h2>Company</h2>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Company</li>
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

		<!-- Companies Section Start -->
		<section class="company-section company-style-two pt-100 pb-70">
			<div class="container">
				<div class="section-title text-center">
					<h2>Top Companies</h2>
					<p>Follow your favorite international organizations. Learn about them. Join their mission and make a difference. Share your reviews to help others</p>
				</div>
                

				<div class="row">
                <?php
                //$sql = $conn->query("SELECT * FROM company");

                $sql = $conn->query("SELECT c.name,c.address, COUNT(v.vacancy_count) AS vacancy_count
        FROM company c LEFT JOIN vacancy v ON c.id = v.company_id
        GROUP BY c.id");

               while($row = $sql->fetch_assoc()){
                
                ?>
					<div class="col-lg-3 col-sm-6">
						<div class="company-card">
							<div class="company-logo">
                                <a href="job-list.html">
                                   
                                </a>
							</div>
                           
							<div class="company-text">
								<h3><?php echo $row['name'] ?></h3>
								<p>
									<i class='bx bx-location-plus'></i>
									<?php echo $row['address'] ?>
								</p>
                                
								<a href="job-list.html" class="company-btn">
                                <?php echo $row['vacancy_count']." Open position"; ?>
								</a>
							</div>
						</div>
					</div>
<? } ?> 
                   
                </div>
                
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                <i class='bx bx-chevrons-left bx-fade-left'></i>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link active" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <i class='bx bx-chevrons-right bx-fade-right'></i>
                            </a>
                        </li>
                    </ul>
                </nav>
			</div>
		</section>
		<!-- Companies Section End -->

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