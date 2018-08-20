<?php
$arr=array(2,3,5,6,7,8,9,1);
$sum=0;
for($i=0;$i<count($arr)-1;$i++)
{
	$a=$arr[$i];
	$sum=$a+$sum;
}
echo $sum;


?>