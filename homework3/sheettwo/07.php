<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "07. Function returning the smallest number";
draw_break_line();
add_line_space();

//functions section ---
function getMin(array $arr)
{
    $tempNumber = $arr[0];
    for ($i = 0; $i < count($arr) - 1; $i++) {
        if ($arr[$i + 1] < $tempNumber) {
            $tempNumber = $arr[$i + 1];
        }
    }
    return $tempNumber;
}

//inputs section ---
$numbers = [5, 15, -10, 100, 250, 0, 1];

//logic section ---
$min = getMin($numbers);

//output section ---
echo "Numbers = [" . implode(", ", $numbers) . "]";
add_line_space();
echo "The smallest number is $min.";


//include header
include('inc/footer.php');
