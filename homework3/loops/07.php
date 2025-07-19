<!-- PHP CODE GOES HERE-->
<?php

//include header
include('inc/header.php');

//Title
echo "07. FizzBuzz";
draw_break_line();
add_line_space();

//input sction ---
$numStart = 1;
$numEnd = 100;

$txtReplace3 = "Fizz";
$txtReplace5 = "Buzz";
$txtReplace35 = "FizzBuzz";

$results = "";

//logic section ---
for ($i = 1; $i <= 100; $i++) {
    if (($i % 3 == 0) && ($i % 5 == 0)) {
        $results .= $txtReplace35;
        $results .= "<br>";
    } elseif ($i % 3 == 0) {
        $results .= $txtReplace3;
        $results .= "<br>";
    } elseif ($i % 5 == 0) {
        $results .= $txtReplace5;
        $results .= "<br>";
    }else{
        $results .= $i;
        $results .= "<br>";
    }
}



//output section ---
echo $results;


//include footer
include('inc/footer.php');
