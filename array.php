<?php


/**
 * Arrays
 * 
 * stores more than one value
 * 
 * declare - variable
 * $name_of_array = array(...values...'');
 * 
 */
echo"<h1>Arrays</h1>";

$names = array("Martin","Evanson","Mohammed");
//array - names - 

echo $names[0];
echo "<br>";
echo $names[1];
echo "<br>";
echo $names[2];


$programmingLanguges = array("PHP","Ruby","JAVA","Kotlin",
"GoLang","Javascript","Python");

echo"<br>";
//loops
echo"<h5>Programming Languages</h5>";
for($x = 0;$x<7;$x++){
    echo "$programmingLanguges[$x] <br>";

}
echo"List of Programming Languages";
echo "<ul>";
for($y=0;$y<7;$y++){
    echo "<li>".$programmingLanguges[$y]."</li>";
}
echo "</ul>";

echo "<br>";

$carModels = array("BMW","Toyota","Nissan","Mercedes","Honda","Mazda","Tata","VW");

//count()- tells us the number of items in an array

$no = count($carModels);

for($i = 0;$i<$no;$i++){
   // echo "<br>".$carModels[$i];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<table style="width:40%;border:1px #00000 solid;" class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Model</th>
    </tr>
  </thead>
  <tbody>
    <?php
        
        $no = count($carModels);

        for($i = 0;$i<$no;$i++){
            echo "<tr>";
                echo '<th scope="row">'.($i+1).'</th>';
                echo "<td>".$carModels[$i]."</td>";
            echo "</tr>";
        }

    ?>
    
    </tbody>
    </table>
    
</body>
</html>