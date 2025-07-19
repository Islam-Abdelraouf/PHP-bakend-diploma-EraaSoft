<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "04. Triangle area";
draw_break_line();
add_line_space();

//input sction ---
$height = 30;
$base = 20;

//logic section ---
$area = 0.5 * $height * $base;

//output section ---
echo "Height = $height, Base = $base, Area = $area";
