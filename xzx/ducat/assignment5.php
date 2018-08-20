<!doctype html>
<html>
<head>
<meta charset="utf-8">
<style>
#name{background-color:#09C;}
table{background-color:#0C9;}
.abc{background-color:#9C0;}




</style>>
<script>
function valid()
{
	if(f1.name.value=="")
	
	{
	alert("name shold not be blank.....");
	f1.name.focus();
	return false;
	}
	
	if(f1.lastname.value=="")
	{
		alert("lastname shold not be blank.....");
	f1.lastname.focus();
	return false;
	
	
	}
	{
	var email=document.getElementById("email");
	var format=/^([A-Za-z0-9.\-\_])+\@(([A-Za-z0-9])+\.)+([A-Za-z]{2,3})+$/;
	if(!format.test(email.value))
	{
		alert("email should not be in standerd form")
		return false;
		}
		var url=document.getElementById("url");
	    var format=/^([http|https])+(\:)+(\/\/)+(([A-Za-z])+\.)+(([A-Za-z0-9])+\.)+([A-Za-z]{2,3})+$/;
	     if(!format.test(url.value))
	{
		alert("url should not be in standerd form")
		f1.recoveryemail.focus();
		return false;
		}
		var recoveryemail=document.getElementById("recoveryemail");
	    var format=/^([A-Za-z0-9.\-\_])+\@(([A-Za-z0-9])+\.)+([A-Za-z]{2,2})+(\.+[A-Za-z]{2,2})+$/;
	     if(!format.test(recoveryemail.value))
	{
		alert("recoveryemail should not be in standerd form")
		f1.recoveryemail.focus();
		return false;
		}
		
	        var mobileno=document.getElementById("mobileno");
	       var format=/^([0-9]{10,10})+$/;
	        if(!format.test(mobileno.value))
	{
		alert("mobile no should not be in standerd form")
		return false;
		} 
		
	}
	
	
	if(f1.pass.value=="")
	{
		alert("password shold not be blank.....");
	f1.pass.focus();
	return false;
	
	
	}
	
	if(f1.cpass.value=="")
	{
		alert("confirm password shold not be blank.....");
	f1.cpass.focus();
	return false;
	
	}
	
	
	}
</script>
<title>Registration Form</title>
</head>

<body background="images/00585a3568a0a7d.jpg" >
<h1><font color="#FF9900"><center> <i>Registration Form</i></center> </font></h1>
<br><br></center>

<center><fieldset style="width:400px" style="color:#3CF">

<legend><font color="#33CCCC" size="+3">Login Form</font></legend><br>

<form name="f1" action="" method="get">
<table>
<tr>
<td><label><font color="#FF0066">First Name :&nbsp;&nbsp;</font></label></td>
<td><input type="text" name="name" placeholder="Please Enter your Firstname" required id="name" c></td>
</tr>
<tr>
<td><label><font color="#FF0066">Last Name :&nbsp;&nbsp;</font></label></td>
<td><input type="text" name="lastname" placeholder="Please Enter your last name" required class="abc"></td>
</tr><tr>
<td><label><font color="#FF0066">Email :&nbsp;&nbsp;</font></label></td>
<td><input type="text" name="email" placeholder="Please Enter your email" id="email"   required></td>
</tr>
<tr>
<td><label><font color="#FF0066">Password :&nbsp;&nbsp;</font></label></td>
<td><input type="password" name="pass" placeholder="Please Enter Your password" required></td>
</tr>
<tr>
<td><label><font color="#FF0066">Confirm Password :&nbsp;&nbsp;</font></label></td>
<td><input type="password" name="cpass" placeholder="Please re-enter Your password" required></td>
</tr><tr>
<td><label><font color="#FF0066">Mobile No. :&nbsp;&nbsp;</font></label></td>
<td><input type="text" name="mobileno" placeholder="Please Enter Your mobile no" required></td>
</tr><tr>
<td><label><font color="#FF0066">Phone No. :&nbsp;&nbsp;</font></label></td>
<td><input type="text" name="Phone no" placeholder="Please Enter Your Phone no." required></td>
</tr>
<tr>
<td><label><font color="#FF0066">Address :&nbsp;&nbsp;</font></label></td>
<td><textarea name="address" rows="" cols="" required></textarea><br><br></td>
</tr>
<tr>
<td><label><font color="#FF0066">D.O.B. :&nbsp;&nbsp;</font></label></td>
<td><input type="date" name="dob" placeholder="Please Enter Username" required></td>
</tr>
<tr>
<td><label><font color="#FF0066">Gender :&nbsp;&nbsp;</font></label></td>
<td><input type="radio" name="male" value="male" checked >Male
<input type="radio" name="male" value="female">Female</td>
</tr>
<tr>
<td><label><font color="#FF0066">City :&nbsp;&nbsp;</font></label></td>
<td><input type="text" name="city" placeholder="Please Enter your city name" required></td>
</tr>
<tr>
<td><label><font color="#FF0066">State :&nbsp;&nbsp;</font></label></td>
<td><input type="text" name="state" placeholder="Please Enter your last name" required></td>
</tr><tr>
<td><label><font color="#FF0066">Country :&nbsp;&nbsp;</font></label></td>
<td><input type="text" name="country" placeholder="Please Enter your last name" required></td>
</tr>
<tr>
<td><label><font color="#FF0066">Upload Image :&nbsp;&nbsp;</font></label></td>
<td><input type="file" name="img"></td>
</tr><tr>
<td><label><font color="#FF0066">Status :&nbsp;&nbsp;</font></label></td>
<td><input type="radio" name="active"  value="active" checked >Active
<input type="radio" name="active" value="Inactive">Inactive</td>
</tr>
<tr><td>
<input type="checkbox" name="agree" value="Inactive" >
<font size="-4">I agree all the term and condition</font></td></tr>

<td><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" name="ok" value="Register" onClick="valid()"></center></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="Cancel" value="Cancel"  ></td>
</tr>

</table>




<label><font color="#FF0066"></font></label>




</form><br><br>
<a href="assignment4.php">Click here to Login Page</a>
</table>
<fieldset>


</center>
</body>
</html>