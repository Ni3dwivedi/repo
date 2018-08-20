<?php
$arr=array(1,2,4,22,22,6,);
$n=22;
$l=0;

for($i=0;$i<count($arr);$i++)
{
	
	if($n==$arr[$i])
	{
		$a=$arr[$i];
		   $l++;
		
		
	}
	
	
}

echo $a."<br>";
echo $l;



?>