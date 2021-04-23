<?php


//create a function that returns results
//calculator yob
//
$todayDate = date("l");
echo("Date ".$todayDate);
function findYOB($age){
    //know the current year
    $currentYear = date("Y");
    $yob = $currentYear-$age;
    return $yob;
}

$yob = findYOB(34);
echo "<br>";
echo "hey you , you were born in ".$yob;

$x = findYOB(45);
echo "<br>";
echo "My sunrise was ".$x;


function currentDate(){
    return date('l, d,M Y');
}

echo"<br>";
$date = currentDate();
echo $date;

function findAverageMark($marks){
    $noOfMarks = count($marks);
    $totalMarks = 0;
    for($i=0;$i<$noOfMarks;$i++){
        $totalMarks+=$marks[$i];
    }

    return $totalMarks/$noOfMarks;
}

$myMarks  = array(78,90,65,45,76);
$avgMark = findAverageMark($myMarks);
echo "<br><h2>Average Mark is ".$avgMark."</h2>";

?>