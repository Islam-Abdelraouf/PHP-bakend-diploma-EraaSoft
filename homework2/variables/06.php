<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//title---
echo "06. Calculate Area of Rectangle";
draw_break_line();
add_line_space();

//inputs section ---
$length  = 8;
$width  = 5;

//logic section ---
// numbers swap process
$area = $length * $width;

//output section ---
echo "The area of the rectangle is $area square units.";
