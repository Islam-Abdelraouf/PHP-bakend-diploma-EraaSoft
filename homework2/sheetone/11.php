<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "11. Remove the word (by) and printout the rest";
draw_break_line();
add_line_space();


//input sction ---
$phrase = "EraaSoft Learn by practice";


//logic section ---
//replace 'by ' with a space character
$phrase_modified = str_replace('by','',$phrase,);


//output section ---
echo "Sentence: $phrase" ;
add_line_space(2);
echo "The sentence without \"by\":  $phrase_modified";
