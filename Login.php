<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="travel.css">
</head>
<center><body
    style="background: green;">
	<h2 class="h2">Hope your holidays are going fantastic !</h2>
	
	<h2 class="h2">Check here for the travel facility.</h2>
	<form action="login.php" method="post">
	   <table>
		<tr>
		    <td>Password</td>
		    <td><input type="password" name="password"></td>
		</tr>
		<tr>
		    <td>Email Id</td>
		    <td><input type="text" name="email"></td>
		</tr>
	   </table>
		<input type="submit" name="signin" value="Login"></tr>
	</form>
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
    
     if(isset($_POST["signin"]))
     {
     	//header("Location: google.com");
     	$pass=$_POST["password"];
     	$emailid=$_POST["email"];

     	$sql = 'SELECT * FROM user';  
        $retval=mysqli_query($conn, $sql);  
  
         if(mysqli_num_rows($retval) > 0){  
         while($row = mysqli_fetch_assoc($retval)){  
           if($row['email']==$emailid) {
              if($row['password']==$pass){
                header("Location: index.php");
             }
           }
         } //end of while
        echo "Enter your detais properly";  
      }
  
     }
     mysqli_close($conn);  
?>