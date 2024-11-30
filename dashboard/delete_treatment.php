<?php include('db.php')?>

<?php 

$query="delete from `treatment` where `treatmentid`='".$_GET['id']."'";
$result=mysqli_query($con,$query);

if(!$result){
    // die("Query Failed!!!",mysqli_error());
    echo "error";
}
else{
    header('location:view_treatment.php?delete_msg=You have deleted the data');
}
?>