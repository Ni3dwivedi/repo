<?php
$link=mysqli_connect("localhost","root","","crud");	
if(!empty($_GET['did']))
	{
		$delid =$_GET['did'];
		$delimg=$_GET['dimg'];
		mysqli_query($link,"delete from employee where eid='$delid'");
			unlink('images/'.$delimg);
			header("location:index.php");
		
	}
?>
 


<html>
<head>
<title>Employees data</title>
</head>
<body>
<form method="get">
<table border="1px" align="center">
<tr >
<td colspan="6" align="center"><a href="add.php"><input type="button" name="add" value="Add data"></a></td>
</tr>
<tr>
<th>Sr.No.</th>
<th>E.Id.</th>
<th>E.Name</th>
<th>Salary</th>
<th>Uplode</th>
<th colspan="2">Action</th>

</tr>
<?php


			$sel = mysqli_query($link,"select * from employee");
			$sn=1;
			
			while($arr=mysqli_fetch_assoc($sel))
			{
				//print_r($arr);
				//echo "<br/><br/>";
				$id=$arr['eid'];
				$edit=$arr;
				//print_r($edit);
				echo "<tr>";
					echo "<td>".$sn."</td>";
					echo "<td>".$arr['eid']."</td>";
					echo "<td>".$arr['ename']."</td>";
					echo "<td>".$arr['salary']."</td>"; ?>
				     <td><img src="images/<?=$arr['uplode'];?>" height="30" width="60"></td>
					 <?php
					echo "<td><a href='edit.php?dd=$id'>Edit</a>"; ?>
					    <a href="?did=<?=$arr['eid'];?>&&dimg=<?=$arr['uplode'];?>">Delete</a>
						<?php echo "</th>";
				echo "</tr>";
				$sn++;
			}
?>

</body>
</html>