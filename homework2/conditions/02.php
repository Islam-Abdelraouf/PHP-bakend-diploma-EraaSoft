<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "02. Odd Or Even Number";
draw_break_line();
add_line_space();

//inputs section ---
$num = 7 ;

//logic section ---
if($num % 2 == 0){
    $type = "even" ;
}else{
    $type = "odd" ;
}

//output section ---
echo "$num is $type." ;
