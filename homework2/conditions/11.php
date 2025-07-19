<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "Lecture problem: random calculator";
draw_break_line();
add_line_space();

//inputs ---
$number1 = rand(0, 100);
$number2 = rand(0, 100);
$operator = "+-*/";

//logic
$op = substr($operator, rand(0, strlen($operator)-1), 1);

if ($op == "+") {
    $results = $number1 + $number2;
}
if ($op == "-") {
    $results = $number1 - $number2;
}
if ($op == "*") {
    $results = $number1 * $number2;
}
if ($op == "/") {
    if ($number2 > 0) {
        $results = $number1 / $number2;
    }else{
        $results = "Cannot devide by ZERO.";
    }
}

//output section ---
echo "Number 1 is:  " . $number1;
echo "<BR>";
echo "Number 2 is:  " . $number2;
echo "<BR>";

if (gettype($results) !== "string"){
    echo $number1 . " ". $op . " " . $number2 . " = ";
    echo $results;    
}else{
    echo $results;    
}


//include footer
add_line_space();
echo "please reload the page for another random calculation";