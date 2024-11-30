<?php
session_start();
include("dbconnection.php");
// Prepare and bind
$stmt = $con->prepare("INSERT INTO appointment (appointmenttype, patientid, roomid, departmentid, appointmentdate, appointmenttime, doctorid, status, app_reason) VALUES (?, ?, ?, ?, ?, ?, ?, 'Pending', ?)");
$stmt->bind_param("siisssis", $appointmenttype, $patientid, $roomid, $departmentid, $appointmentdate, $appointmenttime, $doctorid, $app_reason);

// Set parameters and execute
$appointmenttype = $_POST["appointmenttype"];
$patientid = $_POST["patientid"];
$roomid = $_POST["roomid"];
$departmentid = $_POST["departmentid"];
$appointmentdate = $_POST["appointmentdate"];
$appointmenttime = $_POST["appointmenttime"];
$doctorid = $_POST["doctorid"];
$app_reason = $_POST["app_reason"];

$stmt->execute();

echo "<script>alert('New appointment created successfully...');</script>";
echo "<script>window.location='dashboard.php';</script>";

$stmt->close();
$con->close();
?>
