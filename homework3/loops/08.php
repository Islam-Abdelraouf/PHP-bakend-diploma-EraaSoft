<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "08. Sum of Array Elements";
draw_break_line();
add_line_space();


//input sction ---
$numbers = [5, 10, 15, 20, 25];
$sum = 0;
$arrString = "";

//logic section ---
$results = 0;
foreach ($numbers as $k => $v) {
    $sum += $v;
}
//Compiling the array in a string form (for output purposes)
$arrString = "array( ";
$arrString .= implode(", ", $numbers);
$arrString .= " )";

//output section ---
echo "The sum of $arrString elements is $sum.";


//include footer
include('inc/footer.php');