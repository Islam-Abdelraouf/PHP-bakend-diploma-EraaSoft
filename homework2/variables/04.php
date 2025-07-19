<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//title ---
echo "04. String Manipulation";
draw_break_line();
add_line_space();

//input section ---
$fname = "Islam";
$lname = "Abdelraouf";

//logic section ---
$fullname = $fname . " " . $lname;

//output section ---
echo "Full name: " . $fullname;
