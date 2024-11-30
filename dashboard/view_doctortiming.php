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

      table,th,td,tr{
            text-align:center;
        }

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
    </style>
</head>

<body>
    <!-- header section -->
    <?php include "header.php"; ?>

    <?php include "sidebar.php";?>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <!-- view_patient -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">View Doctor Timing</h4>
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table id="order-listing" class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Action</th>
                                                    <th>Doctor</th>
                                                    <th>Available Time</th>
                                                    <th>Status</th>
    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                require 'db.php';
                                                $select = "select dt.* , dn.doctorname from doctor_timings dt, doctor dn where dt.doctorid = dn.doctorid";
                      
                                                $i=1;
                                                if ($result = $con->query($select))
                                                {
                                                    while ($data = $result->fetch_assoc())
                                                    {
                                                        echo'
                                                        <tr>
                                                            <td style="font-size: 16px;">
                                                            <a href="edit_doctor_timing.php?id='.$data["doctor_timings_id"].'"><i class="fas fa-edit " style="margin-right:3%;color: green" ></i></a>
                                                            <a href="delete_doctor_timing.php?id='.$data["doctor_timings_id"].'"><i class="fas fa-trash" style="color: red"></i></a>
                                                            </td>

                                                            <td >  '.$data["doctorname"].' 
                                                                
                                                            </td>
                                                            <td > 
                                                                '.$data["start_time"].' AM To '.$data["end_time"].' PM
                                                            </td>
                                                            <td >
                                                                '.$data["status"].'
                                                            </td>
                                                            
                          
                                                            </tr>
                                                        ';}}?>

                                                        <?php 

                                                            if(isset($_GET['delete_msg'])){
                                                                echo '<script type="text/javascript">';
                                                                echo "alert('Doctor timing deleted Successfully');";
                                                                // echo 'window.location.href = "view_admin.php";';
                                                                echo '</script>';
                                                                // echo "<h6>".$_GET['delete_msg']."</h6>";
                                                            }
                                                        ?>
                                            </tbody>
                                        </table>
                                    </div>
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
    <!-- End custom js for this page -->
</body>

</html>