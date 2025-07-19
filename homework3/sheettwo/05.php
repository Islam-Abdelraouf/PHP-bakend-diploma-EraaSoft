<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "05. For loop from 0 to 30";
draw_break_line();
add_line_space();

//inputs section ---
$numStart = 0;
$numEnd = 30;
$total = 0;

//logic section ---
for ($i = $numStart; $i <= $numEnd; $i++) {
    $total += $i;
}

//output section ---
echo "The sum of the numbers $numStart to $numEnd is $total";


//include header
include('inc/footer.php');
