<?php
    define('servername' , 'localhost');
    define('username' , 'root');
    define('password' , '');
    define('dbname' , 'FhS');
    $conn = new mysqli(servername, username, password, dbname);
?>
<html lang="en">
	<head>
		<title>جميع الطلبات</title>
		
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
									<h1 class="mainTitle" style="text-align: center;">جميع الطلبات</h1>
																	</div>
								
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
						

									<div class="row">
								<div class="col-md-12">
									<h5 class="over-title margin-bottom-15"> <span class="text-bold"></span></h5>
									<table class="table table-hover" id="sample-table-1">
										<thead>
											<tr>
											<!--	<th class="center">االتسلسل</th> -->
											
                                            <th class="hidden-xs">تاريخ الطلب</th>
                                            <th class="hidden-xs">المدينة</th>
                                            <th class="hidden-xs">جوال العميل</th>
                                            <th class="hidden-xs">رقم هيكل السيارة</th>
                                            <th class="hidden-xs">نوع السيارة</th>
                                            <th class="hidden-xs">نوع الخدمة</th>
                                            <th class="hidden-xs">اسم مقدم الخدمة</th>
                                            <th class="hidden-xs">اسم العميل</th>
                                            <th class="hidden-xs">حالة الطلب</th>
                                            <th class="hidden-xs">رقم الطلب</th>
												
												
											</tr>
										</thead>
										<tbody>
										<?php

$req = "select * from orders";
$query = mysqli_query($conn,$req);
while($fetch=mysqli_fetch_assoc($query))
{
?>
<tr>
<td><?php echo $fetch['created_at'] ;?></td>
<td><?php echo $fetch['city'] ;?></td>
<td><?php echo $fetch['phone'] ;?></td>
<td><?php echo $fetch['numcar'] ;?></td>
<td><?php echo $fetch['car'] ;?></td>
<td><?php echo $fetch['servic'] ;?></td>
<td><?php echo $fetch['driver'] ;?></td>
<td><?php echo $fetch['username'] ;?></td>
<td><?php echo $fetch['status1'] ;?></td>
<td><?php echo $fetch['id'] ;?></td>
</tr>
<?php 
 }?>								
										</tbody>
									</table>
								</div>
							</div>
								</div>
							</div>
						</div>
						<!-- end: BASIC EXAMPLE -->
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			
	</body>
</html>
