<?php
$link=mysqli_connect("localhost","root","","crud");
 ?>
<?php
extract($_POST);
if(isset($sub))
{
	$fn = $_FILES['att']['name'];
	$tmp = $_FILES['att']['tmp_name'];
	
	$arr = explode('.',$fn);
	$ext = end($arr);
	$fnn = rand().'.'.$ext;

	if($ext=="jpg" || $ext=="jpeg" || $ext=="png")
	{		
	     if(mysqli_query($link,"insert into employee (eid,ename,salary,uplode) values ('$eid','$en','$es','$fnn')"))
		 {
		  if(move_uploaded_file($tmp,'images/'.$fnn))
		{
			
			header("location:index.php");
		}
		}
		else
		{
			echo "Email Already Exist";
		}
        }
	else
	{
		echo "Only jpg or jpeg file allowed";
	}
	
}

?>


<html>	
	<head>
		<title>Add Employees Details</title>
	</head>
	
	<body>
	<form method="post" enctype="multipart/form-data">
		<table border="1px" align="Center">
			<tr>
				<th colspan=2>Add Employee Details</th>
			</tr>
			
			<tr>
				<th>Employee id</th>
				<th><input type="text" name="eid"  value="" required></th>				
			</tr>
			
			<tr>
				<th>Employee Name</th>
				<th><input type="text" name="en" required></th>				
			</tr>
			
			<tr>
				<th>Employee Salary</th>
				<th><input type="text" name="es" required></th>				
			</tr>
			<tr>
				<th>Employee Salary</th>
				<th><input type="file" name="att"></th>				
			</tr>
			
			<tr>
				<th colspan=2><input type="submit" name="sub" ></th>				
			</tr>
		</table>
	</form>
	</body>
</html>