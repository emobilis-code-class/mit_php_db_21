<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIT SHOP | New Product </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<?php
    include('nav.php');
?>
      <center>
    <div class="container">
        <div class="col-5">
        <h4 style="padding:5px;">New Product </h4>
        <form method="POST" action="">
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="name" class="form-control" id="exampleInputEmail1" 
            aria-describedby="emailHelp" required name="product_name">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required name="description"></textarea>

        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Price</label>
            <input type="number" class="form-control" id="exampleInputEmail1" required name="price">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="exampleInputEmail1" required name="quantity">
        </div>
       
        <button type="submit" name="save" class="btn btn-primary">Create Product</button>
        </form>
        </div>
    </div>
    </center>

    <?php
    //capture data
    //if button
    if(isset($_POST['save'])){
        //get the data
        $productName = $_POST['product_name'];
        $productDesc = $_POST['description'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];

        //save to the database-
        /**
         * 1.Connection 
         * 2.Interact with
         * CRUD
         * Create a record INSERT
         * Read - SELECT
         * Update -
         * Delete
         */
        //connect
        require('dbConnect.php');

        //insert the data to the DB 
        $sql = "INSERT INTO `product`( `name`, `description`, `price`, `quantity`) VALUES (?,?,?,?)";
        //check if the query above 
        $stmt = mysqli_prepare($conn,$sql);
        if($stmt){
            //correct
            //binding - ? ? ? 
            mysqli_stmt_bind_param($stmt,"ssii",$param_name,$param_desc,$param_price,$param_qty);
            //assign values
            $param_name = $productName;
            $param_desc = $productDesc;
            $param_price = $price;
            $param_qty = $quantity;

            //execute
            $query_run = mysqli_stmt_execute($stmt);
            if($query_run){
                echo "$productName has been saved successfully!";
                header('location:myproducts.php');
            }else{
                echo "Oops!Could not create a product ".mysqli_error($conn);
            }
        }else{
            echo "Something is wrong ".mysqli_error($conn);
        }

    
    }
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>