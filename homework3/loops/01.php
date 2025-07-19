<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');


//Title
echo "01. Count from 1 to 10";
draw_break_line();
add_line_space();


//input sction ---
$numStart = 1;
$numEnd = 10;
$counter = $numStart;
$arr = [];


//logic section ---
while ($counter <= $numEnd) {
    $arr[] = $counter;
    $counter++;
}
$results = implode(" ", $arr);


//output section ---
echo $results;


//include footer
include('inc/footer.php');