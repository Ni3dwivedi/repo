<?php
//$arr=();
$str = 'one,two,three,four';

// zero limit
print_r(explode(',',$str,0));
print "<br>";

// 
print_r(explode(',',$str,2));
print "<br>";

// negative limit 
print_r(explode(',',$str,-1));
?>
<?php
$arr=["red","green","yellow","pink","white"]
$str='abc.''jpg';
$arr=explode(',',$arr);
$ext=end($arr);
if($ext=="jpg")
{
	echo "submit";
	
}
else{
	
	echo "only jpg allowed";
}


?>


