<?php
include('config.php');
$user=$_GET['user'];
//echo $user;
$id=$_GET['id'];
$status=$_GET['status'];
if($status==2){$sql = "UPDATE orders SET status='$status',status1='Finished' WHERE id='$id';";
mysqli_query($conn, $sql);
header("location: appointment-history-mya.php");
}


?>