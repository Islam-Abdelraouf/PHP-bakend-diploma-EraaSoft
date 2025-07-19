<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//title ---
echo "02. Simple Calculator";
draw_break_line();
add_line_space();

//inputs section ---
$number1 = 10 ;
$number2 = 5 ;

//logic section ---
$sum = $number1 + $number2 ;
$diff = $number1 - $number2 ;
$prod = $number1 * $number2 ;
$quot = $number1 / $number2 ;

//output section ---
echo "Number1 = " . $number1 ;
add_line_space();

echo "Number2 = " . $number2 ;
add_line_space();
draw_break_line();

echo "Sum: " . $sum ;
add_line_space();

echo "Difference: " . $diff;
add_line_space();

echo "Product: " . $prod;
add_line_space();

echo "Quotient: " . $quot;
