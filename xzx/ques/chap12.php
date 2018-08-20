<html>
<head>
<?php
session_start();
$_SESSION['name']=$_POST['un'];
$_SESSION['job']=$_POST['job'];

?>
</head>
<body>
<?php

echo "Welcome ".$_SESSION['name']."</br>";
echo "your job is ".$_SESSION['job']."</br>";
?>
<form method="post">
Enter your name: &nbsp;&nbsp;<input type="text" name="un"></br></br>
Enter your job type:<input type="text" name="job">
<input type="submit" value="Store in session var">
</form>

</body>
</html>