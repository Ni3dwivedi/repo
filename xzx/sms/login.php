<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome to login form</title>
</head>

<body background="images/download.jpg">
<h1><font color="#FF9900"><center> <i>Welcome to Login Page</i></center> </font></h1>
<br><br></center>

<center><fieldset style="width:300px" ;>
<legend><font color="#33CCCC" size="+3">Login Form</font></legend><br>
<form  action="login.php" method="post">
<label><font color="#FF0066">Username :&nbsp;&nbsp;</font></label>
<input type="text" name="username" placeholder="Please Enter Username" required><br><br>
<label><font color="#FF0066">Password :&nbsp;&nbsp;</font></label>
<input type="password" name="Pass" placeholder="Please Enter Your password" required>
<br><br>
<label><font color="#FF0066"></font></label>
<input type="submit" name="submit" value="login"  >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label><font color="#FF0066"></font></label>
<input type="reset" name="Cancel"  >



</form><br><br>
<a href="home.php">Click here to register</a>
</fieldset>


</center>

</body>
</html>
<?php
   include('dbcon.php');
   
   if(isset($_POST['login']))
   
   {
	   $username=$_POST['username'];
	   $password=$_POST['pass'];
	   $qry="SELECT * FROM `admin` WHERE  'username'='' AND 'password'=''";
	   $run=mysqli_query($con,$qry);
	   $row=mysqli_num_rows($run);
	   if($row>1)
	   {
		   ?>
		   
           <script>alert('username and password not match!!');
		   window.open('index.php','_self');
           </script>
           
           
		   }
	   
	   }

?>