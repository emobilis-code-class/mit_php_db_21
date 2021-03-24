<?php

$break="<br>";
echo "<h4>If statement</h4>";
/**
 * if statement control 
 * have one condition
 * - output if the true
 * 
 * Given an age
 * We want to show the message
 * Welcome Adulthood
 * - Adult age 18 
 * Given a pin
 * Determine it is incorrrect 
 * 
 */

 $age = 8;
 //compare > or equal

 if($age>=18){
    echo "Welcome to Adulthood";
 } else{
     echo "You are still a child";
 }


 echo $break;

 echo "Program continues ...";

 $pin = 1717;
 $pinInput = 1717;

 //determine the correctness. compare the actual pin and the pin provided
 //equal 
 echo $break;
 if($pin != $pinInput){
     echo "Incorrect PIN";
 }
 echo $break;
 echo "Check Balance before sending";
 echo $break;
/**
 * balance
 * amount to send
 * 
 * for you send your amount must be less or
 * equal balance 
 * - sending Ksh amount
 * kama sivo.
 * Insufficient balance to send the amount
 * 
 */

 $balance = 6000;
 $amount = 100;
 if($amount<=$balance){
     echo "Send Ksh ".$amount;
 }else{
     echo "Insufficient balance to send Ksh ".$amount;
 }

 echo $break;


?>