<?php
session_start();
if(!isset($_SESSION['patientid'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Dashboard</title>:
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
}

header {
    background-image: url('https://thumbs.dreamstime.com/b/healthcare-technology-doctor-using-digital-tablet-icon-medical-network-hospital-background-162019727.jpg'); 
    text-align: center;
    padding: 20px 0;
    background-repeat:no-repeat;
    width:100vw;
    height:130px; 
    background-size:cover;
    background-attachment:fixed;
    /* background-image:url('https://as2.ftcdn.net/v2/jpg/02/99/66/29/1000_F_299662997_RNl3WyioUPGkoFnmc1tHMfeXD8cztblA.jpg') */
    /* background-image:url('https://t3.ftcdn.net/jpg/04/87/69/28/360_F_487692869_V8MZ1hLvhXQZKT50EV8Sh13AkdibGJb3.jpg') */
}

nav {
    background-color: rgb(82, 82, 123);;
    text-align: center;
    padding: 30px 0px;
    font-size:20px;
}

nav a {
    color: white;
    text-decoration: none;
    margin: 0 50px;
    
}

nav a.active {
    font-weight: bold;
}

.main-content {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    padding: 20px;
}

.feature {
    margin: 20px;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.feature h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

.feature p {
    font-size: 16px;
}
.feature img{
    width:400px;
}
/* .div img{
    width:50%;
    height:400px;
} */

    </style>
</head>
<body>
    <header>
        <h1>Welcome!</h1>
         <!-- <h1>Hello There!</h1>
         <h2>Always caring about your health, we are here to help you!</h2> -->
    </header>
    <nav>
        <a href="#" class="active">Home</a>
        <a href="apt.php">Appointments</a>
        <a href="view_record.php?patientid=7">View Medical Records</a>
        <a href="view_prescriptions.php">View Prescriptions</a>
        <a href="logout.php">Logout</a>
    </nav>
    <div class="main-content">
        <div class="feature">
            <h2>View Appointments</h2>
            <p>View and manage your upcoming appointments.</p>
            <img src="https://www.managemore.com/images/appointment.jpg" alt="">
        </div>
        <div class="feature">
            <h2>View Medical Records</h2>
            <p>Access your medical records and test results.</p>
            <img src="https://media.istockphoto.com/id/1274833939/photo/top-view-of-medical-history-form-in-clipboard-stethoscope-and-other-stuff.jpg?s=612x612&w=0&k=20&c=RPRt-Prr9IDQaQLTlbB3mLTOLGPt4v4ULlex5jA9iUk=" alt="">
        </div>
        <div class="feature">
            <h2>View Prescriptions</h2>
            <p>View and manage your prescriptions.</p>
            <img src="https://watsonshealth.com.ph/wp-content/uploads/2019/06/13-PRESCRIPTION-MEDICATIONS.jpg" alt="">
        </div>
    </div>
    <!-- <div class="div">
    
        <img src="https://www.lvhn.org/sites/default/files/styles/400_x_300/public/2023-03/Banner%20image-Heart%20Institute%20Update_2.jpg?h=d53f73d4&itok=YU6jRRpE" alt="">
    </div> -->
</body>
</html>
