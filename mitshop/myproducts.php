<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIT SHOP | My Products </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<?php
    include('nav.php');
?>
<h2>My Products</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product Name</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  <?php
  //fetch products from the db
  /**
   * 1.connection
   * 2.select query
   * result - store in assoc array
   * loop the array and get the individual data
   * 
   */
  require('dbConnect.php');
  //select
  $sql ="SELECT * FROM `product`";
  $result = mysqli_query($conn,$sql);
  //check the results
  //counting 
  $num_rows = mysqli_num_rows($result);
  if($num_rows>0){
      //something from the db
      //convert the result to array
      //loop the array and display 
      while($row = mysqli_fetch_assoc($result)){
          //excecute:
          $product_id = $row['id'];
          echo "<tr>";
          echo "<td>".$row['id']."</td>";
          echo "<td>".$row['name']."</td>";
          echo "<td>".$row['description']."</td>";
          echo "<td>".$row['price']."</td>";
          echo "<td>".$row['quantity']."</td>";
          echo "<td>
            <a href='editProduct.php?product_id=$product_id' class='btn btn-primary'>Edit</a>

            <form method='POST' style='margin-top:8px;' action='deleteProduct.php'>
            <input type='hidden' value=$product_id name='product_id'/>
            <button type='submit' class='btn btn-danger'>Delete</button>
            </form>

          </td>";
          echo "</tr>";
      }
  }else{
      echo "No products available create some: ";
  }
  ?>
   
   
  </tbody>
</table>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>