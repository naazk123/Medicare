<?php
session_start();
include("dbconnection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['appointmentid'])) {
    $appointmentid = $_POST['appointmentid'];

    // Delete the appointment from the database
    $query = "DELETE FROM appointment WHERE appointmentid = $appointmentid";
    if (mysqli_query($con, $query)) {
        echo 'Appointment deleted successfully';
    } else {
        echo 'Error deleting appointment: ' . mysqli_error($con);
    }
} else {
    echo 'Invalid request';
}

mysqli_close($con);
?>
