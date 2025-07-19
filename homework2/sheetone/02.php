<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "02. Box size";
draw_break_line();
add_line_space();

//input sction ---
const length = 5;
const width = 10;
$height = 4;

//logic section ---
$size = length * width * $height;

//output section ---
echo "length and width are fixed with a value of 5 and 10.";
add_line_space();
echo "Height: $height, size: $size";
