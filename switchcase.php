<?php

echo "<h3>Switch Case</h3>";
/**
 * Switch case
 * $code ="254" 
 * switch($code){
 * 
 * case "254":
 * echo "Kenya";
 * break;
 * ... 
 * default:
 * echo "I dont know that country"
 * break;
 * 
 * }
 * 
 * 
 */

 $code = "2505";

 switch($code){

    case '254':
        # code...
        echo "Kenya";
        break;

    case '255':
        echo "Tanzania";
        break;

    case '256':
        echo "Uganda";
        break;
    case '250':
        echo 'Rwanda';
        break;

    default:
        echo 'I do not know that country';
    break;
 }

/**
 * Write a php program that will emulate
 * a calculator.
 * You have two numbers
 * Based on the operation provided show 
 * the results.
 * 
 * 
 * 
 */

 echo "<h4>Calcuator</h4>";
 $num1 = 30;
 $num2 = 40;
 $op ="*";

 switch ($op) {
     case '+':
         echo $num1."$op".$num2." = ".($num1+$num2);
         break;
     
         case '-':
            echo $num1."$op".$num2." = ".($num1-$num2);
            break;

            case '*':
                echo $num1."$op".$num2." = ".($num1*$num2);
                break;

                case '/':
                    echo $num1."$op".$num2." = ".($num1/$num2);
                    break;
                    case '%':
                        echo $num1."$op".$num2." = ".($num1%$num2);
                        break;
     default:
         echo "The operation $op does not exit";
         break;
 }

?>