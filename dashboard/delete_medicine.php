<?php include('db.php')?>

<?php 

$query="delete from `medicine` where `medicineid`='".$_GET['id']."'";
$result=mysqli_query($con,$query);

if(!$result){
    // die("Query Failed!!!",mysqli_error());
    echo "error";
}
else{
    header('location:view_medicine.php?delete_msg=You have deleted the data');
}
?>