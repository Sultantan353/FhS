<?php
   include('session.php');
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
	



	</style>
	<title>لوحة تحكم العميل</title>
  <link rel="stylesheet" type="text/css" href="scc.css"  media="all" />
  <link rel="stylesheet" type="text/css" href="css/style.css"  media="all" />

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
<div class="header" style="background-color: #1e2530;padding: 10px 0px 0px 0px;
">
				<div class="wrap">
				<!--start-logo-->
				<div class="logo">
					<a href="index.html" style="font-size: 30px;color:white">الفحص الدوري</a>
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="top-nav">
					<ul>
						<li class=""><a href="index.php" style="	padding: 20px;">الرئيسية</a></li>
						<li class=""><a href="welcome.php" style="	padding: 20px;">حسابي</a></li>

						<li><a href = "logout.php" style="	padding: 20px;">تسجيل خروج</a></li>
					</ul>					
				</div>
				<div class="clear"> </div>
				<!--end-top-nav-->
			</div>
			<!--end-header-->
		</div><hr style="background-color:#3391E7;height:15px;margin:10px 0px 0px 0px;">
    


	
	<div style="width: 100%;display: flex;background-color:;margin:0px 0px 0px 0px;">
	
	<div style="width: 80%; display: flex;float:left;background-color:;">
	<?php
$a=0;
while($a<=10)
{?>
	<div style="width: 80%; display: flex;background-color:red;">
	knjk
	</div>

<?php
$a++;
 } ?>
    
</div>
<div style="text-align: right;
    font-size: 30px;
	background-color:#1E2530;
    color: white;
    padding: 10px;
    display: flex;
    align-items: right;
    justify-content: right;
    height: ;
    width:20%;">
<div>
			
					<div class="col-sm-4" style="width:100%;">
						<div class="panel panel-white no-radius text-center">
							<div class="panel-body">
								<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary" ></i> <i
										class="fa fa-smile-o fa-stack-1x fa-inverse" ></i> </span>
								<h2 class="StepTitle">حسابي</h2>

								<p class="links cl-effect-1">
									<a href="edit-profile.php">
										معلومات الحساب
									</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4" style="width:100%;">
						<div class="panel panel-white no-radius text-center">
							<div class="panel-body">
								<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i
										class="fa fa-paperclip fa-stack-1x fa-inverse"></i> </span>
								<h2 class="StepTitle">طلباتي</h2>

								<p class="cl-effect-1">
									<!--<a href="appointment-history.php?st=0">
										جميع الطلبات
									</a>-->
									<a href="book.php?st=0">
										جميع الطلبات
									</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4" style="width:100%;">
						<div class="panel panel-white no-radius text-center">
							<div class="panel-body">
								<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i
										class="fa fa-terminal fa-stack-1x fa-inverse"></i> </span>
								<h2 class="StepTitle">طلب جديد</h2>

								<p class="links cl-effect-1">
									<a href="book-appointment.php">
										طلب جديد
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


	
	<hr style="background-color:#3391E7;height:15px;margin:0px 0px 10px 0px;">
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <span>Copyright © 2019, All Right Reserved Seobin</span>
                    </div>
                    <!-- End Col -->
                    <div class="col-md-6">
                        <div class="copyright-menu">
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#">Terms</a>
                                </li>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Copyright Container -->
        </div>

</body>

</html>