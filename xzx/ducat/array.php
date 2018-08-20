<?php
  $arr=array(10,20,30,40,50);
  $col=array("lal","hra","gulabi","saphed","ddgf");
  echo "<pre>";
 // print_r(array_merge($arr,$col));
 // print_r(array_combine($arr,$col));

      $merge_arr=array_merge($arr,$col);
	 //echo $merge_arr[8];
	 foreach($merge_arr as $data)
	 { 
		 echo $data."<br/>";
		 
	 //$array_comb=array_combine($arr,$col);
	   // echo $array_comb[30];
	  
?>
<img src="<?php echo $data; ?>">
<?php } ?>