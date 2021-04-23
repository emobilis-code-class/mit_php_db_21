<?php 

/**
 * Function 
 * - block of statements
 * 
 * 
 */

 //goal - say hello 

 function sayHello(){
     //set of statements - task
     echo "Hello <br/>";
 }

 //eyes - 
 //executes we need to call , invoke
 //call - use the functionName ()

 sayHello();
 sayHello();
 sayHello();

 function sayHelloToSomeOne($name){

    echo "Hey $name , Good morning<br>";

 }

 sayHelloToSomeOne("John");
 sayHelloToSomeOne("Afifa");

//  more than one argument , separated by , variables
 function addTwoNumbers($a,$b){
    $sum  = $a+$b;

    echo "The sum of $a and $b is ".$sum;
    echo "<br>";
 }

 addTwoNumbers(10,20);
 addTwoNumbers(50,56);

 /***
  * 
  Create a function called Calculator 
  Is going to receive 2 numbers and an operator(+,-,/,*)
  Based on the operator received its going to do arithmetic operation and 
  display the results.
  */

?>