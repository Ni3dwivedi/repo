<?php

for($i=1;$i<=6;$i++)
    {
		for($k=6;$k>$i;$k--)
		{
			echo "&nbsp;";
			}
		for($j=1;$j<=$i;$j++)
		{
			echo "*";
			}
			for($a=1;$a>$i;$a++)
			{
				echo "&nbsp;";
				}
			for($b=1;$b<=$i;$b++)
			{
				echo "1";
				}
			echo "<br/>";
			
		}



?>