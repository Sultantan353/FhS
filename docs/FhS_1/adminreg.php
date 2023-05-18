<html>
<head>
      <style> 
      body{
  font-family: 'Open Sans', sans-serif;
  background:#ecf0f1;
  margin: 0 auto 0 auto;  
  width:100%; 
  text-align:center;
  margin: 20px 0px 20px 0px;   
}
h1{
  font-size:1.5em;
  color:#525252;
}
      #btn2{
  float:center;
  background:#3498db;
  width:125px;  padding-top:5px;
  padding-bottom:5px;
  color:white;
  border-radius:4px;
  border: #2980b9 1px solid;
  
  margin-top:20px;
  margin-bottom:20px;
  margin-left:10px;
  font-weight:800;
  font-size:0.8em;
}
.box{
  background:white;
  width:300px;
  border-radius:6px;
  margin: 0 auto 0 auto;
  padding:0px 0px 70px 0px;
  border: #2980b9 4px solid; 
}

.email{
  background:#ecf0f1;
  border: #ccc 1px solid;
  border-bottom: #ccc 2px solid;
  padding: 8px;
  width:250px;
  color:#AAAAAA;
  margin-top:10px;
  font-size:1em;
  border-radius:4px;
}

.password{
  border-radius:4px;
  background:#ecf0f1;
  border: #ccc 1px solid;
  padding: 8px;
  width:250px;
  font-size:1em;
}

        </style>
    </head>
    <body>
    <div class="box">
   <form action = "" method = "post">
      <h1>UserName  :</h1><input type = "text" name = "username"class="email"/><br /><br />
      <h1>Password  :</h1><input type = "password" name = "password" class="password"/><br/><br />
        <h1>E-mail  :</h1><input type = "text" name = "email" class="email"/><br /><br />
      <input type = "submit" name="register" value = "Register" id="btn2"/><br />
   </form>
</div>
</body></html>
<?php
    include("adminconfig.php");
    if(isset($_POST['register']))
    {
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $email = $_POST['email'];
        
        $sqlcheck = "SELECT username FROM login WHERE username = '$username'";
        $resultcheck = mysqli_query($conn, $sqlcheck); 
        if (mysqli_num_rows($resultcheck) > 0)
            echo ("user name already taken");
        else
        {
            $sql = "INSERT INTO login(username,password1,email,role)
            VALUES('$username','$password','$email','1')";
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
