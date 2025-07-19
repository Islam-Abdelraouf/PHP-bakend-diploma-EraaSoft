<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "15. Check if a number is odd or even";
draw_break_line();
add_line_space();

//inputs section ---
$num = 85 ;

//logic section ---
if($num % 2 == 0){
    $type = "even" ;
}else{
    $type = "odd" ;
}

//output section ---
echo "$num is $type." ;
