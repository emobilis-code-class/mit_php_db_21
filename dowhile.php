<h3>Do While</h3>
<?php

/**
 * before body execution
 * 
 * 
 * 
 */
//print from 0 to 10
$x=0;
 do{
     $x++;
     echo " ".$x;
     //body 
 }while($x>=10);

 echo "<h4>While</h4><br>";
 $y=0;
 while($y>=10){
    $y++;
    echo " ".$y;
 }

 echo "<h4>Password Example</h4><br>";
 $pass = 1234;
 $passInput = 12834;

 $trials = 1;
 do{
     echo "Input Password.<br>";
     if($pass==$passInput){
         break;
     }else{
         echo "Wrong password .Try again<br><hr>";
         $trials++;
     }

 }while($trials<=3);

?>