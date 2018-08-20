<?php
$n=1;
for($i=1;$i<=4;$i++)
{
	for($j=5;$j>=$i;$j--)
		
	{
		echo"&nbsp";
		
	}
	for($k=1;$k<=$i;$k++)
	{
		echo" $n";
	}
			$n++;

	echo"<br>";
}



?>