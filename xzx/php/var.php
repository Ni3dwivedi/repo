<?php
$mycar="honda city";
echo $mycar." is riding.<br>";
//sum of two num.
$var1=3000;
$var2=2000;
$var3=$var1+$var2;
echo "sum= "."$var3<br>";
//unset.
$name="xyz";
echo $name."<br/>";
unset($name);


?>
<?php
//contents property.
$first=3000;
$second=2000;
$third=$first+$second;
var_dump($third);


?>
<?php
//php$ &php$$ var.

$name="aman";
$$name="raman";
$$$name="saman";
echo $name."<br>";
echo $$name."<br>";
echo $$$name."<br>";
echo $aman."<br>";
?>
<?php
//php$ &php$$ var.

$name="aman";
${$name}="raman";
${${$name}}="saman";
echo $name."<br>";
echo $$name."<br>";
echo ${${$name}}."<br>";
echo $aman."<br>";
?>
<?php
define('name','abc');
echo name;

?>

<?php
define('first','3');
define('second','5');
define('sum',first+second);
echo "sum=".sum;

?>














