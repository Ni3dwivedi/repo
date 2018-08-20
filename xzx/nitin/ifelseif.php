<?php
$a=123;
$b=123;
$c=120;
 if($a>$b && $a>$c)
    { 
     echo "a is more than b & c";
 
     }
	 else if($b>$c  &&  $b>$a)
	 {
		 
		 echo "b is more than c & a";
	 }
	 else if($b>$b && $b>$a)
	 {
		 
		 echo "b is more than c & a";
	 }
	 else if($c>$b && $c>$a)
	 {
		 
		 echo "c is more than b & a";
	 }
	 else {
		 echo "more than two no are same";
		 
	 }

?>