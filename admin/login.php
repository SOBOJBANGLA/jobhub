<?php
	require('connection.php');
	session_start();
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

<?php
			if(isset($_POST['user_email'])){
				$user_email 	= $_POST['user_email'];
				$user_password 	= $_POST['user_password'];
				
				$sql = "SELECT * FROM users WHERE user_email='$user_email' AND
						user_password = '$user_password' ";
						
				$query = $conn->query($sql);
				
				if(mysqli_num_rows($query) > 0){
					
					$data = mysqli_fetch_array($query);
					
					$user_first_name = $data['user_first_name'];
					$user_last_name  = $data['user_last_name'];
					
					$_SESSION['user_first_name'] = $user_first_name;
					$_SESSION['user_last_name']  = $user_last_name;
					
					header('location:index.php');
				}else{
					echo 'not ok';
				}
				
			}
		?>


  <!--start wrapper-->
  <div class="wrapper">

    <!--start sidebar -->
    
    <!--end top header-->


    <!-- start page content wrapper-->
    <div class="page-content-wrapper ">
      <!-- start page content-->
      <div class="page-content ">

        <!--start breadcrumb-->
        
        <!--end breadcrumb-->


        <!-- <div class="row row-cols-1 row-cols-lg-0 row-cols-xxl-4 col-lg-8 col-md-2 offset-md-5 offset-lg-0"> -->
        <div class="row offset-2 col-lg-8  ">
        <div class="row ">
            <div class="col-xl-10 ml-auto  ">
            
              <div class="card">
                <div class="card-body">
                  <div class="border p-4 rounded">
                  <h6 class="mb-0 text-uppercase">Admin login</h6>
                  <hr>
                  <form class="row g-3" method="post" >
                    <div class="col-12">
                      <label class="form-label">User's Email</label>
                      <input type="text" class="form-control" name="user_email" placeholder="Enter email" required>
                    </div>
                    <div class="col-12">
                      <label class="form-label">User's Password</label>
                      <input type="password" class="form-control" name="user_password" placeholder="Enter password" required>
                    </div>
                    
                    <div class="col-12">
                      <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Login</button>
                      </div>
                    </div>
                  </form>
                </div>
                </div>
              </div>
  
       </div>
      </div>
      <!-- end page content-->
    </div>
    <!--end page content wrapper-->
    </div>
    </div>
    <!--start footer-->
    </div>
    <!--end footer-->
    </div>

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