<?php include('db.php')?>

<?php 

$query="delete from `doctor_timings` where `doctor_timings_id`='".$_GET['id']."'";
$result=mysqli_query($con,$query);

if(!$result){
    // die("Query Failed!!!",mysqli_error());
    echo "error";
}
else{
    header('location:view_doctortiming.php?delete_msg=You have deleted the data');
}
?>