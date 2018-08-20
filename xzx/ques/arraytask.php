<?php
$a=array(0=>"saurabh",1=>"golu",2=>"nitin",3=>"ranjeet",);
$b=array(array(0=>23,1=>33,2=>44,3=>55),array(0=>100,1=>102,2=>103,3=>104));
$arr=[];
for($i=0;$i<count($b);$i++)
    { 
        
	    
		for($j=0;$j<count($a);$j++)
		{
		
		$arr[$i][$a[$j]]=$b[$i][$j];
			 
		}
		
			 }
			 echo "<pre>";
					print_r($arr);
					foreach($arr as $z)
					{
						echo $z['saurabh'];
					}
				
		
		
	



?>