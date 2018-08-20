<?php

extract($_POST);

if(isset($sub))
{
	if(is_dir("users/$em"))
	{
		echo "Email Already Exist";
	}
	else
	{
		mkdir("users/$em");
		file_put_contents("users/$em/details.txt","$pass\n$un\n$gen\n$city");
		header("location:index.php?user=$un");
	}
}



?>

<html>
	<head>
		<title>Registration</title>
	</head>

	<body>
	
		<form method="post">
		<table border="1px" align="center" bgcolor="lightgreen">
			<tr>
				<th colspan=2>Registration</th>
			</tr>
			
			<tr>
				<th>Name</th>
				<th><input type="text" name="un"required></th>
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
				<th>Gender</th>
				<th><input type="radio" name="gen" value="Male" required>Male<input type="radio" name="gen" value="Female" required>Female</th>
			</tr>
			
			<tr>
				<th>City</th>
				<th><input type="text" name="city" required></th>
			</tr>
			
			<tr>
				<th colspan=2><input type="submit" name="sub"></th>
			</tr>
		</table>
		</form>
	</body>
</html>









