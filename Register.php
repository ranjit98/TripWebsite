<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  
  filter: blur(8px);
  
  height: 100%; 
  
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.bg-text {
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0, 0.4); 
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}

.home
{
  position: relative;
  top: 10px;
}
</style>
</head>
<body>
<center>
<div class="bg-image"></div>

<div class="bg-text">
  <h2>Hope you are enjoying your holidays !</h2>
  <h2 style="font-size:50px">Check here for the hotel facility.</h2>
  <form action="Register.php" method="post">
    Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;: &nbsp;&nbsp;<input type="text" name="name"/><br/><br/>
    Password &nbsp;&nbsp; : &nbsp; <input type="password" name="password"><br/><br/>
    Email Id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;<input type="text" name="email"><br/><br/>
    <input type="submit" name="signup" value="Register">
  </form>
</div>
<br>
<br>

</body></center>
</html>
<?php
    $conn = mysqli_connect("localhost","root","");  
    if(! $conn )  
    {  
      die('Could not connect: ' . mysqli_connect_error());  
    }  
    echo 'Connected successfully<br/>';  

     mysqli_select_db($conn,"reg");
     
 if($_POST["name"]){
     $name=$_POST["name"];
    $pass=$_POST["password"];
     $emailid=$_POST["email"];
 }

     if(isset($_POST["signup"]))
     {
      $query="insert into user(name,password,email) values('$name','$pass','$emailid')";
      if(mysqli_query($conn,$query))
      {
        echo "<h2>You have registered sucessfully !</h2>";
      }
     }
    mysqli_close($conn);  
?>
