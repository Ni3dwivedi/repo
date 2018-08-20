<?php
    $arr=array(1, 2, 3, 4, 7, 8,9,10);
    function missing($arr)
    {
        
        $brr = range(min($arr), max($arr));
 
       
        return array_diff($brr, $arr);
    }
    
    print_r(missing(array(1, 2, 3, 4, 7, 8,9,10)));
    
?>