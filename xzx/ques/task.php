<?php 
$a=array(0=>'saurabh',1=>'golu',2=>'nitin',3=>'ranjeet',);
$b=array(array(0=>23,1=>33,2=>44,3=>55),array(0=>100,1=>102,2=>103,3=>104));
$k=array_merge($b[0],$b[1]);
function combine_arr($a, $k) 
{ 
    $acount = count($a); 
    $bcount = count($b); 
    $size = ($acount > $bcount) ? $bcount : $acount; 
    $a = array_slice($a, 0, $size); 
    $b = array_slice($b, 0, $size); 
    return array_combine($a, $b); 
} 
$combined = combine_arr($a, $b); 
print_r($combined); 
?>