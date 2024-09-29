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

         <!-- New -->
    <!-- DataTables -->
    <!-- Custom fonts for this template-->
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

<!-- Page level plugin CSS-->
<link href="admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="admin/vendor/css/sb-admin.css" rel="stylesheet">

<!-- <link href="../"> -->


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
                    <img src="assets/img/logo.png" alt="logo">
                </a>
            </div>
        
            <!-- Menu For Desktop Device -->
            <?php require_once "includes/top_menu.php" ?>
        </div>
        <!-- Navbar Area End -->

        <!-- Page Title Start -->
        <section class="page-title title-bg6">
            <div class="d-table">
                <div class="d-table-cell">
                    <h2>Applicant</h2>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Applicant</li>
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

        <!-- Applicant Section Start -->
        <section class="account-section ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="account-information">
                            <div class="profile-thumb">
                                
                                <h3><?php echo $_SESSION['name'];?></h3>
                               
                            </div>

                            <ul>
                                <li>
                                    <a href="#" class="active">
                                        <i class='bx bx-user'></i>
                                        My Information
                                    </a>
                                </li>
                               
                                <li>
                                    <a href="logout.php">
                                        <i class='bx bx-log-out'></i>
                                        Log Out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <?php 

$id = $_REQUEST['id'];
$sql = $conn->query("SELECT * FROM vacancy WHERE id='$id'");
$row = $sql->fetch_object();
    if(isset($_POST['submit'])){
        extract($_POST);
        //$image = $_FILES['image'];
        $filename1 =$_FILES['resume']['name'];
        $tmp1 = $_FILES['resume']['tmp_name'];
        $upload1= 'resume/'.$filename1;
        move_uploaded_file($tmp1,$upload1);


        $filename =$_FILES['image']['name'];
        $tmp = $_FILES['image']['tmp_name'];
        $upload= 'photo/'.$filename;
        move_uploaded_file($tmp,$upload);

     
        $sql = "INSERT INTO applicant (title,company_name,fname,lname,gender,birth,education,email,contact,experience,skill,address,about,resume,photo) VALUES('$row->job_title' ,'$row->company_name','$fname','$lname','$gender','$b_date','$education','$email','$contact','$experience','$skills','$address','$about','$upload1','$upload')";
        // $insert = mysqli_query($conn,$sql);

        if ($conn->query($sql) == TRUE) {
            $succ = "Apply submit";
          } else {
            $err = "Please Try Again Later";
          }



        // if($insert){
        //     echo "Data inserted";
        //     //header('location: read.php');
        // }else{
        //     echo "Data no inserted";
        // }   
    }


   
    
    ?>



                    <div class="col-md-8">
                    <?php if (isset($succ)) { ?>
                  <!--This code for injecting an alert-->
                  <script>
                    setTimeout(function() {
                        swal("Success!", "<?php echo $succ; ?>!", "success");
                      },
                      100);
                  </script>

                <?php } ?>
                <?php if (isset($err)) { ?>
                  <!--This code for injecting an alert-->
                  <script>
                    setTimeout(function() {
                        swal("Failed!", "<?php echo $err; ?>!", "Failed");
                      },
                      100);
                  </script>

                <?php } ?>
                        <div class="account-details">
                        <form class="job-post-from" method="post" enctype="multipart/form-data">
                    <h2>Fill Up Your information</h2>
                    <div class="row">
                    <div class="col-md-6">
                 <p name="<?php echo $row->job_title ?>">  Apply for:<?php echo $row->job_title ?></p>
                        </div>
                        
                        <div class="col-md-6">
                        <p name="<?php echo $row->company_name ?>"> Company Name: <?php echo $row->company_name ?></p>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" name="fname" id="exampleInput1" placeholder="First Name" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" name="lname" id="exampleInput1" placeholder="Last Name" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Gender</label><br>
                                <input type="radio"  name="gender" value="Male"> Male 
                                <input type="radio"  name="gender" value="Female"> Female
                            </div>
                        </div>

                        <div class="col-md-6">
                        <div class="form-group">
                    <label >Date of Birth  </label>
                    <input type="date" class="form-control" name="b_date" required>
                    </div>
                  </div>

                        <div class="col-md-">
                            <div class="form-group">
                                <label>Education</label>
                                <select class="category" name="education">
                                    <option data-display="Select one">Select one</option>
                                    <option value="S.S.C">S.S.C</option>
                                    <option value="H.S.C">H.S.C</option>
                                    <option value="Honours">Honours</option>
                                    <option value="Masters">Masters</option>
                                    
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" id="exampleInput2" name="email" placeholder="Email" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Contact Number</label>
                                <input type="text" class="form-control" id="exampleInput3" name="contact" placeholder="Contact number" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Experience</label>
                                <input type="text" class="form-control" id="exampleInput3" name="experience" placeholder="experience" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Skills</label>
                                <input type="text" class="form-control" id="exampleInput3" name="skills" placeholder="skill" required>
                            </div>
                        </div>

                        

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Address</label>
                                <textarea class="form-control description-area" name="address" id="exampleFormControlTextarea1" rows="10" placeholder="Address" required></textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">About you</label>
                                <textarea class="form-control description-area" name="about" id="exampleFormControlTextarea1" rows="10" placeholder="About" required></textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Attach your Resume here</label>
                                <input type="file" class="form-control" id="exampleInput3" name="resume" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Attach your Photo here</label>
                                <input type="file" class="form-control" id="exampleInput3" name="image" required>
                            </div>
                        </div>

                        <div class="col-md-12 text-center">
                            <button type="submit" name="submit" class="post-btn">
                                Submit Application
                            </button>
                        </div>
                    </div>
                </form>


                            
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Applicant Section End -->

        <!-- Job Section End -->   
       
        <!-- Job Section End -->
    
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


        <!-- new -->

    <script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="admin/vendor/chart.js/Chart.min.js"></script>
    <script src="admin/vendor/datatables/jquery.dataTables.js"></script>
    <script src="admin/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="admin/vendor/js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src=admin/vendor/js/demo/datatables-demo.js"></script>
    <script src="admin/vendor/js/demo/chart-area-demo.js"></script>
    <!--INject Sweet alert js-->
    <script src="admin/vendor/js/swal.js"></script>
  	</body>
</html>

<?php
}else{
    header('location:sign_in.php');
}

?>