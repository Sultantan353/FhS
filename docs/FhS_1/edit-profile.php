<?php
 // include('welcome.php');

 include('session.php');
  $user = $_SESSION['login_user'];
  $st=$_GET['st'];

?>
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

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>
	<?php
if($st==1){?>
<script>
			   swal({
				title: "تم تحديث بياناتك بنجاح",
            text: "يمكنك رؤية بياناتك من صفحة حسابي",
            icon: "success",
            button: null,
            timer: 5000
				   
				 });
				 
				 </script>

<?php header("Refresh:5; url=edit-profile.php?st=0");
};
?>
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
						<li class=""><a href="welcome.php" style="	padding: 20px;">حسابي</a></li>

						<li><a href = "logout.php" style="	padding: 20px;">تسجيل خروج</a></li>
					</ul>					
				</div>
				<div class="clear"> </div>
				<!--end-top-nav-->
			</div>
			<!--end-header-->
		</div><hr style="background-color:#3391E7;height:15px;margin:10px 0px 0px 0px;">

	<div>
		<div class="wrap-content container" style="width: 500px;">
			<section id="page-title">
				<div>
					<h1 class="mainTitle" style="text-align: center;"> معلومات الحساب</h1>
				</div>
			</section>
			<div>
				<div class="row" dir="rtl">
					<div>
						<div>
							<div>
								<div class="panel panel-white">
									<div class="panel-heading">
										<h5 class="panel-title">معلومات الحساب</h5>
									</div>
									<div class="panel-body">
									<?php

$req = "select * from login where username='$user'";
$query = mysqli_query($conn,$req);
while($fetch=mysqli_fetch_assoc($query))
{
?>
										<form action="" method="post">


											<div class="form-group">
												<label for="fname">
													اسم المستخدم
												</label>
												<input type="text" name="fname" class="form-control"  value="<?php echo $fetch['username'] ;?>">
											</div>


											<div class="form-group">
												<label for="address">
													المدينة
												</label>
												<input type="text" name="city" class="form-control"  value="<?php echo $fetch['city'] ;?>">
											</div>
											<div class="form-group">
												<label for="city">
													العمر
												</label>
												<input type="text" name="age" class="form-control"  value="<?php echo $fetch['age'] ;?>">
											</div>

								<!--			<div class="form-group">
												<label for="fess">
													كلمة المرور 
												</label>
												<input type="text" name="password" class="form-control"
													 value="<?php echo $fetch['password1'] ;?>">
											</div>
-->
											<div class="form-group">
												<label for="fess">
													البريد الالكتروني
												</label>
												<input type="email" name="uemail" class="form-control"
													readonly="readonly" value="<?php echo $fetch['email'] ;?>">
											</div>
											

											<button class="btn btn-o btn-primary" name="update" type="submit" formaction="statusupdate.php?st=1">إرسال الطلب</button>
<?php
											
    mysqli_close($conn);
?>



											
										</form>
										<?php 
 }
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