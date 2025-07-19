<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "09. Find Maximum Value";
draw_break_line();
add_line_space();

//input sction ---
$numbers = [12, 45, 67, 23, 9, 56];
$length = count($numbers);

//logic section ---
$tempNum = 0;
for ($i = 0; $i < $length; $i++) {
    if ($numbers[$i] > $tempNum) {
        $tempNum = $numbers[$i];
    }
}
//Compiling the array in a string form (for output purposes)
$arrString = "array( ";
$arrString .= implode(", ", $numbers);
$arrString .= " )";


//output section ---
echo "The maximum value in $arrString is $tempNum.";


//include footer
include('inc/footer.php');
