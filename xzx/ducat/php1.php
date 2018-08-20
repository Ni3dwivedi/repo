<?php
$no=1236;
$sum=0;
$reverse=0;

$rem=$no%10;
$reverse=($reverse*10)+$rem;
$sum=$sum+$rem;
$no=$no/10;


$rem=$no%10;
$reverse=($reverse*10)+$rem;
$sum=$sum+$rem;
$no=$no/10;


$rem=$no%10;
$reverse=($reverse*10)+$rem;
$sum=$sum+$rem;
$no=$no/10;

$rem=$no%10;
$reverse=($reverse*10)+$rem;
$sum=$sum+$rem;
$no=$no/10;

echo "sum is "."$sum";
echo "<br/>Reverse is"."$reverse";


?>