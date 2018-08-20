<?php
$arr=array('red','green','blue','pink','white');
    foreach($arr as $c)
	{
		echo "$c. ";
	}
  sort($arr);
  echo"<ul>";
  foreach($arr as $f)
  {
	  echo"<li>$f</li>";
	  
	  
  }
   echo"</ul>";

?>