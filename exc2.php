<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
<div class='container'>
<h2>Calculator</h2>
    <div class='col-5'>
    <form action='' method='POST'>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">First Number</label>
    <input type="number" class="form-control" required name='first_number'>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Second Number</label>
    <input type="number" class="form-control" required name='second_number'>
  </div>

    <div class='mb-3'>
    <select class="form-select" name='operation' aria-label="Default select example">
    <option selected>Select Operation</option>
    <option value="+">Addition</option>
    <option value="-">Substraction</option>
    <option value="*">Multiplication</option>
    </select>
    </div>
  
  <button type="submit" name='calc' class="btn btn-primary">Calculate</button>
</form>
</div>


<?php

 /***
  * 
  Create a function called Calculator 
  Is going to receive 2 numbers and an operator(+,-,/,*)
  Based on the operator received its going to do arithmetic operation and 
  display the results.
  */

  if(isset($_POST['calc'])){
      //capture values
      $firstNumber = $_POST['first_number'];
      $secondNumber = $_POST['second_number'];
      $operation = $_POST['operation'];

     // echo"$firstNumber,$secondNumber,$operation";
     calculator($firstNumber,$secondNumber,$operation);
  }


  function calculator($x,$y,$op){
    $result = 0;
    //determine the $op
    if($op=='+'){

        $result = $x+$y;

    }else if($op=='-'){

        $result = $x-$y;

    }elseif ($op=='*') {
        $result = $x*$y;
    }elseif ($op == '/') {
        $result = $x/$y;
    }elseif ($op == '%') {
        $result = $x%$y;
    }else{
        echo "Invalid Operation<br>";
    }

    echo "$x $op $y = ".$result;
    echo "<br>";

  }


  
//   calculator(10,20,"%");

//   calculator(30,40,"*")
?>

</body>
</html>