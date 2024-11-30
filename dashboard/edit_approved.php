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

       

        .home_icon {
            color: #05e8f0;
            
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
                <div class="row">
                    <!-- view_patient -->
                    <div class="card">
                        <div class="card-body">
                           
                        <h4 class="card-title">Edit Doctor</h4>
                  <p class="card-description">
                    Please Fill the Details
                  </p>
                   <?php 
                  include "db.php";
                //   require "view_admin.php";
                
                //   $id=$_GET['id'];
                  $asd = mysqli_query($con,"select * from doctor where doctorid='".$_GET['id']."'") or die (mysqli_error($con));
                  $Total = mysqli_num_rows($asd);
                  
                  ?>
                  <?php while($fetch=mysqli_fetch_array($asd)){
                  extract($fetch)

                  ?>

                  <form class="forms-sample" method="POST" action="" id="">

                    <div class="form-group">
                      <label for="exampleInputUsername1">Name of Doctor</label>
                      <input type="text" class="form-control"  value="<?php echo $doctorname;?>" Name="name" required placeholder="Enter Name of Faculty">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Doctor ID</label>
                      <input type="text" class="form-control" value="<?php echo $loginid;?>" Name="loginid" required placeholder="Enter the Department name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Department</label>
                      <input type="text" class="form-control" value="<?php echo $departmentid;?>" Name="dept_id" required placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Education</label>
                      <input type="text" class="form-control" value="<?php echo $education;?>" Name="education" required placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Experience</label>
                      <input type="text" class="form-control" value="<?php echo $experience;?>" Name="experience" required placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Consultancy Charge</label>
                      <input type="text" class="form-control" value="<?php echo $consultancy_charge;?>" Name="consultancy_charge" required placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Status</label>
                      <input type="text" class="form-control" value="<?php echo $status;?>" Name="status" required placeholder="Username">
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-primary me-2">Update</button>
                    <a href="view_doctor.php" class="btn btn-light">Cancel</a>
                    
                  </form>
                <?php }?>
                            
                            <div class="row">
                                <div class="col-12">
                                    
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
   
        
   
    <!-- End custom js for this page -->
</body>

</html>
<?php
include'db.php';
if($_SERVER["REQUEST_METHOD"] == "POST")
{
extract($_POST);
// echo "hello";
$query="UPDATE `doctor` SET `doctorname`='$name',
                                `loginid`='$loginid',
                                `departmentid`='$dept_id',
                                `status`='$status' ,
                                `experience`='$experience',
                                `education`='$education',
                                `consultancy_charge`='$consultancy_charge'
                                
                                WHERE `doctorid`='".$_GET['id']."';";




$asd = mysqli_query($con,$query)or die(mysqli_error($con));

if($asd)
{
  echo '<script type="text/javascript">';
  echo "alert('Appointment Update Successfully');";
  echo 'window.location.href = "approved_appoint.php";';
  echo '</script>';
}  
else
{ 
  echo '<script type="text/javascript">';
  echo " alert('Fill the update form again.');";
  echo 'window.location.href = "add_patient.php";';
  echo '</script>';
}

}
?>