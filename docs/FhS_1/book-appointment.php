<!DOCTYPE html>
<?php
   include('session.php');
   $user = $_SESSION['login_user'];
?>
<html lang="en">

<head>
	<title>طلب جديد</title>

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
	<div id="app">
		<div class="app-content">
			<div>
				<div class="wrap-content container" style="width: max-content;">
				<section id="page-title">
				<div>
					<h1 class="mainTitle" style="text-align: center;"> طلب جديد</h1><h2 style="text-align: right;"><a href = "welcome.php">رجع إلى الخلف</a></h2>
				</div>
			</section>
					<div class="container-fluid container-fullw bg-white">
						<div class="row">
							<div>

								<div class="row margin-top-30">
									<div class="col-lg-8 col-md-12">
										<div class="panel panel-white" style="width: 450px;">
											<div class="panel-heading">
												<h5 class="panel-title">طلب جديد</h5>
											</div>
											<div class="panel-body">
												<form action="" method="post">



													<div class="form-group">
														<label for="DoctorSpecialization">
															إختر الخدمة 
														</label>
														<select required="required" class="form-control"
															onChange="getdoctor(this.value);" required="required" name="servic">
															<option value="">قائمة الخدمات</option>
															<option value="Periodic inspection service">Periodic inspection service</option>
															<option value="Periodic inspection and maintenance service">Periodic inspection and maintenance service</option>
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
														

														
												
													<input type="submit" name="a" class="btn btn-o btn-primary">
												</form>
												<?php

if(isset($_POST['a']))
    {
        $servic = $_POST['servic'];
        $car = $_POST['car'];
        $numcar = $_POST['numcar'];
        $city = $_POST['city'];
        $phone = $_POST['phone'];
        
  /*      $req = "INSERT INTO orders(servic,car,numcar,city,phone)
		VALUES('$servic','$car','$numcar','$city','$phone')";
$query = mysqli_query($conn,$req);*/
            $sql = "INSERT INTO orders(status,status1,username,servic,car,numcar,city,phone)
            VALUES(0,'new','$user','$servic','$car','$numcar','$city','$phone')";
            $result = mysqli_query($conn, $sql);
            if ($result == TRUE) 
            {
                //header("location: welcome.php");
               // echo "تم انشاء الطلب<br/>";
            }
            else 
                echo "خطأ<br/>";
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
		
	</div>
	
</body>

</html>
