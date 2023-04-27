<?php
    include("driverconfig.php");
    session_start();
    $error="";
    if(isset($_POST['submit']))
    {
        $myusername = $_POST['username'];
        $mypassword =$_POST['password']; 
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

#btn2:hover{ 
background:#3594D2; 
} 
        </style>
    </head>
<body>
    <div class="box">
   <form action = "" method = "post">
      <h1>UserName  :</h1><input type = "text" name = "username" class="email"/><br /><br />
      <h1>Password  :</h1><input type = "password" name = "password" class="password"/><br/><br />
      <input type = "submit" name="submit" value = " Submit " id="btn2"/><br />
</form>
    <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
 </div>  
</body></html>
