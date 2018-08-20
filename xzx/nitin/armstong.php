<?php
$no=53;
$total=0;
$x=$no;
while($no!=0)
{
	$rem=$no%10;
	$total=$total+($rem*$rem*$rem);
	$no=$no/10;

}
if($x==$total)  
{  
echo "Yes it is an Armstrong number";  
}  
else  
{  
echo "No it is not an armstrong number";  
}  

?>