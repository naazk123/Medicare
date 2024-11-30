<?php include('db.php')?>

<?php 

$query="delete from `appointment` where `appointmentid`='".$_GET['id']."'";
$result=mysqli_query($con,$query);

if(!$result){
    // die("Query Failed!!!",mysqli_error());
    echo "error";
}
else{
    header('location:pending_appoint.php?delete_msg=You have deleted the data');
}
?>