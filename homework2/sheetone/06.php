<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "06. Get the length of a sentence";
draw_break_line();
add_line_space();

//input sction ---
$phrase = "EraaSoft Learn by practice";

//logic section ---
$count = strlen($phrase);

//output section ---
echo "Sentence: $phrase" ;
add_line_space();
echo "Sentence length = $count characters (including the spaces).";
