<?php
$arr=array(1,2,3,4,7,8,9,10);

// $n=10;
// $a=1;
// $d=1;
// $sum= 55;
// //array_push($arr,"x","y");
// $count=count($arr);
// //echo "<pre>"; print_r($arr); die;
// for($i=0; $i < $count; $i++){
	// $pu[] = $a*$a + $i;
	// // if($pu != $arr[$i]){
		// // echo $pu.">>"; 
		
	// // }
// }
// $an = array_combine($pu,$arr);

// foreach($an as $key => $cmb){
	// //echo $key."<br>";
	// //echo $cmb."<br>";
	// if($key != $cmb ){
		// echo $key;
	// }
// }

// echo $sum = $n/2*(2*$a+($n-1))*$d;
// $remcount = $n-count($arr);

// for($x=0; $x < $remcount; $x++ ){
	// for(){
		
	// }
// }


$arr2 = array();
for ($i = 1; $i < max($arr); $i++) {
	
	foreach($arr as $key => $cmb){
	//echo $key."<br>";
	//echo $cmb."<br>";
	if($i != $cmb ){
		$oo[] = $i;
	}
	break;
}
    // if (!in_array($i, $arr)) {
		// $arr2[] = $i;
		// }
}

print_r($arr2);


?>