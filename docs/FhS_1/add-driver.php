<!DOCTYPE html>
<html lang="en">

<head>
	<title>إضافة سائق جديد</title>

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
						<div class="row">
							<div class="col-sm-8">
								<h1 class="mainTitle">إضافة سائق جديد</h1>

					</section>
					<div class="container-fluid container-fullw bg-white">
						<div class="row">
							<div>

								<div class="row margin-top-30">
									<div class="col-lg-8 col-md-12">
										<div class="panel panel-white" style="width: 450px;">
											<div class="panel-heading">
												<h5 class="panel-title">سائق جديد</h5>
											</div>
											<div class="panel-body">
												<form>



													<div class="form-group">
														<label for="DoctorSpecialization">
															نوع الرخصة 
														</label>
														<select required="required" class="form-control"
															onChange="getdoctor(this.value);" required="required">
															<option value="">قائمة الرخص</option>
															<option value="">رخصة عمومي</option>
															<option value="">رخصة خاصة</option>
														</select>
													</div>




													<div class="form-group">
														<label for="doctor">
															الاسم الاول 
														</label>
														<input class="form-control" required="required" type="text">
													</div>





													<div class="form-group">
														<label for="consultancyfees">
															الاسم الاخير
														</label>
														<input type="text" class="form-control" required="required">

														
													</div>
													
													<div class="form-group">
														<label>
															العمر
														</label>
														<input class="form-control datepicker" type="text"
															required="required" >

													</div>

													
													<div class="form-group">
														<label >
															المدينة والحي
														</label>
														<input type="text" required="required" class="form-control">

														
													</div>
													<div class="form-group">
														<label >
															الرقم الخاص بالتواصل
														</label>
														<input type="text" required="required" class="form-control">

														
													</div>
														

														
												
													<button type="submit" name="submit" class="btn btn-o btn-primary">
														إضافة سائق
													</button>
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
	
</body>

</html>