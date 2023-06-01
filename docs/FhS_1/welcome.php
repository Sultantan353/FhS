<?php
   include('session.php');
   $user = $_SESSION['login_user'];
?>
<html>
<head>
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
 <!-- .embed-responsive iframe {
  background-color:#666;
} <body>
      <div class="box">
      <h1>Welcome</h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
</div>

   </body>-->
</html>
<!DOCTYPE html>
<html lang="en">

<head>
<!---->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

<body style="background-image: url('https://www.transparenttextures.com/patterns/clean-gray-paper.png');">
<div class="header" style="background-color: #1e2530;">
          <div class="logo-container">
 
      <div class="logo-holder logo-2">
        <a href="">
          <i class="fas fa-book-open"></i>
          <div class="left">
            <!--<p>Dolor sit amet...!</p>--><div class="logo">
            <img src="images/pngwing.com (1).png" style="top:0;left:0;" width="100px" height="100px">

                <a href="index.html" style="font-size: 50px;color:white;margin:30px 0px 0px 0px;">الفحص الدوري</a>
            </div>
          </div>
        </a>
      </div>
    
</div>
<div class="top-nav">
					<ul style="margin:35px 50px 0px 0px">
						<li class=""><a href="welcome.php"  style="	padding: 20px;font-size:30px;">الرئيسية</a></li>
                        <li class=""><a href="edit-profile.php?st=0" target="iframe_a" style="	padding: 20px;font-size:30px;">معلومات الحساب</a></li>
                        <li class=""><a href="appointment-history.php?st=0" target="iframe_a" style="	padding: 20px;font-size:30px;">طلباتي</a></li>
						<li class=""><a href="book-appointment.php" target="iframe_a" style="	padding: 20px;font-size:30px;">طلب جديد</a></li>
						<li class=""><a href="logout.php"  style="	padding: 20px;font-size:30px;">تسجيل خروج</a></li>

						<!--<li><a href="contact.php" style="	padding: 20px;">اسشارة طبية</a></li>-->
					</ul>					
				</div>
				<div class="wrap">
                
				<!--start-logo-->
				
				<!--end-logo-->
				<!--start-top-nav-->
				
				<div class="clear"> </div>
				<!--end-top-nav-->
			</div>
			<!--end-header-->
		</div><hr style="background-color:#3391E7;height:15px;margin:10px 0px 0px 0px;">
    


	
	<div style="width: 100%;display: flex;background-color:;margin:0px 0px 0px 0px;">
	<div style="width: 80%; display: flex;float:left;background-color:#ffffff;  background-image: url('https://www.transparenttextures.com/patterns/clean-gray-paper.png');">
	<iframe name="iframe_a" class="embed-responsive-item" style="width: 100%;display: flex;" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
									<a href="edit-profile.php?st=0" target="iframe_a">
										بياناتي
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
									<a href="appointment-history.php?st=0" target="iframe_a">
										جميع الطلبات
									</a>
									<!--<a href="book.php?st=0">
										جميع الطلبات
									</a>-->
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
									<a href="book-appointment.php" target="iframe_a">
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
                        <span style="font-size:20px;">حقوق الطبع والنشر © 2023 ، جميع الحقوق محفوظة</span>
                    </div>
                    <!-- End Col -->
                    <div class="col-md-6">
                        <div class="copyright-menu">
                            <ul style="font-size:20px;">
                                <li>
                                    <a href="welcome.php">الرئيسية</a>
                                </li>
                                <li>
                                    <a href="edit-profile.php?st=0" target="iframe_a">معلومات الحساب</a>
                                </li>
								<li>
                                    <a href="appointment-history.php?st=0" target="iframe_a">طلباتي</a>
                                </li>
								<li>
                                    <a href="book-appointment.php" target="iframe_a">طلب جديد</a>
                                </li>
								<li>
                                    <a href="logout.php">تسجيل خروج</a>
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