<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "01. A+B*C";
draw_break_line();
add_line_space();

//input sction ---
$num1 = 6;
$num2 = 5;
$num3 = 9;

//logic section ---
$results = ($num1+$num2)*$num3;


//output section ---
echo "($num1 + $num2) * $num3 = $results";
