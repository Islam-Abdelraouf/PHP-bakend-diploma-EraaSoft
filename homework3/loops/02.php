<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "02. Display Even Numbers";
draw_break_line();
add_line_space();

//input sction ---
$numStart = 1;
$numEnd = 20;
$counter = $numStart;
$arr = [];


//logic section ---
do {
    if ($counter > 1 && $counter % 2 == 0) {
        $arr[] = $counter;
    }
    $counter++;
} while ($counter <= $numEnd);
$results = implode(" ", $arr);

//output section ---
echo $results;


//include footer
include('inc/footer.php');