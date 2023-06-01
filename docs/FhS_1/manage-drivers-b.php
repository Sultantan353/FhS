<?php
    define('servername' , 'localhost');
    define('username' , 'root');
    define('password' , '');
    define('dbname' , 'FhS');
    $conn = new mysqli(servername, username, password, dbname);
?>
<html lang="en">
	<head>
		<title>جميع مقدمين الخدمة</title>
		
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
							<form action="" method="post">
							<div class="row">
								<div>
									<h1 class="mainTitle" style="text-align: center;">جميع مقدمين الخدمة</h1>
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
											<th>التاريخ</th>

											<th>البريد الالكترني</th>
												<th class="hidden-xs">العمر</th>
												<th>المدينة</th>
												<th>إسم السائق</th>
												<th>حالة السائق</th>
												<th>رقم السائق</th>
												<th>تفعيل السائق</th>



												
											</tr>
										</thead>
										<tbody>
										<?php

$req = "select * from login WHERE role='2'";
$query = mysqli_query($conn,$req);
while($fetch=mysqli_fetch_array($query))
{
?>
<tr>
<td><?php echo $fetch['created_at'] ;?></td>
<td><?php echo $fetch['email'] ;?></td>
<td><?php echo $fetch['age'] ;?></td>
<td><?php echo $fetch['city'] ;?></td>
<td><?php echo $fetch['username'] ;?></td>
<td><?php echo $fetch['status1'] ;?></td>
<td><?php echo $fetch['id'] ;?></td>
<td>
	<?php
	if($fetch['status']==1){
		echo '<p><a href="status.php?id='.$fetch['id'].'&status=0">إلغاء التفعيل</a></p>';
	}else{
		echo '<p><a href="status.php?id='.$fetch['id'].'&status=1">تفعيل</a></p>';
	}
	?>
</td>


</tr>
<form>
	<?php
/*	if(isset($_POST['receive']))
    {				

    $conn = new mysqli(servername, username, password, dbname);

        $username = $fetch['username'];
        
        
        
            $sql = "UPDATE driver 
			SET status='authorized'
			WHERE username='$username';";
            $result = mysqli_query($conn, $sql);
            if ($result == TRUE) 
            {


                echo "Save Ok<br/>";
				header("refresh:0;");

				//$_SESSION['login_user']=$username;
				//$user = $_SESSION['login_user'];
               // header("location: welcome.php");
            }
            else{                echo "Save failed<br/>";
} 
       				
 				

    }
	*/?>
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
