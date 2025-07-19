<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "10. Get the word (EraaSoft) and print it";
draw_break_line();
add_line_space();

//input sction ---
$phrase = "EraaSoft Learn by practice";


//logic section ---
$length = strlen($phrase);

$word = "";
for ($i = 0; $i <= $length; $i++) 
{
    $chr = substr($phrase, $i, 1);
    if ($chr == " ") break;
    $word .= $chr;
}

//output section ---
echo "Sentence: $phrase" ;
add_line_space(2);
echo "$word";
