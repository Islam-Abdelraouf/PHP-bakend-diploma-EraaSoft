<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "15. do while prints all the numbers between 1 and 100 that are divisible by 3";
draw_break_line();
add_line_space();

//inputs section ---
$numStart = 1;
$numEnd = 100;

$counter = $numStart;
$results = "";

//logic section ---
do {
    if ($counter % 3 == 0) {
        $results .= $counter;
        $results .= "<br>";
    }

    $counter++;
} while ($counter <= $numEnd);

//output section ---
echo "$results";


//include header
include('inc/footer.php');
