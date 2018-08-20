<?php
$color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
"numbers" => array ( 1, 2, 3, 4, 5, 6 ),
"holes" => array ( "First", 5 => "Second", "Third"));

echo $color["holes"][0]."\n"; // prints "second"
echo $color["color"]["a"]."\n"; // prints "Red"
?>