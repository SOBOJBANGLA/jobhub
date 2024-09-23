<?php
require "connect.php";

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
        < class="navbar-area">
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
        <section class="page-title title-bg3">
            <div class="d-table">
                <div class="d-table-cell">
                    <h2>Post a Job</h2>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Post a Job</li>
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


       





        <!-- Post Job Section Start -->
        <div class="job-post ptb-100">
            <div class="container">
            <div class="contact-area">

            <?php
          if (isset($_POST['submit'])) {
            extract($_POST);

            $sql =  "INSERT INTO vacancy (job_title, company_name, address, category,job_type,website) 
						   VALUES ('$title','$company_name','$address','$category','$job_type','$website')";

            /*if ($conn->query($sql) == TRUE) {
              $succ = "Company Added";
            } else {
              $err = "Please Try Again Later";
            }*/
            $insert = mysqli_query($conn,$sql);
            if ($insert) {
                //echo "Data inserted";
                echo "<h3 style='color:green'>Thank you for Post a job.</h3>";
            } else {
                echo "<h3 style='color:red'>Data not inserted</h3>";
            }
           

             
          }

          ?>

          <?php
          $sql = "SELECT name FROM company ORDER BY name ASC";
          $query = $conn->query($sql);

          ?>

          <?php
          $sql1 = "SELECT name FROM category ORDER BY name ASC";
          $query1 = $conn->query($sql1);

          ?>

          <?php
          $sql2 = "SELECT name FROM title ORDER BY name ASC";
          $query2 = $conn->query($sql2);

          ?>



                <form class="job-post-from" method="post">
              
                    <h2>Fill Up Your Job information</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Job Title</label>
                                <select  name="title" required>
                      <option value="">Select Your Title</option>
                      <?php
                      while ($data1 = mysqli_fetch_array($query2)) {
                        $title_id = $data1['id'];
                        $title_name = $data1['name'];

                        echo "<option value='$title_name'>$title_name</option>";
                      }
                      ?>
                    </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Job Category</label>
                                <select  name="category" required>
                      <option value="">Select Your Category</option>
                      <?php
                      while ($data2 = mysqli_fetch_array($query1)) {
                        $category_id = $data2['id'];
                        $category_name = $data2['name'];

                        echo "<option value='$category_name'>$category_name</option>";
                      }
                      ?>
                    </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Company Name</label>
                                <select  name="company_name" required>
                      <option value="" data-display="Company">Select Your Company</option>
                      <?php
                      while ($data = mysqli_fetch_array($query)) {
                        $company_id = $data['id'];
                        $company_name = $data['name'];

                        echo "<option value='$company_name'>$company_name</option>";
                      }
                      ?>
                    </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Company Email</label>
                                <input type="email" class="form-control" id="exampleInput3" placeholder="e.g. hello@company.com" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Company Website (Optional)</label>
                                <input type="text" name="website" class="form-control" id="exampleInput4" placeholder="e.g www.companyname.com">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Location</label>
                                <input type="text" name="address" class="form-control" id="exampleInput5" placeholder="e.g. London" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Job Type</label>
                                <select class="category" name="job_type">
                                    <option data-display="Job Type">Job Type</option>
                                    <option value="1">Full Time</option>
                                    <option value="2">Part Time</option>
                                    <option value="4">Freelancer</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Job Tags</label>
                                <input type="text" class="form-control" id="exampleInput6" placeholder="e.g. web design, graphics design, video editing" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Salary (Optional)</label>
                                <input type="number" class="form-control" id="exampleInput7" placeholder="e.g. $20,000">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Experience</label>
                                <input type="text" class="form-control" id="exampleInput8" placeholder="e.g. 1 year" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Job Description</label>
                                <textarea class="form-control description-area" id="exampleFormControlTextarea1" rows="10" placeholder="Job Description" required></textarea>
                            </div>
                        </div>

                        <div class="col-md-12 text-center">
                            <button type="submit" name="submit" class="post-btn">
                                Post A Job
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
        
        <!-- Post Job Section End -->
    
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