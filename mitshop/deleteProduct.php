<?php

$product_id = $_POST['product_id'];

//using the product id I can now get the product details
$sql = "DELETE FROM `product` WHERE id = ".$product_id;

//connection
require_once('dbConnect.php');
//get the results
$result = mysqli_query($conn,$sql);

//check 
if($result){
    echo "Producted deleted successfully";
}else{
    echo "Something went wrong";
}
header('location:myproducts.php');

?>