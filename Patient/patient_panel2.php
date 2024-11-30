<?php
session_start();
include("dbconnection.php");

if(isset($_POST['submit']))
{
    $sql = "SELECT * FROM patient WHERE loginid='$_POST[loginid]' AND password='$_POST[password]' AND status='Active'";
    $qsql = mysqli_query($con,$sql);
    if(mysqli_num_rows($qsql) >= 1)
    {
        $rslogin = mysqli_fetch_array($qsql);
        $_SESSION['patientid']= $rslogin['patientid'] ;
    }
    else
    {
        echo "<script>alert('Invalid login id and password entered..'); </script>";
		echo "<script>window.location='patient_panel.php';</script>";
    }
}

echo "<script>window.location='dashboard.php';</script>";
?>
