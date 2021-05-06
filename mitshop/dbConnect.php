<?php

/**
 * connection to mysql
 * - mysql dbms 
 * username -root
 * password -''
 * servename : localhost
 * db
 * - mysqli_connect()
 * 
 * 
 */

 $username = "root";
 $password = "";
 $servername = "localhost";
 $database = "mit_shop";

 $conn = mysqli_connect($servername,$username,$password,$database);
 if($conn){
    // echo"<br> Connection successful";
 }else{
    echo"<br> Failed to connect ".mysqli_connect_error();
 }

?>