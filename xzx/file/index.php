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
			session_start();
			$_SESSION['sid']=$em;
			header("location:dashboard.php");
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

<html>
	<head>
		<title>Login</title>
	</head>

	<body>
		<?php
			if(!empty($_GET['user']))
			{
			echo $_GET['user']." Registration Successfully";
			}
		?>
	
	<form method="post">
		<table border="1px" align="center" bgcolor="skyblue">
			<tr>
				<th colspan=2>Login Panel</th>
			</tr>
			
			<tr>
				<th>Email</th>
				<th><input type="text" name="em"required></th>
			</tr>
			
			<tr>
				<th>Password</th>
				<th><input type="password" name="pass" required></th>
			</tr>
			
			<tr>
				<th colspan=2><input type="submit" name="sub" value="Login"><a href="signup.php"><input type="button" value="signup"></a></th>
			</tr>
		</table>
	</form>
	</body>
</html>









