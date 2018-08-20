<?php

$colour="white";
if(isset($_POST['sub']))
{
	$colour = $_POST['col'];
}


?>

<html>
	<head>
		<title>Sum</title>
	</head>

	<body bgcolor="<?=$colour;?>">
	<form method="post">
		Color : <select name="col">
            <option>Select color </option>		
			<option>Red</option>
			<option>Blue</option>
			<option>Green</option>
		</select>
		 <br/>
		 <input type="submit" name="sub">
	</form>
	</body>
</html>
