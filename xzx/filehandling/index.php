<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome to login form</title>
<?php
extract($_POST);

if(isset($sub))
{
	if(is_dir("users/$em"))
	{
		$fo=fopen("users/$em/details.txt","r");
		$password=trim(fgets($fo));
		if($pass==$password)
		{
			header("location:da.php");
		}
		else
		{
			echo "Enter Correct Password";
		}
	}
	else
	{
		echo "Enter Correct Email";
	}
}

?>
</head>

<body background="images/download.jpg">
<h1><font color="#FF9900"><center> <i>Welcome to Login Page</i></center> </font></h1>
<br><br></center>

<center><fieldset style="width:300px" ;>
<legend><font color="#33CCCC" size="+3">Login Form</font></legend><br>
<form name="f1" action="" method="post">
<label><font color="#FF0066">Email :&nbsp;&nbsp;</font></label>
<input type="text" name="em" placeholder="Please Enter Your Email" required><br><br>
<label><font color="#FF0066">Password :&nbsp;&nbsp;</font></label>
<input type="password" name="Pass" placeholder="Please Enter Your password" required>
<br><br>
<label><font color="#FF0066"></font></label>
<input type="submit" name="sub"  >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label><font color="#FF0066"></font></label>
<input type="reset" name="Cancel"  >



</form><br><br>
<a href="home.php">Click here to register</a>
</fieldset>


</center>

</body>
</html>