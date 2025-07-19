<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "08. Get the number of words in a sentence";
draw_break_line();
add_line_space();

//input sction ---
$phrase = "EraaSoft Learn by practice";


//logic section ---

//removal of the outer spaces
$phrase = trim($phrase);
//total count of all characters
$totalCounter = strlen($phrase);

$spaceCounter = 0;
for ($i = 0; $i <= $totalCounter - 1; $i++) {
    if (substr($phrase, $i, 1) == " ") $spaceCounter++;
}

$wordsCount = $spaceCounter + 1;
//output section ---
echo "Sentence: $phrase" ;
add_line_space();
echo "Total number of words = $wordsCount";
