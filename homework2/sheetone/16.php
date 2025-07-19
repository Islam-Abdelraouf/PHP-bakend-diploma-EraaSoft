<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "16. Check if the length of a string is odd or even";
draw_break_line();
add_line_space();


//input sction ---
$text = "EraaSoft Learn by practice";


//logic section ---
$length = strlen(trim($text));

if(($length % 2) == 0) {
    $results = "even";
}else{
    $results = "odd";
}

//output section ---
echo "The length of \"$text\" = $length, and it is $results number.";
