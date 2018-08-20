<!doctype html>
<html>
<head>
<script>function valid()
{
var url=document.getElementById("url");
	    var format=/^([http|https])+\:(\/\/)(([A-Za-z0-9])+\.)+([A-Za-z]{2,3})+\/+$/
	     if(!format.test(url.value))
	{
		alert("url should not be in standerd form")
		f1.recoveryemail.focus();
		return false;
		}
}
</script>
<meta charset="utf-8">
<title>Url valid</title>
</head>

<body>
<input type="text" name="url" id="url"><br>
<input type="button" value="ok" name="ok" onClick="valid()">

</body>
</html>