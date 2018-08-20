<?php
for($i=1;$i<=5;$i++)
{
	if($i==4)
	{
		break;
		
	}
	
	echo $i."<br/>";
	exit;
}   



?>
<?php
for($i=1;$i<=5;$i++)
{
	if($i==2 &$i==4)
	{
		continue;
		
	}
	
	echo $i;
}   



?>
