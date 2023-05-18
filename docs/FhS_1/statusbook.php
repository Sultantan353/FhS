<?php
//include('config.php');

  //include('welcome.php');

    include('session.php');
   $user = $_SESSION['login_user'];
   $st=$_GET['st'];
   

   if($st==1){?>
   <?php

if(isset($_POST['a']))
   {
	   $servic = $_POST['servic'];
	   $car = $_POST['car'];
	   $numcar = $_POST['numcar'];
	   $city = $_POST['city'];
	   $phone = $_POST['phone'];
	   
 /*      $req = "INSERT INTO orders(servic,car,numcar,city,phone)
	   VALUES('$servic','$car','$numcar','$city','$phone')";
$query = mysqli_query($conn,$req);*/
		   $sql = "INSERT INTO orders(status,status1,username,servic,car,numcar,city,phone)
		   VALUES(0,'new','$user','$servic','$car','$numcar','$city','$phone')";
		   $result = mysqli_query($conn, $sql);
		   if ($result == TRUE) 
		   { 
			   ?><!--<script>
			   swal({
				   title: "تم إنشاء الطلب بنجاح",
				   text: "يمكنك مشاهدة تفاصيل الطلب في قائمة طلباتي",
				   icon: "success",
				   
				 });
				 
				 </script>-->
			   
			   
				   

<?php //<meta http-equiv="refresh" content="0;url=appointment-history.php" />
  //include('welcome.php');<script></script>window.open('appointment-history.php');

			  header("location: appointment-history.php?st=1;");
			  // echo "تم انشاء الطلب<br/>";
			  
		   }
		   else 
			   echo "خطأ<br/>";
	   }
	   mysqli_close($conn);
  
?>
	   
   
   <?php
}

?>
<html><!--
<head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>


<body>
<script>
				swal({
					title: "تم إنشاء الطلب بنجاح",
					text: "يمكنك مشاهدة تفاصيل الطلب في قائمة طلباتي",
					icon: "success",
                    
				  });
				  
				  </script>
</body>-->
</html>
<?php //header("location: appointment-history.php");
 header('Refresh: 5; URL=appointment-history.php'); ?>


