<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "18. Int Boolean and opposite";
draw_break_line();
add_line_space();


//input sction ---
$boolNumber = 1;

//logic section ---
//$opposite = $bool - 1;
$opposite = (int) !((bool)$boolNumber);


//output section ---
echo "Original int bool: $bool";
add_line_space(2);
echo "Opposite int bool: $opposite";
