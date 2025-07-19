<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "10. Reverse a String";
draw_break_line();
add_line_space();

//input sction ---
$string = "Hello World";
$strLength = strlen($string);
$strReverse = "";

//logic section ---
for ($i = 0; $i < $strLength; $i++) {
    $charPos = ($strLength - 1) - $i;
    $strReverse .= substr($string, $charPos, 1);
}


//output section ---
echo "Original string: $string";
add_line_space();
echo "Reversed string: $strReverse";


//include footer
include('inc/footer.php');
