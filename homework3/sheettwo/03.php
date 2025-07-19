<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "03. Count the letter 'r' in a text";
draw_break_line();
add_line_space();

//inputs section ---
$text = "eraasoft";
$letter = 'r';
$letterCount = 0;

//logic section ---
for ($i = 0; $i < strlen($text); $i++) {
    if (substr($text, $i, 1) == $letter) $letterCount++;
}

//output section ---
echo "The '$letter' letter was repeated $letterCount times in '$text'";


//include header
include('inc/footer.php');
