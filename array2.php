<?php

//types - 
//
/**
 * Indexed array -  determined automatically by the pl
 * 0 - n 
 * 0 -indexed array
 * 
 * Associative array 
 * - name of the partion where a value is going to be stored
 * 
 * key value
 * key 
 * 
 * key=>value
 * 
 */
echo "<h2>Associative array</h2>";

$myarray = array("x"=>10,"y"=>20,"z"=>30,"w"=>40,"a"=>45);


echo $myarray['w'];
echo "<br>";

//loop foreach 
foreach ($myarray as $key => $value) {
    # code...
    echo "$key  has the value $value<br>";
}

/**
 * using associative array
 * keep a name of employees and their salaries
 * 
 * - minimum salary 10,000
 * 
 * 
 * 
 */

?>