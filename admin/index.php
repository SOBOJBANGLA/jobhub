<?php
	session_start();
	
	$user_first_name = $_SESSION['user_first_name'];
	$user_last_name = $_SESSION['user_last_name'];
	
	if(!empty($user_first_name) && !empty($user_last_name) ){
		
		
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet" />
  <script src="assets/js/pace.min.js"></script>

  <!--plugins-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
  <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />

  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

  <!--Theme Styles-->
  <link href="assets/css/dark-theme.css" rel="stylesheet" />
  <link href="assets/css/semi-dark.css" rel="stylesheet" />
  <link href="assets/css/header-colors.css" rel="stylesheet" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <title>Jobhub - Job Board & Portal</title>
</head>

<body>


  <!--start wrapper-->
  <div class="wrapper">

    <!--start sidebar -->
    <?php require_once "include/leftbar.php" ?>
    <!--end sidebar -->

    <!--start top header-->
    <?php require_once "include/topbar.php" ?>
    <!--end top header-->


    <!-- start page content wrapper-->
    <div class="page-content-wrapper">
      <!-- start page content-->
      <div class="page-content">

        <!--start breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Dashboard</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0 align-items-center">
                <li class="breadcrumb-item"><a href="javascript:;">
                    <ion-icon name="home-outline"></ion-icon>
                  </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Home</li>
              </ol>
            </nav>
          </div>
         
        </div>
        <!--end breadcrumb-->


        <div class="row row-cols-1 row-cols-lg-2 row-cols-xxl-4">
         
        <div class="col-sm-12 border-primary "> 
            <!--right bar-->
						<div class="row p-4">
							<div class="col-sm-3 " >
								<a href="add_company.php"><i class="fas fa-folder-plus fa-5x text-secondary "></i></a>
								<p>Add Company</p>
							</div>
							<div class="col-sm-3">
								<a href="list_of_category.php"><i class="fas fa-folder-open fa-5x text-secondary"></i></a>
								<p>Category List</p>
							</div>
							<div class="col-sm-3">
								<a href="add_jobs.php"><i class="fas fa-folder-plus fa-5x text-secondary"></i></i></a>
								<p>Add Jobs</p>
							</div>
							<div class="col-sm-3">
								<a href="list_of_jobs.php"><i class="fas fa-stream fa-5x text-secondary"></i></a>
								<p>Jobs List</p>
							</div>
						</div>
						<hr/>
						<div class="row p-4">
							<div class="col-sm-3">
								<a href="add_jobs_category.php"><i class="fas fa-plus-circle fa-5x text-secondary"></i></a>
								<p>Add Jobs Category</p>
							</div>
							<div class="col-sm-3">
								<a href="list_of_jobs.php"><i class="fas fa-box fa-5x text-secondary"></i></a>
								<p>Jobs Category List</p>
							</div>
							<div class="col-sm-3">
								<a href="add_jobs_title.php"><i class="fas fa-plus-circle fa-5x text-secondary"></i></a>
								<p>Add Jobs Title</p>
							</div>
							<div class="col-sm-3">
								<a href="list_jobs_title.php"><i class="fas fa-folder-open fa-5x text-secondary"></i></a>
								<p>Jobs Title List</p>
							</div>
						</div>
						<hr/>
						<div class="row p-4">
							<div class="col-sm-3">
								<a href="report.php"><i class="fas fa-chart-bar fa-5x text-secondary"></i></a>
								<p>Report</p>
							</div>
							<div class="col-sm-3">
							</div>
							<div class="col-sm-3">
							</div>
							<div class="col-sm-3">
							</div>
						</div>
						<hr/>
						<div class="row p-4">
							<div class="col-sm-3">
								<a href="add_users.php"><i class="fas fa-user-plus fa-5x text-secondary"></i></a>
								<p>Add User</p>
							</div>
							<div class="col-sm-3">
								<a href="list_of_users.php"><i class="fas fa-users fa-5x text-secondary"></i></a>
								<p>User List</p>
							</div>
							<div class="col-sm-3">
							</div>
							<div class="col-sm-3">
							</div>
						</div>
					</div>

        </div>
      </div>
      <!-- end page content-->
    </div>
    <!--end page content wrapper-->


    <!--start footer-->
   <?php require_once "include/footer.php" ?>
    <!--end footer-->


    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top">
      <ion-icon name="arrow-up-outline"></ion-icon>
    </a>
    <!--End Back To Top Button-->

    <!--start switcher-->
    
    <!--end switcher-->


    <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->

  </div>
  <!--end wrapper-->


  <!-- JS Files-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
  <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <!--plugins-->
  <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
  <script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
  <script src="assets/plugins/easyPieChart/jquery.easypiechart.js"></script>
  <script src="assets/plugins/chartjs/chart.min.js"></script>
  <script src="assets/js/index.js"></script>
  <!-- Main JS-->
  <script src="assets/js/main.js"></script>


</body>

</html>

<?php
}else{
	header('location:login.php');
}
 ?>