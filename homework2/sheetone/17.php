<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "17. Check if a word is part of a phrase";
draw_break_line();
add_line_space();

//input sction ---
$description = "no pain , no gain ";
$str_one = "gain";
$str_two = "peen";

//logic section ---
if(str_contains($description,$str_one)){
    $results_one = "Success word";
}else{
    $results_one = "Wrong word";
}

if(str_contains($description,$str_two)){
    $results_two = "Success word";
}else{
    $results_two = "Wrong word";
}

//output section ---

echo "Reference sentence: $description";
add_line_space(2);
echo "The word $str_one is a $results_one";
add_line_space(2);
echo "The word $str_two is a $results_two";
