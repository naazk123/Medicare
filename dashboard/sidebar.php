
  

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
                  <span class="font-weight-bold mb-2"><?php echo $_SESSION['adminname']?></span>
                  <!-- <span class="text-secondary text-small">Project Manager</span> -->
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item" >
              <a class="nav-link" href="admin_dashboard.php" id="home_sb">
                <span class="menu-title " style=" color: #05e8f0;">Dashboard</span>
                <i class="mdi mdi-home menu-icon " ></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Profile</span>
                <i class="menu-arrow"></i>
                <!-- <i class="mdi mdi-crosshairs-gps menu-icon"></i> -->
              </a>
              <div class="collapse" id="ui-basic1">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="#">Admin Profile</a></li>
                  <li class="nav-item"> <a class="nav-link" href="change_password.php">Change Password</a></li>
                  <li class="nav-item"> <a class="nav-link" href="add_admin.php">Add Admin</a></li>
                  <li class="nav-item"> <a class="nav-link" href="view_admin.php">View Admin</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Patient</span>
                <i class="menu-arrow"></i>
                <!-- <i class="mdi mdi-crosshairs-gps menu-icon"></i> -->
              </a>
              <div class="collapse" id="ui-basic2">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="add_patient.php">Add Patient</a></li>
                  <li class="nav-item"> <a class="nav-link" href="view_patient.php">View Patient</a></li>
                  </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Appointment</span>
                <i class="menu-arrow"></i>
                <!-- <i class="mdi mdi-crosshairs-gps menu-icon"></i> -->
              </a>
              <div class="collapse" id="ui-basic3">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="new_appoint.php">New Appointment</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pending_appoint.php">View Pending Appointment</a></li>
                  <li class="nav-item"> <a class="nav-link" href="approved_appoint.php">View Approved Appointment</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Doctor</span>
                <i class="menu-arrow"></i>
                <!-- <i class="mdi mdi-crosshairs-gps menu-icon"></i> -->
              </a>
              <div class="collapse" id="ui-basic4">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="add_doctor.php">Add Doctor</a></li>
                  <li class="nav-item"> <a class="nav-link" href="view_doctor.php">View Doctor</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Add Doctor Timing</a></li>
                  <li class="nav-item"> <a class="nav-link" href="view_doctortiming.php">View Doctor Timing</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="treatment.php" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Treatment</span>
                <!-- <i class="menu-arrow"></i> -->
                <!-- <i class="mdi mdi-crosshairs-gps menu-icon"></i> -->
              </a>
                
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic5" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Settings</span>
                <i class="menu-arrow"></i>
                <!-- <i class="mdi mdi-crosshairs-gps menu-icon"></i> -->
              </a>
              <div class="collapse" id="ui-basic5">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="add_department.php">Add Department</a></li>
                  <li class="nav-item"> <a class="nav-link" href="view_department.php">View Department</a></li>
                  <li class="nav-item"> <a class="nav-link" href="add_treatment.php">Add Treatment Type</a></li>
                  <li class="nav-item"> <a class="nav-link" href="view_treatement.php">View Treatment Type</a></li>
                  <li class="nav-item"> <a class="nav-link" href="add_medicine.php">Add Medicine</a></li>
                  <li class="nav-item"> <a class="nav-link" href="view_medicine.php">View Medicine</a></li>
                </ul>
              </div>
            </li>
            
          </ul>
        </nav>
        <!-- partial -->
