<?php
include('config.php');
$id=$_GET['id'];
$status=$_GET['status'];
if($status==1){$sql = "UPDATE login SET status='$status',status1='authorized' WHERE id='$id';";
mysqli_query($conn, $sql);
header("location: manage-drivers-b.php");
}else{
    $sql = "UPDATE login SET status='$status',status1='Unauthorized' WHERE id='$id';";
    mysqli_query($conn, $sql);
    header("location: manage-drivers-b.php"); 
}


?>