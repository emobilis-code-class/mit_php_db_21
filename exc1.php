<?php
/**
 * using associative array
 * keep a name of employees and their salaries
 * 
 * - minimum salary 10,000
 * 
 * 
 * 
 */

 $employees = array(
     "John"=>30000,
     "Jane" => 4000,
     "Bob" => 15000,
     "Knut" =>9000,
     "Turing"=>8000,
     "Afifa" => 25000,
     "Gourling"=>6500,
     "Bill"=>12500
 );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees Salary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<h1>Employees Salary</h1>
<div class="container">
<div class="col-5">
<!-- table -->
<table class="table table-stripped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Salary</th>
      <th scope="col">Salary Status</th>
    </tr>
  </thead>
  <tbody>

  <?php
    foreach ($employees as $name => $salary) {
        echo '<tr>';
        echo' <th scope="row"></th>';
        echo '<td>'.$name.'</td>';
        echo '<td>'.$salary.'</td>';
        //comparison - if else
        $salaryStatus="";
        if($salary>10000){
            $salaryStatus="Above Minimum";
            echo '<td class="table-success">'.$salaryStatus.'</td>';
        }else{
            $salaryStatus = "Below minimum";
            echo '<td class="table-danger">'.$salaryStatus.'</td>';
        }
        
        echo '</tr>';
    }
  ?>
   
    
  </tbody>
</table>
</div>
</div>
    
</body>
</html>