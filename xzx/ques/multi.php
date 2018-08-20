<?php
error_reporting(1);
$s=0;
$a=array(array(2,2,2),array(2,2,2),array(2,2,2));
 for($i=0;$i<3;$i++)
 {
	 for($j=0;$j<3;$j++)
	 {
		 echo $a[$i][$j]." ";
		 $s=$s+$a[$i][$j];
		
	 }
	  echo"<br>";
 }
 	  echo "sum of two array ="." ".$s;




?>