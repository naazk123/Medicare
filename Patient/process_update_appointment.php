<?php
session_start();
include("dbconnection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['appointmentid'])) {
    $appointmentid = $_POST['appointmentid'];

    // Retrieve updated appointment details from the form
    $appointmenttype = $_POST['appointmenttype'];
    $appointmentdate = $_POST['appointmentdate'];
    $appointmenttime = $_POST['appointmenttime'];
    $doctorid = $_POST['doctorid'];

    // Update the appointment in the database
    $query = "UPDATE appointment SET appointmenttype = '$appointmenttype', appointmentdate = '$appointmentdate', appointmenttime = '$appointmenttime', doctorid = '$doctorid' WHERE appointmentid = $appointmentid";
    if (mysqli_query($con, $query)) {
        echo 'Appointment updated successfully';
    } else {
        echo 'Error updating appointment: ' . mysqli_error($con);
    }
} else {
    echo 'Invalid request';
}

mysqli_close($con);
?>
