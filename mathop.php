<?php
$break = "<br>";
echo "<h1>Math Operators</h1>";

echo(30+40);
echo $break;

$x = 70;
$y = 60;

echo $x+$y;
echo $break;

echo $x-$y;
echo $break;

echo $x*$y;
echo $break;

echo $x/$y;
echo $break;

echo $x%$y;
echo $break;

echo(2**3);

echo "<h3>Assignment Operators</h3>";
$z  = 40;
//$z =  $z+10;
$z+=10;//$z = $z+10;
//
echo $z;

echo $break;
echo "<h3>Comparison Operators</h3>";
$num1=20;
$num2 = 30;

$result = $num1==$num2;

echo $result;
echo $break;
var_dump($result);

?>