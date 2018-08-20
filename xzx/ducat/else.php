<!doctype html>
<html>
<head>
<?php
ini_set('display_errors',0);
$abc=$_POST['no'];
if($abc>0)
{
	echo"$abc"."is a positive number";
	}
     else{
		 	echo"$abc"."is a negative number";

		 
		 }

?>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post">
<input type="text" name="no"><br/>
<input type="submit" value="check no">

</body>
</html>