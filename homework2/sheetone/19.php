<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "19. Check if a word is plural";
draw_break_line();
add_line_space();

//input sction ---
$text_one = "Operations";
$text_two = "Report";


//functions section ---

function is_text_plural($txt) {
    //$length = get_text_length($txt);
    if(substr($txt,-1,1)=='s') {
        return true;
    }
}


//logic section ---

if(is_text_plural($text_one)){
    $results_one = "Plural";
}else{
    $results_one = "single";
}


if(is_text_plural($text_two)){
    $results_two = "Plural";
}else{
    $results_two = "single";
}

//output section ---
echo "Text one : $text_one is $results_one";
add_line_space(2);
echo "Text two : $text_two is $results_two";
