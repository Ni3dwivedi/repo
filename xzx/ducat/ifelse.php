<!doctype html>
<html>
<head>
<?php
ini_set('display_errors',0);
$abc=$_POST['char'];
if($abc=="0")
{
	echo"$abc"." sunday";
	}
     elseif($abc=="1")
	 {
		 	echo"$abc"." monday"; 
		 }
		      elseif($abc=="2")
	 {
		 	echo"$abc"." tuesday"; 
	 }    
	  elseif($abc=="3")
	 {
		 	echo"$abc"." wednesday"; 

	 }
	      elseif($abc=="4")
	 {
		 	echo"$abc"." thursday"; 
	 }
	 	  elseif($abc=="5")
	 {
		 	echo"$abc"." friday"; 

	 }
	 	  elseif($abc=="6")
	 {
		 	echo"$abc"." saturday"; 

	 }
	 	  elseif($abc=="7")
	 {
		 	echo"$abc"." sunday"; 

	 }
	 else{
		 echo "galat";
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