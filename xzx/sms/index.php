<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Student management system</title>
</head>

<body bgcolor="#990066">

<h3 align="right" style="margin-right:20px"><a href="login.php">Admin login</a></h3>
<h1 align="center">Welcome to Student management system</h1>

<form  action="index.php" method="post">
<table align="center" border="2px" bgcolor="#CCCCCC">
<tr>

<td colspan="2" align="center">Student Information</td>
</tr>
<tr>
<td>Choose Standerd</td>
<td><select>
<option>1st</option>
<option>2nd</option>
<option>3rd</option>
<option>4th</option>
<option>5th</option>
<option>6th</option>
<option>7th</option>
<option>8th</option>
</select></td>
</tr><tr>
<td>Enter Rollno</td>
<td><input type="text" name="rollno" required></td>
</tr>
<tr><td colspan="2" align="center">
<input type="submit" name="submit" value="show info" ></td>
</tr>

</table>




<label><font color="#FF0066"></font></label>




</form><br><br>
</body>
</html>