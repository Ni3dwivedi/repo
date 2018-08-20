<!doctype html>
<html>
<head><script>
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
	    var format=/^([http])+(\:)+(\/)+(([www])=\.)+([A-Za-z0-9.\-\_])+\.+([A-Za-z]{2,3})+$/;
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
<meta charset="utf-8">
<title>Registration Form</title>
</head>

<body background="../../../Users/hp/Desktop/Homework/images/00585a3568a0a7d.jpg" >
<h1><font color="#FF9900"><center> <i>Registration Form</i></center> </font></h1>
<br><br></center>

<center><fieldset style="width:400px" style="color:#3CF">

<legend><font color="#33CCCC" size="+3">Login Form</font></legend><br>

<form name="f1" action="" method="get">
<table>
<tr>
<td><label><font color="#FF0066">First Name :&nbsp;&nbsp;</font></label></td>
<td><input type="text" name="name" placeholder="Please Enter your Firstname"></td>
</tr>
<tr>
<td><label><font color="#FF0066">Last Name :&nbsp;&nbsp;</font></label></td>
<td><input type="text" name="lastname" placeholder="Please Enter your last name"></td>
</tr><tr>
<td><label><font color="#FF0066">Email :&nbsp;&nbsp;</font></label></td>
<td><input type="email" name="email" placeholder="Please Enter your email" id="email"></td>
</tr>
<tr>
<td><label><font color="#FF0066">recovery email :&nbsp;&nbsp;</font></label></td>
<td><input type="re-email" name="recoveryemail" placeholder="Please Enter your re-email" id="recoveryemail"></td>
</tr>


<tr><td>
<input type="checkbox" name="agree" value="Inactive" >
<font size="-4">I agree all the term and condition</font></td></tr>

<td><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" name="ok" value="ok" onClick="valid()"></center></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="Cancel" value="Cancel"  ></td>
</tr>

</table>




<label><font color="#FF0066"></font></label>




</form><br><br>
<a href="../../../Users/hp/Desktop/Homework/assignment4.php">Click here to Login Page</a>
</table>
<fieldset>


</center>
</body>
</html>