<!doctype html>
<html>
<head>
<?php
ini_set('display_errors',0);
$abc=$_POST['char'];
if($abc=="a")
{
	echo"$abc"." is a vovel";
	}
     elseif($abc=="e")
	 {
		 	echo"$abc"." is a vovel"; 
		 }
		      elseif($abc=="i")
	 {
		 	echo"$abc"." is a vovel"; 
	 }    
	  elseif($abc=="o")
	 {
		 	echo"$abc"." is a vovel"; 

	 }
	      elseif($abc=="u")
	 {
		 	echo"$abc"." is a vovel"; 
	 }
	 else{
		 echo $abc." is consonet";
		 }
?>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form  method="post">
<input type="text" name="char"><br/>
<input type="submit" value="check no">

</body>
</html>