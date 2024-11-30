
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <!-- <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css"> -->
    <link rel="stylesheet" href="assets/css/style_dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
      #logo_n{
        height: 50px;
        width: 50px;
      }
      #medi{
        font-weight: 900;
      }
      .card-body{
        background: -webkit-gradient(linear, left top, right top, from(#05e8f0), color-stop(#4ef1f7), to(#84f1f5));
        background: linear-gradient(to right, #05e8f0, #4ef1f7, #84f1f5);
        color: #fff;
      }

      .home_icon{
        color:#05e8f0;
        /* background: -webkit-gradient(linear, left top, right top, from(#05e8f0), color-stop(#4ef1f7), to(#84f1f5));
        background: linear-gradient(to right, #05e8f0, #4ef1f7, #84f1f5);
        color: #fff; */
      }

      .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-toggle:after {
        color: #65c9cd;
        font-size: 1rem; }

      #admin{
        font-size: 30px;
      }

      .page-title .page-title-icon {
    -webkit-box-shadow: 0px 3px 8.3px 0.7px #65c9cd;
    box-shadow: 0px 3px 8.3px 0.7px #65c9cd; }

    .bg-gradient-primary {
  background: -webkit-gradient(linear, left top, right top, from(#84f1f5), to(#05e8f0)) !important;
  background: linear-gradient(to right, #84f1f5, #05e8f0) !important; }

  .sidebar .nav .nav-item .nav-link i.menu-icon {
            font-size: 1.125rem;
            line-height: 1;
            margin-left: auto;
            color: #80f1f5; }

            .sidebar .nav .nav-item.active > .nav-link .menu-title {
          color: #90eef1;}

    </style>
  </head>
  
  <body>
      <!-- header section -->
      
      <!-- partial -->
      <?php include "header.php"; ?>

      <?php include "sidebar.php";?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home" id="home_main"></i>
                </span> Dashboard
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <!-- <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i> -->
                  </li>
                </ul>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Number of Appointment Records <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                    </h4>
                    <?php 
                  include "db.php";
                  $count = 1;
                  $asd = mysqli_query($con,"select * from appointment") or die (mysqli_error($con));
                  $Total = mysqli_num_rows($asd);
                  ?>
                    <h2 class="mb-5"><?php echo $Total;?></h2>
                    <!-- <h6 class="card-text">Increased by 60%</h6> -->
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white bg-blue-gradient">
                  <div class="card-body bg-blue-gradient" >
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Number of Billing Reports<i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                    </h4>
                    <?php 
                  include "db.php";
                  $count = 1;
                  $asd = mysqli_query($con,"select * from billing") or die (mysqli_error($con));
                  $Total = mysqli_num_rows($asd);
                  ?>
                    <h2 class="mb-5"><?php echo $Total;?></h2>
                    <!-- <h6 class="card-text">Decreased by 10%</h6> -->
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Number of Patient Records <i class="mdi mdi-diamond mdi-24px float-right"></i>
                    </h4>
                    <?php 
                  include "db.php";
                  $count = 1;
                  $asd = mysqli_query($con,"select * from patient") or die (mysqli_error($con));
                  $Total = mysqli_num_rows($asd);
                  ?>
                    <h2 class="mb-5"><?php echo $Total;?></h2>
                    <!-- <h6 class="card-text">Increased by 5%</h6> -->
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Number of Treatment Records <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                    </h4>
                    <?php 
                  include "db.php";
                  $count = 1;
                  $asd = mysqli_query($con,"select * from treatment_records") or die (mysqli_error($con));
                  $Total = mysqli_num_rows($asd);
                  ?>
                    <h2 class="mb-5"><?php echo $Total;?></h2>
                    <!-- <h6 class="card-text">Decreased by 10%</h6> -->
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Number of Prescription <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                    </h4>
                    <?php 
                  include "db.php";
                  $count = 1;
                  $asd = mysqli_query($con,"select * from prescription") or die (mysqli_error($con));
                  $Total = mysqli_num_rows($asd);
                  ?>
                    <h2 class="mb-5"><?php echo $Total;?></h2>
                    <!-- <h6 class="card-text">Decreased by 10%</h6> -->
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Number of Prescription Records <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                    </h4>
                    <?php 
                  include "db.php";
                  $count = 1;
                  $asd = mysqli_query($con,"select * from prescription_records") or die (mysqli_error($con));
                  $Total = mysqli_num_rows($asd);
                  ?>
                    <h2 class="mb-5"><?php echo $Total;?></h2>
                    <!-- <h6 class="card-text">Decreased by 10%</h6> -->
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Number of Treatment Types<i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                    </h4>
                    <?php 
                  include "db.php";
                  $count = 1;
                  $asd = mysqli_query($con,"select * from treatment") or die (mysqli_error($con));
                  $Total = mysqli_num_rows($asd);
                  ?>
                    <h2 class="mb-5"><?php echo $Total;?></h2>
                    <!-- <h6 class="card-text">Decreased by 10%</h6> -->
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Number of Admin records <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                    </h4>
                    <?php 
                  include "db.php";
                  $count = 1;
                  $asd = mysqli_query($con,"select * from admin") or die (mysqli_error($con));
                  $Total = mysqli_num_rows($asd);
                  ?>
                    <h2 class="mb-5"><?php echo $Total;?></h2>
                    <!-- <h6 class="card-text">Decreased by 10%</h6> -->
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Number of Department Records <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                    </h4>
                    <?php 
                  include "db.php";
                  $count = 1;
                  $asd = mysqli_query($con,"select * from department") or die (mysqli_error($con));
                  $Total = mysqli_num_rows($asd);
                  ?>
                    <h2 class="mb-5"><?php echo $Total;?></h2>
                    <!-- <h6 class="card-text">Decreased by 10%</h6> -->
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Number of Doctor Records <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                    </h4>
                    <?php 
                  include "db.php";
                  $count = 1;
                  $asd = mysqli_query($con,"select * from doctor") or die (mysqli_error($con));
                  $Total = mysqli_num_rows($asd);
                  ?>
                    <h2 class="mb-5"><?php echo $Total;?></h2>
                    <!-- <h6 class="card-text">Decreased by 10%</h6> -->
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Number of Doctor Timings Records  <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                    </h4>
                    <?php 
                  include "db.php";
                  $count = 1;
                  $asd = mysqli_query($con,"select * from doctor_timings") or die (mysqli_error($con));
                  $Total = mysqli_num_rows($asd);
                  ?>
                    <h2 class="mb-5"><?php echo $Total;?></h2>
                    <!-- <h6 class="card-text">Decreased by 10%</h6> -->
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Number of Billing Records <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                    </h4>
                    <?php 
                  include "db.php";
                  $count = 1;
                  $asd = mysqli_query($con,"select * from billing_records") or die (mysqli_error($con));
                  $Total = mysqli_num_rows($asd);
                  ?>
                    <h2 class="mb-5"><?php echo $Total;?></h2>
                    <!-- <h6 class="card-text">Decreased by 10%</h6> -->
                  </div>
                </div>
              </div>
            </div>
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © Medicare 2024</span>
              
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>