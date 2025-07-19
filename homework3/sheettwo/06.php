<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "06. Function returning the largest number";
draw_break_line();
add_line_space();

//functions section ---
function getMax(array $arr)
{
    $tempNumber = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] > $tempNumber) {
            $tempNumber = $arr[$i];
        }
    }
    return $tempNumber;
}

//inputs section ---
$numbers = [5, 15, -10, 100, 250, 0, 1];

//logic section ---
$max = getMax($numbers);

//output section ---
echo "Numbers = [" . implode(", ",$numbers) . "]";
add_line_space();
echo "The largest number is $max.";


//include header
include('inc/footer.php');
