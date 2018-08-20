<?php
$n=0;
$a=range('a','z');
for($i=1;$i<=4;$i++)
    {
		for($j=1;$j<=$i;$j++)
		{
			echo$a[$n];
			
		}
		echo"<br/>";
		$n++;
		
	}



?>