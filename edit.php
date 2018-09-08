<?php
$link=mysqli_connect("localhost","root","","crud");
$id = $_GET['dd'];
$sel = mysqli_query($link,"select * from employee where eid='$id'");
$arr = mysqli_fetch_assoc($sel);
extract($_POST);
if(isset($sub))
{ 
if(mysqli_query($link,"update employee set eid='$eid',ename='$en',salary='$es' where eid ='$id'"))
{
	
		header("location:index.php");
	}
	else
	{
		echo "Employee Id Already Exist";
	}
}

?>
<html>	
	<head>
		<title>Add Employees Details</title>
	</head>
	
	<body>
	<form method="post">
		<table border="1px" align="Center">
			<tr>
				<th colspan=2>Add Employee Details</th>
			</tr>
			<?php
				
				{ ?>
				
				
				<tr>
				<th>Employee id</th>
				<th><input type="text" name="eid"  value="<?php echo $arr['eid'] ;?>" required></th>				
				</tr>
				<tr>
				<th>Employee Name</th>
				<th><input type="text" name="en" value="<?php echo $arr['ename']?>" required></th>				
				</tr>
				<tr>
				<th>Employee Salary</th>
				<th><input type="text" name="es" value="<?php echo $arr['salary']?>" required></th>				
				</tr>
				<tr>
				<th colspan=2><input type="submit" name="sub" ></th>				
			    </tr>
			
			<?php } ?>
			
			
			
			
			
			
			
			
		</table>
	</form>
	</body>
</html>