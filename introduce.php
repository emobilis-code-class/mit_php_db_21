<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
<div class='container'>
    <?php
        include('navbar.php');
    ?>
    <div class='col-5'>
    <form action='' method='GET'>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Hey whats your name?</label>
    <input type="name" class="form-control" required name='myname'>
  </div>
  
  <button type="submit" name='hello' class="btn btn-primary">Submit</button>
</form>

<?php
    /**
     * Capture the data from the form 
     * - dictated by the method
     * POST - $_POST[]
     * GET
     * - $_GET[]
     * $name = $_POST['myname'];
     * 
     * //check if the button 
     * isset
     */
    if(isset($_GET['hello'])){
      $myname = $_GET['myname'];
      echo "Good morning ".$myname." welcome!";
      //store the name
      $_SESSION['myname'] = $myname;
      //go to home page.
      header('location:home.php');
    }else{
      echo "You have not clicked submit yet";
    }
     
    ?>
    </div>
</div>
    
</body>
</html>