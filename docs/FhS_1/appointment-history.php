<!DOCTYPE html>
<?php
  //  include('welcome.php');

  include('session.php');
   $user = $_SESSION['login_user'];
   $st=$_GET['st'];

   ?>
<html lang="en">
	<head>
	<link rel="stylesheet" type="text/css" href="scc.css"  media="all" />
  <link rel="stylesheet" type="text/css" href="css/style.css"  media="all" />

		<title>طلباتي</title>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
	
<?php 
if($st==1){?>
<script>
			   swal({
				title: "تم إنشاء الطلب بنجاح",
            text: "يمكنك مشاهدة طلبك في قائمة طلباتي",
            icon: "success",
            button: null,
            timer: 5000
				   
				 });
				 
				 </script>

<?php header("Refresh:5; url=appointment-history.php?st=0");
};
?>
		
					<div class="wrap-content container" id="container" style="margin-bottom: 30px;">
						<section id="page-title">
							<div class="row"style="margin-bottom: 30px;">
								<div>
									<h1 class="mainTitle" style="text-align: center;">طلباتي</h1>
																	
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white" style="margin-bottom: 30px;">
						

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
												<th>اسم  مقدم الخدمة</th>
												<th>حالة  الطلب</th>
												<th>رقم  الطلب</th>

												
											</tr>
											<?php

$req = "select * from orders where username='$user'";
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
												<td><?php echo $fetch['driver'] ;?></td>
												<td><?php echo $fetch['status1'] ;?></td>
												<td><?php echo $fetch['id'] ;?></td>

												
											</tr>
											<?php } ?>
										</thead>
</table>
											

					</div>
				</div>
				</div>

				

	</body>
</html>
