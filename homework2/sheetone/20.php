<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "20. Calculator using if condition";
draw_break_line();
add_line_space();

//input sction ---
$num1 = 12;
$num2 = 8;
$operations = "+-/*^%";


$op_name = "";
$formula_text = "";
$results = 0;
//logic section ---
$op = substr($operations, rand(0, 5), 1);
switch ($op) {
    case '+': 
        $op_name = "Summation";
        $formula_text = "$num1 + $num2 = ";
        $results = $num1 + $num2;
        break;
    case '-': 
        $op_name = "Subtraction";
        $formula_text = "$num1 - $num2 = ";
        $results = $num1 - $num2;
        break;
    case '/': 
        $op_name = "Division";
        $formula_text = "$num1 / $num2 = ";
        $results = $num1 / $num2;
        break;
    case '*': 
        $op_name = "Multiplication";
        $formula_text = "$num1 * $num2 = ";
        $results = $num1 * $num2;
        break;
    case '^': 
        $op_name = "Power";
        $formula_text = "$num1 ^ $num2 = ";
        $results = pow($num1, $num2);
        break;
    case '%': 
        $op_name = "Modulus";
        $formula_text = "$num1 % $num2 = ";
        $results = $num1 % $num2;
        break;
}



//output section ---
echo "First Number = $num1, Second Number = $num2, Operation Type: $op_name.";
add_line_space(2);
echo "$formula_text $results .";

add_line_space(2);
add_line_space(2);
echo "please reload the page for another random calculation";
