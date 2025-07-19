<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "12. foreach calculates the sum of values in associative array";
draw_break_line();
add_line_space();

//inputs section ---
$sales = array("Jan" => 100, "Feb" => 200, "Mar" => 150);
$sum = 0;

$numArray = [];
$numText = "";

//logic section ---
foreach ($sales as $key => $val) {
    $numArray[] = $val;
    $sum += $val;
}
$numText = implode(" + ",$numArray);


//output section ---
echo"Sum of all array values";
add_line_space();
echo "($numText) = $sum";


//include header
include('inc/footer.php');
