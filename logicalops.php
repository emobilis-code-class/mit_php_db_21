<?php
echo "logical operators";
//logicals;
echo "<br>";
$x= 20;
$y = 25;

//1.compare $ x against 30
$one = $x>30;
var_dump($one);
echo "<br>";
//2.compare $y against 40
$two = $y<40;
var_dump($two);
//1 and 2 

$three = !$one && $two;
echo "<br>";
var_dump($three);
//1 or 2
echo "<br>";
$four = $one || $two;

var_dump( $four);

echo"<br>";

$age = 2;
//determine if they are adult or chils
//adult >=18
if($age>=18){
    echo "Welcome to Adults Phase";
}
?>