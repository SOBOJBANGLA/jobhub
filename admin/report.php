<?php
	require('connection.php');

	session_start();

	$user_first_name = $_SESSION['user_first_name'];
	$user_last_name = $_SESSION['user_last_name'];

	if (!empty($user_first_name) && !empty($user_last_name)) {


		$sql3 = "SELECT id,name FROM company ORDER BY name ASC";
		$query3 = $conn->query($sql3);

		$data_list = array();

		while ($data3 = mysqli_fetch_assoc($query3)) {
			$company_id 	= $data3['id'];
			$company_name = $data3['name'];

			$data_list[$company_id] = $company_name;
		}
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

  <!-- New -->
  <link href="plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

<!-- DataTables -->
<link href="plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

<!-- Responsive datatable examples -->
<link href="plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

<link href="ass/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="ass/css/metismenu.min.css" rel="stylesheet" type="text/css">
<link href="ass/css/icons.css" rel="stylesheet" type="text/css">
<link href="ass/css/style.css" rel="stylesheet" type="text/css">


  <!-- New -->
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
			   
			  </a>
			</li>
			<li class="breadcrumb-item active" aria-current="page" style="padding: 10px;">Report</li>
		  </ol>
		</nav>
	  </div>
	 
	</div>
	<!--end breadcrumb-->

	<div class="container-fluid">
                    <div class="page-title-box">

                        <div class="row align-items-center ">
                            <div class="col-md-8">
                                <div class="page-title-box">
                                    <h3 class="page-title">Company vacancy List</h3>
                                    
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="float-right d-none d-md-block app-datepicker">
                                    <input type="text" class="form-control" data-date-format="MM dd, yyyy" readonly="readonly" id="datepicker">
                                    <i class="mdi mdi-chevron-down mdi-drop"></i>
                                </div>
                            </div>
                        </div>
                    </div>

					<div class="container p-4 m-4">
						   <h3> </h3>
   							<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
   								<h6>Select Company Name :</h6> 
   								<select name="company_name">
									<option value="">Select Company</option>
   									<?php
										$sql = "SELECT id,name FROM company ORDER BY name ASC";

										$query = $conn->query($sql);
										while ($data = mysqli_fetch_assoc($query)) {
											$company_id 		= $data['id'];
											$company_name 		= $data['name'];
										?>

   										<option value="<?php echo $company_id ?> "><?php echo $company_name ?></option>
   									<?php } ?>
   								</select>
   								<input type="submit" value="Generate Report">
   							</form><br><br><br>
   							
   							<?php

								//Report Store Data
								if (isset($_GET['company_name'])) {
									$company_name = $_GET['company_name'];

									$sql1 = "SELECT * FROM vacancy WHERE company_id = $company_name";

									$query1 = $conn->query($sql1);



									while ($data1 = mysqli_fetch_array($query1)) {

										$company_name = $data1['company_id'];
										$company_title = $data1['job_title'];
										$company_category = $data1['category'];
										$company_entry_date = $data1['start_date'];
										$company_last_date = $data1['last_date'];


										echo "<h5>$data_list[$company_name]</h5>";
										echo "<table class='table table-success table-striped table-hover'><tr><th>Job Title</th><th>Job Category</th><th>Start Date</th><th>Last Date</th></tr>";
										echo "<tr><td>$company_title</td><td> $company_category</td><td>$company_entry_date</td><td>$company_last_date</td></tr>";
										echo "</table>";
									}
								}

								?>
   							</table>

							
							   </div>

</div>

</div>
   						</div>
						</div>






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

  <!-- New -->
  <script src="ass/js/jquery.min.js"></script>
    <script src="ass/js/bootstrap.bundle.min.js"></script>
    <script src="ass/js/metismenu.min.js"></script>
    <script src="ass/js/jquery.slimscroll.js"></script>
    <script src="ass/js/waves.min.js"></script>

    <script src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    <!-- Required datatable js -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="plugins/datatables/jszip.min.js"></script>
    <script src="plugins/datatables/pdfmake.min.js"></script>
    <script src="plugins/datatables/vfs_fonts.js"></script>
    <script src="plugins/datatables/buttons.html5.min.js"></script>
    <script src="plugins/datatables/buttons.print.min.js"></script>
    <script src="plugins/datatables/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="ass/pages/datatables.init.js"></script>

    <!-- App js -->
    <script src="ass/js/app.js"></script>



	</body>

</html>

<?php
}else{
	header('location:login.php');
}
 ?>
