<!DOCTYPE html>
<?php
  //include('welcome.php');

    include('session.php');
   $user = $_SESSION['login_user'];

?>
<html lang="en"  dir="rtl">

<head>
	<title>طلب جديد</title>

	<link rel="stylesheet" type="text/css" href="scc.css"  media="all" />
  <link rel="stylesheet" type="text/css" href="css/style.css"  media="all" />

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
<div class="header" style="background-color: #1e2530;padding: 10px 0px 0px 0px;">
				<div class="wrap">
				<!--start-logo-->
				<div class="logo">
					<a href="index.html" style="font-size: 30px;color:white">الفحص الدوري</a>
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="top-nav">
				<ul>
						<li class=""><a href="welcome.php" style="	padding: 20px;">حسابي</a></li>

						<li><a href = "logout.php" style="	padding: 20px;">تسجيل خروج</a></li>
					</ul>						
				</div>
				<div class="clear"> </div>
				<!--end-top-nav-->
			</div>
			<!--end-header-->
		</div><hr style="background-color:#3391E7;height:15px;margin:10px 0px">
    <br><br>
	<div id="app" >
		<div class="app-content" >
			<div>
				<div  class="wrap-content container" style="width: max-content;">
				<section id="page-title">
				<div>
					<h1 class="mainTitle" style="text-align: center;"> طلب جديد</h1>
				</div>
			</section>
					<div class="container-fluid container-fullw bg-white">
						<div class="row">
							<div>

								<div class="row margin-top-30">
									<div class="col-lg-8 col-md-12">
										<div class="panel panel-white" style="width: 450px;">
											<div class="panel-heading" dir="rtl">
												<h5 class="panel-title">طلب جديد</h5>
											</div>
											<div class="panel-body" dir="rtl">
												<form action="" method="post">



													<div class="form-group" >
														<label for="DoctorSpecialization">
															إختر الخدمة 
														</label>
														<select required="required" class="form-control"
															onChange="getdoctor(this.value);" required="required" name="servic">
															<option value="">قائمة الخدمات</option>
															<option value="خدمة الفحص الدوري">خدمة الفحص الدوري</option>
															<option value="خدمة الفحص الدوري والصيانة">خدمة الفحص الدوري والصيانة</option>
														</select>
													</div>




													<div class="form-group">
														<label for="doctor">
															نوع السيارة
														</label>
														<input class="form-control" name="car" required="required" type="text" placeholder="إسم المركبة والموديل">
													</div>





													<div class="form-group">
														<label for="consultancyfees">
															رقم هيكل السيارة
														</label>
														<input type="text" name="numcar" class="form-control" required="required" placeholder="الرقم التسلسلي">

														
													</div>
													
													<div class="form-group">
														<label >
															المدينة 
														</label>
														<input type="text" name="city" required="required" class="form-control">

														
													</div>
													<div class="form-group">
														<label >
															الرقم الخاص بالتواصل
														</label>
														<input type="text" name="phone" required="required" class="form-control">

														
													</div>
														

														
													<button class="btn btn-o btn-primary" name="a" type="submit" formaction="statusbook.php?st=1">إرسال الطلب</button>

													<!--<input type="submit" name="a" class="btn btn-o btn-primary">-->
												</form>


											</div>
										</div>
									</div>

								</div>
							</div>

						</div>
					</div>


				</div>
			</div>
		</div>
		
	</div>
	<hr style="background-color:#3391E7;height:15px;margin:150px 0px 10px 0px;">
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