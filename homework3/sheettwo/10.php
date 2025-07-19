<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "10. while loop prints the even numbers 1 to 15";
draw_break_line();
add_line_space();

//inputs section ---
$minNumber = 1;
$maxNumber = 15;
$counter = $minNumber;

//logic section ---
while ($counter <= $maxNumber) {
    if($counter%2 ==0){
        echo $counter . "<br>";
    }
    $counter++;
}

//output section ---
echo "Under Construction";


//include header
include('inc/footer.php');