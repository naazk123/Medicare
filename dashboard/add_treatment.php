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
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="assets/css/style_dash.css">
    <link rel="stylesheet" href="Medicare/assets/css/style.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        #logo_n {
            height: 50px;
            width: 50px;
        }

        #medi {
            font-weight: 900;
        }

        /* .card-body{
        background: -webkit-gradient(linear, left top, right top, from(#05e8f0), color-stop(#4ef1f7), to(#84f1f5));
        background: linear-gradient(to right, #05e8f0, #4ef1f7, #84f1f5);
        color: #fff;
      } */

        .home_icon {
            color: #05e8f0;
            /* background: -webkit-gradient(linear, left top, right top, from(#05e8f0), color-stop(#4ef1f7), to(#84f1f5));
        background: linear-gradient(to right, #05e8f0, #4ef1f7, #84f1f5);
        color: #fff; */
        }

        .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-toggle:after {
            color: #65c9cd;
            font-size: 1rem;
        }

        #admin {
            font-size: 30px;
        }

        .page-title .page-title-icon {
            -webkit-box-shadow: 0px 3px 8.3px 0.7px #65c9cd;
            box-shadow: 0px 3px 8.3px 0.7px #65c9cd;
        }

        .bg-gradient-primary {
            background: -webkit-gradient(linear, left top, right top, from(#84f1f5), to(#05e8f0)) !important;
            background: linear-gradient(to right, #84f1f5, #05e8f0) !important;
        }

        .sidebar .nav .nav-item .nav-link i.menu-icon {
            font-size: 1.125rem;
            line-height: 1;
            margin-left: auto;
            color: grey;
        }

        .sidebar .nav .nav-item.active>.nav-link .menu-title {
            color: #90eef1;
        }

        #name_search{
            display:flex;
            justify-content:space-between;
            margin-bottom:5px;
        }

        #myInput {
            background-image: url('/css/searchicon.png'); /* Add a search icon to input */
            background-position: 10px 12px; /* Position the search icon */
            background-repeat: no-repeat; /* Do not repeat the icon image */
            font-size: 16px; /* Increase font-size */
            padding: 12px 20px 12px 40px; /* Add some padding */
            border: 1px solid #ddd; /* Add a grey border */
            margin-bottom: 12px; /* Add some space below the input */
            border-radius:5px;
            }

        table,th,td,tr{
            text-align:center;
        }

    </style>
</head>

<body>
    <!-- header section -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" id="medi"><img src="assets/images/logo.png" alt="logo"
                    id="logo_n" />Medicare</a>
            <!-- <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a> -->
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>

            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <div class="nav-profile-img">
                            <!-- <i class="fa-solid fa-user"></i> -->
                            <!-- <span class="availability-status online"></span> -->
                        </div>
                        <div class="nav-profile-text">
                            <pre class="mb-1 text-black"><i class="fa-solid fa-user"></i>  Admin Name</pre>
                        </div>
                    </a>
                    <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
                    </div>
                </li>
                <!-- <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li> -->

                <li class="nav-item nav-logout d-none d-lg-block">
                    <a class="nav-link" href="#">
                        <i class="mdi mdi-power"></i>
                    </a>
                </li>
                <!-- <li class="nav-item nav-settings d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-format-line-spacing"></i>
              </a>
            </li> -->
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <a href="#" class="nav-link">
                        <div class="nav-profile-image">
                            <i class="fa-solid fa-user-tie" id="admin"></i>
                            <!-- <img src="assets/images/faces/face1.jpg" alt="profile"> -->
                            <span class="login-status online"></span>
                            <!--change to offline or busy as needed-->
                        </div>
                        <div class="nav-profile-text d-flex flex-column">
                            <span class="font-weight-bold mb-2">Admin Name</span>
                            <!-- <span class="text-secondary text-small">Project Manager</span> -->
                        </div>
                        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin_dashboard.php" id="home_sb">
                        <span class="menu-title ">Dashboard</span>
                        <i class="mdi mdi-home menu-icon "></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic1" aria-expanded="false"
                        aria-controls="ui-basic">
                        <span class="menu-title">Profile</span>
                        <i class="menu-arrow"></i>
                        <!-- <i class="mdi mdi-crosshairs-gps menu-icon"></i> -->
                    </a>
                    <div class="collapse" id="ui-basic1">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="#">Admin Profile</a></li>
                            <li class="nav-item"> <a class="nav-link" href="#">Change Password</a></li>
                            <li class="nav-item"> <a class="nav-link" href="#">Add Admin</a></li>
                            <li class="nav-item"> <a class="nav-link" href="view_admin.php" style=" color: #05e8f0;">View Admin</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic2" aria-expanded="false"
                        aria-controls="ui-basic">
                        <span class="menu-title">Patient</span>
                        <i class="menu-arrow"></i>
                        <!-- <i class="mdi mdi-crosshairs-gps menu-icon"></i> -->
                    </a>
                    <div class="collapse" id="ui-basic2">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="#">Add Patient</a></li>
                            <li class="nav-item"> <a class="nav-link" href="view_patient.php">View Patient</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic3" aria-expanded="false"
                        aria-controls="ui-basic">
                        <span class="menu-title">Appointment</span>
                        <i class="menu-arrow"></i>
                        <!-- <i class="mdi mdi-crosshairs-gps menu-icon"></i> -->
                    </a>
                    <div class="collapse" id="ui-basic3">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="#">New Appointment</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pending_appoint.php">View Pending Appointment</a></li>
                            <li class="nav-item"> <a class="nav-link" href="approved_appoint.php">View Approved Appointment</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic4" aria-expanded="false"
                        aria-controls="ui-basic">
                        <span class="menu-title">Doctor</span>
                        <i class="menu-arrow"></i>
                        <!-- <i class="mdi mdi-crosshairs-gps menu-icon"></i> -->
                    </a>
                    <div class="collapse" id="ui-basic4">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="#">Add Doctor</a></li>
                            <li class="nav-item"> <a class="nav-link" href="view_doctor.php">View Doctor</a></li>
                            <li class="nav-item"> <a class="nav-link" href="#">Add Doctor Timing</a></li>
                            <li class="nav-item"> <a class="nav-link" href="view_doctortiming.php">View Doctor Timing</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic6" aria-expanded="false"
                        aria-controls="ui-basic">
                        <span class="menu-title">Treatment</span>
                        <!-- <i class="menu-arrow"></i> -->
                        <!-- <i class="mdi mdi-crosshairs-gps menu-icon"></i> -->
                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic5" aria-expanded="false"
                        aria-controls="ui-basic">
                        <span class="menu-title">Settings</span>
                        <i class="menu-arrow"></i>
                        <!-- <i class="mdi mdi-crosshairs-gps menu-icon"></i> -->
                    </a>
                    <div class="collapse" id="ui-basic5">
                        <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="#">Add Department</a></li>
                        <li class="nav-item"> <a class="nav-link" href="view_department.php">View Department</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Add Treatment Type</a></li>
                        <li class="nav-item"> <a class="nav-link" href="view_treatement.php">View Treatment Type</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Add Medicine</a></li>
                        <li class="nav-item"> <a class="nav-link" href="view_medicine.php">View Medicine</a></li>
                        </ul>
                    </div>
                </li>

            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <!-- view_patient -->
                    <div class="card">
                        <div class="card-body">
                            
                            <div class="row">
                                <div class="col-12">
                                <h4 class="card-title">Add Treatment Details</h4>
                  <p class="card-description">
                    Please Fill the Details
                  </p>
                  <!-- Form Enter Starts Here -->
                  <form class="forms-sample" method="POST" action="" id="myForm">
                    
                    <div class="form-group">
                      <label for="exampleInputUsername1">Treatment Type</label>
                      <input type="text" class="form-control" id="exampleInputname1" Name="name" required placeholder="Enter Name of Faculty">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputUsername1">Treatment Cost</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" Name="cost" required placeholder="Username">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputUsername1">Note</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" Name="note" required placeholder="Username">
                    </div>
                   
                    <div class="form-group">
                      <label for="Department"> Select Status</label>
         
                            <select class="form-control show-tick" name="status">
                                          <option >Select</option>
                                          <option value="Active">Active</option> 
                                          <option value="Inactive ">Inactive</option> 
                                          
                                    </select>
                     
                    </div>
                    
                    
                    
                    
                    <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
                     <button class="btn btn-light" onclick="myFunction()">Reset</button>
                  </form>
                                </div>
                            </div>
                        </div>
                    </div>











                </div>
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="container-fluid d-flex justify-content-between">
                        <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright ©
                            Medicare 2024</span>

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
    <script src="assets/js/todolist.js"></script>

    <script>
function myFunction() {
  document.getElementById("myForm").reset();
}

</script>
   
        <script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("order-listing");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
   
    <!-- End custom js for this page -->
</body>

</html>

<?php
include'db.php';
if($_SERVER["REQUEST_METHOD"] == "POST")
{
extract($_POST);

$query="INSERT INTO `treatment`(`treatmenttype`, `treatment_cost`, `note`, `status`) VALUES ('$name','$cost','$cost','$status')";

$asd = mysqli_query($con,$query)or die(mysqli_error($con));

if($asd)
{
  echo '<script type="text/javascript">';
  echo " alert('Treatment Added Successfully');";
  echo 'window.location.href = "view_treatment.php";';
  echo '</script>';
}  
else
{ 
  echo '<script type="text/javascript">';
  echo " alert('Fill Again The Registration Form.');";
  echo 'window.location.href = "add_treatment.php";';
  echo '</script>';
}

}
?>



 