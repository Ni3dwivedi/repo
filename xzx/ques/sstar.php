<?php
$s=range('1','8');
for($i=0;$i<=4;$i++)

      {
		  for($j=5;$j>=$i;$j--;$i=0;$i<=4;$i++)
		  {
			  echo"&nbsp&nbsp";
		  }
		  for($k=0;$k<=$i;$k++)
		  {
			  echo"&nbsp $s[$k]";
			  
		  }
		  echo"<br>";
	  }	

?>