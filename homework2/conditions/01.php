<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "01. Positive or Negative Number";
draw_break_line();
add_line_space();

//inputs section ---
$num = -7 ;

//logic section ---
if($num < 0){
    $status = "negative" ;
}
if($num > 0){
    $status = "positive" ;
}

//output section ---
echo "$num is $status." ;

//include header
include('inc/footer.php');