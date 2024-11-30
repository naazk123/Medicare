<?php include('db.php')?>

<?php 

$query="delete from `patient` where `patientid`='".$_GET['id']."'";
$result=mysqli_query($con,$query);

if(!$result){
    // die("Query Failed!!!",mysqli_error());
    echo "error";
}
else{
    header('location:view_patient.php?delete_msg=You have deleted the data');
}
?>