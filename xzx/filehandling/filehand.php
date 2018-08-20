<?php
$arr1=array('https://wallpapercave.com/wp/Nithf7m.jpg','https://wallpapercave.com/wp/wp2670841.jpg');
foreach($arr1 as $arr)
{
$my_save_dir='images/';
$filename=basename($arr);
$complite_save_loc=$my_save_dir.$filename;
file_put_contents($complite_save_loc,file_get_contents($arr));
}

?>
<h2><a href="filehand.php">Download</a></h2>