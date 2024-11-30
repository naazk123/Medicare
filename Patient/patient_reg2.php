<?php
session_start();
include("dbconnection.php");
    $pname = $_POST['name'];
    $current_date = date('Y-m-d');
    $current_time = date('H:i:s');
    $add = $_POST['address'];
    $mn = $_POST['mobile'];
    $c = $_POST['city'];
    $pc = $_POST['pincode'];
    $li = $_POST['loginid'];
    $p = $_POST['password'];
    $BG = $_POST['blood_group'];
    $G = $_POST['gender'];
    $DOB = $_POST['dob'];
    $s = 'Active';
    
    $stmt = $con->prepare("INSERT INTO patient(patientid, patientname, admissiondate, admissiontime, address, mobileno, city, pincode, loginid, password, bloodgroup, gender, dob, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
    $stmt->bind_param("isssssssssssss", $pi, $pname, $current_date, $current_time, $add, $mn, $c, $pc, $li, $p, $BG, $G, $DOB, $s);
    
    $stmt->execute();
    
    // echo "Registration Successfully..";
    echo "<script>alert('patient record inserted successfully...');</script>";
    echo "<script>window.location='dashboard.php';</script>";
    
    $stmt->close();
    $con->close();
    ?>