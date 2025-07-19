<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "13. Comparing strings";
draw_break_line();
add_line_space();

//input sction ---
$string_one = "Eraa";
$string_two = "Soft";

//logic section ---
$full_string = $string_one . $string_two ;
$results = strcmp($full_string,"EraaSoft");

//output section ---
if($results==0){
    echo "$full_string and \"EraaSoft\" are equal.";
}