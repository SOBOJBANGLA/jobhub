<?php
require('connection.php');
session_start();

$user_first_name = $_SESSION['user_first_name'];
$user_last_name = $_SESSION['user_last_name'];

if (!empty($user_first_name) && !empty($user_last_name)) {


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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- New -->
    <!-- DataTables -->
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="vendor/css/sb-admin.css" rel="stylesheet">

    <link href="../">


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
                  <li class="breadcrumb-item active" aria-current="page">Jobs</li>
                </ol>
              </nav>
            </div>

          </div>
          <!--end breadcrumb-->

          <?php
          if (isset($_POST['submit'])) {
            extract($_POST);

            $sql =  "INSERT INTO vacancy (job_title, company_name, address, category,start_date,last_date,job_type,company_id,vacancy_count,category_count,catagory_id) 
						   VALUES ( '$title', '$company_name', '$address', '$category','$s_date','$l_date','$job_type','$c_id','$v_count','$c_count','$category_id')";

            if ($conn->query($sql) == TRUE) {
              $succ = "Company Added";
            } else {
              $err = "Please Try Again Later";
            }


            /*  if($conn->query($sql) == TRUE){
                        $succ = "Company Added";
                    }else {
                        $err = "Please Try Again Later";
                    }*/
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




          <!-- <div class="row row-cols-1 row-cols-lg-1 row-cols-xxl-4 col-lg-8 col-md-2 offset-md-5 offset-lg-2"> -->
          <div class="row offset-2 col-lg-8 ">
            <div class="card">
              <div class="card-header px-4 py-3">
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


                <h5 class="mb-0">Fill Up Job information</h5>
              </div>
              <div class="card-body p-4">
                <form class="row g-3" method="post">
                  <div class="col-md-6">
                    <label class="form-label">Company id</label>
                    <input type="number" class="form-control" name="c_id" required>

                  </div>


                  <div class="col-md-6">
                    <label class="form-label">Job Title</label>

                    <select class="form-select" name="title" required>
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

                  <div class="col-md-6">
                    <label class="form-label">Company Name</label>

                    <select class="form-select" name="company_name" required>
                      <option value="" data-display="Category">Select Your Company</option>
                      <?php
                      while ($data = mysqli_fetch_array($query)) {
                        $company_id = $data['id'];
                        $company_name = $data['name'];

                        echo "<option value='$company_name'>$company_name</option>";
                      }
                      ?>
                    </select>
                  </div>


                  <div class="col-md-6">
                    <label class="form-label">Jobs Category</label>

                    <select class="form-select" name="category" required>
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





                  <div class="col-md-6">
                    <label class="form-label">Company Email</label>
                    <input type="email" class="form-control" name="email" placeholder="e.g. hello@company.com" required>

                  </div>


                  <div class="col-md-6">
                    <label class="form-label">Company Website (Optional)</label>
                    <input type="text" class="form-control" name="website" placeholder="e.g www.companyname.com" required>

                  </div>

                  <div class="col-md-6">
                    <label class="form-label">Location</label>
                    <input type="text" class="form-control" name="address" placeholder="e.g. London" required>

                  </div>

                  <div class="col-md-6">
                    <label class="form-label">Starting Date</label>
                    <input type="date" class="form-control" name="s_date" required>

                  </div>

                  <div class="col-md-6">
                    <label class="form-label">Last Date</label>
                    <input type="date" class="form-control" name="l_date" required>

                  </div>

                  <div class="col-md-6">
                    <label class="form-label">Job Type</label>

                    <select class="form-select" name="job_type" required>
                      <option value="">Job Type</option>
                      <option value="Full Time">Full Time</option>
                      <option value="Part Time">Part Time</option>
                      <option value="Freelancer">Freelancer</option>
                    </select>
                  </div>



                  <div class="col-md-6">
                    <label class="form-label">Salary (Optional)</label>
                    <input type="number" class="form-control" placeholder="e.g. $20,000" required>

                  </div>

                  <div class="col-md-6">
                    <label class="form-label">Experience</label>
                    <input type="text" class="form-control" placeholder="e.g. 1 year" required>

                  </div>

                  <div class="col-md-6">
                    <label class="form-label">Vacancy count</label>
                    <input type="number" class="form-control" name="v_count" required>

                  </div>

                  <div class="col-md-6">
                    <label class="form-label">Category count</label>
                    <input type="number" class="form-control" name="c_count" required>

                  </div>

                  <div class="col-md-6">
                    <label class="form-label">Category id</label>
                    <input type="number" class="form-control" name="category_id" required>

                  </div>

                  <div class="col-md-6">
                    <label class="form-label">Jobs tags</label>
                    <input type="text" class="form-control" placeholder="e.g. web design, graphics design, video editing" required>

                  </div>

                  <div class="col-md-12">
                    <label class="form-label">Job Description</label>
                    <textarea class="form-control" placeholder="Job Description" rows="6" required></textarea>

                  </div>



                  <div class="col-md-12">
                    <div class="col-md-12 text-center">
                      <button type="submit" name="submit" class="btn btn-primary px-4">Post A Job</button>

                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- end page content-->
          </div>
          <!--end page content wrapper-->
        </div>


      </div>
    </div>
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
    <!-- new -->

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="vendor/js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="vendor/js/demo/datatables-demo.js"></script>
    <script src="vendor/js/demo/chart-area-demo.js"></script>
    <!--INject Sweet alert js-->
    <script src="vendor/js/swal.js"></script>

  </body>

  </html>

<?php
} else {
  header('location:login.php');
}
?>