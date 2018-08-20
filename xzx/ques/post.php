<?php


if(isset($_POST['sub']))
{
	$num1 = $_POST['n1'];
	$num2 = $_POST['n2'];
	$sum = $num1+$num2;
}


?>

<html>
	<head>
		<title>Sum</title>
	</head>

	<body>
	<form method="post">
		Enter 1st Number <input type="text" name="n1" required value="<?php echo @$num1; ?>">
		<br/>
		Enter 2nd Number <input type="text" name="n2" required value="<?php echo @$num2; ?>">
		<br/>
		Sum <input type="text" name="sum" value="<?php echo @$sum; ?>">
		<br/>
		<input type="submit" name="sub">
	</form>
	</body>
</html>