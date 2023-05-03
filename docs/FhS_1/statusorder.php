<?php
include('config.php');
$user=$_GET['user'];
//echo $user;
$id=$_GET['id'];
$status=$_GET['status'];
if($status==1){$sql = "UPDATE orders SET status='$status',status1='Underway',driver='$user' WHERE id='$id';";
mysqli_query($conn, $sql);
header("location: appointment-history-a.php");
}else{
    $sql = "UPDATE orders SET status='$status',status1='new',driver='$user' WHERE id='$id';";
    mysqli_query($conn, $sql);
    header("location: appointment-history-a.php"); 
}


?>