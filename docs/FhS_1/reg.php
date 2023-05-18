<html lang="en">

<head>
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
						<li class=""><a href="index.php" style="	padding: 20px;">الرئيسية</a></li>
						
						<li><a href = "index.php" style="	padding: 20px;">رجوع للخلف</a></li>
					</ul>					
				</div>
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
					<h1 class="mainTitle" style="text-align: center;">إنشاء حساب جديد</h1>
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
											

											<input type="submit" name="register" class="btn btn-o btn-primary">
											<button class="btn btn-o btn-primary" type="submit" formaction="index.php">الرئيسية</button>




											
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
   <!-- <div class="box">
   <form action = "" method = "post">
      <h1>UserName  :</h1><input type = "text" name = "username"class="email"/><br /><br />
      <h1>city  :</h1><input type = "text" name = "city"class="email"/><br /><br />
      <h1>age  :</h1><input type = "text" name = "age"class="email"/><br /><br />
      <h1>E-mail  :</h1><input type = "text" name = "email" class="email"/><br /><br />
      <h1>Password  :</h1><input type = "password" name = "password" class="password"/><br/><br />
      <input type = "submit" name="register" value = "Register" id="btn2"/><br />
   </form>
</div>-->
</body></html>
<?php
    include("config.php");
    if(isset($_POST['register']))
    {
        $username = $_POST['username'];
        $city = $_POST['city'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $sqlcheck = "SELECT username FROM login WHERE username = '$username'";
        $resultcheck = mysqli_query($conn, $sqlcheck); 
        if (mysqli_num_rows($resultcheck) > 0)
            echo ("user name already taken");
        else
        {
            $sql = "INSERT INTO login(username,city,age,password1,email)
            VALUES('$username','$city','$age','$password','$email')";
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
