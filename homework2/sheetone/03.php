<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "03. Convert integer hours to seconds";
draw_break_line();
add_line_space();

//input sction ---
$hours = 17;

//making sure the value of -> $hours <- is integer
$hours = (int)$hours;

//logic section ---
$seconds = $hours * 3600;

//output section ---
echo "$hours hours = $seconds seconds";
