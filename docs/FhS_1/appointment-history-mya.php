<!DOCTYPE html>
<?php
	include('driversession.php');

 //  include('driverconfig.php');
   $user = $_SESSION['login_user'];
?>
<html lang="rtl">
	<head>
		<title>الطلبات الخاصة بي</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
		<style> 
     
 

	 body{
	   font-size:17px;
	   color:#424242;
	   font-family: 'Open Sans', sans-serif;
	   background-color: #ffffff;
	   background-image: url("https://www.transparenttextures.com/patterns/clean-gray-paper.png");
	 }
	 
	 
				 
	 
			 </style>
	</head>
	<body>
		
					<div class="wrap-content container" id="container">
						<section id="page-title">
							<div class="row">
								<div>
									<h1 class="mainTitle" style="text-align: center;">الطلبات الخاصة بي</h1>
																	
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<form action="" method="post">
						<div class="container-fluid container-fullw bg-white">
						

									<div class="row">
								<div class="col-md-12">
									
									<table class="table table-hover" id="sample-table-1">
									<thead>
											<tr>
												
												<th>رقم التواصل الخاص</th>
												<th>المدينة و الحي</th>
												<th>وقت وتاريخ الطلب</th>
												<th>رقم هيكل السيارة  </th>
												<th>نوع السيارة</th>
												<th>نوع  الخدمة</th>
												<th>إسم العميل</th>
												<th>حالة الطلب</th>
												<th>رقم الطلب</th>
												<th>انهاء الطلب</th>




											</tr>
											<?php
$req = "select * from orders where driver='$user'";
$query = mysqli_query($conn,$req);
while($fetch=mysqli_fetch_assoc($query))
{
?>
											<tr>
												
												<td><?php echo $fetch['phone'] ;?></td>
												<td><?php echo $fetch['city'] ;?></td>
												<td><?php echo $fetch['created_at'] ;?></td>
												<td><?php echo $fetch['numcar'] ;?></td>
												<td><?php echo $fetch['car'] ;?></td>
												<td><?php echo $fetch['servic'] ;?></td>
												<td><?php echo $fetch['username'] ;?></td>
												<td><?php echo $fetch['status1'] ;?></td>
												<td><?php echo $fetch['id'] ;?></td>
												<td>
												<?php
	if($fetch['status']==1){
		echo '<p><a href="statusorder1.php?id='.$fetch['id'].'&status=2 &user='.$user.'">تم التنفيذ</a></p>';
	}else{
		echo '<p>منتهي</p>';
	}
	?>
												</td>

											</tr>
										</form>	<?php
			/*	if(isset($_POST['receive']))
    {                header("refresh:0;");

		    $conn = new mysqli(servername, username, password, dbname);


        $username = $fetch['username'];
        
        
        
            $sql = "UPDATE orders 
			SET status='The request has been executed'
			WHERE username='$username';";
            $result = mysqli_query($conn, $sql);
            if ($result == TRUE) 
            {
                        
               mysqli_close($conn);
                echo "Save Ok<br/>";

				//$_SESSION['login_user']=$username;
				//$user = $_SESSION['login_user'];
               // header("location: welcome.php");
            }
            else 
                echo "Save failed<br/>";
    }*/
    
?><?php } ?>
										</thead>
										<tbody>

					</div>
				</div>
				

	</body>
</html>
