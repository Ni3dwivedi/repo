<?php
error_reporting(1);
$s=0;
$s1=0;
$a=array(array(3,3,3,3),array(3,3,3,3),array(3,3,3,3));
foreach($a as $k)
{
	foreach($k as $m)
	{
		echo $m;
		$s=$s+$m;
		
	}
	echo"<br>";
}
    
echo "sum of two array=".$s;



?>