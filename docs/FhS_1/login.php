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
											<input type="submit" name="reg" value="إنشاء حساب جديد" class="btn btn-o btn-primary">
											<?php if (isset($_POST['reg'])) 
            {
                
                header("location: reg.php");
            } 
			?> 
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
  <!--  <div class="box">
   <form action = "" method = "post">
      <h1>UserName  :</h1><input type = "text" name = "username" class="email"/><br /><br />
      <h1>Password  :</h1><input type = "password" name = "password" class="password"/><br/><br />
      <input type = "submit" name="submit" value = " Submit " id="btn2"/><br />
</form>
   <a href="reg.php">New user</a>
    <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
 </div>  -->
</body></html>

