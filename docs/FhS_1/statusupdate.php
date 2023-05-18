<?php
//include('config.php');

  //include('welcome.php');

    include('session.php');
   $user = $_SESSION['login_user'];
   $st=$_GET['st'];
   

   if($st==1){?>
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
                header("location: edit-profile.php?st=1;");
            }
            else 
                echo "Save failed<br/>";
        
    }
    mysqli_close($conn);
?>



											
										</form>
										<?php 
 
 ?>
   <?php
}

?>
<html><!--header("location: appointment-history.php?st=1;");
<head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>


<body>
<script>
				swal({
					title: "تم إنشاء الطلب بنجاح",
					text: "يمكنك مشاهدة تفاصيل الطلب في قائمة طلباتي",
					icon: "success",
                    
				  });
				  
				  </script>
</body>-->
</html>
<?php //header("location: appointment-history.php");
 header('Refresh: 5; URL=appointment-history.php'); ?>


