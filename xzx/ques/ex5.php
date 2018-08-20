<?php
$arr = array(0,1,2,3,4,5,6,7,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,);
sort($arr);

//echo "<pre>"; print_r($arr);

foreach($arr as $key => $val){
  //remove the item from the array in order 
  //to prevent printing duplicates twice
 // echo $arr[$key]." >";
  unset($arr[$key]);
  //echo "<pre>"; print_r($arr);
  
  //now if another copy of this key still exists in the array 
  //print it since it's a dup
     // echo $val . " ";

  if (in_array($val,$arr)){
    echo $val . " ";
  }
}

?>