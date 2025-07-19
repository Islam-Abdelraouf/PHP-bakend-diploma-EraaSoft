<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "01. 1-2-3.....10 one line Array";
draw_break_line();
add_line_space();

//inputs section ---
$arr = [];

//logic section ---
for ($i = 1; $i <= 10; $i++) {
    array_push($arr, $i);
}
//print_r($arr);
//add_line_space();
$arrToText = implode("-", $arr);


//output section ---
echo $arrToText;


//include header
include('inc/footer.php');
