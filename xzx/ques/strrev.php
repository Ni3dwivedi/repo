<?php
$str2=305;
function reverse($str)
{
	return strrev($str);
}
echo reverse($str2)."<br/>";
$str=900;

echo add($str,509)."<br/>";


function add($a,$b){
	$c= $a+$b;
	$c= reverse($b)+$c;

	return $c;
}

//echo $str2;
?>