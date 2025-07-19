<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "09. check a presence of a word in a sentence";
draw_break_line();
add_line_space();

//input sction ---
$phrase = "EraaSoft Learn by practice";
$word = "by";

//logic section ---
$results = substr_count($phrase,'a',0);

//output section ---
echo "Sentence: $phrase" ;
add_line_space();

if($results>0){
echo "The word \"$word\" was found in the above sentence.";
}else{
echo "The word $word was not found in the above sentence.";
}