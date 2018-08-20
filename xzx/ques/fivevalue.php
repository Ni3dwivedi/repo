<?php
$arr=array(70,50,30,25,60,56,78,24,67,87,98,98,65,69,97,89,20,99,88,77,66,55,44,33,22);
rsort($arr);
for($i=0;$i<5;$i++)
{
	echo $arr[$i]."<br/>";
	
}

$max_key=min(array_values($arr));
echo $max_key;

?>