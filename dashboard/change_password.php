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
    <?php include "header.php"; ?>

      <?php include "sidebar.php";?>
    <!-- partial -->
    
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <!-- view_patient -->
                    <div class="card">
                        <div class="card-body">
                            
                            <div class="row">
                                <div class="col-12">
                                <h4 class="card-title">Change Password</h4>
                  <p class="card-description">
                    Please Fill the Details
                  </p>
                  <!-- Form Enter Starts Here -->
                  <form class="forms-sample" method="POST" action="" id="myForm">
                    
                    
                    <div class="form-group">
                      <label for="curr_pass">Current Password</label>
                      <input type="password" class="form-control" id="exampleInputUsername1" Name="curr_pass" required placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="new_pass">New Password</label>
                      <input type="password" class="form-control" id="exampleInputUsername1" Name="new_pass" required placeholder="Username">
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
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    extract($_POST);

    // Check if the user exists first
    $check_query = "SELECT * FROM `admin` WHERE `password`='$curr_pass';";
    $check_result = mysqli_query($con, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        // User exists, proceed with password update
        $update_query = "UPDATE `admin` SET `password`='$new_pass' WHERE `password`='$curr_pass';";
        $update_result = mysqli_query($con, $update_query) or die(mysqli_error($con));

        if ($update_result) {
            echo '<script type="text/javascript">';
            echo "alert('Password Updated Successfully');";
            echo 'window.location.href = "admin_dashboard.php";';
            echo '</script>';
        } else {
            echo '<script type="text/javascript">';
            echo "alert('Error updating password. Please try again.');";
            echo '</script>';
        }
    } else {
        // User doesn't exist
        echo '<script type="text/javascript">';
        echo "alert('User does not exist. Please try again.');";
        echo '</script>';
    }
}
?>