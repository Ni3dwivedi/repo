<?php
$k=1;
for($i=1;$i<=4;$i++)
{
for($j=1;$j<=4;$j++)
	{
		echo $k;
		$k+=2;
     }
	 echo "<br/>";
}
?>
<?php
for($i=1;$i<=5;$i++)
   {
	   for($l=1;$l<=$i;$l++)
	   {
		   echo"&nbsp&nbsp";
		   
	   }
	   for($n=5;$n>=$i;$n--)
	   {
		   echo"*";
	   }
	   echo"<br/>";
	   
   }


?>