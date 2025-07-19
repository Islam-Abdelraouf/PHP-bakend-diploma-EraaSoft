<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "05. Factorial Calculator";
draw_break_line();
add_line_space();

//input sction ---
$number = 5;
$counter = $number;
$results = $number;

//logic section ---
while ($counter > 1) {
    $counter--;
    $results *= $counter;
}


//output section ---
echo "Factorial of $number is $results";



//include footer
include('inc/footer.php');
