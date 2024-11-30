<?php
session_start();
include("dbconnection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['appointmentid'])) {
    $appointmentid = $_POST['appointmentid'];

    // Fetch appointment details based on appointmentid
    $query = "SELECT * FROM appointment WHERE appointmentid = $appointmentid";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);

    // Display a form for updating the appointment
    echo '<form action="process_update_appointment.php" method="post">';
    echo '<input type="hidden" name="appointmentid" value="' . $appointmentid . '">';
    echo 'Appointment Type: <input type="text" name="appointmenttype" value="' . $row['appointmenttype'] . '"><br>';
    echo 'Appointment Date: <input type="date" name="appointmentdate" value="' . $row['appointmentdate'] . '"><br>';
    echo 'Appointment Time: <input type="time" name="appointmenttime" value="' . $row['appointmenttime'] . '"><br>';
    echo 'Doctor ID: <input type="text" name="doctorid" value="' . $row['doctorid'] . '"><br>';
    echo '<input type="submit" value="Submit">';
    echo '</form>';
}
else {
    echo 'Invalid request';
}

mysqli_close($con);
?>
