<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<script>
function val()
{
	if(f1.user.value=="")
	{alert ("username should not be blank.......................");
	     f1.user.focus();
	
	}
	}
    </script>
    
	<form name="f1" action="" mathod="post">
    username <input type="text" name="user"><br>
    <input type="button" name="ok" value="ok" onClick="val()">


</body>
</html>