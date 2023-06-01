<?php
    include("config.php");
    session_start();
    $error="";
    if(isset($_POST['submit']))
    {
        $myusername = $_POST['username'];
        $mypassword =md5($_POST['password']); 
        // 1 is the admin role, 2 is the driver role , 3 is for the normal user role. 
        $sql = "SELECT username,password1,role FROM login WHERE 
        username = '$myusername' and password1 = '$mypassword'";
        $result=mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);
        if (mysqli_num_rows($result)>0)
        {
			if ($row["role"]==1){

				$_SESSION['login_user'] = $myusername;
            	header("location: adminwelcome.php");	
			}
			else if ($row["role"]==2) {
				$_SESSION['login_user'] = $myusername;
				header("location: driverwelcome.php");
			}
			else if ($row["role"]==3) {
				$_SESSION['login_user'] = $myusername;
				header("location: welcome.php");
			}

            // $_SESSION['login_user'] = $myusername;
            // header("location: welcome.php"); 
        }
        else 
            $error =  "Your Login Name or Password is invalid";
            $error =  "Your Login Name or Password is invalid";
        
    mysqli_close($conn);
   }
?>
<html lang="en">

<head>
<style>
			</style>
	<title>معلومات الحساب</title>
	
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
						<li class=""><a href="index.php" style="	padding: 20px;font-size:30px;">الرئيسية</a></li>
                        <li class=""><a href="reg.php" style="	padding: 20px;font-size:30px;">إنشاء حساب مستفيد</a></li>
                        <li class=""><a href="driverreg.php" style="	padding: 20px;font-size:30px;">إنشاء حساب مقدم خدمة</a></li>

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
		</div><hr style="background-color:#3391E7;height:15px;margin:10px 0px">
    <br><br>
<div>
		<div class="wrap-content container" style="width: 500px;">
			<section id="page-title">
				<div>
					<h1 class="mainTitle" style="text-align: center;">تسجيل الدخول</h1><h2 style="text-align: right;"><!--<a href = "index.php">BACK</a></h2>-->
				</div>
			</section>
			<div dir="rtl">
				<div class="row">
					<div>
						<div>
							<div>
								<div class="panel panel-white">
									<div class="panel-heading">
										<h5 class="panel-title">تسجيل الدخول</h5>
									</div>
									<div class="panel-body">
									
										<form action="" method="post">


											<div class="form-group">
												<label for="fname">
													اسم المستخدم
												</label>
												<input type="text" name="username" class="form-control">
											</div>


											
											

											<div class="form-group">
												<label for="fess">
													كلمة المرور 
												</label>
												<input type="password" name="password" class="form-control">
											</div>

											
											

											<input type="submit" name="submit" value="تسجيل الدخول" class="btn btn-o btn-primary">
											<button class="btn btn-o btn-primary" name="a" type="submit" formaction="reg.php">إنشاء حساب مستفيد</button>
											<button class="btn btn-o btn-primary" name="a" type="submit" formaction="driverreg.php">إنشاء حساب مقدم خدمة</button>

			<!--<a   href="reg.php">إنشاء حساب جديد</a>-->
											

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
	<hr style="background-color:#3391E7;height:15px;margin:150px 0px 10px 0px;">
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
                                    <a href="index.php">الرئيسية</a>
                                </li>
                                <li>
                                    <a href="reg.php">إنشاء حساب مستفيد</a>
                                </li>
								<li>
                                    <a href="driverreg.php">إنشاء حساب مقدم خدمة</a>
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
</body></html>

