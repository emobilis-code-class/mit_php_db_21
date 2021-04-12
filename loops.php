<?php
/**
 * Loops- 
 */

 $x = 0;
//  $x++;
//  echo $x;

//  $x++;
//  echo $x;

//  $x++;
//  echo $x;

//  $x++;
//  echo $x;

$x=1;
while($x<=10){
   
    echo " ".$x; 
    $x++;
}

//print numbers from 0 to 20 
//0 2 4 6 ...20

//print 
$y = 0;
while($y<=20){
    echo "<br>";
    if($y%2==0){
        //even
        echo $y." -Even ";
    }else{
        //odd
        echo $y." -Odd ";
    }

    $y++;
}

?>