<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "07. Get the length of a sentence (no spaces counts)";
draw_break_line();
add_line_space();

//input sction ---
$phrase = "EraaSoft Learn by practice";


//logic section ---

//removal of the outer spaces
$phrase = trim($phrase);
//total count of all characters
$totalCounter = strlen($phrase);

//counting the spaces in the middle of the phrase
$spaceCounter = 0;
for ($i = 0; $i <= $totalCounter - 1; $i++) {
    if (substr($phrase, $i, 1) == " ") $spaceCounter++;
}

//calculate the total number of characters without spaces
$characterCounter = $totalCounter - $spaceCounter;

//output section ---
echo "Sentence: $phrase" ;
add_line_space();
echo "Sentence length = $characterCounter characters (excluding the $spaceCounter spaces).";
