<?php
$s=array(1,2,3,4,5);
var_dump($s);
unset($s[3]);
$s=array_values($s);
echo"<br/> ";
var_dump($s);







?>