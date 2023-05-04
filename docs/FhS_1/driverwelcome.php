<?php
   include('driversession.php');
   $user = $_SESSION['login_user'];
?>
<html>
<head>
      <style> 
      body{
  font-family: 'Open Sans', sans-serif;
  background:#ecf0f1;
  margin: 0 auto 0 auto;  
  width:100%; 
  text-align:center;
  margin: 20px 0px 20px 0px;   
}
h1{
  font-size:1.5em;
  color:#525252;
}
.box{
  background:white;
  width:300px;
  border-radius:6px;
  margin: 0 auto 0 auto;
  padding:0px 0px 70px 0px;
  border: #2980b9 4px solid; 
}

        </style>
    </head>
 <!--  <body>
      <div class="box">
      <h1>Welcome</h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
</div>

   </body>-->
</html>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>لوحة تحكم السائق</title>

	<link
		href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
		rel="stylesheet" type="text/css" />
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


</head>

<body>



		<div class="wrap-content container">
			<section id="page-title">
				<div class="row">
					<div>
						<h1 style="text-align: right;"><b><?php echo $user;?></b></h1>
						<h1>لوحة تحكم مقدم الخدمة<h2 style="text-align: right;"><a href = "driverlogout.php">Sign Out</a></h2></h1>

					</div>

				</div>
			</section>


			<div class="container-fluid container-fullw bg-white">
				<div class="row">
					<div class="col-sm-4">
						<div class="panel panel-white no-radius text-center">
							<div class="panel-body">
								<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i
										class="fa fa-smile-o fa-stack-1x fa-inverse"></i> </span>
								<h2 class="StepTitle">حسابي</h2>

								<p class="links cl-effect-1">
									<a href="edit-profile-a.php">
										معلومات الحساب
									</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="panel panel-white no-radius text-center">
							<div class="panel-body">
								<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i
										class="fa fa-paperclip fa-stack-1x fa-inverse"></i> </span>
								<h2 class="StepTitle">الطلبات الجديدة</h2>

								<p class="cl-effect-1">
									<a href="appointment-history-a.php">
										الطلبات الجديدة  
									</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="panel panel-white no-radius text-center">
							<div class="panel-body">
								<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i
										class="fa fa-paperclip fa-stack-1x fa-inverse"></i> </span>
								<h2 class="StepTitle">طلباتي</h2>

								<p class="cl-effect-1">
									<a href="appointment-history-mya.php">
										الطلبات الخاصة بي 
									</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

</body>

</html>