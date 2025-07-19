<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "03. Sum of Numbers";
draw_break_line();
add_line_space();

//input sction ---
$numStart = 1;
$numEnd = 100;
$counter = $numStart;
$sum = 0;

//logic section ---
do {
    $sum += $counter;
    $counter++;
} while ($counter <= $numEnd);



//output section ---
echo "The sum of numbers from $numStart to $numEnd is $sum.";


//include footer
include('inc/footer.php');
