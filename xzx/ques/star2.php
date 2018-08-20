<?php
for($i=1;$i<=5;$i++)
{
	for($j=4;$j>=$i;$j--)
	{
		echo"&nbsp&nbsp";
		
	}
	
	for($n=1;$n<=$i;$n++)
	{
		echo"*";
	
	}
	for($j=2;$j<=$i;$j++)
	{
		
		echo"*";
	}
	
	echo"<br/>";

}
for($i=1;$i<=5;$i++)
{
	for($j=1;$j<=$i;$j++)
	{
		
		echo"&nbsp&nbsp";
	}
	for($n=4;$n>=$i;$n--)
	{
		echo"*";
	}
	for($j=3;$j>=$i;$j--)
	{
		echo"*";
	}
	
	echo"<br/>";
}



?>