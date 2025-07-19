<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "6. Leap Year Checker";
draw_break_line();
add_line_space();

//inputs section ---
$year = 1900;


//logic section ---
if (($year % 4 == 0 && $year % 100 !== 0) || ($year % 400 == 0)) {
    $results = "is a leap year.";
} else {
    $results = "is not a leap year.";
}

//output section ---
echo "$year $results";
