<html lang="en">

<head>
	<?php ?>
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
                        <li class=""><a href="driverreg.php" style="	padding: 20px;font-size:30px;">إنشاء حساب مقدم خدمة</a></li>
						<li class=""><a href="login.php" style="	padding: 20px;font-size:30px;">تسجيل الدخول</a></li>

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
					<h1 class="mainTitle" style="text-align: center;">إنشاء حساب مستفيد</h1>
				</div>
			</section>
			<div dir="rtl">
				<div class="row">
					<div>
						<div>
							<div>
								<div class="panel panel-white">
									<div class="panel-heading">
										<h5 class="panel-title">إنشاء حساب جديد</h5>
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
												<label for="address">
													المدينة
												</label>
												<input type="text" name="city" class="form-control">
											</div>
											<div class="form-group">
												<label for="city">
													العمر
												</label>
												<input type="text" name="age" class="form-control">
											</div>

											<div class="form-group">
												<label for="fess">
													كلمة المرور 
												</label>
												<input type="password" name="password" class="form-control">
											</div>

											<div class="form-group">
												<label for="fess">
													البريد الالكتروني
												</label>
												<input type="email" name="email" class="form-control"
													>
											</div>
											

											<input type="submit" name="register" value="إنشاء الحساب" class="btn btn-o btn-primary">




											
										</form>
										<?php
    include("config.php");
    if(isset($_POST['register']))
    {
        $username = $_POST['username'];
        $city = $_POST['city'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        
        $sqlcheck = "SELECT username FROM login WHERE username = '$username'";
        $resultcheck = mysqli_query($conn, $sqlcheck); 
        if (mysqli_num_rows($resultcheck) > 0)
            echo ("user name already taken");
        else
        {
            $sql = "INSERT INTO login(status,status1,username,city,age,password1,email,role)
            VALUES(3,'عميل','$username','$city','$age','$password','$email',3)";
            $result = mysqli_query($conn, $sql);
            if ($result == TRUE) 
            {
                //echo "Save Ok<br/>";
                header("location: login.php");
            }
            else 
                echo "Save failed<br/>";
        }
    }
    mysqli_close($conn);
?>
 
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
                                    <a href="driverreg.php">إنشاء حساب مقدم خدمة</a>
                                </li>
								<li>
                                    <a href="login.php">تسجيل دخول</a>
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
