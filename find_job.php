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
        <section class="page-title title-bg2">

            <div class="d-table">
                <div class="d-table-cell">
                    <h2>Find a Job</h2>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Find a Job</li>
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

        <!-- Find Section Start -->
        <div class="find-section ptb-100">
            <div class="container">
                <form class="find-form mt-0">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Job Title or Keyword">
                                <i class="bx bx-search-alt"></i>
                            </div>
                        </div>
    
                        <div class="col-lg-3">
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Location">
                                <i class="bx bx-location-plus"></i>
                            </div>
                        </div>

						<?php
                        $sql = "SELECT name FROM category ORDER BY name ASC";
                        $query = $conn->query($sql);

                        ?>

                        <div class="col-lg-3">
                            <select class="category">

                                <option data-display="Category">Category</option>
                                
                                                    <?php
                                                    while ($data = mysqli_fetch_array($query)) {
                                                        $category_id = $data['id'];
                                                        $category_name = $data['name'];

                                                        echo "<option value='$category_name'>$category_name</option>";
                                                    }
                                                    ?>
                            </select>
                        </div>
   
                        <div class="col-lg-3">
                            <button type="submit" class="find-btn">
                                Find A Job
                                <i class='bx bx-search'></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Find Section End -->
    
        <!-- Job Category Section Start -->
        <div class="category-style-two pb-70"> 
            <div class="container">
                <div class="section-title">
                    <h2>Popular Jobs Category</h2>
                    <p>Our web-site aims to explore maximum benefits of the Internet. We believe our service will help the job seekers manage their career more efficiently.</p>
                </div>

				

                <div class="row">
				<?php
                $sql = $conn->query("SELECT c.name, COUNT(v.category_count) AS category_count FROM category c LEFT JOIN vacancy v ON c.id = v.catagory_id GROUP BY c.id ORDER BY name ASC");

               while($row = $sql->fetch_assoc()){
                
                ?>
                    <div class="col-lg-3 col-sm-6">
                        <a href="job-list.html">
                            <div class="category-item">
                                <i class="flaticon-wrench-and-screwdriver-in-cross"></i>
                                <h3><?php echo $row['name'] ?></h3>
                                <p><?php echo $row['category_count']." Open position"; ?></p>
                            </div>
                        </a>
                    </div>
<?php } ?>
                   
                </div>
            </div>
        </div>
        <!-- Job Category Section End -->

		<!-- Jobs Section Start -->
		<section class="job-section pb-70">
			<div class="container">
				<div class="section-title text-center">
					<h2>Jobs You May Be Interested In</h2>
					<p>Our web-site aims to explore maximum benefits of the Internet. We believe our service will help the job seekers manage their career more efficiently.  Our web-site aims to explore maximum benefits of the Internet.</p>
				</div>
				
				<div class="row">
				<?php
                $sql = $conn->query("SELECT * FROM vacancy");

               while($row = $sql->fetch_assoc()){
                
                ?>
					<div class="col-md-6">
						<div class="job-card">
							<div class="row align-items-center">
								<div class="col-lg-3">
									<div class="thumb-img">
										<a href="job-details.html">
											
										</a>
									</div>
								</div>
							

								<div class="col-lg-6">
									<div class="job-info">
										<h3>
											<a href="job_details.php"><?php echo $row['job_title'] ?></a>
										</h3>
										<ul>
											<li>Via <a href="#"><?php echo $row['company_name'] ?></a></li>
											<li>
												<i class='bx bx-location-plus'></i>
												<?php echo $row['address'] ?>
											</li>
											<li>
												<i class='bx bx-filter-alt' ></i>
												<?php echo $row['category'] ?>
											</li>
											<li>
												<i class='bx bx-briefcase' ></i>
												<?php echo $row['website'] ?>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="job-save">
										<span>Full Time</span>
										<a>
											<p>Last Date :</p>
										</a>
										<p>
										<?php echo $row['last_date'] ?>

										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
				
			</div>
			
		</section>
		
		<!-- Jobs Section End -->
    
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