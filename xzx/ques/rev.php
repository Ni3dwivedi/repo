<?php
for($i=1;$i<=5;$i++)
{
	for($j=1;$j<=$i;$j++)
	{
		
		echo"&nbsp&nbsp";
	}
	for($n=5;$n>=$i;$n--)
	{
		echo"*";
	}
	for($j=4;$j>=$i;$j--)
	{
		echo"*";
	}
	
	echo"<br/>";
}


?>