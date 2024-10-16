<?php
require_once("connect.php");
session_start();

/*if(!isset($_SESSION['email'])){
//header("Location: sign_in.php");
header("Location: .php");
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

		<!-- Banner Section Start -->
		<div class="banner-section banner-style-five">
			<div class="d-table">

				<div class="d-table-cell">
                    <div class="banner-section">
                       
                   

					<div class="container"> 
						<div class="banner-content text-center" >
                            <h1>Find The Best Job For Future</h1>
                            <p>Jobs Hub features overseas jobs and international employment opportunities for professionals, expatriates and adventure seekers. </p>
                        </div>
                        
                        <form class="find-form">
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
			</div>
		</div>
        <!-- Banner Section End -->

        <!-- Category Section Start -->
        <section class="categories-section category-style-three pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Choose Your Category</h2>
                    <p>To find the job of your choice from Jobs hub, create a account and add Resume.</p>
                </div>
                
                <div class="row">
                <?php
                //$sql = $conn->query("SELECT name,psition FROM category ORDER BY name ASC");

                $sql = $conn->query("SELECT c.name, COUNT(v.category_count) AS category_count FROM category c LEFT JOIN vacancy v ON c.id = v.catagory_id GROUP BY c.id ORDER BY name ASC");

               while($row = $sql->fetch_assoc()){
                
                ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <a href="job-list_category.php?category_id=<?php echo $row ['name'] ?>">
                            <div class="category-card">
                                <i class='flaticon-accounting'></i>
                                <h3><?php echo $row['name'] ?></h3>
                                <p><?php echo $row['category_count']." Open position"; ?></p>
                            </div>
                        </a>
                    </div>
<?php } ?>
                    
                </div>
            </div>
        </section>
        <!-- Category Section End --> 

        <!-- Why Choose Section Start -->   
        <section class="choose-style-two why-choose">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="why-choose-text pt-100 pb-70">
                            <div class="section-title">
                                <h2>Why You Choose Job hub?</h2>
                                <p>Jobs Hub is currently a Largest job site in Bangladesh, here you will find jobs according to your skills.</p>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="media">
                                        <i class="flaticon-group align-self-top mr-3"></i>
                                        <div class="media-body">
                                            <h5 class="mt-0">Best Talented People</h5>
                                            <p>To find the job of your choice from Jobs hub, create a account and add Resume.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="media">
                                        <i class="flaticon-research align-self-top mr-3"></i>
                                        <div class="media-body">
                                            <h5 class="mt-0">Easy To Find Canditate</h5>
                                            <p>To find the job of your choice from Jobs hub, create a account and add Resume.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="media">
                                        <i class="flaticon-discussion align-self-top mr-3"></i>
                                        <div class="media-body">
                                            <h5 class="mt-0">Easy To Communicate</h5>
                                            <p>To find the job of your choice from Jobs hub, create a account and add Resume.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="media">
                                        <i class="flaticon-recruitment align-self-top mr-3"></i>
                                        <div class="media-body">
                                            <h5 class="mt-0">Global Recruitment Option</h5>
                                            <p>To find the job of your choice from Jobs hub, create a account and add Resume.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-8 offset-sm-2 offset-lg-0">
                        <img src="assets/img/blog/default.png" alt="why choose image">
                    </div>
                </div>
            </div>
        </section>       
        <!-- Why Choose Section End --> 
        
        <!-- Compnay Location Section Start -->
        <section class="company-location pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Companies By Location</h2>
                    <p>Jobs Hub is currently a Largest job site in World, here you will find jobs according to your skills.</p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <a href="job-list.html">
                            <div class="location-img">
                                <img src="assets/img/blog/aus.png" alt="location image">

                                <div class="location-text">
                                    <div class="d-table">
                                        <div class="d-table-cell">
                                            <h3>Australia</h3>
                                            <span>376 Jobs</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <a href="job-list.html">
                            <div class="location-img">
                                <img src="assets/img/location/cana.png" alt="location image">
                                
                                <div class="location-text">
                                    <div class="d-table">
                                        <div class="d-table-cell">
                                            <h3>Canada</h3>
                                            <span>106 Jobs</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <a href="job-list.html">
                            <div class="location-img">
                                <img src="assets/img/location/chin.png" alt="location image">
                                
                                <div class="location-text">
                                    <div class="d-table">
                                        <div class="d-table-cell">
                                            <h3>Beizing</h3>
                                            <span>476 Jobs</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <a href="job-list.html">
                            <div class="location-img">
                                <img src="assets/img/location/indon.jpg" alt="location image">
                                
                                <div class="location-text">
                                    <div class="d-table">
                                        <div class="d-table-cell">
                                            <h3>Indonesia</h3>
                                            <span>206 Jobs</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <a href="job-list.html">
                            <div class="location-img">
                                <img src="assets/img/location/male (1).jpg" alt="location image">
                                
                                <div class="location-text">
                                    <div class="d-table">
                                        <div class="d-table-cell">
                                            <h3>Malaysia</h3>
                                            <span>120 Jobs</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <a href="job-list.html">
                            <div class="location-img">
                                <img src="assets/img/location/ger.png" alt="location image">
                                
                                <div class="location-text">
                                    <div class="d-table">
                                        <div class="d-table-cell">
                                            <h3>German</h3>
                                            <span>76 Jobs</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Compnay Location Section End -->

        <!-- Job Section End -->   
        <section class="job-style-two pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Jobs You May Be Interested In</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida</p>
                </div>

                <div class="row">
                <?php
                $sql = $conn->query("SELECT * FROM vacancy");

               while($row = $sql->fetch_assoc()){
                
                ?>
                    <div class="col-lg-12">
                        <div class="job-card-two">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    
                                </div>

                               


                                <div class="col-md-8">
                                    <div class="job-info">
                                        <h3>
                                            <a href="job_details.php?id=<?php echo $row['id']  ?>"><?php echo $row['job_title'] ?></a>
                                        </h3>
                                        <ul>                                          
                                            <li>
                                                <i class='bx bx-briefcase' ></i>
                                                <?php echo $row['category'] ?>
                                            </li>
                                            <li>
                                                <i class='bx bx-briefcase' ></i>
                                                <?php echo $row['salary'] ?>
                                            </li>
                                            <li>
                                                <i class='bx bx-location-plus'></i>
                                                <?php echo $row['address'] ?>
                                            </li>
                                           
                                        </ul>

                                        <span>Full Time</span>
                                    </div>
                                </div>

                               
                                <div class="col-md-3">
                                    <div class="theme-btn text-end">
                                        <a href="job_details.php?id=<?php echo $row['id']?>" class="default-btn">
                                            Browse Job
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php } ?>
                    

                    
                   
                </div>
            </div>
        </section>
        <!-- Job Section End -->        
        
        <!-- Job Info Section Start -->
        <div class="job-info-two pt-100 pb-70">

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="looking-job">
                            <div class="media">
                                <i class='flaticon-group align-self-start mr-3'></i>
                                <div class="media-body">
                                    <h5 class="mt-0">Looking For a Job</h5>
                                    <p>Your next role could be with one of these top leading organizations</p>

                                    <a href="job-list.html">
                                        Apply Now
                                        <i class='bx bx-chevrons-right'></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="recruiting-card">
                            <div class="media">
                                <i class='flaticon-resume align-self-start mr-3'></i>
                                <div class="media-body">
                                    <h5 class="mt-0">Are You Recruiting?</h5>
                                    <p>Your next role could be with one of these top leading organizations</p>

                                    <a href="post_job.html">
                                        Apply Now
                                        <i class='bx bx-chevrons-right'></i>
                                    </a>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
        <!-- Job Info Section End -->

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

		<!-- Candidate Section Start -->
		<section class="candidate-section ptb-100">
			<div class="container">
				<div class="section-title text-center">
					<h2>Featured Candidates</h2>
					<p>Follow your favorite international organizations. Learn about them. Join their mission and make a difference. Share your reviews to help others</p>
				</div>

				<div class="condidate-slider owl-carousel owl-theme">
					<div class="condidate-item">
						<div class="candidate-img">
							<img src="assets/img/candidate/man5 (1).jpg" alt="candidate image">
						</div>
						<div class="candidate-social">
							<a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
							<a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
							<a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
						</div>
						<div class="candidate-text">
							<h3><a href="candidate-details.html">Mibraj Alex</a></h3>
							<ul>
								<li>
									<i class='bx bx-filter-alt'></i>
									Construction & Property
								</li>
								<li>
									<i class='bx bx-location-plus'></i>
									Botchergate, Carlisle               
								</li>
							</ul>

							<div class="bottom-text">
								<p>
									<i class='bx bx-stopwatch'></i>
									9D ago
								</p>
								<a href="#">
									<i class='bx bx-heart'></i>
								</a>
							</div>
						</div>
					</div>

					<div class="condidate-item">
						<div class="candidate-img">
							<img src="assets/img/candidate/man13.jpg" alt="candidate image">
						</div>
						<div class="candidate-social">
							<a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
							<a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
							<a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
						</div>
						<div class="candidate-text">
							<h3><a href="candidate-details.html">Abdus Salam</a></h3>
							<ul>
								<li>
									<i class='bx bx-filter-alt'></i>
									SEO Expart
								</li>
								<li>
									<i class='bx bx-location-plus'></i>
									Georgetown, USA               
								</li>
							</ul>

							<div class="bottom-text">
								<p>
									<i class='bx bx-stopwatch'></i>
									8D ago
								</p>
								<a href="#">
									<i class='bx bx-heart' ></i>
								</a>
							</div>
						</div>
					</div>

					<div class="condidate-item">
						<div class="candidate-img">
							<img src="assets/img/candidate/man3 (1).webp" alt="candidate image">
						</div>
						<div class="candidate-social">
							<a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
							<a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
							<a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
						</div>
						<div class="candidate-text">
							<h3><a href="candidate-details.html">Maichel Patel</a></h3>
							<ul>
								<li>
									<i class='bx bx-filter-alt'></i>
									Project Management
								</li>
								<li>
									<i class='bx bx-location-plus'></i>
									Madison, USA               
								</li>
							</ul>

							<div class="bottom-text">
								<p>
									<i class='bx bx-stopwatch'></i>
									1D ago
								</p>
								<a href="#">
									<i class='bx bx-heart'></i>
								</a>
							</div>
						</div>
					</div>

					<div class="condidate-item">
						<div class="candidate-img">
							<img src="assets/img/candidate/man4 (1).jpg" alt="candidate image">
						</div>
						<div class="candidate-social">
							<a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
							<a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
							<a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
						</div>
						<div class="candidate-text">
							<h3><a href="candidate-details.html">Mibraj Alex</a></h3>
							<ul>
								<li>
									<i class='bx bx-filter-alt'></i>
									Construction & Property
								</li>
								<li>
									<i class='bx bx-location-plus'></i>
									Botchergate, Carlisle               
								</li>
							</ul>

							<div class="bottom-text">
								<p>
									<i class='bx bx-stopwatch'></i>
									9D ago
								</p>
								<a href="#">
									<i class='bx bx-heart'></i>
								</a>
							</div>
						</div>
					</div>

					<div class="condidate-item">
						<div class="candidate-img">
							<img src="assets/img/candidate/man1.jpg" alt="candidate image">
						</div>
						<div class="candidate-social">
							<a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
							<a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
							<a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
						</div>
						<div class="candidate-text">
							<h3><a href="candidate-details.html">Quence Joes</a></h3>
							<ul>
								<li>
									<i class='bx bx-filter-alt'></i>
									Web Developer
								</li>
								<li>
									<i class='bx bx-location-plus'></i>
									Augusta, Maine             
								</li>
							</ul>

							<div class="bottom-text">
								<p>
									<i class='bx bx-stopwatch'></i>
									8D ago
								</p>
								<a href="#">
									<i class='bx bx-heart'></i>
								</a>
							</div>
						</div>
					</div>

					<div class="condidate-item">
						<div class="candidate-img">
							<img src="assets/img/candidate/man2.jpg" alt="candidate image">
						</div>
						<div class="candidate-social">
							<a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
							<a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
							<a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
						</div>
						<div class="candidate-text">
							<h3><a href="candidate-details.html">Felica Kareon</a></h3>
							<ul>
								<li>
									<i class='bx bx-filter-alt'></i>
									SEO Expart
								</li>
								<li>
									<i class='bx bx-location-plus'></i>
									Georgetown, USA               
								</li>
							</ul>

							<div class="bottom-text">
								<p>
									<i class='bx bx-stopwatch'></i>
									8D ago
								</p>
								<a href="#">
									<i class='bx bx-heart'></i>
								</a>
							</div>
						</div>
					</div>

					<div class="condidate-item">
						<div class="candidate-img">
							<img src="assets/img/candidate/man3 (1).webp" alt="candidate image">
						</div>
						<div class="candidate-social">
							<a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
							<a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
							<a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
						</div>
						<div class="candidate-text">
							<h3><a href="candidate-details.html">Malisa Petel</a></h3>
							<ul>
								<li>
									<i class='bx bx-filter-alt'></i>
									Project Management
								</li>
								<li>
									<i class='bx bx-location-plus'></i>
									Madison, USA               
								</li>
							</ul>

							<div class="bottom-text">
								<p>
									<i class='bx bx-stopwatch'></i>
									1D ago
								</p>
								<a href="#">
									<i class='bx bx-heart'></i>
								</a>
							</div>
						</div>
					</div>

					<div class="condidate-item">
						<div class="candidate-img">
							<img src="assets/img/candidate/man4 (1).jpg" alt="candidate image">
						</div>
						<div class="candidate-social">
							<a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
							<a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
							<a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
						</div>
						<div class="candidate-text">
							<h3><a href="candidate-details.html">Quence Joes</a></h3>
							<ul>
								<li>
								<i class='bx bx-filter-alt'></i>
								Web Developer
								</li>
								<li>
								<i class='bx bx-location-plus'></i>
								Augusta, Maine             
								</li>
							</ul>

							<div class="bottom-text">
								<p>
									<i class='bx bx-stopwatch'></i>
									8D ago
								</p>
								<a href="#">
									<i class='bx bx-heart'></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Candidate Section End -->

        <!-- Testimonial Section Start -->
        
        <!-- Blog Section End -->
        
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