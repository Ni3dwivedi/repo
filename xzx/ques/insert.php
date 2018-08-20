<?php
$a=array('0','1','2','3','4','5','6');
$b='$';
foreach($a as $j)
{
	echo "$j ";
}
array_splice($a,4,1,$b);
foreach($a as $l)
{
	echo $l ;
}

?>