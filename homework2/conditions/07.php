<!-- PHP CODE GOES HERE-->
<?php

//header section ---
include('inc/header.php');

//Title
echo "7. Largest of Three Numbers";
draw_break_line();
add_line_space();

//inputs section ---
$num1 = 15;
$num2 = 42;
$num3 = 47;

//logic section ---

//method #1.........................
if ($num1 > $num2) {
    if ($num1 > $num3) {
        $max_number = $num1;
    } else {
        $max_number = $num3;
    }
} else {
    if ($num2 > $num3) {
        $max_number = $num2;
    } else {
        $max_number = $num3;
    }
}

//method #2........................
if ($num1 > $num2 && $num1 > $num3)  $max_number = $num1;
if ($num2 > $num1 && $num2 > $num3)  $max_number = $num2;
if ($num3 > $num1 && $num3 > $num2)  $max_number = $num3;


//output section ---
echo "The largest number is $max_number.";
