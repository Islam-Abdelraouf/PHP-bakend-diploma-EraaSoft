<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "05. Convert age to days";
draw_break_line();
add_line_space();

//input sction ---
$age = 32;

//logic section ---
$age_in_days = $age * 365 ;


//output section ---
echo "Age of $age years = $age_in_days days";
