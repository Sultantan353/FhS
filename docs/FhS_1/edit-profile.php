<?php
  include('welcome.php');

 //include('session.php');
  //$user = $_SESSION['login_user'];
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
					<h1 class="mainTitle" style="text-align: center;"> معلومات الحساب</h1><h2 style="text-align: right;"><a href = "welcome.php">BACK</a></h2>
				</div>
			</section>
			<div>
				<div class="row">
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
											

											<input type="submit" name="update" class="btn btn-o btn-primary">
<?php
											if(isset($_POST['update']))
    {
		

        $username = $_POST['fname'];
        $city = $_POST['city'];
        $age = $_POST['age'];
        $email = $_POST['uemail'];
     //   $password = $_POST['password'];
        
        
            $sql = "UPDATE login 
			SET username='$username',city='$city',age='$age'
			WHERE email='$email';";
            $result = mysqli_query($conn, $sql);
            if ($result == TRUE) 
            {
                //echo "Save Ok<br/>,password1='$password'";
				$_SESSION['login_user']=$username;
				$user = $_SESSION['login_user'];
                header("location: edit-profile.php");
            }
            else 
                echo "Save failed<br/>";
        
    }
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
</body>

</html>