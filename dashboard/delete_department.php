<?php include('db.php')?>

<?php 

$query="delete from `department` where `departmentid`='".$_GET['id']."'";
$result=mysqli_query($con,$query);

if(!$result){
    // die("Query Failed!!!",mysqli_error());
    echo "error";
}
else{
    header('location:view_department.php?delete_msg=You have deleted the data');
}
?>