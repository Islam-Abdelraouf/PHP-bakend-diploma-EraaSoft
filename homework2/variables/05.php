<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//title---
echo "05. Swap Variables";
draw_break_line();
add_line_space();

//input section ---
$a = 5;
$b = 10;

//logic section ---
//(numbers swap process)
$a = $a + $b;
$b = $a - $b;
$a = abs($a - $b);


//output section ---

//printing out the original numbers 
echo "Before swap: " . "a=" . $b . ", b=" . $a;
add_line_space();
//printing out the swapped numbers 
echo "After swap: " . "a=" . $a . ", b=" . $b;
