<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//title ---
echo "07. Calculate Circle Area";
draw_break_line();
add_line_space();

//input section ---
$radius = 7;

//logic section ---
$area = pi() * pow($radius, 2);
$area = round($area, 2);

//output section ---
echo "The area of the circle with radius $radius is $area square units.";
