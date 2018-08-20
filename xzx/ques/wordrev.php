<?php
$str="this is exolode function ,which can use for string convert to array.";
$arr=explode(" ",$str);

for($i=count($arr)-1;$i>=0;$i--)
{
	echo $arr[$i]." ";
}



?>