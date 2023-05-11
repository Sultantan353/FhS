<?php
    include("driverconfig.php");
    session_start();
    $error="";
    if(isset($_POST['submit']))
    {
        $myusername = $_POST['username'];
        $mypassword =$_POST['password']; 
        //$mystatus = 1and status = '$mystatus'; 

        $sql = "SELECT username,password1 FROM driver WHERE 
        username = '$myusername' and password1 = '$mypassword'";
        $result=mysqli_query($conn, $sql);
        if (mysqli_num_rows($result)>0)
        {
            $_SESSION['login_user'] = $myusername;
            header("location: driverwelcome.php");
        }
        else 
            $error =  "Your Login Name or Password is invalid";
        
    mysqli_close($conn);
   }
?>
<html lang="en">

<head>
	<title>معلومات الحساب</title>

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
<div>
		<div class="wrap-content container" style="width: 500px;">
			<section id="page-title">
				<div>
					<h1 class="mainTitle" style="text-align: center;">تسجيل الدخول</h1><h2 style="text-align: right;"><a href = "index.php">رجع إلى الخلف</a></h2>
				</div>
			</section>
			<div>
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

											
											

											<input type="submit" name="submit" value="تسجيل الدخول" class="btn btn-o btn-primary"><h6 style="text-align: center;"><a   href="driverreg.php">مستخدم جديد</a></h6>

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
   <!-- <div class="box">
   <form action = "" method = "post">
      <h1>UserName  :</h1><input type = "text" name = "username" class="email"/><br /><br />
      <h1>Password  :</h1><input type = "password" name = "password" class="password"/><br/><br />
      <input type = "submit" name="submit" value = " Submit " id="btn2"/><br />
</form>
<a href="driverreg.php">New user</a>

    <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
 </div>  -->
</body></html>
