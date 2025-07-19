<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "14. Split a string";
draw_break_line();
add_line_space();


//input sction ---
$text = "EraaSoft";


//logic section ---
//removing outside spaces
$text = trim($text);

$text_modified = "";
$counter = 0;
for ($i = 1; $i <= strlen($text); $i++) {
    $counter++;
    if ($counter == 2) {
        $text_modified .= substr($text, $i-$counter, $counter);
        $text_modified .= "/";
        $counter = 0;
    }
}


//output section ---
echo "Original text: $text";
add_line_space(2);
echo "Modified text: $text_modified";
