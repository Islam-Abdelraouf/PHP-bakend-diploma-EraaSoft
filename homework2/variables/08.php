<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//title ---
echo "08. Time Converter";
draw_break_line();
add_line_space();

//input section ---
$minutes = 145;

//logic section ---
$hours = floor($minutes / 60);

//method 1 to calculate the minutes
$minutes1 = fmod($minutes,60);

//method 2 to calculate the minutes
$hours_fraction = ($minutes / 60) - $hours;
$minutes2 = $hours_fraction * 60 ;

//output section ---
echo "method 1:" ;
add_line_space();
echo "145 minutes = $hours hours and $minutes1 minutes.";
add_line_space(2);

echo "method 2:" ;
add_line_space();
echo "145 minutes = $hours hours and $minutes2 minutes.";
