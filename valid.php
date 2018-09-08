<?php
extract($_POST);
if(isset($sub))
{
 echo "Data Inserted";
}

?>
<html>
	<head>
		<title>JS</title>
		<style>
		div{color:red;}
		</style>
		<script>
			function valid()
			{
			if(myform.un.value=="")
					{
					
					document.getElementById("une").innerHTML="Enter Your Name";
					document.getElementById("un").focus();
					
					return false;
					}
				    var format=/^[a-zA-Z]+$/;
					
				     if(!format.test(un.value))
				    {
					document.getElementById("une").innerHTML="Enter Valid Name";
					document.getElementById("un").focus();
					
					return false;	
				    }
				
					if(myform.mn.value=="")
					{
					
					document.getElementById("mne").innerHTML="Enter Mobile No.";
					document.getElementById("une").innerHTML="";
					document.getElementById("mn").focus();
					
					return false;
					}
					var format=/^[7-9][0-9]{9}$/;
					
				     if(!format.test(mn.value))
				    {
					document.getElementById("mne").innerHTML="Enter Valid mobile no.";
					document.getElementById("une").innerHTML="";
					document.getElementById("mn").focus();
					
					return false;	
				    }
                    if(myform.em.value=="")
					{
					
					document.getElementById("eme").innerHTML="Enter Your Email";
					document.getElementById("une").innerHTML="";
					document.getElementById("mne").innerHTML="";
					document.getElementById("em").focus();
					
					return false;
					}
					var format=/^[a-zA-Z0-9_]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
					
				     if(!format.test(em.value))
				    {
					document.getElementById("eme").innerHTML="Enter Valid Email";
					document.getElementById("une").innerHTML="";
					document.getElementById("mne").innerHTML="";
					document.getElementById("em").focus();
					
					return false;	
				    }


			
			}
		</script>
	</head>

	<body>
	<form method="post" name="myform">
	
			<div id="une"></div>
		Enter Your Name:<input type="text" name="un" id="un"/></br>
		
		<div id="mne"></div>
		Enter Mobile No:<input type="text" name="mn" id="mn"/></br>
		
		<div id="eme"></div>
		Enter Your Email:<input type="text" name="em" id="em"/></br>
		
		<input type="submit" value="Submit" name="sub" id="sub" onclick="return valid();">	
		</form>
				
	</body>
</html>