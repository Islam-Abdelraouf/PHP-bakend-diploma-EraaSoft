<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "4. Grade Calculator";
draw_break_line();
add_line_space();

//input section ---
$score = 59;

//logic section ---
if ($score >= 90 && $score <= 100) {
    $grade = "A";
}
if ($score >= 80 && $score <= 89) {
    $grade = "B";
}
if ($score >= 70 && $score <= 79) {
    $grade = "C";
}
if ($score >= 60 && $score <= 69) {
    $grade = "D";
}
if ($score >= 0 && $score <= 59) {
    $grade = "F";
}

//output section ---
echo "Your grade is $grade.";
